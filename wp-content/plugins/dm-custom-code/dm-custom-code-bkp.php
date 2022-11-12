<?php

include_once(ABSPATH . 'wp-includes/pluggable.php');
include_once(WP_PLUGIN_DIR . '/woocommerce/woocommerce.php');

function dm_get_orders_for_customer() {
    global $wpdb;
    $options = Array();
    $user = wp_get_current_user();

    if ($user->id > 0) {
        
        $customer_id = $wpdb->get_col("SELECT customer_id FROM {$wpdb->prefix}wc_customer_lookup WHERE user_id = '$user->ID'");
        $order_ids = $wpdb->get_col("SELECT order_id FROM {$wpdb->prefix}wc_order_stats WHERE customer_id = '$customer_id[0]' AND status != 'wc-trash'");
        
        print_r($order_ids);
        foreach ($order_ids as $order) {
            $options[] = Array(
                'label' => $order,
                'value' => $order,
                'limit' => ''
            );
        }
        $form_id = 571;
        $field_id = 'select-1';

        $data = array(
            'id' => 'select-1',
            'element_id' => 'select-1',
            'form_id' => 'wrapper-7072-3343',
            'condition_action' => 'show',
            'condition_rule' => 'any',
            'conditions' => Array
            (),
            'options' => $options,
            'validation' => '',
            'description' => '',
            'validation_text' => '',
            'custom-class' => ''
        );

        $fields = Forminator_API::update_form_field($form_id, $field_id, $data);
         
        // return ($fields);
    } else {
        return "Not logged";
    }
}

add_shortcode('dm_get_orders_for_customer', 'dm_get_orders_for_customer');

function dm_get_form_details() {
    $form_id = 571;
    $fields = Forminator_API::get_form_wrappers($form_id);
    print_r($fields[0]['wrapper_id']);
}

add_shortcode('dm_get_form_details', 'dm_get_form_details');
