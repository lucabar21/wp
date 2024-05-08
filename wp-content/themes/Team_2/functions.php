<?php

function theme_files()
{
    wp_enqueue_style('main-styles', get_theme_file_uri('/assets/main.css'));
}

add_action('wp_enqueue_scripts', 'theme_files');


/* Gutenberg CPT Start*/
/* Register WordPress Gutenberg CPT*/
function custom_posts()
{
    register_post_type('destinations', [
        /* WordPress CPT Options Start */
        'supports' => ['title', 'editor', 'author', 'comments', 'thumbnail'],
        'delete with_user' => false,
        'has_archive' => true,
        'public' => true,
        'menu icon' => 'dashicons-tickets-alt',
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Destinations',
            'edit_new_item' => 'Add New Destination',
            'edit_item' => 'Edit Destination',
            'all_items' => 'All Destinations',
            'singular_name' => 'Destination',
            'archives' => 'Destinations archive',
        ],
        'taxonomies' => ['category'],
    ]);
}
add_action('init', 'custom_posts');
/* Gutenberg CPT End*/
function custom_promo()
{
    register_post_type('promotions', [
        'supports' => ['title', 'editor', 'thumbnail'],
        'delete with_user' => false,
        'has_archive' => true,
        'public' => true,
        'menu icon' => 'dashicons-tickets-alt',
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Promotions',
            'edit_new_item' => 'Add New Promotion',
            'edit_item' => 'Edit Promotion',
            'all_items' => 'All Promotions',
            'singular_name' => 'Promotion',
            'archives' => 'Promotions archive',
        ],
        'taxonomies' => ['category'],
    ]);
}
add_action('init', 'custom_promo');

function theme_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    register_sidebar(
        array(
            'id' => 'primary',
            'name' => __('Primary Sidebar'),
            'description' => __('Sidebar destra'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
