<?php get_header(); ?>
                <div class="content">
					<div id="breadcrumb"><p><a href="template.html">Home</a> &gt; <a href="main.html">About Us</a></p>
                    </div>
                    
         				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop?>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
         				<?php the_content(''); ?>
         				
         				<?php endwhile; endif; //end loop?> 
					<h4>single</h4>
                    </div>  
					<?php get_sidebar(); ?>
<?php get_footer(); ?>