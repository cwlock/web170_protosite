<?php get_header(); ?>
<div class="content">
    <div class="slider">
    	<img src="<?php bloginfo('template_directory'); ?>/images/group.png" alt="Group Photo"/>
        	<blockquote class="sliderquote"><p>“Some Quote Will Go Here. <br/>
		And it might change locations.”</p>
        	</blockquote>
    </div>
        <div class="servicebuttons">
            <figure>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/bay.png" alt="Bay Window" />
                <figcaption>Home</figcaption></a>
            </figure>
             <figure> 
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/store-fronts-005.png" alt="Store Front" />
                <figcaption>Commercial</figcaption></a>
            </figure>
             <figure>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/auto6.png" alt="Auto Glass" />
                <figcaption>Auto</figcaption></a>
            </figure>
             <figure>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/glasscase.png" alt="Glass Case" />
                <figcaption>Specialty</figcaption></a>
            </figure>
        </div>
        <section class="clearfix">
    <article id="aboutus">
    	<h1>About Us</h1>
    	<?php while( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    	<?php endwhile; ?>
    </article>
    <div id="aboutUsQuote">
       <h1>Postings</h1>
       	<?php rewind_posts(); ?>
       	<?php query_posts('showposts=5'); ?>
       	<ul>
       	<?php while( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
   		
    	<?php endwhile; ?>
		</ul>
    </div>
    <h1>front-page</h1>
    </section>
</div>

<?php get_footer(); ?>