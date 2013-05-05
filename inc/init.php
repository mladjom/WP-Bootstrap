<?php
/* 
This is the core theme file where most of the
main functions & features reside. If you have 
any custom functions, it's best to put them
in the functions.php file.
*/

@define( 'CURRENT_THEME', 'wpbootstrap');

/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain(CURRENT_THEME, get_template_directory() . '/languages');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', CURRENT_THEME), // main nav in header
    'secondary_navigation' => __('Secondary Navigation', CURRENT_THEME),
	'footer_links' => __('Footer Links', CURRENT_THEME) // secondary nav in footer
  ));
	
  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
	//add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	//add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
	//add_theme_support( 'custom-background' );  // wp custom background
	
	
  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');

// Backwards compatibility for older than PHP 5.3.0
if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

// Define helper constants
$get_theme_name = explode('/themes/', get_template_directory());

define('THEME_NAME',                next($get_theme_name));
define('RELATIVE_PLUGIN_PATH',      str_replace(home_url() . '/', '', plugins_url()));
define('RELATIVE_CONTENT_PATH',     str_replace(home_url() . '/', '', content_url()));
define('THEME_PATH',                RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);





?>