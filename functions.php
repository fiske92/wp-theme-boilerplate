<?php
/**
 * Aleksa Fisic Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aleksa Fisic
 * @since 1.0.0
 */

define('CHILD_THEME_URL', get_stylesheet_directory_uri());
define('CHILD_THEME_DIR', get_stylesheet_directory());
 
require_once('vendor/autoload.php');

use Boilerplate\ChildThemeSetup;

new ChildThemeSetup();

/**
 * Define Constants
 */
define( 'CHILD_THEME_ALEKSAFISIC_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'aleksafisic-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ALEKSAFISIC_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
