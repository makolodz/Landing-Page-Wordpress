<?php


function create_custom_post() {
    register_post_type('events',
        array(
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Events',
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
        )
    );
}
function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => __('Menu principal'),
    ));
}
add_action('init', 'register_my_menus');
add_action('init', 'create_custom_post');