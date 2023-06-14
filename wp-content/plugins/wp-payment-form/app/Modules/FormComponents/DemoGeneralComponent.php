<?php

namespace WPPayForm\App\Modules\FormComponents;

if (!defined('ABSPATH')) {
    exit;
}

class DemoGeneralComponent extends BaseComponent
{
    public function __construct()
    {
        parent::__construct('demo_general', 600);
    }

    public function component()
    {
        return array(
            'type' => 'demo_general',
            'editor_title' => 'More General Input In Pro',
            'disabled' => true,
            'disabled_message' => array(
                'address_input' => array(
                    'type' => 'address_input',
                    'editor_title' => 'Address Field',
                    'postion_group' => 'general',
                ),
                'file_upload_input' => array(
                    'type' => 'file_upload_input',
                    'editor_title' => __('File Upload', 'wp-payment-form'),
                    'postion_group' => 'general',
                ),
                'mask_input' => array(
                    'type' => 'mask_input',
                    'editor_title' => 'Mask Input',
                    'postion_group' => 'general',
                )
            ),
            'group' => 'input',
            'postion_group' => 'general',
            'field_options' => array(
                'label' => 'Single Line Text',
                'placeholder' => '',
                'required' => 'no'
            )
        );
    }

    public function render($element, $form, $elements)
    {
        $element['type'] = 'text';
        $this->renderNormalInput($element, $form);
    }
}
