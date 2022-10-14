<?php
function bikcraft_register_menu(){
    register_nav_menu( 'menu-navegacao', 'Menu' );
}

add_action( 'init', 'bikcraft_register_menu');

function bikcraft_add_theme_resources(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'bikcraft_add_theme_resources');