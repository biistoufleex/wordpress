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


function include_jquery()
{
    wp_deregister_script("jquery");
    wp_enqueue_script( "jquery", get_template_directory_uri(). "/js/jquery-3.5.1.min.js", "", 1,true);
    add_action("wp_enqueue_scripts","jquery");
}
add_action( "wp_enqueue_scripts","include_jquery");

function loadjs()
{
    wp_register_script( "customjs", get_template_directory_uri(). "/js/scripts.js","", 1, true);
    wp_enqueue_script("customjs");
}
add_action("wp_enqueue_scripts","loadjs");