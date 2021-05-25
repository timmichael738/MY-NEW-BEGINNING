<?php
/**
 * The template for displaying category-slider 
 *
 * display slider
 *
 * @package Gem
 */

$gem_slider_cat = get_theme_mod( 'slider_cat', '' );
$gem_slider_count = get_theme_mod( 'slider_count', 5 );
$gem_slider_posts = array(
	'cat' => absint($gem_slider_cat),
	'posts_per_page' => absint($gem_slider_count)
);

	if ($gem_slider_cat) {

		$gem_query = new WP_Query($gem_slider_posts);
			if( $gem_query->have_posts()) : ?>
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
								    	if( !empty( $content ) ) { ?>
									    	<div class="flex-caption">
									    		<?php the_content(); ?>
									    	</div>
								    	<?php } ?>
								    </li>
								<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
			<?php  
				$gem_query = null;
				wp_reset_postdata();	
	}elseif( current_user_can('manage_options') ) {	?>	
		 <div class="flexslider">  
				<ul class="slides">	          
					<li>   	
						<div class="flex-image">
							<?php echo '<img src="' . get_template_directory_uri() . '/images/slider.jpg" alt="" >';?>	
						</div>
						<?php	$slide_description = sprintf( __('<h1> Slider Setting </h1><p>You haven\'t created any slider yet. Create a post, set your slider image as Post\'s featured image ( Recommended image size 1280*450 ) ). Go to Customizer and click Gem Options => Home and select Slider Post Category and No.of Sliders.<p><a href="%1$s"target="_blank"> Customizer </a></p>', 'gem'),  admin_url('customize.php') );?>
						<div class="flex-caption"> <?php echo $slide_description;?></div>
					</li>
				</ul>
			</div><!-- flex-slider end -->	<?php
	}