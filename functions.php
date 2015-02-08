<?php

// Load styles and scripts
function mgw_load_styles() {
	wp_register_style('main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'mgw_load_styles' );