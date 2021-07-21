<?php
// blocks 
require get_template_directory() . '/inc/theme-settings.php';
require get_template_directory() . '/inc/register-acf-blocks.php';


// хуки подключаем
add_action('wp_enqueue_scripts', 'insure_styles');
add_action('wp_enqueue_scripts', 'insure_scripts');


function insure_styles()
{
	// если подключаем CDN линки
	wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	// если подключаем доп стилевые файлы 
	// wp_enqueue_style('insure-style', get_template_directory_uri() . '/assets/css/style.min.css');
	enqueue_versioned_style( 'insure-style', '/assets/css/style.min.css' );
};

function insure_scripts()
{
	// подключаем JS 
	// wp_enqueue_script('insure-scripts', get_template_directory_uri() . '/assets/js/script.min.js', array(), null, true);
	wp_enqueue_script('swiper-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js');
	enqueue_versioned_script( 'insure-scripts', '/assets/js/script.min.js', array(), true);
}; 


// подключаем принудительное обновление сайта

/**
 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
 * 
 * @param string      $handle    Name of the script. Should be unique.
 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
 *                               Default 'false'.
 */
function enqueue_versioned_script($handle, $src = false, $deps = array(), $in_footer = false)
{
	wp_enqueue_script($handle, get_stylesheet_directory_uri() . $src, $deps, filemtime(get_stylesheet_directory() . $src), $in_footer);
}

/**
 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string      $handle Name of the stylesheet. Should be unique.
 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
 * @param string      $media  Optional. The media for which this stylesheet has been defined.
 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
 *                            '(orientation: portrait)' and '(max-width: 640px)'.
 */
function enqueue_versioned_style($handle, $src = false, $deps = array(), $media = 'all')
{
	wp_enqueue_style($handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime(get_stylesheet_directory() . $src), $media);
}
