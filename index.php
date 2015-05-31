<?php get_header(); ?>
                <div class="content">
					<div id="breadcrumb"><p><a href="template.html">Home</a> &gt; <a href="main.html">About Us</a></p>
                    </div>
                    
         				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop?>
         				<article class="post-excerpt">
							<a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID,'thumbnail'); ?></a>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        				<small>Posted on <?php the_time('F, j, Y'); ?> in <?php the_category(', '); ?> </small>
         				<p><?php echo strip_tags(get_the_excerpt()); ?> <a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
					</article>
         				<?php endwhile; endif; //end loop?> 
					<h4>index.php</h4>
                    </div>  
					<?php get_sidebar(); ?>
<?php get_footer(); ?>