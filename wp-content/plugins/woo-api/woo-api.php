<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Plugin Name: Custom Api for getting products by categories ....
 */

// Force a short-init since we just need core WP, not the entire framework stack
//define('SHORTINIT', true);
// Build the wp-load.php path from a plugin/theme
$wp_root_path = ABSPATH . 'wp-load.php';
//print_r(ABSPATH. 'wp-load.php');
// Require the wp-load.php file (which loads wp-config.php and bootstraps WordPress)
require( $wp_root_path );

//global $wpdb;
//var_dump($wpdb);
function custom(WP_REST_Request $request) {
    global $wpdb;
    $cat = $request['id'];
//    return $email;
    // $res = $wpdb->get_row("SELECT user_id FROM {$wpdb->prefix}wc_customer_lookup WHERE email = '$email'");
    //   $res = $wpdb->get_results("SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id = '$email'");

    if ($cat) {

        $all_ids = get_posts(array(
            'post_type' => 'product',
            'numberposts' => -1,
            'post_status' => 'publish',
            'fields' => 'ids',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $cat, /* category name */
                    'operator' => 'IN',
                )
            ),
        ));
        if ($all_ids) {
            $gproduct = array();
            $f = 0;
            foreach ($all_ids as $id) {
                $results = (array) ($wpdb->get_results("SELECT id, post_title FROM wp_posts WHERE id = '$id'"));
                foreach ($results as $res) {
                    $gproduct[$f]["id"] = ($res->id);
                    $gproduct[$f]["product"] = ($res->post_title);
                    $gproduct[$f]["url"] = get_the_post_thumbnail_url($res->id);
                    $f++;
                }
            }
            return(($gproduct));
        } else {
            return 0;
        }
//        return $res;
//      return $wpdb->get_row("SELECT product_id FROM {$wpdb->prefix}wc_product_meta_lookup WHERE product_id = '$email'");
//        $orderby = 'name';
//        $order = 'asc';
//        $hide_empty = false;
//        $cat_args = array(
//            'orderby' => $orderby,
//            'order' => $order,
//            'hide_empty' => $hide_empty,
//        );
//
//        $product_categories = get_terms('product_cat', $cat_args);
//        return $product_categories;
//        if (!empty($product_categories)) {
//            foreach ($product_categories as $key => $category) {
//                printf($category->name);
//            }
//        }
//        $product_term_ids = $cat;
//
//        $product_term_args = array(
//            'taxonomy' => 'product_cat',
//            'include' => $product_term_ids,
//            'orderby' => 'include'
//        );
//        $product_terms = get_terms($product_term_args);
//
//        $product_term_slugs = [];
//        foreach ($product_terms as $product_term) {
//            $product_term_slugs[] = $product_term->slug;
//        }
//
//        $product_args = array(
//            'post_status' => 'publish',
//            'limit' => -1,
//            'category' => $product_term_slugs,
//                //more options according to wc_get_products() docs
//        );
//
//        if ($product_term_slugs) {
//            $products = wc_get_products($product_args);
//
//            foreach ($products as $product) {
//                $results = array($product->get_title());
////                echo json_encode($product->get_title());
//                echo json_encode($results);
//            }
//        } else {
//            echo json_encode("0");
//        }
    } else {
        echo json_encode("0");
    }
}

function categories() {
    if (true) {

       $all_cat = get_terms();
        if ($all_cat) {
            $gproduct = array();
            $f = 0;
            foreach ($all_cat as $id) {
                        $name = $id->name;
                if ($name == "Men" || $name == "Women" || $name == "Kids") {
                    $gproduct[$f]["id"] = ($id->term_id);
                    $gproduct[$f]["name"] = ($id->name);
                    $gproduct[$f]["url"] = wp_get_attachment_url(get_term_meta($id->term_id, 'thumbnail_id', true));
                    $f++;
            }}
            return(($gproduct));
        } else {
            return 0;
        }
    } else {
        echo json_encode("0");
    }
}

function user_details() {
    global $wpdb;
    $email = $_POST['email'];
    return ($wpdb->get_row("SELECT id, user_email, user_pass FROM {$wpdb->prefix}users WHERE user_login = '$email'"));
}

add_action('rest_api_init', function () {

    register_rest_route('wc/v3', 'custom', [
        'methods' => 'GET',
        'callback' => 'custom',
    ]);

    register_rest_route('wc/v3', '/custom/(?P<id>[a-zA-Z0-9]+)', [
        'methods' => 'GET',
        'callback' => 'custom',
        'email' => array('validate_callback' => function($param) {
                return ctype_alpha($param);
            }),
    ]);
    register_rest_route('wc/v3', '/categories/', [
        'methods' => 'GET',
        'callback' => 'categories',
    ]);



    register_rest_route('wc/v3', '/user/', [
        'methods' => 'POST',
        'callback' => 'user_details',
    ]);
});



