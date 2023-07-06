<?php 
/* Blocks */
add_action("acf/init", function () {

    add_filter('block_categories', function ($categories, $post) {
        return array_merge(
            $categories,
            array(
                array(
                    'slug'  => 'trondheimdc',
                    'title' => 'TrondheimDC',
                ),
            )
        );
    }, 10, 2);

    acf_register_block_type([
        "name" => "button",
        "title" => "Button",
        "render_template" => "blocks/button.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "half-image-half-innerblock",
        "title" => "Half image half innerblock",
        "render_template" => "blocks/half-image-half-innerblock.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "fullwidth-purple-innerblock",
        "title" => "Fullwidth purple innerblock",
        "render_template" => "blocks/fullwidth-purple-innerblock.php",
        "mode" => "preview",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "cards-inbetween",
        "title" => "Cards inbetween",
        "render_template" => "blocks/cards-inbetween.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);


    acf_register_block_type([
        "name" => "full-width-innerblock",
        "title" => "Full width innerblock",
        "render_template" => "blocks/full-width-innerblock.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "image-inbetween",
        "title" => "Image inbetween",
        "render_template" => "blocks/image-inbetween.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "inbetween-innerblock",
        "title" => "Inbetween with innerblock",
        "render_template" => "blocks/inbetween-innerblock.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "list-speakers",
        "title" => "List speakers",
        "render_template" => "blocks/list-speakers.php",
        "mode" => "preview",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "filter-speakers",
        "title" => "Filter speakers",
        "render_template" => "blocks/filter-speakers.php",
        "mode" => "preview",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    acf_register_block_type([
        "name" => "program",
        "title" => "Program",
        "render_template" => "blocks/program.php",
        "mode" => "edit",
        "supports" => [
            "mode" => true,
            "align" => false,
            "jsx" => true,
        ],
        "category" => "trondheimdc"
    ]);

    // acf_register_block_type([
    //     "name" => "list-logos",
    //     "title" => "List logos",
    //     "render_template" => "blocks/list-logos.php",
    //     "mode" => "edit",
    //     "supports" => [
    //         "mode" => true,
    //         "align" => false,
    //         "jsx" => true,
    //     ],
    //     "category" => "trondheimdc"
    // ]);

    
});