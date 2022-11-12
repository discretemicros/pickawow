<?php
/**
 * Plugin Name: Dm Custom Code
 * Description: Add Custom script and CSS code to header and footer
 * Version: 1.1
 * Author: Discretemicros
 * License: GPL2
 */

include_once(ABSPATH . 'wp-includes/pluggable.php');
include_once(WP_PLUGIN_DIR . '/woocommerce/woocommerce.php');

function dm_get_orders_for_customer() {
    global $wpdb;
    $user = wp_get_current_user();
    if ($user->id > 0) {
        $customer_id = $wpdb->get_col("SELECT customer_id FROM {$wpdb->prefix}wc_customer_lookup WHERE user_id = '$user->ID'");
        $order_ids = $wpdb->get_col("SELECT order_id FROM {$wpdb->prefix}wc_order_stats WHERE customer_id = '$customer_id[0]' AND status != 'wc-trash'");
        ?>
        <script>
            function addOption() {
                $("#et_pb_contact_orderid_0 option[value='OrderID']").remove();
                $("#et_pb_contact_orderid_0 option[value='']").remove();
        <?php foreach ($order_ids as $order) { ?>
                    optionText = '<?php echo $order; ?>';
                    optionValue = '<?php echo $order; ?>';
                    $('#et_pb_contact_orderid_0').append(`<option value="<?php echo $order; ?>"><?php echo $order; ?>
                                            </option>`);
        <?php } ?>
            }
        </script>
        <body onload="addOption()"> </body>
        <?php
    }
}

add_shortcode('dm_get_orders_for_customer', 'dm_get_orders_for_customer');
