<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'wpGame_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function wpGame_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_theme_support( 'post-thumbnails', array( 'post' ) );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}