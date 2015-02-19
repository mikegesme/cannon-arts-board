<?php

// Load styles and scripts
function cab_load_styles() {
	wp_register_style('main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main');
	wp_register_style('open-sans-condensed', 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700');
	wp_enqueue_style('open-sans-condensed');
	wp_enqueue_script('jquery');
	wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'));
	wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'cab_load_styles' );

// Register sidebars
function cab_widgets_init() {
register_sidebar( array(
    'id'          => 'primary',
    'name'        => __( 'Primary Sidebar'),
    'description' => __( 'This is the primary sidebar.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'    
) );
register_sidebar( array(
    'id'          => 'home-middle',
    'name'        => __( 'Home Middle'),
    'description' => __( 'This is the home page middle area.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s home-events-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="home-events-title">',
		'after_title' => '</h3>'    
) );
}

add_action( 'widgets_init', 'cab_widgets_init');