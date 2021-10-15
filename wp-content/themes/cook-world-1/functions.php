<?php

function cook_enqueue_styles(){
    wp_enqueue_style("bootsrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css");
    wp_enqueue_style( "cook-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "cook_enqueue_styles");

function cook_register_menu (){ 
    register_nav_menu("home", "Home");
}
add_action("init", "cook_register_menu")
?> 