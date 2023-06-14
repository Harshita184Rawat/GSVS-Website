<?php

namespace WPPayForm\App\Modules\FormComponents;

if (!defined('ABSPATH')) {
    exit;
}

class DemoProducts extends BaseComponent
{
    public function __construct()
    {
        parent::__construct('pro_products', 20);
    }

    public function component()
    {
        return array(
            'type' => 'coupon',
            'editor_title' => 'More Payments In Pro',
            'group' => 'payment',
            'postion_group' => 'payment',
            'single_only' => true,
            'is_system_field' => false,
            'is_payment_field' => false,
            'disabled' => true,
            'disabled_message' => array(
                'tabular_products' => array(
                    'editor_title' => __('Tabular Product Items', 'wp-payment-form'),
                    'postion_group' => 'payment',
                    'type' => 'tabular_products',
                ),
                'recurring_payment_item' => array(
                    'editor_title' => __('Subscription Payment', 'wp-payment-form'),
                    'postion_group' => 'payment',
                    'type' => 'recurring_payment_item',
                ),
                'tax_payment_input' => array(
                    'type' => 'tax_payment_input',
                    'editor_title' => 'Tax Calculated Amount',
                    'postion_group' => 'payment',
                ),
                'donation_item' => array(
                    'type' => 'donation_item',
                    'editor_title' => 'Donation Progress Item',
                    'postion_group' => 'payment',
                ),
                'coupon' => array(
                    'type' => 'coupon',
                    'editor_title' => 'Coupon',
                    'group' => 'payment',
                    'postion_group' => 'payment',
                )
            ),
            'editor_elements' => array(
                'label' => array(
                    'label' => 'Field Label',
                    'type' => 'text',
                    'group' => 'general'
                ),
                'placeholder' => array(
                    'label' => 'Placeholder',
                    'type' => 'text',
                    'group' => 'general'
                ),
                'admin_label' => array(
                    'label' => 'Admin Label',
                    'type' => 'text',
                    'group' => 'advanced'
                ),
                'wrapper_class' => array(
                    'label' => 'Field Wrapper CSS Class',
                    'type' => 'text',
                    'group' => 'advanced'
                ),
                'element_class' => array(
                    'label' => 'Input Element CSS Class',
                    'type' => 'text',
                    'group' => 'advanced'
                ),
            ),
            'field_options' => array(
                'label' => 'Coupon Code',
                'placeholder' => '',
                'required' => 'no'
            )
        );
    }

    public function render($element, $form, $elements)
    {
        return;
    }
}
