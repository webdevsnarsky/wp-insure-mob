<?php
  // add_theme_support( 'post-thumbnails' );

// link menu 
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
	register_nav_menu('primary', 'Primary Menu');
}

// add custom logo
add_theme_support('custom-logo');

// add options

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

// add widgets 
function wpb_widgets_init() {

	register_sidebar(array(
		'name'          => 'Custom Footer Widget Area',
		'id'            => 'custom-footer-widget',
		'before_widget' => '<div class="footer__category">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="footer__title">',
		'after_title'   => '</h5>',
	));
}
add_action('widgets_init', 'wpb_widgets_init');