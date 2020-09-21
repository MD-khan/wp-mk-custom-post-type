<?php
/**
 * @package WP_MK_CUSTOM_POST_TYPE
 * @version 1.0.0
 */
/*
Plugin Name: WP MK Custom Post Type
Plugin URI: http://monirkhan.net/plugins/mdkhan-contact-form
Description: You do not need to buy Advance custom post type. 
Version: 1.0.0
Author URI: http:monirkhan.net
Text Domain: wp-mk-cpt
*/

defined('ABSPATH') or die('Sorry! You are not allow here.');

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * Plugin activation
 */
function wp_mk_cpt_plugin_activate() {
	App\Activate::activate();
}
register_activation_hook( __FILE__, 'wp_mk_cpt_plugin_activate' );


/**
 * Plugin deactivation
 */
function wp_mk_cpt_plugin_deactivate() {
	App\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'wp_mk_cpt_plugin_deactivate' );


if( class_exists('App\\Bootstrap') ) {

    App\Bootstrap::register_services(); 
    App\Bootstrap::class; // also you can only call class here
}
