<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
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
        </header>       <div class="navextension">
            <nav id="mainnav">
                <ul>
                	<li>
                    	<a href="main.php">About Us</a>               
                        <ul>
                            <li><a href="owners.php">Owners</a></li>
                            <li><a href="partners.php">Partners</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                   </li><li><a href="services.php">Services</a>
                        <ul>
                            <li><a href="#">Home Glass</a></li>
                            <li><a href="#">Commercial Glass</a></li>
                            <li><a href="#">Auto Glass</a></li>
                            <li><a href="#">Spcialty Glass</a></li>
                            <li><a href="#">Additional Projects</a></li>
                            <li><a href="#">Work Area Range</a></li>
                        </ul>
                  </li><li><a href="gallery.php">Gallery</a>
                        <ul>
                            <li><a href="#">Home Glass</a></li>
                            <li><a href="#">Commercial Glass</a></li>
                            <li><a href="#">Auto Glass</a></li>
                            <li><a href="#">Spcialty Glass</a></li>
                        </ul>
                  </li><li><a href="#">Pricing</a>
                    <ul>
                        <li><a href="#">Insurance</a></li>
                        <li><a href="#">Discounts</a></li>
                        <li><a href="#">Groupons</a></li>
                        <li><a href="#">Quote</a></li>
                    </ul>
                  </li><li><a href="contact.php">Contact Us</a>
                    <ul>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Calendar</a></li>
                    </ul>
                </li>
                </ul>

                
        <!-- BEGIN SEARCH -->
        <div class="searchbox">
        	<form class="searchform" action="http://www.drglassworks.net/" method="get">
            	<input id="search" class="textfield" type="text" name="search" value=" Search"></input>
               <input class="submit" type="image" src=" <?php bloginfo('template_directory'); ?>/images/searchbutton.png" name="Submit"></input>
           </form>
        </div>
        <!--END SEARCH-->
                <div id="homebutton"><a href="template.html"><img src="<?php bloginfo('template_directory'); ?>/images/homebutton.svg" alt="Home Button"/></a></div>
                </nav>
                </div>
                <div class="content clearfix">
					<div id="breadcrumb"><p><a href="template.html">Home</a> &gt; <a href="main.html">About Us</a></p>
                    </div>
                    
         				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop?>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
         				<?php the_content(); ?>
         				
         				<?php endwhile; endif; //end loop?> 
					
                    </div>   
<div class="footercontent">
<footer>
                <nav id="subnav">
                <ul>
                	<li class="about">
                    	<a href="main.php">About Us</a>               
                        <ul>
                            <li><a href="owners.php">Owners</a></li>
                            <li><a href="partners.php">Partners</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                   </li><li class="service"><a href="services.php">Services</a>
                        <ul>
                            <li><a href="#">Home Glass</a></li>
                            <li><a href="#">Commercial Glass</a></li>
                            <li><a href="#">Auto Glass</a></li>
                            <li><a href="#">Spcialty Glass</a></li>
                            <li><a href="#">Additional Projects</a></li>
                            <li><a href="#">Work Area Range</a></li>
                        </ul>
                  </li><li class="gallery"><a href="gallery.php">Gallery</a>
                        <ul>
                            <li><a href="#">Home Glass</a></li>
                            <li><a href="#">Commercial Glass</a></li>
                            <li><a href="#">Auto Glass</a></li>
                            <li><a href="#">Specialty Glass</a></li>
                        </ul>
                  </li><li class="price"><a href="#">Pricing</a>
                    <ul>
                        <li><a href="#">Insurance</a></li>
                        <li><a href="#">Discounts</a></li>
                        <li><a href="#">Groupons</a></li>
                        <li><a href="#">Quote</a></li>
                    </ul>
                  </li><li class="contact"><a href="contact.php">Contact Us</a>
                    <ul>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Calendar</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
    <div class="small"><p>&copy; 2014 D &amp; R Glass Works, All Rights Reserved | 513 Okoma Dr, Omak, WA 98841 | P: (509) 826-1728 | <a href="#">Disclaimer</a>
    </p></div>
</footer>
</div>
<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->
</body>
</html>