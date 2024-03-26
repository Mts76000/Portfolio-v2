<?php
/**
 * Register a custom post type called "skill".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_skill_init() {
    $labels = array(
        'name'                  => _x( 'skills', 'Post type general name', 'portfolio' ),
        'singular_name'         => _x( 'skill', 'Post type singular name', 'portfolio' ),
        'menu_name'             => _x( 'skills', 'Admin Menu text', 'portfolio' ),
        'name_admin_bar'        => _x( 'skill', 'Add New on Toolbar', 'portfolio' ),
        'add_new'               => __( 'Add New', 'portfolio' ),
        'add_new_item'          => __( 'Add New skill', 'portfolio' ),
        'new_item'              => __( 'New skill', 'portfolio' ),
        'edit_item'             => __( 'Edit skill', 'portfolio' ),
        'view_item'             => __( 'View skill', 'portfolio' ),
        'all_items'             => __( 'All skills', 'portfolio' ),
        'search_items'          => __( 'Search skills', 'portfolio' ),
        'parent_item_colon'     => __( 'Parent skills:', 'portfolio' ),
        'not_found'             => __( 'No skills found.', 'portfolio' ),
        'not_found_in_trash'    => __( 'No skills found in Trash.', 'portfolio' ),
        'featured_image'        => _x( 'skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'portfolio' ),
        'archives'              => _x( 'skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'portfolio' ),
        'insert_into_item'      => _x( 'Insert into skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'portfolio' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'portfolio' ),
        'filter_items_list'     => _x( 'Filter skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'portfolio' ),
        'items_list_navigation' => _x( 'skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'portfolio' ),
        'items_list'            => _x( 'skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'portfolio' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'skill' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title','custom-fields' ),
    );

    register_post_type( 'skill', $args );
}

add_action( 'init', 'wpdocs_codex_skill_init' );