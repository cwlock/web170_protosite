<?php


/*
Theme Name: Chris Lockwood's WEB 170 Word Press Theme
Author: Chris Lockwood
Author URI: http://www.clockwooddw.com/
Description: This is a theme for my WEB 170 WordPress Class
Version: 1.0
*/

//Register menus
register_nav_menus(array(
	'main-menu' => __( 'Main' ),
));

//Enable featured images and post thumbnails
add_theme_support('post-thumbnails');

//Enable excerpts on pages
add_post_type_support('page', 'excerpt');

//Register Sidebar
register_sidebar(array(
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2'
));


//get my title tag
function get_my_title_tag() {
	
	global $post;
	if(is_front_page()) {
		bloginfo('description');	
	}
	elseif (is_page() || is_single()) {
		the_title();	
	}
	else {
		bloginfo('description');	
	}
	
	if($post->post_parent) {
		echo ' | ';
		echo get_the_title($post->post_parent);
	}
	
	echo ' | ';
	bloginfo('name'); //site name
	echo ' | ';
	echo 'Seattle, WA';// wrote out the city and state
}
?>