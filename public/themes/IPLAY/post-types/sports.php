<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('sports', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Sport'),
            'edit_item' => __('Edit Sport'),
            'name' => __('Sports'),
            'search_items' => __('Search Sport'),
            'singular_name' => __('Sport'),
        ],
        'menu_icon' => 'dashicons-sos',
        'menu_position' => 20,
        'public' => true,
    ]);
});
