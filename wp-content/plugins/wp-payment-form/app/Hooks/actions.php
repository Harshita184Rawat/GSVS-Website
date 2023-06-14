<?php

/**
 * All registered action's handlers should be in app\Hooks\Handlers,
 * addAction is similar to add_action and addCustomAction is just a
 * wrapper over add_action which will add a prefix to the hook name
 * using the plugin slug to make it unique in all wordpress plugins,
 * ex: $app->addCustomAction('foo', ['FooHandler', 'handleFoo']) is
 * equivalent to add_action('slug-foo', ['FooHandler', 'handleFoo']).
 */

/**
 * You can access main plugin instance using $app variable.
 *
 * @var $app WPFluent\Foundation\Application
 */

$app->addAction('admin_menu', 'AdminMenuHandler@add');
$app->addAction('wppayform/after_create_form', 'FormHandlers@insertTemplate', 10, 3);

// disabled update-nag
add_action('admin_init', function () {
    $disablePages = [
        'wppayform.php',
        'wppayform_settings',
    ];

    if (isset($_GET['page']) && in_array($_GET['page'], $disablePages)) {
        remove_all_actions('admin_notices');

        wp_enqueue_style(
            'wppayform_admin_app',
            WPPAYFORM_URL . 'assets/css/payforms-admin.css',
            array(),
            WPPAYFORM_VERSION
        );

    }
}, 20);

add_action('plugins_loaded', function () {
    // Let's check again if Pro version is available or not
    if (defined('WPPAYFORMHASPRO')) {
        if (function_exists('deactivate_plugins')) {
            deactivate_plugins(plugin_basename(__FILE__));
        }
    }
});

add_filter('wppayform/print_styles', function ($styles) {
    return [
        WPPAYFORM_URL . 'assets/css/payforms-admin.css',
        WPPAYFORM_URL . 'assets/css/payforms-print.css',
    ];
}, 1, 1);


// Form Submission Handler
$submissionHandler = new \WPPayForm\App\Hooks\Handlers\SubmissionHandler();
add_action('wp_ajax_wpf_submit_form', array($submissionHandler, 'handleSubmission'));
add_action('wp_ajax_nopriv_wpf_submit_form', array($submissionHandler, 'handleSubmission'));

//integration
$app->addAction('wppayform/after_submission_data_insert', function ($submissionId, $formId, $formData, $formattedElements) {
    $notificationManager = new \WPPayForm\App\Services\Integrations\GlobalNotificationManager();
    $notificationManager->triggerNotification($submissionId, $formId, $formData, $formattedElements, 'on_submit');
}, 10, 4);

//integration on payment success
$app->addAction('wppayform/form_payment_success', function ($submission, $transaction, $formId, $session) {
    $submissionModel = new \WPPayForm\App\Models\Submission();
    $entry = $submissionModel->getSubmission($submission->id);

    $notificationManager = new \WPPayForm\App\Services\Integrations\GlobalNotificationManager();
    $notificationManager->triggerNotification($entry->id, $formId, $entry->form_data_raw, [], 'on_payment');
}, 10, 4);


// Handle Exterior Pages
$app->addAction('init', function () {
    $demoPage = new \WPPayForm\App\Modules\Exterior\ProcessDemoPage();
    $demoPage->handleExteriorPages();

    $frameLessPage = new \WPPayForm\App\Modules\Exterior\FramelessProcessor();
    $frameLessPage->init();

    if (!get_option('paymattic_migration_notice', false)) {
        $demoPage->injectAgreement();
    };
});


// Load dependencies
$app->addAction('wppayform_loaded', function ($app) {
    $dependency = new \WPPayForm\App\Hooks\Handlers\DependencyHandler();
    $dependency->registerStripe();
    $dependency->registerShortCodes();
    $dependency->tinyMceBlock();
    $dependency->dashboardWidget();

    $app->addAction('wppayform_log_data', function ($data) {
        \WPPayForm\App\Models\SubmissionActivity::createActivity($data);
    }, 10, 1);

    $app->addAction('wppayform_global_menu', function () {
        $menu = new \WPPayForm\App\Hooks\Handlers\AdminMenuHandler();
        $menu->renderGlobalMenu();
    });

    $app->addAction('admin_bar_menu', function() {
            $menu = new \WPPayForm\App\Hooks\Handlers\AdminMenuHandler();
            $menu->adminBarItem();
    }, 99, 1);

    $app->addAction('wppayform_global_settings_component_wppayform_settings', function () {
        $menu = new \WPPayForm\App\Hooks\Handlers\AdminMenuHandler();
        $menu->renderSettings();
    });

    $app->addAction('wppayform_global_notify_completed', function ($insertId, $formId) use ($app) {
        $form = \WPPayForm\App\Models\Form::getFormattedElements($formId);
        $passwordFields = [];
        foreach ($form['input'] as $key => $value) {
            if ('password' === $value['type']) {
                $passwordFields[] = $value['id'];
            }
        }
        if (count($passwordFields) && apply_filters('wppayform_truncate_password_values', true, $formId)) {
            // lets clear the pass from DB
            (new \WPPayForm\App\Services\Integrations\GlobalNotificationManager($app))->cleanUpPassword($insertId, $passwordFields);
        }
    }, 10, 2);

    //Fluentcrm integration
    if (defined('FLUENTCRM')) {
        (new \WPPayForm\App\Services\Integrations\FluentCrm\FluentCrmInit())->init();
    };

    if (defined('FLUENT_SUPPORT_VERSION')) {
        (new \WPPayForm\App\Services\Integrations\FluentSupport\Bootstrap());
    }

    $app->addAction('init', function () use ($app) {
        new \WPPayForm\App\Services\Integrations\MailChimp\MailChimpIntegration($app);
        (new \WPPayForm\App\Services\Integrations\Slack\SlackNotificationActions())->register();
    });

    //Honeypot security
    $app->addAction('wppayform/form_element_start', function ($form) use ($app) {
        $honeyPot = new \WPPayForm\App\Services\HoneyPot($app);
        $honeyPot->renderHoneyPot($form);
    });

    $app->addAction('wppayform/wpf_honeypot_security', function ($form_data, $formId) use ($app) {
        $honeyPot = new \WPPayForm\App\Services\HoneyPot($app);
        $honeyPot->verify($form_data, $formId);
    }, 9, 3);

    // Action for background process
    $asyncRequest = new \WPPayForm\App\Services\AsyncRequest();
    add_action('wp_ajax_wppayform_background_process', array($asyncRequest, 'handleBackgroundCall'));
    add_action('wp_ajax_nopriv_wppayform_background_process', array($asyncRequest, 'handleBackgroundCall'));
});
