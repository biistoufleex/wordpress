<?php

// declare un function
function party_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
};

// change le separateur du titre
function party_title_separator(){
    return "|";
};

function party_register_assets(){
    // enregistre un style/script
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    // suprime l'enregistrement d'un style/script
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// lance une function a un evenement
add_action('after_setup_theme', 'party_support');
add_action('wp_enqueue_scripts', 'party_register_assets');
add_filter('document_title_separator', 'party_title_separator');