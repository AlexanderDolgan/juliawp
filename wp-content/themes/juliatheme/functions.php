<?php

// JS detection
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/*Enqueue scripts and styles.*/

function theme_styles() {
	/* Core CSS -->*/
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );

// Navigation Menus
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

/**
 * Display the post content. Optinally allows post ID to be passed
 * @uses the_content()
 *
 * @param int $id Optional. Post ID.
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 */

function show_the_content_by_id( $post_id = 0, $more_link_text = null, $stripteaser = false ) {
	global $post;
	$post = &get_post( $post_id );
	setup_postdata( $post, $more_link_text, $stripteaser );
	the_content();
	wp_reset_postdata( $post );
}

function show_the_content_by_id_with_title( $post_id = 0, $more_link_text = null, $stripteaser = false ) {
	global $post;
	$post = &get_post( $post_id );
	setup_postdata( $post, $more_link_text, $stripteaser );
	?>
	<h1><?php the_title(); ?><h1><?php
	the_content();
	wp_reset_postdata( $post );
}

/*Add theme support- theme format*/

function custom_theme_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'link', 'quote' ) );
	// add featured image support
	add_theme_support( 'post-thumbnails' );
	//add search form support
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


// add Widget Locations

function add_Widgets_Init() {

	register_sidebar( array(
		'name' => 'social',
		'id'   => 'sidebar1',
    ));
}

add_action( 'widgets_init', 'add_Widgets_Init' );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );

//remove_filter('term_description','wpautop'); //echo the string with <p> tags around the paragraphs
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );

?>