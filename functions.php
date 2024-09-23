<?php
// connect CSS
function templates_files()
{
    wp_enqueue_style('templates_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'templates_files');

//
function templates_features()
{
    add_theme_support('title-tag');
}

add_theme_support('post-thumbnails'); // add featured image
add_post_type_support('my_product', 'thumbnail');
add_action('after_setup_theme', 'templates_features');



function create_custom_type()
{

    register_post_type('curation', array(
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Curation',

        ),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'show_in_rest' => true,
        'taxonomies'  => array('category', 'post_tag'),
        'supports' => array('editor', 'title', 'custom-fields', 'thumbnail') //enable gutenberg 
    ));

    register_post_type('creative', array(
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Creative',

        ),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'show_in_rest' => true,
        'taxonomies'  => array('category', 'post_tag'),
        'supports' => array('editor', 'title', 'custom-fields', 'thumbnail') //enable gutenberg 
    ));

    register_post_type('press', array(
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Press',

        ),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'show_in_rest' => true,
        'taxonomies'  => array('category', 'post_tag'),
        'supports' => array('editor', 'title', 'custom-fields', 'thumbnail') //enable gutenberg 
    ));

}

add_action('init', 'create_custom_type');

// Remove Categories and Tags
add_action('init', 'myprefix_remove_tax');
function myprefix_remove_tax() {
    register_taxonomy('category', array());
    register_taxonomy('post_tag', array());
}

// Get default core color palette from wp-includes/theme.json
$colorPalette = [];
if (class_exists('WP_Theme_JSON_Resolver')) {
    $settings = WP_Theme_JSON_Resolver::get_core_data()->get_settings();
    if (isset($settings['color']['palette']['core'])) {
        $colorPalette = $settings['color']['palette']['core'];
    }
}


function my_theme_add_new_features() {

    // Try to get the current theme default color palette
    $oldColorPalette = current( (array) get_theme_support( 'editor-color-palette' ) );

    // Get default core color palette from wp-includes/theme.json
    if (false === $oldColorPalette && class_exists('WP_Theme_JSON_Resolver')) {
        $settings = WP_Theme_JSON_Resolver::get_core_data()->get_settings();
        if (isset($settings['color']['palette']['default'])) {
            $oldColorPalette = $settings['color']['palette']['default']; // there is no need to apply translations to color names - they are translated already
        }
    }

    // The new colors we are going to add
    $newColorPalette = [
        [
            'name' => esc_attr__('Bright pink', 'myThemeLangDomain'),
            'slug' => 'brightpink',
            'color' => '#eb23db',
        ],
        [
            'name' => esc_attr__('Light Pink', 'myThemeLangDomain'),
            'slug' => 'lightpink',
            'color' => '#ffd8fc',
        ],
    ];

    // Merge the old and new color palettes
    if (!empty($oldColorPalette)) {
        $newColorPalette = array_merge($oldColorPalette, $newColorPalette);
    }

    // Apply the color palette containing the original colors and 2 new colors:
    add_theme_support( 'editor-color-palette', $newColorPalette);
}
add_action( 'after_setup_theme', 'my_theme_add_new_features' );







