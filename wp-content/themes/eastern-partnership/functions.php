<?php

function eastern_partnership_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );


    /**
     * Proper way to enqueue scripts and styles
     */
    function style_and_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/new_custom.css' );
        wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'style_and_scripts' );

    /**
     * Proper way to enqueue local fonts
     */
//    function add_local_fonts() {
//        wp_enqueue_style( 'local_web_fonts', get_stylesheet_directory_uri() . '/assets/fonts/fonts.css' );
//    }
//
//    add_action( 'enqueue_block_assets', 'add_local_fonts' );
}
add_action( 'after_setup_theme', 'eastern_partnership_setup' );


/**
 * Proper way to remove admin_login space [Remove margin-top: 32px !important]
 */
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


/**
 * Top banner post dynamic
 */
add_action('init', 'banner_post_type');
function banner_post_type() {
    $labels = array(
        'name'                  => _x( 'Banner', 'Top Banner type post', 'textdomain' ),
        'singular_name'         => _x( 'Banner Item', 'Banner type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Banner', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Banner', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Banner', 'textdomain' ),
        'new_item'              => __( 'New Banner', 'textdomain' ),
        'edit_item'             => __( 'Edit Banner', 'textdomain' ),
        'view_item'             => __( 'View Banner', 'textdomain' ),
        'all_items'             => __( 'All Banner', 'textdomain' ),
        'search_items'          => __( 'Search Banner', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Banner:', 'textdomain' ),
        'not_found'             => __( 'No Banner found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Banner found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Banner Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Banner image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Banner image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Banner image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Banner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'banner' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
    );
    register_post_type('banner', $args);
}

/**
 * Main objective post dynamic
 */
add_action('init', 'objective_post_type');
function objective_post_type() {
    $labels = array(
        'name'                  => _x( 'Objective', 'Main Objective type post', 'textdomain' ),
        'singular_name'         => _x( 'Objective Item', 'Objective type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Objective', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Objective', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Objective', 'textdomain' ),
        'new_item'              => __( 'New Objective', 'textdomain' ),
        'edit_item'             => __( 'Edit Objective', 'textdomain' ),
        'view_item'             => __( 'View Objective', 'textdomain' ),
        'all_items'             => __( 'All Objective', 'textdomain' ),
        'search_items'          => __( 'Search Objective', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Objective:', 'textdomain' ),
        'not_found'             => __( 'No Objective found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Objective found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Objective Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Objective image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Objective image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Objective image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Objective archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'objective' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    );
    register_post_type('objective', $args);
}

/**
 * Count post dynamic
 */
add_action('init', 'count_post_type');
function count_post_type() {
    $labels = array(
        'name'                  => _x( 'Count', 'Main Count type post', 'textdomain' ),
        'singular_name'         => _x( 'Count Item', 'Count type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Count', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Count', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Count', 'textdomain' ),
        'new_item'              => __( 'New Count', 'textdomain' ),
        'edit_item'             => __( 'Edit Count', 'textdomain' ),
        'view_item'             => __( 'View Count', 'textdomain' ),
        'all_items'             => __( 'All Count', 'textdomain' ),
        'search_items'          => __( 'Search Count', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Count:', 'textdomain' ),
        'not_found'             => __( 'No Count found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Count found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Count Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Count image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Count image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Count image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Count archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'count' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
    );
    register_post_type('count', $args);
}

/**
 * Map Image post dynamic
 */
add_action('init', 'map_post_type');
function map_post_type() {
    $labels = array(
        'name'                  => _x( 'Map', 'Main Map type post', 'textdomain' ),
        'singular_name'         => _x( 'Map Item', 'Map type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Map', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Map', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Map', 'textdomain' ),
        'new_item'              => __( 'New Map', 'textdomain' ),
        'edit_item'             => __( 'Edit Map', 'textdomain' ),
        'view_item'             => __( 'View Map', 'textdomain' ),
        'all_items'             => __( 'All Map', 'textdomain' ),
        'search_items'          => __( 'Search Map', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Map:', 'textdomain' ),
        'not_found'             => __( 'No Map found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Map found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Map Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Map image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Map image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Map image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Map archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'map' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ),
    );
    register_post_type('map', $args);
}

/**
 * About forum post dynamic
 */
add_action('init', 'forum_post_type');
function forum_post_type() {
    $labels = array(
        'name'                  => _x( 'Forum', 'Main Forum type post', 'textdomain' ),
        'singular_name'         => _x( 'Forum Item', 'Forum type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Forum', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Forum', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Forum', 'textdomain' ),
        'new_item'              => __( 'New Forum', 'textdomain' ),
        'edit_item'             => __( 'Edit Forum', 'textdomain' ),
        'view_item'             => __( 'View Forum', 'textdomain' ),
        'all_items'             => __( 'All Forum', 'textdomain' ),
        'search_items'          => __( 'Search Forum', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Forum:', 'textdomain' ),
        'not_found'             => __( 'No Forum found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Forum found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Forum Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Forum image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Forum image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Forum image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Forum archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'forum' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
    );
    register_post_type('forum', $args);
}

/**
 * About Lithuania post dynamic
 */
add_action('init', 'about_lithuania_post_type');
function about_lithuania_post_type() {
    $labels = array(
        'name'                  => _x( 'About Lithuania', 'Main Lithuania type post', 'textdomain' ),
        'singular_name'         => _x( 'Lithuania Item', 'Lithuania type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Lithuania', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Lithuania', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New Info', 'textdomain' ),
        'add_new_item'          => __( 'Add New Info', 'textdomain' ),
        'new_item'              => __( 'New Lithuania', 'textdomain' ),
        'edit_item'             => __( 'Edit Lithuania', 'textdomain' ),
        'view_item'             => __( 'View Lithuania', 'textdomain' ),
        'all_items'             => __( 'All Info', 'textdomain' ),
        'search_items'          => __( 'Search Lithuania', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Lithuania:', 'textdomain' ),
        'not_found'             => __( 'No Lithuania found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Lithuania found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Lithuania Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Lithuania image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Lithuania image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Lithuania image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Lithuania archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'about_lithuania' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
    );
    register_post_type('about_lithuania', $args);
}

/**
 * About Lithuania post dynamic
 */
add_action('init', 'moderator_post_type');
function moderator_post_type() {
    $labels = array(
        'name'                  => _x( 'Moderator', 'Main Moderator type post', 'textdomain' ),
        'singular_name'         => _x( 'Moderator Item', 'Moderator type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Moderator', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Moderator', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Moderator', 'textdomain' ),
        'edit_item'             => __( 'Edit Moderator', 'textdomain' ),
        'view_item'             => __( 'View Moderator', 'textdomain' ),
        'all_items'             => __( 'Moderators', 'textdomain' ),
        'search_items'          => __( 'Search Moderator', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Moderator:', 'textdomain' ),
        'not_found'             => __( 'No Moderator found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Moderator found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Moderator Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Moderator image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Moderator image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Moderator image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Moderator archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'moderator' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'custom-fields', 'thumbnail', ),
    );
    register_post_type('moderator', $args);
}

/**
 * Organiser post dynamic
 */
add_action('init', 'organiser_post_type');
function organiser_post_type() {
    $labels = array(
        'name'                  => _x( 'Organiser', 'Main Organiser type post', 'textdomain' ),
        'singular_name'         => _x( 'Organiser Item', 'Lithuania type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Organiser', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Organiser', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New ', 'textdomain' ),
        'add_new_item'          => __( 'Add New ', 'textdomain' ),
        'new_item'              => __( 'New Organiser', 'textdomain' ),
        'edit_item'             => __( 'Edit Organiser', 'textdomain' ),
        'view_item'             => __( 'View Organiser', 'textdomain' ),
        'all_items'             => __( 'All Organiser', 'textdomain' ),
        'search_items'          => __( 'Search Organiser', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Organiser:', 'textdomain' ),
        'not_found'             => __( 'No Organiser found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Organiser found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Organiser Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Organiser image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Organiser image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Organiser image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Organiser archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'organiser' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ),
    );
    register_post_type('organiser', $args);
}

/**
 * Organiser post dynamic
 */
add_action('init', 'partners_post_type');
function partners_post_type() {
    $labels = array(
        'name'                  => _x( 'Partners', 'Main Organiser type post', 'textdomain' ),
        'singular_name'         => _x( 'Partners Item', 'Lithuania type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Partners', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Partners', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New ', 'textdomain' ),
        'add_new_item'          => __( 'Add New ', 'textdomain' ),
        'new_item'              => __( 'New Partners', 'textdomain' ),
        'edit_item'             => __( 'Edit Partners', 'textdomain' ),
        'view_item'             => __( 'View Partners', 'textdomain' ),
        'all_items'             => __( 'All Partners', 'textdomain' ),
        'search_items'          => __( 'Search Partners', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Partners:', 'textdomain' ),
        'not_found'             => __( 'No Partners found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Partners found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Partners Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Partners image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Partners image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Partners image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Partners archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partners' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ),
    );
    register_post_type('partners', $args);
}

/**
 * Footer post dynamic
 */
add_action('init', 'footer_post_type');
function footer_post_type() {
    $labels = array(
        'name'                  => _x( 'Footer', 'Main Footer type post', 'textdomain' ),
        'singular_name'         => _x( 'Footer Item', 'Footer type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Footer', 'Footer Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Footer', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New ', 'textdomain' ),
        'add_new_item'          => __( 'Add New ', 'textdomain' ),
        'new_item'              => __( 'New Footer', 'textdomain' ),
        'edit_item'             => __( 'Edit Footer', 'textdomain' ),
        'view_item'             => __( 'View Footer', 'textdomain' ),
        'all_items'             => __( 'All Footer', 'textdomain' ),
        'search_items'          => __( 'Search Footer', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Footer:', 'textdomain' ),
        'not_found'             => __( 'No Footer found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Footer found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Footer Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Footer image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Footer image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Footer image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Footer archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'footer' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'custom-fields' ),
    );
    register_post_type('footer', $args);
}




