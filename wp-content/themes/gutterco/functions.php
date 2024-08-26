<?php

if (!function_exists('soggy_bottoms_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function soggy_bottoms_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Add support for custom logo.
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));

        // Register nav menus.
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'soggy-bottoms'),
        ));

        // Switch default core markup to output valid HTML5.
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
    }
endif;
add_action('after_setup_theme', 'soggy_bottoms_setup');

/**
 * Enqueue scripts and styles.
 */
function soggy_bottoms_styles() {
    wp_enqueue_style('soggy-bottoms-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.min.css', array(), filemtime(get_stylesheet_directory() . '/style.min.css'));
}


/* When wp runs wp_enqueue_scripts also run soggy_bottoms_scripts */
add_action('wp_enqueue_scripts', 'soggy_bottoms_styles');

/* Enqueue footer scripts (where bool=True) */
function soggy_bottoms_scripts() {
    wp_enqueue_script('soggy-bottoms-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), wp_get_theme()->get('Version'), true);
}

/* When wp runs wp_enqueue_scripts also run soggy_bottoms_scripts */
add_action('wp_enqueue_scripts', 'soggy_bottoms_scripts');

function soggy_bottoms_menus(){

    $locations = array(
        'primary' => "Top Nav Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init','soggy_bottoms_menus');

