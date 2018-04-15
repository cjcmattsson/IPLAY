<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('footer', [
        'has_archive' => true,
        'labels' => [
            'edit_item' => __('Edit Footer'),
            'name' => __('Footer'),
            'singular_name' => __('Footer'),
        ],
        'menu_icon' => 'dashicons-sos',
        'menu_position' => 20,
        'public' => true,
    ]);
});
