<?php
/**
 * Plugin Name: Service Pricer Plus
 * Description: Empower beginners by integrating ServicePricer—a straightforward plugin for website cost calculation and SEO services. Simplify your online presence with transparent and accurate pricing. ServicePricer makes it easy for your audience to understand and engage, enhancing accessibility and user experience effortlessly.
 * Version: 1.0.0
 * Author: Amit Kr
 * Author URI: https://www.amekr.com
 */

if(!defined('ABSPATH')){
    header("Location: /");
    die("");
 }

 //Static or Dynamic Website
 function infoweb_calc() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'infoweb-calc.php');
    return ob_get_clean();
}

add_shortcode('infoweb', 'infoweb_calc');

//Ecommerce Website
function ecomm_calc() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'ecomm-calc.php');
    return ob_get_clean();
}
add_shortcode('ecomm', 'ecomm_calc');

//Website Maintenance
function maintenance_calc(){
    ob_start();
    include(plugin_dir_path(__FILE__) . 'pages/web-maint.php');
    return ob_get_clean();
}
add_shortcode('web-maint', 'maintenance_calc');

//SEO
function seo_calc(){
    ob_start();
    include(plugin_dir_path(__FILE__) . 'pages/seo-calc.php');
    return ob_get_clean();
}
add_shortcode('seo-calc', 'seo_calc');



// admin menu
function my_service_admin_func() {
    include 'admin/info.php';
}

function setting_service_admin_func() {
    echo 'Setting Page';
}

function pricer_admin() {
    add_menu_page(
        'Service Pricer Page',
        'Service Pricer',
        'manage_options',
        'service-pricer-info',
        'my_service_admin_func',
        '',
        80
    );

    // add_submenu_page(
    //     'service-pricer-info', // Parent menu slug
    //     'Setting',
    //     'Setting',
    //     'manage_options',
    //     'service-pricer-setting', // Unique submenu slug
    //     'setting_service_admin_func'
    // );
}
add_action('admin_menu', 'pricer_admin');