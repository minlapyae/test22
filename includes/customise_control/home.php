<?php

// prefix with theme name_pagename_sectionname
function nextevo_home_introduction($wp_customize)
{
    $wp_customize->add_section('nextevo_home_introduction-section', array('title' => 'Landing'));

    $wp_customize->add_setting('nextevo_home_introduction-headline', array('type' => 'theme_mod', 'default' => 'The catalyst that shapes today’s materials into a natural tomorrow.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_introduction-headline-control', array('label' => 'Headline', 'section' => 'nextevo_home_introduction-section', 'settings' => 'nextevo_home_introduction-headline')));

    $wp_customize->add_setting('nextevo_home_introduction-text', array('type' => 'theme_mod', 'default' => 'Join us in creating positive sustainable solutions, ensuring a future where being eco-conscious goes hand-in-hand with businesses.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_introduction-text-control', array('label' => 'Text', 'section' => 'nextevo_home_introduction-section', 'settings' => 'nextevo_home_introduction-text', 'type' => 'textarea')));

    $wp_customize->add_setting('nextevo_home_introduction-background-image');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_introduction-background-image-control', array('label' => 'Background Image', 'section' => 'nextevo_home_introduction-section', 'settings' => 'nextevo_home_introduction-background-image',)));
}

add_action('customize_register', "nextevo_home_introduction");

function nextevo_home_zero_waste($wp_customize)
{

    $wp_customize->add_section('nextevo_home_zero-waste-section', array('title' => 'Zero Waste'));

    $wp_customize->add_setting('nextevo_home_zero-waste-headline', array('default' => 'ZERO WASTE'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-headline-control', array('label' => 'Headline', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-headline')));

    $wp_customize->add_setting('nextevo_home_zero-waste-text', array('default' => 'Where sustainability isn’t a constraint; it’s a catalyst for limitless possibilities. With each step, we make a lasting impact socially and environmentally.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-text-control', array('label' => 'Text', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-text', 'type' => "textarea")));

    // image 1
    $wp_customize->add_setting('nextevo_home_zero-waste-image-1');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_introduction-_zero-waste-1-control', array('label' => 'Image 1', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-1',)));

    // image 2
    $wp_customize->add_setting('nextevo_home_zero-waste-image-2');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_introduction-_zero-waste-2-control', array('label' => 'Image 2', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-2',)));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-2-title', array('default' => '2,000,000++'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-2-title-control', array('label' => 'Image2 Title', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-2-title')));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-2-subtitle', array('default' => 'KILOGRAMS'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-2-subtitle-control', array('label' => 'Image2 Subtitle', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-2-subtitle')));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-2-text', array('default' => 'Targeted Coconut Husks Daily'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-2-text-control', array('label' => 'Image2 Text', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-2-text')));

    // image 3
    $wp_customize->add_setting('nextevo_home_zero-waste-image-3');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_introduction-_zero-waste-3-control', array('label' => 'Image 3', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-3',)));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-3-title', array('default' => '100,000++'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-3-title-control', array('label' => 'Image3 Title', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-3-title')));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-3-subtitle', array('default' => 'KILOGRAMS'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-3-subtitle-control', array('label' => 'Image3 Subtitle', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-3-subtitle')));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-3-text', array('default' => 'Targeted Coconut Husks Daily'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-3-text-control', array('label' => 'Image3 Text', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-3-text')));

    // image 4
    $wp_customize->add_setting('nextevo_home_zero-waste-image-4');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_introduction-_zero-waste-4-control', array('label' => 'Image 4', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-4',)));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-4-title', array('default' => '20,000++'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-4-title-control', array('label' => 'Image4 Title', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-4-title')));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-4-subtitle', array('default' => 'Changing'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-4-subtitle-control', array('label' => 'Image4 Subtitle', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-4-subtitle')));

    $wp_customize->add_setting('nextevo_home_zero-waste-image-4-text', array('default' => "Small-scale Farmer' Lives"));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_zero-waste-image-4-text-control', array('label' => 'Image4 Text', 'section' => 'nextevo_home_zero-waste-section', 'settings' => 'nextevo_home_zero-waste-image-4-text')));
}

add_action('customize_register', "nextevo_home_zero_waste");

