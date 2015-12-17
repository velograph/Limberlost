<?php

function create_trips_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Trips', 'Post Type General Name', 'limberlost' ),
		'singular_name'         => _x( 'Trip', 'Post Type Singular Name', 'limberlost' ),
		'menu_name'             => __( 'Trips', 'limberlost' ),
		'name_admin_bar'        => __( 'Trip', 'limberlost' ),
		'archives'              => __( 'Trip Archives', 'limberlost' ),
		'parent_item_colon'     => __( 'Parent Trip:', 'limberlost' ),
		'all_items'             => __( 'All Trips', 'limberlost' ),
		'add_new_item'          => __( 'Add New Trip', 'limberlost' ),
		'add_new'               => __( 'Add New Trip', 'limberlost' ),
		'new_item'              => __( 'New Trip', 'limberlost' ),
		'edit_item'             => __( 'Edit Trip', 'limberlost' ),
		'update_item'           => __( 'Update Trip', 'limberlost' ),
		'view_item'             => __( 'View Trip', 'limberlost' ),
		'search_items'          => __( 'Search Trip', 'limberlost' ),
		'not_found'             => __( 'Not found', 'limberlost' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'limberlost' ),
		'featured_image'        => __( 'Featured Image', 'limberlost' ),
		'set_featured_image'    => __( 'Set featured image', 'limberlost' ),
		'remove_featured_image' => __( 'Remove featured image', 'limberlost' ),
		'use_featured_image'    => __( 'Use as featured image', 'limberlost' ),
		'insert_into_item'      => __( 'Insert into Trip', 'limberlost' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Trip', 'limberlost' ),
		'items_list'            => __( 'Items list', 'limberlost' ),
		'items_list_navigation' => __( 'Items list navigation', 'limberlost' ),
		'filter_items_list'     => __( 'Filter items list', 'limberlost' ),
	);
	$args = array(
		'label'                 => __( 'Trip', 'limberlost' ),
		'description'           => __( 'Exploration Trips', 'limberlost' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'trip', $args );

}
add_action( 'init', 'create_trips_custom_post_type', 0 );

function create_routes_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Routes', 'Post Type General Name', 'limberlost' ),
		'singular_name'         => _x( 'Route', 'Post Type Singular Name', 'limberlost' ),
		'menu_name'             => __( 'Routes', 'limberlost' ),
		'name_admin_bar'        => __( 'Route', 'limberlost' ),
		'archives'              => __( 'Route Archives', 'limberlost' ),
		'parent_item_colon'     => __( 'Parent Route:', 'limberlost' ),
		'all_items'             => __( 'All Routes', 'limberlost' ),
		'add_new_item'          => __( 'Add New Route', 'limberlost' ),
		'add_new'               => __( 'Add New Route', 'limberlost' ),
		'new_item'              => __( 'New Route', 'limberlost' ),
		'edit_item'             => __( 'Edit Route', 'limberlost' ),
		'update_item'           => __( 'Update Route', 'limberlost' ),
		'view_item'             => __( 'View Route', 'limberlost' ),
		'search_items'          => __( 'Search Route', 'limberlost' ),
		'not_found'             => __( 'Not found', 'limberlost' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'limberlost' ),
		'featured_image'        => __( 'Featured Image', 'limberlost' ),
		'set_featured_image'    => __( 'Set featured image', 'limberlost' ),
		'remove_featured_image' => __( 'Remove featured image', 'limberlost' ),
		'use_featured_image'    => __( 'Use as featured image', 'limberlost' ),
		'insert_into_item'      => __( 'Insert into Route', 'limberlost' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Route', 'limberlost' ),
		'items_list'            => __( 'Items list', 'limberlost' ),
		'items_list_navigation' => __( 'Items list navigation', 'limberlost' ),
		'filter_items_list'     => __( 'Filter items list', 'limberlost' ),
	);
	$args = array(
		'label'                 => __( 'Route', 'limberlost' ),
		'description'           => __( 'Exploration Routes', 'limberlost' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'route', $args );

}
add_action( 'init', 'create_routes_custom_post_type', 0 );

function create_partnership_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Partnerships', 'Post Type General Name', 'limberlost' ),
		'singular_name'         => _x( 'Partnership', 'Post Type Singular Name', 'limberlost' ),
		'menu_name'             => __( 'Partnerships', 'limberlost' ),
		'name_admin_bar'        => __( 'Partnership', 'limberlost' ),
		'archives'              => __( 'Partnership Archives', 'limberlost' ),
		'parent_item_colon'     => __( 'Parent Partnership:', 'limberlost' ),
		'all_items'             => __( 'All Partnerships', 'limberlost' ),
		'add_new_item'          => __( 'Add New Partnership', 'limberlost' ),
		'add_new'               => __( 'Add New Partnership', 'limberlost' ),
		'new_item'              => __( 'New Partnership', 'limberlost' ),
		'edit_item'             => __( 'Edit Partnership', 'limberlost' ),
		'update_item'           => __( 'Update Partnership', 'limberlost' ),
		'view_item'             => __( 'View Partnership', 'limberlost' ),
		'search_items'          => __( 'Search Partnership', 'limberlost' ),
		'not_found'             => __( 'Not found', 'limberlost' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'limberlost' ),
		'featured_image'        => __( 'Featured Image', 'limberlost' ),
		'set_featured_image'    => __( 'Set featured image', 'limberlost' ),
		'remove_featured_image' => __( 'Remove featured image', 'limberlost' ),
		'use_featured_image'    => __( 'Use as featured image', 'limberlost' ),
		'insert_into_item'      => __( 'Insert into Partnership', 'limberlost' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Partnership', 'limberlost' ),
		'items_list'            => __( 'Items list', 'limberlost' ),
		'items_list_navigation' => __( 'Items list navigation', 'limberlost' ),
		'filter_items_list'     => __( 'Filter items list', 'limberlost' ),
	);
	$args = array(
		'label'                 => __( 'Partnership', 'limberlost' ),
		'description'           => __( 'Partnerships', 'limberlost' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Partnership', $args );

}
add_action( 'init', 'create_partnership_custom_post_type', 0 );

?>
