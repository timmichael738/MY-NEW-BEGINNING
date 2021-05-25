<?php
/**
 * The template for displaying blog-category-slider 
 *
 * display slider
 *
 * @package gem
 */

$gem_blog_slider_cat = get_theme_mod( 'blog_slider_cat', '' );
$gem_blog_slider_count = get_theme_mod( 'blog_slider_count', 5 );
$gem_blog_slider_posts = array(
	'cat' => absint($gem_blog_slider_cat),
	'posts_per_page' => absint($gem_blog_slider_count)
);

	if ($gem_blog_slider_cat) {
		$gem_query = new WP_Query($gem_blog_slider_posts);
			if( $gem_query->have_posts()) : ?>
			<div class="flex-container">
				<div class="flexslider">
					<ul class="slides">
						<?php while($gem_query->have_posts()) :
								$gem_query->the_post();
								if( has_post_thumbnail() ) : ?>
								    <li>
								    	<div class="flex-image">
								    		<?php the_post_thumbnail('full'); ?>
								    	</div>
								    	<?php $content = get_the_content();
								    	if( !empty($content) ) :?>
									    	<div class="flex-caption">
									    		<?php the_content(); ?>
									    	</div>
									    <?php endif; ?>
								    </li>
								<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
			<?php  
				$gem_query = null;
				wp_reset_postdata();	
	}elseif( current_user_can('manage_options') ) {	?>	
		<div class="flex-container">
			<div class="flexslider">  
				<ul class="slides">	          
					<li>   	
						<div class="flex-image">
							<?php echo '<img src="' . get_template_directory_uri() . '/images/slider.jpg" alt="" >';?>	
						</div>
						<?php	
						$slide_description = sprintf('<h1> %1$s </h1><p>%2$s</p><p><a href="%3$s" target="_blank"> %4$s</a></p>',__('Slider Setting','gem'), __('You haven\'t created any slider yet. Create a post, set your slider image as Post\'s featured image ( Recommended image size 1280*450 ). Go to Customizer and click gem Options => Blog => Blog Page and select blog Slider Post Category and No.of Sliders.','gem'), esc_url(admin_url('customize.php')) , __('Customizer','gem'));?>
						<div class="flex-caption"> <?php echo $slide_description;?></div>
					</li>
				</ul>
			</div>
		</div><!-- flex-slider end -->	<?php
	}