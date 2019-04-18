<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'wope-default-style','wope-default-style','wope-responsive','flexslider-style','magnific-popup-style','wope-font-awesome','wope-font-pe-icon-7-stroke' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION


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

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_filter( 'gform_confirmation_anchor', '__return_false' );