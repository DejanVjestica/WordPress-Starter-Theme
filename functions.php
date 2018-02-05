<?php
/*
	================================
	Include scripts
	================================
*/
function dejan_script_enqueue() {
	//css
	wp_enqueue_style('screen', get_template_directory_uri() . '/stylesheets/screen.css' , array(), '1.0.0', 'all');
	wp_enqueue_style('screen', get_template_directory_uri() . '/stylesheets/print.css' , array(), '1.0.0', 'all');

	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/javascripts/myScripts.js');
}
add_action('wp_enqueue_scripts', 'dejan_script_enqueue');

/*
	================================
	Activate menus
	================================
*/
function dejan_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('haupt', 'header_nav');
	register_nav_menu('secondary', 'footer_nav');

}
/*
	================================
	Theme support function
	================================
*/
add_action('init', 'dejan_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' );

add_theme_support('post-formats', array('aside','image','video'));

/*
	================================
	Sidebar function
	================================
*/
// Header message
function dejan_widget_setup(){
	register_sidebar(
		array(
			'name' => 'header-msg',
			'id' => 'header-msg',
			'class' => 'widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		)
	);
	// Skills
	register_sidebar(
		array(
			'name' => 'skills',
			'id' => 'skills',
			'class' => 'widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		)
	);
	// contact form
	register_sidebar(
		array(
			'name' => 'contact-form',
			'id' => 'contact-form',
			'class' => 'widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		)
	);
	// contact form
	register_sidebar(
		array(
			'name' => 'footer',
			'id' => 'footer',
			'class' => 'widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init','dejan_widget_setup');
/*
	==============================================
	Filter the excerpt "read more" string.
 	@param string $more "Read more" excerpt string.
 	@return string (Maybe) modified "read more" excerpt string.
 	==============================================
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __('mehr lesen', 'textdomain' )
    );
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more');


// removes default gallery styles
add_filter( 'use_default_gallery_style', '__return_false' );

// removes all HTML tags from all post tag links
add_filter('term_links-post_tag', function($links) {
    return array_map('wp_strip_all_tags', $links);
});
