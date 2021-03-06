<?php
/**
 * X5: Theme specific functionalities
 *
 * Do not close any of the php files included with ?> closing tag!
 *
 * @package WordPress
 * @subpackage X5
 */
define( 'X5', 'x5' ); // used in translation strings

function x5_load_features() {

	$features = scandir( dirname( __FILE__ ) . '/features/' );

	foreach ( $features as $feature ) {

		if ( current_theme_supports( $feature ) ) {
			require_once dirname( __FILE__ ) . '/features/' . $feature . '/' . $feature . '.php';
		}
	}
}

add_action( 'init', 'x5_load_features' );

add_theme_support( 'seo-title' );
add_theme_support( 'threaded-comments' );
add_theme_support( 'comments' );

// add two navigation menus
add_theme_support( 'menus', array(
	'navigation-top' => __( 'Top Navigation Menu' ),
	'navigation-foot' => __( 'Footer Navigation Menu' ),
) );

// add 3 default sidebars
add_theme_support( 'sidebars', array(
	array(),
	array(),
	array(),
) );

add_theme_support( 'images', array(
	'400x500' => array(
	'width' => '400',
	'height' => '500',
	'crop' => true,
	),
) );

add_theme_support( 'cpt', array(
	// team post
	'x5-team' => array(
	'singular' => 'Team Member',
	'plural' => 'Team Members',
	'publicly_queryable' => true,
	'rewrite' => array( 'slug' => 'team', 'with_front' => true ),
	),
) );

add_theme_support( 'custom-tax', array(
	// taxonomy like category
	'x5-team-tag' => array(
	'singular' => 'Member Category',
	'plural' => 'Member Categories',
	'rewrite' => array( 'slug' => 'category', 'with_front' => false ),
	'posts' => array( 'x5-team' ),
	),
) );

add_theme_support( 'settings', array(
	'opt1' => array(
	'type' => 'text',
	'name' => 'fb',
	'desc' => 'Facebook link',
	),
	'opt2' => array(
	'type' => 'dropdown_pages',
	'name' => 'dropdown-pages',
	'desc' => 'Testing dropdown pages',
	),
	'opt3' => array(
	'type' => 'wp_editor',
	'name' => 'wp-editor',
	'desc' => 'Testing WP Editor',
	),
) );

// add plugins script to Footer
wp_enqueue_script(
    'plugins',                                 //slug
    get_template_directory_uri() . '/js/plugins.min.js', //path
    array('jquery'),                                      //dependencies
    false,                                                //version
    false                                                  //footer
);

// add main script to Footer
wp_enqueue_script(
    'main',                                 //slug
    get_template_directory_uri() . '/js/main.min.js?v14', //path
    array('jquery'),                                      //dependencies
    false,                                                //version
    true                                                  //footer
);

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'slider-thumb', 300, 200, true );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
	 return array_merge( $sizes, array(
			 'slider-thumb' => __( 'Slider thumb' ),
	 ) );
}

function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');