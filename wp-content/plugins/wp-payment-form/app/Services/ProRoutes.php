<?php

namespace WPPayForm\App\Services;

if (!defined('ABSPATH')) {
    exit;
}


class ProRoutes 
{

    public static function getRoutes()
    {
        $default = array(
            [
                'path' => 'stripe',
                'name' => 'stripe',
                'meta'=> [
                    'title' => 'Stripe' 
                ]
            ],
            [
                'path' => 'paypal',
                'name' => 'paypal',
                'meta'=> [
                    'title' => 'PayPal' 
                ]
            ]
        );
        
        $premium = array(
            [
                'path' => 'mollie',
                'name' => 'mollie',
                'meta'=> [
                    'title' => 'Mollie' 
                ]
            ],
            [
                'path' => 'razorpay',
                'name' => 'razorpay',
                'meta'=> [
                    'title' => 'Razorpay' 
                ]
            ],
            [
                'path' => 'paystack',
                'name' => 'paystack',
                'meta'=> [
                    'title' => 'Paystack' 
                ]
            ],
            [
                'path' => 'square',
                'name' => 'square',
                'meta'=> [
                    'title' => 'square' 
                ]
            ],
            [
                'path' => 'payrexx',
                'name' => 'payrexx',
            ],
            [
                'path' => 'billplz',
                'name' => 'billplz',
            ],
            [
                'path' => 'sslcommerz',
                'name' => 'sslcommerz',
                'meta'=> [
                    'title' => 'SSLCommerz' 
                ]
            ],
            // [
            //     'path' => 'xendit',
            //     'name' => 'xendit',
            //     'meta'=> [
            //         'title' => 'Xendit',
            //     ]
            // ],
            [
                'path' => 'offline',
                'name' => 'offline',
                'meta'=> [
                    'title' => 'Offline' 
                ]
            ],
        );

        return defined('WPPAYFORMHASPRO') ? $default : array_merge($default,$premium);
    }

    public static function getMethods()
    {
        $default =  array(
            array(
                'title' => 'Stripe',
                'route_name' => 'stripe',
                'svg' => WPPAYFORM_URL .'assets/images/gateways/stripe.svg',
            ),
            array(
                'title' => 'PayPal',
                'route_name' => 'paypal',
                'svg' => WPPAYFORM_URL .'assets/images/gateways/paypal.svg',
                'route_query' => [],
            ),
        );

        $newDeafult = array();

        foreach ($default as $gateway) {
            $newDeafult[$gateway['route_name']] = $gateway;
        }

        $premium = array(
            array(
                'title' => 'Mollie',
                'route_name' => 'mollie',
                'svg' => WPPAYFORM_URL .'assets/images/gateways/mollie.svg',
                'route_query' => [],
            ),
            array(
                'title' => 'Razorpay',
                'route_name' => 'razorpay',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/razorpay.svg',
            ),
            array(
                'title' => 'Paystack',
                'route_name' => 'paystack',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/paystack.svg',
            ),
            array(
                'title' => 'Square',
                'route_name' => 'square',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/square.svg',
            ),
            array(
                'title' => 'Payrexx',
                'route_name' => 'payrexx',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/payrexx.svg',
            ),
            array(
                'title' => 'Billplz',
                'route_name' => 'billplz',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/billplz.svg',
            ),
            array(
                'title' => 'SSLCommerz',
                'route_name' => 'sslcommerz',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/sslcommerz.svg',
            ),
            // array(
            //     'title' => 'Xendit',
            //     'route_name' => 'xendit',
            //     'route_query' => [],
            //     'svg' => WPPAYFORM_URL .'assets/images/gateways/xendit.svg',
            // ),
            array(
                'title' => 'Offline',
                'route_name' => 'offline',
                'route_query' => [],
                'svg' => WPPAYFORM_URL .'assets/images/gateways/offline.svg',
            ),
        );
       
        return defined('WPPAYFORMHASPRO') ? $newDeafult : array_merge($default, $premium);
    }

}