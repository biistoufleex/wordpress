<?php

// declare un function
function party_support(){
    add_theme_support('tittle-tag');
};


function party_register_assets(){
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
}

// lance une function a un evenement
add_action('after_setup_theme', 'party_support');
add_action('wp_enqueue_scripts', 'party_register_assets');