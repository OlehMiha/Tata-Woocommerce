<?php


function get_wmsc_settings() {
    $wmsc_settings = array(
        /* General Settings */
        'main_color' => array(
            'label' => __('Main Color', 'wp-multi-step-checkout'),
            'input_form' => 'input_color',
            'value' => '#1e85be',
            'section' => 'general',
        ),
        'show_back_to_cart_button' => array(
            'label' => __('Show the "Back to Cart" button', 'wp-multi-step-checkout'),
            'input_form' => 'checkbox',
            'value' => true,
            'section' => 'general',
        ),
        'show_shipping_step' => array(
            'label' => __('Show the Shipping step', 'wp-multi-step-checkout'),
            'input_form' => 'checkbox',
            'value' => true,
            'section' => 'general',
        ),
        'unite_billing_shipping' => array(
            'label' => __('Show the Billing and the Shipping steps together', 'wp-multi-step-checkout'),
            'input_form' => 'checkbox',
            'value' => false,
            'section' => 'general',
        ),
        'unite_order_payment' => array(
            'label' => __('Show the Order and the Payment steps together', 'wp-multi-step-checkout'),
            'input_form' => 'checkbox',
            'value' => false,
            'section' => 'general',
        ),
        'keyboard_nav' => array(
            'label' => __('Enable the keyboard navigation', 'wp-multi-step-checkout'),
            'description' => __('Use the keyboard\'s left and right keys to move between the checkout steps', 'wp-multi-step-checkout'),
            'input_form' => 'checkbox',
            'value' => false,
            'section' => 'general',
        ),

        /* Step Titles */
        't_login' => array(
            'label' => __('Login', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => __('Login', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_billing' => array(
            'label' => __('Billing', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => __('Billing', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_shipping' => array(
            'label' => __('Shipping', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => __('Shipping', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_order' => array(
            'label' => __('Order', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => __('Order', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_payment' => array(
            'label' => __('Payment', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => __('Payment', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_back_to_cart' => array(
            'label' => __('Back to cart', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => _x('Back to cart', 'Frontend: button label', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_skip_login' => array(
            'label' => __('Skip Login', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => _x('Skip Login', 'Frontend: button label', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_previous' => array(
            'label' => __('Previous', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => _x('Previous', 'Frontend: button label', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),
        't_next' => array(
            'label' => __('Next', 'wp-multi-step-checkout'),
            'input_form' => 'input_text',
            'value' => _x('Next', 'Frontend: button label', 'wp-multi-step-checkout'),
            'section' => 'titles',
        ),


    );

    return $wmsc_settings;

}


?>
