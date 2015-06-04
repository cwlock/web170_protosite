<aside id="main-sub-nav">
					
				<!--Begin sub navigation-->	
					
					<div id="sub-navigation" class="widget">
						<?php if (is_page()) : ?>
						<h2 class="main-sub-navigation-title"><?php echo get_the_title($post->post_parent); ?></h2>
						<ul class="main-sub-navigation-items">
							<?php 
							if ($post->post_parent) {
								wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
							} else {
								wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
							} 
							?>
						</ul>
						<?php endif; ?>

						<?php 
						if (!(is_page())) : 
						?>
						<h2 class="main-sub-navigation-title">Blog</h2>
						<ul class="main-sub-navigation-items">
							<?php wp_list_categories(array('title_li' => __(''))); ?>
						</ul>
						<?php endif; ?>
	</div>
						<!--End Sub Navigation-->
						
						<!--Begin Quote--> 
						
						<?php if(get_post_meta($post->ID, 'Quote', true)) : ?>
		<div class="widget">				
	<blockquote>"<?php echo get_post_meta($post->ID, 'Quote', true); ?>"</blockquote>
	</div>
						
						<?php endif; ?>
						
						
						<!--End Quote-->
						
						<!--Begin Dynamic Sidebar-->
						<?php dynamic_sidebar(); ?>
						<!--End Dynamic Sidebar-->
					</aside> 