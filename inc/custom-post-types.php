<?php

function cptui_register_my_cpts() {

/**
 * Post Type: Reviews.
 */

$labels = [
    "name" => __( "Reviews", "wp-bootstrap-starter" ),
    "singular_name" => __( "Review", "wp-bootstrap-starter" ),
    "menu_name" => __( "My Reviews", "wp-bootstrap-starter" ),
    "all_items" => __( "All Reviews", "wp-bootstrap-starter" ),
    "add_new" => __( "Add new", "wp-bootstrap-starter" ),
    "add_new_item" => __( "Add new Review", "wp-bootstrap-starter" ),
    "edit_item" => __( "Edit Review", "wp-bootstrap-starter" ),
    "new_item" => __( "New Review", "wp-bootstrap-starter" ),
    "view_item" => __( "View Review", "wp-bootstrap-starter" ),
    "view_items" => __( "View Reviews", "wp-bootstrap-starter" ),
    "search_items" => __( "Search Reviews", "wp-bootstrap-starter" ),
    "not_found" => __( "No Reviews found", "wp-bootstrap-starter" ),
    "not_found_in_trash" => __( "No Reviews found in trash", "wp-bootstrap-starter" ),
    "parent" => __( "Parent Review:", "wp-bootstrap-starter" ),
    "featured_image" => __( "Featured image for this Review", "wp-bootstrap-starter" ),
    "set_featured_image" => __( "Set featured image for this Review", "wp-bootstrap-starter" ),
    "remove_featured_image" => __( "Remove featured image for this Review", "wp-bootstrap-starter" ),
    "use_featured_image" => __( "Use as featured image for this Review", "wp-bootstrap-starter" ),
    "archives" => __( "Review archives", "wp-bootstrap-starter" ),
    "insert_into_item" => __( "Insert into Review", "wp-bootstrap-starter" ),
    "uploaded_to_this_item" => __( "Upload to this Review", "wp-bootstrap-starter" ),
    "filter_items_list" => __( "Filter Reviews list", "wp-bootstrap-starter" ),
    "items_list_navigation" => __( "Reviews list navigation", "wp-bootstrap-starter" ),
    "items_list" => __( "Reviews list", "wp-bootstrap-starter" ),
    "attributes" => __( "Reviews attributes", "wp-bootstrap-starter" ),
    "name_admin_bar" => __( "Review", "wp-bootstrap-starter" ),
    "item_published" => __( "Review published", "wp-bootstrap-starter" ),
    "item_published_privately" => __( "Review published privately.", "wp-bootstrap-starter" ),
    "item_reverted_to_draft" => __( "Review reverted to draft.", "wp-bootstrap-starter" ),
    "item_scheduled" => __( "Review scheduled", "wp-bootstrap-starter" ),
    "item_updated" => __( "Review updated.", "wp-bootstrap-starter" ),
    "parent_item_colon" => __( "Parent Review:", "wp-bootstrap-starter" ),
];

$args = [
    "label" => __( "Reviews", "wp-bootstrap-starter" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "reviews", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-star-filled",
    "supports" => [ "title", "editor", "thumbnail" ],
];

register_post_type( "reviews", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
