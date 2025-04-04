<?php
function mytheme_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    // Theme Main CSS
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Bootstrap JS (with Popper.js)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
   
    // Link Custom CSS
    wp_enqueue_style('custom-font', get_template_directory_uri() . '/assets/fonts/CabinetGrotesk/font.css');
    

    //jquery cdn
    wp_enqueue_script('jquery-cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true);
    
    //custom js
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/script/app.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
//Menu registeration
function mytheme_register_menus() {
    register_nav_menus(array(
        'footer_menu' => __('Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js', array('jquery'), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/script/app.js', array('gsap-js'), false, true );
    
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

//Swiper scripts
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);
