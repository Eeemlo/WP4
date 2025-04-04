<?php

/*Registrera menyer*/
add_action('init', 'register_my_menu');

function register_my_menu() {
    
    register_nav_menus(array (
    'main-nav' => __('Huvudmeny'),
    'footer-nav-services' => __('Sidfotsmeny-tjanster'),
    'footer-nav-info' => __('Sidfotsmeny-info')

    ));
}

//Ta bort private från privata sidtitlar
function remove_private_from_title($title) {
    // Kolla om det är en enskild sida och om sidan är privat
    if (is_singular('page') && get_post_status() === 'private') {
        // Ta bort ordet 'Private' från titeln
        $title = str_replace('Private ', '', $title);
    }
    return $title;
}
add_filter('the_title', 'remove_private_from_title');


    /*Aktivera logotypstöd*/
function theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, // Justera höjden på logotypen
        'width'       => 200, // Justera bredden på logotypen
        'flex-height' => true, // Tillåter flexibel höjd
        'flex-width'  => true, // Tillåter flexibel bredd
    ));
}
add_action('after_setup_theme', 'theme_setup');

/*Lägg till custom länk för kontaktsektion i huvudmenyn*/ 
function add_custom_anchor_links_to_menu($items, $args) {
    if ($args->theme_location == 'main-nav') {
        $page_url = get_permalink(16); // ID 16 för front-page.php
        $section_id = 'contactMain'; // Sektionens ID

        // Skapa ankar-länken
        $link = $page_url . '#' . $section_id;
        
        // Skapa ett nytt menyobjekt
        $new_item = '<li class="menu-item menu-item-type-custom"><a class="button btn-shadow" id="ctahead" href="' . esc_url($link) . '">Kontakta mig!</a></li>';
        
        // Lägg till det nya objektet i menyn
        $items .= $new_item;
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'add_custom_anchor_links_to_menu', 10, 2);

/* Funktionalitet för featured image */
add_theme_support('post-thumbnails');

/* Aktivera stöd för dynamisk headerbild */
$args = array(
    'width' => 500,
    'height' => 500,
    'default-image' => get_template_directory_uri() . '/images/ee2.png',
    'uploads' => true
);

add_theme_support('custom-header', $args);


//Avslut på excerpt
function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');


//Ladda JS filen efter DOM
function my_theme_scripts() {
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


?>