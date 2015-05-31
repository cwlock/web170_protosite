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


?>