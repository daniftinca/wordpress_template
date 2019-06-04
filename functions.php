<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
    include_once(dirname(__FILE__) . '/custom-fields/portfolio.php');
    include_once(dirname(__FILE__) . '/custom-fields/portfolioList.php');
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style('child-style',get_theme_file_uri() . '/style.css');

	wp_enqueue_script('portfolio-custom-js',get_theme_file_uri() . '/script.js',array('jquery'),time(),false);

}


?>