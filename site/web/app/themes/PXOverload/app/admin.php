<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Add ACF options page
 */
add_action('init', function () {
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    acf_add_options_page([
        'page_title'    => 'Sage',
        'menu_title'    => 'Sage',
        'menu_slug'     => 'sage',
        'capability'    => 'edit_posts',
        'parent_slug'   => '',
        'position'      => 2, // Below 'Dashboard' menu item
        'icon_url'      => 'dashicons-admin-generic'
    ]);
    acf_add_options_sub_page([
        'page_title'    => 'App Settings',
        'menu_title'    => 'App Settings',
        'menu_slug'     => 'settings',
        'capability'    => 'manage_options',
        'parent_slug'   => 'sage'
    ]);
});
