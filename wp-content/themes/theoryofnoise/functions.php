<?php

function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('foundation', get_stylesheet_directory_uri().'/stylesheets/foundation.css');
}

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function custom_script() {
    wp_register_script('foundation', get_stylesheet_directory_uri().'/js/vendor/foundation.js', array('jquery'), true);
    wp_enqueue_script('foundation');

    wp_register_script('what-input', get_stylesheet_directory_uri().'/js/vendor/what-input.js', array('jquery'), true);
    wp_enqueue_script('what-input');
}

add_action('wp_enqueue_scripts', 'custom_script');