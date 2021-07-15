<?php
// blocks 
require get_template_directory() . '/inc/theme-settings.php';
require get_template_directory() . '/inc/register-acf-blocks.php';


// хуки подключаем
add_action('wp_enqueue_scripts', 'insure_styles');
add_action('wp_enqueue_scripts', 'insure_scripts');

function insure_styles() {
	// если подключаем CDN линки
	wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');

	// если подключаем доп стилевые файлы 
	wp_enqueue_style('insure-style', get_template_directory_uri() . '/assets/css/style.min.css');
};

function insure_scripts() {
	// подключаем JS 
	wp_enqueue_script('insure-scripts', get_template_directory_uri() . '/assets/js/script.min.js', array(), null, true);
	wp_enqueue_script('swiper-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js');
};
