<?php
function enqueue_css() {
    wp_enqueue_style( 'bs', get_template_directory_uri().'/vendors/css/bootstrap.min.css' );
    wp_enqueue_style( 'st', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_css' );
function enqueue_js() {
    wp_enqueue_script( 'bv', get_template_directory_uri().'/vendors/js/bootstrapValidator.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'mn', get_template_directory_uri().'/js/main.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_js' );