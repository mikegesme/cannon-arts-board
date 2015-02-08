<?php

// Load styles and scripts
function cab_load_styles() {
	wp_register_style('main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'cab_load_styles' );

// Register sidebars
function cab_widgets_init() {
register_sidebar( array(
    'id'          => 'home-middle',
    'name'        => __( 'Home Middle'),
    'description' => __( 'This is the home page middle area.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'    
) );
}

add_action( 'widgets_init', 'cab_widgets_init');