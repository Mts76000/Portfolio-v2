<?php
/**
 * Register a custom post type called "work".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_work_init() {
    $labels = array(
        'name'                  => _x( 'works', 'Post type general name', 'portfolio' ),
        'singular_name'         => _x( 'work', 'Post type singular name', 'portfolio' ),
        'menu_name'             => _x( 'works', 'Admin Menu text', 'portfolio' ),
        'name_admin_bar'        => _x( 'work', 'Add New on Toolbar', 'portfolio' ),
        'add_new'               => __( 'Add New', 'portfolio' ),
        'add_new_item'          => __( 'Add New work', 'portfolio' ),
        'new_item'              => __( 'New work', 'portfolio' ),
        'edit_item'             => __( 'Edit work', 'portfolio' ),
        'view_item'             => __( 'View work', 'portfolio' ),
        'all_items'             => __( 'All works', 'portfolio' ),
        'search_items'          => __( 'Search works', 'portfolio' ),
        'parent_item_colon'     => __( 'Parent works:', 'portfolio' ),
        'not_found'             => __( 'No works found.', 'portfolio' ),
        'not_found_in_trash'    => __( 'No works found in Trash.', 'portfolio' ),
        'featured_image'        => _x( 'work Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'archives'              => _x( 'work archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'portfolio' ),
        'insert_into_item'      => _x( 'Insert into work', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'portfolio' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this work', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'portfolio' ),
        'filter_items_list'     => _x( 'Filter works list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'portfolio' ),
        'items_list_navigation' => _x( 'works list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'portfolio' ),
        'items_list'            => _x( 'works list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'portfolio' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-index-card',
        'supports'           => array( 'title', 'excerpt','editor','custom-fields' ),
    );

    register_post_type( 'work', $args );
}

add_action( 'init', 'wpdocs_codex_work_init' );