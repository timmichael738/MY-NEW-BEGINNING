<?php
/***
 * Magazine Highlighted Post Widget
 *
 * Display latest posts or posts of specific category, which will be used to show highlighted posts.
 *
 * @package Gem
 */

class Gem_Highlighted_Post_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {  
		parent::__construct(
			'magazine-highlighted-post-widget', // Base ID
			sprintf( esc_html__( '%s : Highlighted Post', 'gem' ), wp_get_theme()->Name ), // Name
			array( 'description' => __( 'Display latest posts or posts of specific category, which will be used to show the highlighted posts, Please use this widget ONLY in the Magazine Page widget area.', 'gem' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
        extract( $instance );

        global $post;
        $instance = wp_parse_args( $instance, array(
			'post_cat' => '',
			'post_count' => 4,
			'post_model' => __('latest','gem'),	
		) );

        if( isset($post_model) && $post_model == 'latest' ) {
        	$magazine_args = array(
        		'posts_per_page'        => $post_count,
	            'post_type'             => 'post',
        	);
        }else {   
            $magazine_args = array(
        		'posts_per_page'        => $post_count,
	            'post_type'             => 'post',
	            'category__in'          => $post_cat
        	);
        }

		echo $before_widget; ?>
		    <div class="widget_highlighted_post_area sixteen columns clearfix">

<?php		 $magazine_featured_posts = new WP_Query( $magazine_args );
		        if( $magazine_featured_posts->have_posts() ) :
		        	while( $magazine_featured_posts->have_posts() ) : ?>		    
			     <?php   $magazine_featured_posts->the_post(); 
			            $title = get_the_title();?>			   	
                        <li class="eight columns single-highlited-post">
						    <div class="highlights-featured-image">					
							   <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('gem-highlighted-post', array( 'title' => esc_attr( $title ), 'alt' => esc_attr( $title ) )); ?></a>
							</div><!-- .entry-header -->					

						   	<div class="highlights-content">
						   	<?php the_title( sprintf( '<h1 class="entry-title clearfix"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>	
							   	<div class="magazine-slider-top-meta">
							   		<span class="date-structure"><i class="fa fa-calendar-o"></i>			
					                    <a class="url fn n" href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'),get_the_time('d')); ?>"><?php the_time('F j, Y'); ?></a>	
				                     </span>
								    <?php $categories_list = get_the_category_list( __( ', ', 'gem' ) );
										if ( $categories_list ) {
											//printf( '/ <span class="cat-links"><i class="fa fa-camera"></i> ' . __( '%1$s ', 'gem' ) . '</span>', $categories_list );
										}
									    $tags_list = get_the_tag_list( '', __( ', ', 'gem' ) );
										if ( $tags_list ) {
											//printf( '<span class="tags-links"><i class="fa fa-tags"></i> ' . __( '%1$s ', 'gem' ) . '</span>', $tags_list );
										}
										if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
											echo ' /  <span class="comments-link"><i class="fa fa-comments"></i>';
											comments_popup_link( __( 'Leave a comment', 'gem' ), __( '1 Comment', 'gem' ), __( '% Comments', 'gem' ) );
											echo '</span>';
									    } ?>
								</div>								
							</div><!-- .entry-content -->
					    </li>
	<?php 	      		      		
			        endwhile; 

		        endif; ?>
		    </div><?php
		        // Reset Post Data
		        wp_reset_postdata();
       
		echo $after_widget;
	}



	/**
	 * Display the flexcount widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {
		  $instance = wp_parse_args( $instance, array(
			'post_cat' => '',
			'post_count' => 4,
			'post_model' => __('latest','gem'),	
		) );

	?>


		<p>
			<label for="<?php echo $this->get_field_id('post_count') ?>"><?php _e('No. of Posts to display', 'gem') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('post_count') ?>" name="<?php echo $this->get_field_name('post_count') ?>" value="<?php echo esc_attr($instance['post_count']) ?>" />
		</p>

	    <p>
	         <input type="radio" <?php checked($instance['post_model'],'latest') ?> id="<?php echo $this->get_field_id( 'post_model' ); ?>" name="<?php echo $this->get_field_name( 'post_model' ); ?>" value="latest"/><?php _e( 'Show latest Posts', 'gem' );?><br />
	         <input type="radio" <?php checked($instance['post_model'],'category') ?> id="<?php echo $this->get_field_id( 'post_model' ); ?>" name="<?php echo $this->get_field_name( 'post_model' ); ?>" value="category"/><?php _e( 'Show posts from a category', 'gem' );?><br />
	    </p>


		<p>
			<label for="<?php echo $this->get_field_id('post_cat') ?>"><?php _e(' Select Category ', 'gem') ?></label>
			<?php wp_dropdown_categories( array( 'name' => $this->get_field_name( 'post_cat' ), 'selected' =>  $instance['post_cat'] ) ); ?>
		</p>



		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['post_cat'] = ( ! empty( $new_instance['post_cat'] ) ) ? strip_tags( $new_instance['post_cat'] ) : '';
		$instance['post_count'] = ( ! empty( $new_instance['post_count'] ) ) ? strip_tags( $new_instance['post_count'] ) : '';
		$instance['post_model'] = ( ! empty( $new_instance['post_model'] ) ) ? strip_tags( $new_instance['post_model'] ) : '';
		
		return $instance;
	}

} // class Foo_Widget