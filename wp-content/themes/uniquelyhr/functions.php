<?php
if ( !isset( $redux_config ) && file_exists( dirname( __FILE__ ) . '/framework/config/framework-config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/framework/config/framework-config.php' );
}
	function uniquelyhr_queue_assets() {
		wp_dequeue_style( 'style' );
		wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css' );
		wp_enqueue_style( 'uniquelyhr-style',  get_stylesheet_directory_uri() .'/style.css' );

	}
	add_action( 'wp_enqueue_scripts', 'uniquelyhr_queue_assets' );

if ( ! function_exists( 'team_taxonomy' ) ) {

// Register Custom Taxonomy
function team_taxonomy() {

	$labels = array(
		'name'                       => 'Team Groups',
		'singular_name'              => 'Team Group',
		'menu_name'                  => 'Team Groups',
		'all_items'                  => 'All Team Groups',
		'parent_item'                => 'Parent Team Group',
		'parent_item_colon'          => 'Parent Team Group:',
		'new_item_name'              => 'New Team Group',
		'add_new_item'               => 'Add Team Group',
		'edit_item'                  => 'Edit Team Group',
		'update_item'                => 'Update Team Group',
		'view_item'                  => 'View Team Group',
		'separate_items_with_commas' => 'Separate Team Group with commas',
		'add_or_remove_items'        => 'Add or remove Team Group',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Team Group',
		'search_items'               => 'Search Team Group',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Team Group',
		'items_list'                 => 'Team Group list',
		'items_list_navigation'      => 'Team Group list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	register_taxonomy( 'teamgroup', array( 'team' ), $args );

}
add_action( 'init', 'team_taxonomy', 0 );

}

// Register Sidebars
function footer_sidebars() {

	$args = array(
		'id'            => 'footer_left',
		'name'          => 'Footer Left',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_right',
		'name'          => 'Footer Right',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'footer_sidebars' );