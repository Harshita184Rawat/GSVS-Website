<?php

/**
 * @var $router WPPayForm\App\Http\Router
 */

$router->prefix('tools/form')->withPolicy('AdminPolicy')->group(function ($router) {
    $router->get('/{id}/export', 'FormController@export')->int('id');
    $router->post('/import', 'FormsController@import');
});

$router->prefix('debug/{type}')->withPolicy('AdminPolicy')->group(function ($router) {
    $router->get('/', 'GlobalSettingsController@generateDebug')->alpha('type');
});

$router->prefix('file')->withPolicy('AdminPolicy')->group(function ($router) {
    $router->post('/upload', 'GlobalSettingsController@handleFileUpload');
});

$router->prefix('forms')->withPolicy('AdminPolicy')->group(function ($router) {
    $router->get('/', 'FormsController@index');
    $router->post('/', 'FormsController@store');
    $router->get('/demo', 'FormsController@demo');
    $router->get('/formatted', 'FormsController@formatted');
    $router->post('/migrate_order_items', 'FormsController@migrateOrderItems');

    $router->prefix('entries')->group(function ($router) {
        $router->delete('/remove', 'SubmissionController@remove');
        $router->put('/{id}/pay-status', 'SubmissionController@paymentStatus');
    });

    $router->prefix('settings')->group(function ($router) {

        $router->post('/check-status', 'GlobalSettingsController@dashboardNotice');
        $router->get('/check-status', 'GlobalSettingsController@getNoticeStatus');

        $router->get('/currencies', 'GlobalSettingsController@currencies');
        $router->post('/currencies', 'GlobalSettingsController@saveCurrencies');

        $router->get('/stripe', 'GlobalSettingsController@stripe');
        $router->post('/stripe', 'GlobalSettingsController@saveStripe');

        $router->get('/roles', 'GlobalSettingsController@roles');
        $router->post('/roles', 'GlobalSettingsController@setRoles');

        $router->get('/is-enable-paymattic-user-dashboard', 'GlobalSettingsController@isEnablePaymatticUserDashboard');
        $router->get('/enable-paymattic-user-dashboard', 'GlobalSettingsController@enablePaymatticUserDashboard');
        $router->post('/update-paymattic-user-permission', 'GlobalSettingsController@updatePaymatticUserPermission');

        $router->get('/recaptcha', 'GlobalSettingsController@getRecaptcha');
        $router->post('/recaptcha', 'GlobalSettingsController@saveRecaptcha');

        $router->get('/turnstile', 'GlobalSettingsController@getTurnstile');
        $router->post('/turnstile', 'GlobalSettingsController@saveTurnstile');

        $router->get('/integrations', 'IntegrationController@getGlobalSettings');
        $router->post('/integrations', 'IntegrationController@setGlobalSettings');
        $router->post('/integrations/authenticate_credentials', 'IntegrationController@authenticateCredentials');
    });

    $router->prefix('integration')->group(function ($router) {
        $router->post('/change-status', 'IntegrationController@index');
        $router->post('/enable', 'IntegrationController@enable');
        $router->post('/chained', 'IntegrationController@chained');
    });
});

$router->prefix('dashboard')->withPolicy('FrontendUserPolicy@validate')->group(function ($router) {
    $router->get('/forms/formatted', 'FormsController@formatted');
    $router->prefix('/form/{id}/entries')->group(function ($router) {
        $router->prefix('/{entryId}')->group(function ($router) {
            $router->get('/', 'SubmissionController@getSubmission')->int('id', 'entryId');
        });
    });
});
$router->post('/dashboard/{id}/entries/{entryId}/cancel-subscription', 'SubmissionController@cancelSubscription')->int('id', 'entryId');
$router->prefix('form/{id}')->withPolicy('AdminPolicy')->group(function ($router) {
    $router->get('/', 'FormController@index')->int('id');
    $router->post('/', 'FormController@store')->int('id');
    $router->put('/', 'FormController@update')->int('id');
    $router->delete('/', 'FormController@remove')->int('id');
    $router->post('/duplicate', 'FormController@duplicateForm')->int('id');
    $router->get('/editors', 'FormController@editors')->int('id');

    $router->prefix('/settings')->group(function ($router) {
        $router->get('/', 'FormController@settings')->int('id');
        $router->post('/', 'FormController@saveSettings')->int('id');
        $router->get('/design', 'FormController@designSettings')->int('id');
        $router->post('/design', 'FormController@updateDesignSettings')->int('id');
    });

    $router->prefix('/entries')->group(function ($router) {
        $router->get('/', 'SubmissionController@index')->int('id');
        $router->get('/reports', 'SubmissionController@reports')->int('id');

        $router->prefix('/{entryId}')->group(function ($router) {
            $router->get('/', 'SubmissionController@getSubmission')->int('id', 'entryId');
            $router->post('/notes', 'SubmissionController@addSubmissionNote')->int('id', 'entryId');
            $router->delete('/notes/{noteId}', 'SubmissionController@deleteNote')->int('id', 'entryId', 'noteId');
            $router->post('/status', 'SubmissionController@changeEntryStatus')->int('id', 'entryId');
            $router->get('/navigate', 'SubmissionController@getNextPrevSubmission')->int('id', 'entryId');
            $router->post('/cancel-subscription', 'SubmissionController@cancelSubscription')->int('id', 'entryId');
            $router->get('/sync-subscription', 'SubmissionController@syncSubscription')->int('id', 'entryId');
            $router->post('/change-offline-subscription-status', 'SubmissionController@changeOfflineSubscriptionStatus')->int('id', 'entryId');
            $router->post('/change-offline-subscription-payment-status', 'SubmissionController@changeOfflineSubscriptionPaymentStatus')->int('id', 'entryId');
            $router->post('/sync-offline-subscription', 'SubmissionController@syncOfflineSubscription')->int('id', 'entryId');
        });
    });

    $router->prefix('/integration')->group(function ($router) {
        $router->post('/slack', 'FormController@saveIntegration')->int('id');
        $router->get('/slack', 'FormController@getIntegration')->int('id');

        $router->get('/', 'IntegrationController@getIntegrations')->int('id');

        $router->prefix('/settings')->group(function ($router) {
            $router->get('/', 'IntegrationController@settings')->int('id');
            $router->post('/', 'IntegrationController@saveSettings')->int('id');
            $router->delete('/', 'IntegrationController@deleteSettings')->int('id');
            $router->post('/change-status', 'IntegrationController@status')->int('id');
        });

        $router->get('/lists', 'IntegrationController@lists')->int('id');
    });
});
