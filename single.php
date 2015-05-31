<?php get_header(); ?>
                <div class="content">
					<div id="breadcrumb"><p><a href="template.html">Home</a> &gt; <a href="main.html">About Us</a></p>
                    </div>
                    
         				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop?>
         				
						<h2><?php the_title(); ?></h2>
        				<small>The By line goes here.</small>
        				<?php echo get_the_post_thumbnail($post->ID,'large'); ?>
         				<?php the_content(''); ?>
         				
         				<?php endwhile; endif; //end loop?> 
					<h4>single.php</h4>
                    </div>  
					<?php get_sidebar(); ?>
<?php get_footer(); ?>