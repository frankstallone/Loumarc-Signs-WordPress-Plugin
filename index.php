<?php
/**
 * Loumarc Signs Custom WP Plugin
 *
 * @package           PluginPackage
 * @author            Frank Stallone
 * @copyright         2021 Hoverboard Media
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Loumarc Signs Custom WP Plugin
 * Description:       Asset, Custom Post Types and Taxonomy Management for Loumarc Signs
 * Version:           1.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Frank Stallone
 * Author URI:        https://stallone.dev
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Custom Post Types
 * 
 */

// Register Signage Post Type
function signage_post_type() {

	$labels = array(
		'name'                  => 'Signs',
		'singular_name'         => 'Sign',
		'menu_name'             => 'Signage',
		'name_admin_bar'        => 'Signage',
		'archives'              => 'Signage Archives',
		'attributes'            => 'Signage Attributes',
		'parent_item_colon'     => 'Parent Sign:',
		'all_items'             => 'All Signs',
		'add_new_item'          => 'Add New Sign',
		'add_new'               => 'Add New',
		'new_item'              => 'New Sign',
		'edit_item'             => 'Edit Sign',
		'update_item'           => 'Update Sign',
		'view_item'             => 'View Sign',
		'view_items'            => 'View Sign',
		'search_items'          => 'Search Signs',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Signs list',
		'items_list_navigation' => 'Signs list navigation',
		'filter_items_list'     => 'Filter signs list',
	);
	$args = array(
		'label'                 => 'Sign',
		'description'           => 'Loumarc Sign\'s Signage',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'business_goals', 'types_of_business' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'signage', $args );

}
add_action( 'init', 'signage_post_type', 0 );

/**
 * Custom Taxonomies
 * 
 */

// Register Business Goals Taxonomy
function business_goals() {

	$labels = array(
		'name'                       => 'Business Goals',
		'singular_name'              => 'Business Goal',
		'menu_name'                  => 'Business Goals',
		'all_items'                  => 'All Business Goals',
		'parent_item'                => 'Parent Business Goal',
		'parent_item_colon'          => 'Parent Business Goal:',
		'new_item_name'              => 'New Business Goal',
		'add_new_item'               => 'Add Business Goal',
		'edit_item'                  => 'Edit Business Goal',
		'update_item'                => 'Update Business Goal',
		'view_item'                  => 'View Business Goal',
		'separate_items_with_commas' => 'Separate Business Goals with commas',
		'add_or_remove_items'        => 'Add or remove Business Goals',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Business Goals',
		'search_items'               => 'Search Business Goals',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Business Goals list',
		'items_list_navigation'      => 'Business Goals list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'business_goals', array( 'signage' ), $args );

}
add_action( 'init', 'business_goals', 0 );

// Register Types of Business Taxonomy
function types_of_business() {

	$labels = array(
		'name'                       => 'Types of Business',
		'singular_name'              => 'Type of Business',
		'menu_name'                  => 'Types of Business',
		'all_items'                  => 'All Types of Business',
		'parent_item'                => 'Parent Business Type',
		'parent_item_colon'          => 'Parent Business Type:',
		'new_item_name'              => 'New Type of Business',
		'add_new_item'               => 'Add Type of Business',
		'edit_item'                  => 'Edit Type of Business',
		'update_item'                => 'Update Type of Business',
		'view_item'                  => 'View Type of Business',
		'separate_items_with_commas' => 'Separate Types of Business with commas',
		'add_or_remove_items'        => 'Add or remove Types of Business',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Types of Business',
		'search_items'               => 'Search Types of Business',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Type of Business list',
		'items_list_navigation'      => 'Type of Business list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'types_of_business', array( 'signage' ), $args );

}
add_action( 'init', 'types_of_business', 0 );