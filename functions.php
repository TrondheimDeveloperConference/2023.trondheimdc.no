<?php

add_theme_support("title-tag");
add_theme_support("post-thumbnails");
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action("init", "theme_init");

function theme_init()
{
    register_nav_menu("main", "Hovedmeny");
    register_nav_menu("secondary", "Sekundærmeny");

     register_post_type("speakers", array(
        'show_in_rest' => true,
        'supports' => array ('title', 'editor'),
        'has_archive' => false,
        'public' => true,
        'menu_icon' => 'dashicons-admin-users',
        'labels' => array(
            'name' => "Speakers",
            'edit_item' => 'Rediger',
            'all_items' => 'Alle',
            'singular_name' => "Speaker"
        )
    ));

    register_taxonomy('speakers-category', ['speakers'], [
        'label' => "Category",
        'hierarchical' => true,
        'rewrite' => array('slug' => 'speakers/category', 'with_front' => false),
        'show_admin_column' => true,
        'show_in_rest' => true
    ]);
}

function enqueue_scripts()
{
    wp_enqueue_script("jquery");
}

function printr($t)
{
    echo "<pre>";
    print_r($t);
    echo "</pre>";
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page("Valg");
}

require_once("acf.php");

add_filter("allowed_block_types", function ($allowed_blocks) {
    return [
        "acf/list-logos",
        "acf/program",
        "acf/filter-speakers",
        "acf/list-speakers",
        "acf/image-inbetween",
        "acf/full-width-innerblock",
        "acf/cards-inbetween",
        "acf/fullwidth-purple-innerblock",
        "acf/button",
        "acf/half-image-half-innerblock",
        "acf/inbetween-innerblock",

        "core/list-item",
        "core/column",
        "core/columns",
        "core/embed",
        "core/gallery",
        "core/heading",
        "core/html",
        "core/image",
        "core/list",
        "core/paragraph",
        "core/quote",
        "core/table",
        "core/video",
        "core/spacer",
        "core/shortcode",
    ];
});