<?php

add_theme_support('title-tag');




























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