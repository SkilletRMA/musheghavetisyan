<?php
/**
 * Plugin Name: tonny's Plugin
 * Plugin URI: http://tiko98toto.000webhostapp.com
 * Description: install this plugin for creating plugins for TONNY.
 * Author: Tigran Soghoyan
 * Author URI: http://tiko98toto.000webhostapp.com
 * Version: 1.0
 * License: GPLv2
 */

//Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once ( plugin_dir_path(__FILE__) . 'wp-job-cpt.php' );
require_once ( plugin_dir_path(__FILE__) . 'wp-job-render.php' );
require_once ( plugin_dir_path(__FILE__) . 'wp-job-fields.php' );

function my_admin_enqueue_scripts() {
	//These varibales allow us to target the post type and the post edit screen.
	global $pagenow, $typenow;

	if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'job' ) {
		//Plugin Main CSS File.
		wp_enqueue_style( 'my-admin-css', plugins_url( 'css/admin-job.css', __FILE__ ) );
		//Plugin Main js File.
		wp_enqueue_script( 'my-job-js', plugins_url( 'js/admin-jobs.js', __FILE__ ), array( 'jquery', 'jquery-ui-datepicker' ), '20171128', true );
		//Quicktags js file.
		wp_enqueue_script( 'my-custom-quicktags', plugins_url( 'js/my-quicktags.js', __FILE__ ), array( 'quicktags' ), '20171128', true );
		//Datepicker Styles
		wp_enqueue_style( 'jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css' );
	}
}
//This hook ensures our scripts and styles are only loaded in the admin.
add_action( 'admin_enqueue_scripts', 'my_admin_enqueue_scripts' );

function my_add_submenu_page() {
	add_submenu_page(
		'edit.php?post_type=job',
		'Reorder Jobs',
		'Reorder Jobs',
		'manage_options',
		'reorder_jobs',
		'reorder_admin_jobs_callback'
	);
}
add_action( 'admin_menu', 'my_add_submenu_page' );


//
//function coachs_install () {
//    global $wpdb;
//    $table_name = 'wp_coach_subscribe';
//
//    if($wpdb->get_var("SHOW TABLES LIKE $table_name") != $table_name) {
//        $sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
//            `id` int(11) NOT NULL AUTO_INCREMENT,
//            `name` varchar(30) NOT NULL,
//            `phone` varchar(30) NOT NULL,
//            `email` varchar(30) NOT NULL,
//            `surname` varchar(30) NOT NULL,
//            `country` varchar(30) NOT NULL,
//            `occupation` varchar(30) NOT NULL,
//            PRIMARY KEY (`id`)
//        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
//        $wpdb->query($sql);
//    }
//}
//function coachs_uninstall() {
//    global $wpdb;
//    $table_name = 'wp_coach_subscribe';
//    $sql = "DROP TABLE IF EXISTS `$table_name`";
//    $wpdb->query($sql);
//}
//register_activation_hook(__FILE__, 'coachs_install');
//register_deactivation_hook(__FILE__, 'coachs_uninstall');
//
//
//
//function events_install () {
//    global $wpdb;
//    $table_name = 'wp_events_subscribe';
//
//    if($wpdb->get_var("SHOW TABLES LIKE $table_name") != $table_name) {
//        $sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
//            `id` int(11) NOT NULL AUTO_INCREMENT,
//            `name` varchar(30) NOT NULL,
//            `phone` varchar(30) NOT NULL,
//            `email` varchar(30) NOT NULL,
//            `surname` varchar(30) NOT NULL,
//            `country` varchar(30) NOT NULL,
//            PRIMARY KEY (`id`)
//        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
//        $wpdb->query($sql);
//    }
//}
//function events_uninstall() {
//    global $wpdb;
//    $table_name = 'wp_events_subscribe';
//    $sql = "DROP TABLE IF EXISTS `$table_name`";
//    $wpdb->query($sql);
//}
//register_activation_hook(__FILE__, 'events_install');
//register_deactivation_hook(__FILE__, 'events_uninstall');
//
//
//
//
//
//function users_install () {
//    global $wpdb;
//    $table_name = 'wp_users_subscribe';
//
//    if($wpdb->get_var("SHOW TABLES LIKE $table_name") != $table_name) {
//        $sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
//            `id` int(11) NOT NULL AUTO_INCREMENT,
//            `name` varchar(30) NOT NULL,
//            `phone` varchar(30) NOT NULL,
//            `email` varchar(30) NOT NULL,
//            `next` int(3) NOT NULL,
//            PRIMARY KEY (`id`)
//        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
//        $wpdb->query($sql);
//    }
//}
//function users_uninstall() {
//    global $wpdb;
//    $table_name = 'wp_users_subscribe';
//    $sql = "DROP TABLE IF EXISTS `$table_name`";
//    $wpdb->query($sql);
//}
//register_activation_hook(__FILE__, 'users_install');
//register_deactivation_hook(__FILE__, 'users_uninstall');