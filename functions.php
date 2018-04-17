<?php
function boye_files(){
	wp_enqueue_script('boye_main_js', get_theme_file_uri('/assets/js/scripts-bundled.js'), NULL, '1.0', true);
	wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'));
	wp_enqueue_style('boye_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'boye_files');

function boye_features(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'boye_features'); 
 ?>