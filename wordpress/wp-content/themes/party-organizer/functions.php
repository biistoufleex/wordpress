<?php

// declare un function
function party_support(){
    add_theme_support('tittle-tag');
};


function party_register_assets(){
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['popper', 'jquery']);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// lance une function a un evenement
add_action('after_setup_theme', 'party_support');
add_action('wp_enqueue_scripts', 'party_register_assets');