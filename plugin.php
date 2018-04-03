<?php
/**
 * Plugin Name: ACF to REST API Recursive
 * Description: Get ACF fields recursively
 * Author: Aires Gonçalves
 * Author URI: http://github.com/airesvsg
 * Version: 1.0.0
 * Plugin URI: http://github.com/airesvsg/acf-to-rest-api-recursive
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once dirname( __FILE__ ) . '/library/class-acf-to-rest-api-recursive.php';

add_action( 'after_setup_theme', array( 'ACF_To_REST_API_Recursive', 'init' ) );
