<?php

function nextevo_5_enqueue_scripts()
{
    wp_enqueue_style('nextevo-css', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',  array(), null, true);
    wp_enqueue_script('ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',  array(), null, true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/df75694fc6.js',  array(), null, true);

    if (is_front_page()) {
        wp_enqueue_script('nextevo-mainjs');
        wp_enqueue_style('nextevo-homecss');
    }

    // if (is_page('Transformation')) {
    // 	wp_enqueue_script('singpost165-mainjs');
    // 	wp_enqueue_style('singpost165-maincss');
    // }

}

function wpse248829_register_scripts()
{
    // script
    wp_register_script('nextevo-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

    // styles
    wp_register_style('nextevo-homecss', get_template_directory_uri() . '/css/home.css');
}

add_action('wp_enqueue_scripts', 'nextevo_5_enqueue_scripts');
add_action('wp_enqueue_scripts', 'wpse248829_register_scripts');


require_once(__DIR__ . '/includes/customise_control/home.php');
