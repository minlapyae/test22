<?php

function nextevo_5_enqueue_scripts()
{
    wp_enqueue_style('nextevo-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('nextevo-indexcss', get_template_directory_uri() . '/css/index.css');
    wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',  array(), null, true);
    wp_enqueue_script('ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',  array(), null, true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/df75694fc6.js',  array(), null, true);
    wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), null, true);
    
    wp_enqueue_script('nextevo-indexjs', get_template_directory_uri() . '/assets/js/index.js', array(), null, true);

    if (is_front_page()) {
        wp_enqueue_style('nextevo-homecss');
        wp_enqueue_script('nextevo-mainjs');
    }
    
    if (is_page('our-driving-force')) {
        wp_enqueue_style('nextevo-ourdrvingforcecss');
        wp_enqueue_script('nextevo-ourdrivingforcejs');
    }

    if (is_page('meet-the-team')) {
        wp_enqueue_style('nextevo-meettheteamcss');
        wp_enqueue_script('nextevo-meetteamjs');
    }

}

function wpse248829_register_scripts()
{
    // script
    wp_register_script('nextevo-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    wp_register_script('nextevo-ourdrivingforcejs', get_template_directory_uri() . '/assets/js/ourdrivingforce.js', array(), null, true);
    wp_register_script('nextevo-meetteamjs', get_template_directory_uri() . '/assets/js/meetteam.js', array(), null, true);

    // styles
    wp_register_style('nextevo-homecss', get_template_directory_uri() . '/css/home.css');
    wp_register_style('nextevo-ourdrvingforcecss', get_template_directory_uri() . '/css/ourdrivingforce.css');
    wp_register_style('nextevo-meettheteamcss', get_template_directory_uri() . '/css/meettheteam.css');
}

add_action('wp_enqueue_scripts', 'nextevo_5_enqueue_scripts');
add_action('wp_enqueue_scripts', 'wpse248829_register_scripts');


require_once(__DIR__ . '/includes/customise_control/home.php');
