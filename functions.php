<?php

/*Registrera menyer*/
add_action('init', 'register_my_menu');

function register_my_menu() {
    
    register_nav_menus(array (
    'main-nav' => __('Huvudmeny'),
    'footer-nav' => __('Sidfotsmeny')

    ));
}

/* Funktionalitet för featured image */
add_theme_support('post-thumbnails');

/* Aktivera stöd för dynamisk headerbild */
$args = array(
    'width' => 295,
    'height' => 287,
    'default-image' => get_template_directory_uri() . '/images/ee2.png',
    'uploads' => true
);

add_theme_support('custom-header', $args);


//Ladda JS filen efter DOM
function enqueue_scripts() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

?>