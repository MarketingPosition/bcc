<?php
/*
Plugin Name: Gravity Forms Date Dropper Field
Plugin URI: https://codecanyon.net/user/butsokoy/portfolio
Description: Add a unique and attractive date picker field on your Gravity Forms.
Version: 1.2.0
Author: Butsokoy
Author URI: https://codecanyon.net/user/butsokoy
Text Domain: gravityforms-datedropper
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'GFDDF_VERSION', '1.2.0' );

function run_gravityforms_datedropper() {

	require_once plugin_dir_path( __FILE__ ) . 'class/gfddf.php';

	new GFDDF();

} 
add_action( 'gform_loaded', 'run_gravityforms_datedropper' );