function nextevo_home_shelf_slider($wp_customize) {
    
    $wp_customize->add_section('nextevo_home_shelf-slider-section', array('title' => 'Shelf Slider'));

    // item 1
    $wp_customize->add_setting('nextevo_home_shelf-slider-item-1-headline', array('type' => 'theme_mod', 'default' => 'From Farm to Fashion'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-1-headline-control', array('label' => 'Item1: Headline', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-1-headline')));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-1-title', array('type' => 'theme_mod', 'default' => 'From Farm to Fashion'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-1-title-control', array('label' => 'Item1: Title', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-1-title')));
    
    $wp_customize->add_setting('nextevo_home_shelf-slider-item-1-text', array('type' => 'theme_mod', 'default' => 'With the bioproducts that we collect, we transform them into textiles that are unique and natural – our Pineapple Leaf Fibre (PALF) textile is used in various categories with the major four being footwear, apparel & accessories, home textiles, and upholstery & interior furnishings.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-1-text-control', array('label' => 'Item1: Content', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-1-text', 'type' => "textarea")));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-1-url');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-1-url-control', array('label' => 'Item1: Url', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-1-url', 'type' => 'url')));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-1-background-image');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_shelf-slider-item-1-background-image-control', array('label' => 'Item1: Background Image', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-1-background-image',)));

    // item 2
    $wp_customize->add_setting('nextevo_home_shelf-slider-item-2-headline', array('type' => 'theme_mod', 'default' => 'Bioplastics'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-2-headline-control', array('label' => 'Item2: Headline', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-2-headline')));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-2-title', array('type' => 'theme_mod', 'default' => 'From Farm to Fashion'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-2-title-control', array('label' => 'Item2: Title', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-2-title')));
    
    $wp_customize->add_setting('nextevo_home_shelf-slider-item-2-text', array('type' => 'theme_mod', 'default' => 'With the bioproducts that we collect, we transform them into textiles that are unique and natural – our Pineapple Leaf Fibre (PALF) textile is used in various categories with the major four being footwear, apparel & accessories, home textiles, and upholstery & interior furnishings.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-2-text-control', array('label' => 'Item2: Content', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-2-text', 'type' => "textarea")));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-2-url');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-2-url-control', array('label' => 'Item2: Url', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-2-url', 'type' => 'url')));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-2-background-image');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_shelf-slider-item-2-background-image-control', array('label' => 'Item2: Background Image', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-2-background-image',)));

    // item 3
    $wp_customize->add_setting('nextevo_home_shelf-slider-item-3-headline', array('type' => 'theme_mod', 'default' => 'Biochar'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-3-headline-control', array('label' => 'Item3: Headline', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-3-headline')));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-3-title', array('type' => 'theme_mod', 'default' => 'From Farm to Fashion'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-3-title-control', array('label' => 'Item3: Title', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-3-title')));
    
    $wp_customize->add_setting('nextevo_home_shelf-slider-item-3-text', array('type' => 'theme_mod', 'default' => 'With the bioproducts that we collect, we transform them into textiles that are unique and natural – our Pineapple Leaf Fibre (PALF) textile is used in various categories with the major four being footwear, apparel & accessories, home textiles, and upholstery & interior furnishings.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-3-text-control', array('label' => 'Item3: Content', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-3-text', 'type' => "textarea")));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-3-url');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_shelf-slider-item-3-url-control', array('label' => 'Item3: Url', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-3-url', 'type' => 'url')));

    $wp_customize->add_setting('nextevo_home_shelf-slider-item-3-background-image');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_shelf-slider-item-3-background-image-control', array('label' => 'Item3: Background Image', 'section' => 'nextevo_home_shelf-slider-section', 'settings' => 'nextevo_home_shelf-slider-item-3-background-image',)));
    
}

add_action('customize_register', "nextevo_home_shelf_slider");

function nextevo_home_farming_connections($wp_customize) {

    $wp_customize->add_section('nextevo_home_farming-connection-section', array( 'title' => 'Farming Connection'));

    $wp_customize->add_setting('nextevo_home_farming-connection-headline', array('type' => 'theme_mod', 'default' => 'The Farming Connection'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_farming-connection-headline-control', array('label' => 'Headline', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_farming-connection-headline')));

    $wp_customize->add_setting('nextevo_home_farming-connection-text', array('type' => 'theme_mod', 'default' => 'Our initiatives drive a positive <br />chain reaction that shapes a  <br />
    greener tomorrow. <br />'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_farming-connection-text-control', array('label' => 'Text', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_farming-connection-text', 'type' => 'textarea')));

    // image 1
    $wp_customize->add_setting('nextevo_home_arming-connection-image-1');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_arming-connection-image-1-control', array('label' => 'Image 1', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_arming-connection-image-1')));

    // image 2
    $wp_customize->add_setting('nextevo_home_arming-connection-image-2');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_arming-connection-image-2-control', array('label' => 'Image 2', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_arming-connection-image-2')));

    // image 3
    $wp_customize->add_setting('nextevo_home_arming-connection-image-3');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_arming-connection-image-3-control', array('label' => 'Image 3', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_arming-connection-image-3')));

    // image 4
    $wp_customize->add_setting('nextevo_home_arming-connection-image-4');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_arming-connection-image-4-control', array('label' => 'Image 4', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_arming-connection-image-4')));

    // image 5
    $wp_customize->add_setting('nextevo_home_arming-connection-image-5');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_arming-connection-image-5-control', array('label' => 'Image 5', 'section' => 'nextevo_home_farming-connection-section', 'settings' => 'nextevo_home_arming-connection-image-5')));
}

add_action('customize_register', "nextevo_home_farming_connections");

