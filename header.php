<!DOCTYPE html>
<html>
<head>
    <title><?php get_my_title_tag(); ?></title>
    
    <meta name="description" content="<?php echo get_the_excerpt(); ?>" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=2" />
    <link rel="icon" href="images/favicon.ico" type="images/favicon" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

<!-- Start WP Head -->
<?php wp_head(); ?> 
<!-- End WP Head -->

</head>
<body <?php body_class(); ?>>
	<div class="headercontent">
    <header>
        <div id="siteid"><a href="http://clockwooddw.com/web170/HTML/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/DRLogo.svg" alt="#" /></a></div>
        <div class="utility">
        	<div class="social">
            <a href="#" id="facebook"><img src="<?php bloginfo('template_directory'); ?>/images/socialmediafiller.svg" alt="#"/></a>
            <a href="#" id="yelp"><img src="<?php bloginfo('template_directory'); ?>/images/socialmediafiller.svg" alt="#"/></a>
            <a href="#" id="twitter"><img src="<?php bloginfo('template_directory'); ?>/images/socialmediafiller.svg" alt="#"/></a>
            <a href="#" id="email"><img src="<?php bloginfo('template_directory'); ?>/images/socialmediafiller.svg" alt="#"/></a>
            </div>
        </div>
        </header>       
           
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
            
	</div>
    <div class="contentWrapper">           