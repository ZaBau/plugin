<?php
/**
 * Vayu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Vayu
 * @since Vayu 1.0.0
 */

function vayu_theme_scripts()
{
	// Enqueue theme stylesheet for the front-end.
	wp_enqueue_style('vayu-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('dashicons');
	wp_enqueue_script('vayu-marquee-script', get_template_directory_uri() . '/assets/js/marquee.js', array('jquery'), '1.0.0', true);
}

add_action('enqueue_block_assets', function (): void {
	wp_enqueue_style('dashicons');
});

add_action('wp_enqueue_scripts', 'vayu_theme_scripts');

add_editor_style('style.css'); 
// Add this line to enqueue the editor style.

// register own theme pattern
function vayu_register_pattern_category()
{
	$patterns = array();
	$block_pattern_categories = array(
		'vayu' => array('label' => __('Vayu', 'vayu'))
	);

	$block_pattern_categories = apply_filters('vayu_block_pattern_categories', $block_pattern_categories);
	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}

add_action('admin_head', 'vayu_admin_css');

function vayu_admin_css()
{
	echo '<style>
  	.components-modal__frame.is-full-screen.edit-post-start-page-options__modal {
		max-height: 82vh;
	}
  </style>';
}
add_action('init', 'vayu_register_pattern_category');

// Admin Info
require get_template_directory() . '/class/admin-info.php';

// Recommend plugins
require get_theme_file_path('/inc/tgm-plugin/tgmpa-hook.php');

// Block Styles
require get_template_directory() . '/inc/block-style.php';