function nextevo_home_quote($wp_customize) {

    $wp_customize->add_section('nextevo_home_quote-section', array('title' => 'Quote'));

    $wp_customize->add_setting('nextevo_home_quote-text', array('default' => 'As a company dedicated to leading the charge for a greener planet, we leave no waste behind in every step taken in our pledged responsibility to the environment.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_quote-text-control', array('label' => 'Text', 'section' => 'nextevo_home_quote-section', 'settings' => 'nextevo_home_quote-text', 'type' => 'textarea')));
}

add_action('customize_register', "nextevo_home_quote");

function nextevo_home_testimonials($wp_customize) {

    $wp_customize->add_section('nextevo_home_testimonials-section', array('title' => 'Testimonials'));

    $wp_customize->add_setting('nextevo_home_testimonials-headline', array('type' => 'theme_mod', 'default' => 'Hear What They Say'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-headline-control', array('label' => 'Headline', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-headline',)));

    // Item 1   
    $wp_customize->add_setting('nextevo_home_testimonials-item-1-brand-name', array('type' => 'theme_mod', 'default' => 'BRAND NAME 1'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-1-brand-name-control', array('label' => 'Item1 Brandname', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-1-brand-name')));

    $wp_customize->add_setting('nextevo_home_testimonials-item-1-text', array('type' => 'theme_mod', 'default' => 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Pellentesque Pellentesque Euismod Tincidunt. Donec Aliquam Non Ante Sed Aliquam. Phasellus Eu Pharetra Mi, Id Iaculis Lorem.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-1-text-control', array('label' => 'Item1 Text', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-1-text', 'type' => 'textarea')));

    $wp_customize->add_setting('nextevo_home_testimonials-item-1-name', array('type' => 'theme_mod', 'default' => 'NAME'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-1-name-control', array('label' => 'Item1 name', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-1-name')));

    // Item 2 
    $wp_customize->add_setting('nextevo_home_testimonials-item-2-brand-name', array('type' => 'theme_mod', 'default' => 'BRAND NAME 2'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-2-brand-name-control', array('label' => 'Item2 Brandname', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-2-brand-name')));

    $wp_customize->add_setting('nextevo_home_testimonials-item-2-text', array('type' => 'theme_mod', 'default' => 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Pellentesque Pellentesque Euismod Tincidunt. Donec Aliquam Non Ante Sed Aliquam. Phasellus Eu Pharetra Mi, Id Iaculis Lorem.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-2-text-control', array('label' => 'Item2 Text', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-2-text', 'type' => 'textarea')));

    $wp_customize->add_setting('nextevo_home_testimonials-item-2-name', array('type' => 'theme_mod', 'default' => 'NAME'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-2-name-control', array('label' => 'Item2 name', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-2-name')));

    // Item 3
    $wp_customize->add_setting('nextevo_home_testimonials-item-3-brand-name', array('type' => 'theme_mod', 'default' => 'BRAND NAME 3'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-3-brand-name-control', array('label' => 'Item3 Brandname', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-3-brand-name')));

    $wp_customize->add_setting('nextevo_home_testimonials-item-3-text', array('type' => 'theme_mod', 'default' => 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Pellentesque Pellentesque Euismod Tincidunt. Donec Aliquam Non Ante Sed Aliquam. Phasellus Eu Pharetra Mi, Id Iaculis Lorem.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-3-text-control', array('label' => 'Item3 Text', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-3-text', 'type' => 'textarea')));

    $wp_customize->add_setting('nextevo_home_testimonials-item-3-name', array('type' => 'theme_mod', 'default' => 'NAME'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-item-3-name-control', array('label' => 'Item3 name', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-item-3-name')));

    $wp_customize->add_setting('nextevo_home_testimonials-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_testimonials-link-control', array('label' => 'View All Testimonials Page', 'section' => 'nextevo_home_testimonials-section', 'settings' => 'nextevo_home_testimonials-link', 'type' => 'dropdown-pages')));

}

add_action('customize_register', "nextevo_home_testimonials");

function nextevo_view_collaborators($wp_customize) {

    $wp_customize->add_section('nextevo_home_collaborators-section', array('title' => 'Collaborators'));

    $wp_customize->add_setting('nextevo_home_collaborators-text', array('type' => 'theme_mod', 'default' => 'We remain dedicated to the ongoing acquisition of agricultural by-products and natural fibers across the region.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_collaborators-text-control', array('label' => 'Text', 'section' => 'nextevo_home_collaborators-section', 'settings' => 'nextevo_home_collaborators-text', 'type' => 'textarea')));

    $wp_customize->add_setting('nextevo_home_collaborators-headline', array('type' => 'theme_mod', 'default' => 'Join us in expanding our sustainable efforts.'));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nextevo_home_collaborators-headline-control', array('label' => 'Title', 'section' => 'nextevo_home_collaborators-section', 'settings' => 'nextevo_home_collaborators-headline',)));

    $wp_customize->add_setting('nextevo_home_collaborators-background-image');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'nextevo_home_collaborators-background-image-control', array('label' => 'Background Image', 'section' => 'nextevo_home_collaborators-section', 'settings' => 'nextevo_home_collaborators-background-image',)));

}

add_action('customize_register', "nextevo_view_collaborators");