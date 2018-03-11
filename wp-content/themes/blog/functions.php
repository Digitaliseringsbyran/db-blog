<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/


// Add Menu Support
add_theme_support('menus');

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');

add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('db-medium', 600, 400, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');


function blog_scripts() {

    wp_deregister_script('jquery');
    wp_register_script('vh-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('vh-jquery');

    wp_register_script('app', get_template_directory_uri() . "/assets/dist/js/app.js");
    wp_enqueue_script('app');

    wp_register_script('lazysizes', "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.0.1/lazysizes.min.js");
    wp_enqueue_script('lazysizes');

    wp_register_script('flickity', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js");
    wp_enqueue_script('flickity');

    wp_register_script('scroll-reveal', "https://unpkg.com/scrollreveal/dist/scrollreveal.min.js");
    wp_enqueue_script('scroll-reveal');


    wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri() . '/assets/dist/css/main.min.css' );
    wp_enqueue_style( 'stylesheet', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );


    
}

add_action( 'wp_enqueue_scripts', 'blog_scripts', 20 );


?>
