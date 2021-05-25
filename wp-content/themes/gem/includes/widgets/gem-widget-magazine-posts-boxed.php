<?php
/***
 * Magazine Posts Boxed Widget
 *
 * Display the latest posts from a selected category in a boxed layout. 
 * Intented to be used in the Magazine Homepage widget area to built a magazine layouted page.
 *
 * @package Gem
 */

class Gem_Magazine_Post_Boxed_Widget extends WP_Widget {  

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'magazine-post-boxed-widget', // Base ID
			sprintf( esc_html__( '%s : Magazine Posts Boxed', 'gem' ), wp_get_theme()->Name ), // Name
			array( 'description' => __( 'Displays your posts from a selected category in a boxed layout. Please use this widget ONLY in the Magazine Page widget area.', 'gem' ), ) // Args
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
			'post_layout' => __( 'horizontal', 'gem' ),		
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

        if( isset($post_cat) && $post_cat && $post_model != 'latest') {
           $post_cat_name = get_the_category_by_ID($post_cat);
          
        }else{
        	$post_cat_name = apply_filters('gem_magazine_recent_post_title', __('Latest Post','gem') );
        }

        $title = apply_filters( 'widget_title', $post_cat_name );
        


		echo $before_widget;

		if($post_layout == 'horizontal') {

			 $magazine_featured_posts = new WP_Query( $magazine_args );
			 $i = 0;
		        if( $magazine_featured_posts->have_posts() ) :
		            if ( ! empty( $title ) ) {
					   echo $before_title .'<span class="mag-divider">'. $title .'</span>'. $after_title;
				    }
		        	while( $magazine_featured_posts->have_posts() ) : 
		        		 $magazine_featured_posts->the_post();
		        		if( isset($i) && $i== 0 ) : ?>
		        		<div class="horizontal-head-wrapper sixteen columns">
	                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post clearfix' ); ?>>

							    <header class="entry-header eight columns">					
								   <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'gem-thumbnail-large', array('title' => esc_attr( get_the_title() ), 'alt' => esc_attr( get_the_title() ) ) ); ?></a>
								</header><!-- .entry-header -->					

							   	<div class="entry-content eight columns">
								    <?php $categories_list = get_the_category_list( __( ' ', 'gem' ) );
										if ( $categories_list ) {
											printf( '<span class="cat-links"> ' . __( '%1$s ', 'gem' ) . '</span>', $categories_list );
										}
									   the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						               <div class="magazine-blog-meta">
						                <span class="date-structure">				
					                           <span class="dd"><a class="url fn n" href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'),get_the_time('d')); ?>"><i class="fa fa-calendar-o"></i><?php the_time('F j, Y'); ?></a></span>		
				                         </span> 
								    <?php $tags_list = get_the_tag_list( '', __( ', ', 'gem' ) );
										if ( $tags_list ) {
											printf( '/ <span class="tags-links"><i class="fa fa-camera"></i> ' . __( '%1$s ', 'gem' ) . '</span>', $tags_list );
										} ?>
										</div><?php
										the_content(); ?>									
								</div><!-- .entry-content -->

						    </article>
						</div>
						    <div class="small-posts-horizontal clearfix">
		        <?php   else: ?>
		                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'small-post clearfix eight columns' ); ?>>

								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'gem-thumbnail-small', array('title' => esc_attr( get_the_title() ), 'alt' => esc_attr( get_the_title() ) ) ); ?></a>
								<?php endif; ?>

									<div class="small-post-content">
								    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							            <div class="magazine-blog-meta">
							                <span class="date-structure">				
						                           <span class="dd"><a class="url fn n" href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'),get_the_time('d')); ?>"><i class="fa fa-calendar-o"></i><?php the_time('F j, Y'); ?></a></span>		
					                         </span>
									    <?php $tags_list = get_the_tag_list( '', __( ', ', 'gem' ) );
											if ( $tags_list ) {
												printf( '/ <span class="tags-links"><i class="fa fa-camera"></i> ' . __( '%1$s ', 'gem' ) . '</span>', $tags_list );
											} ?>									
									</div>
								</div>

							</article>
		        <?php	endif;
				      	$i++;    	      		      		
		        	endwhile; ?>
		        	</div>
		        	<?php
		        endif;
		        // Reset Post Data
		        wp_reset_postdata();

		}else{
            $magazine_featured_posts = new WP_Query( $magazine_args );
			 $i = 0;
		        if( $magazine_featured_posts->have_posts() ) :
		        	if ( ! empty( $title ) ) {
					   echo $before_title .'<span class="mag-divider">'. $title .'</span>'. $after_title;
				    }
		        	while( $magazine_featured_posts->have_posts() ) : 
		        		 $magazine_featured_posts->the_post();
		        		if( isset($i) && $i == 0 ): ?>
		        		<div class="vertical-head-wrapper eight columns">
	                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post clearfix' ); ?>>

							    <header class="entry-header">					
								   <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'gem-thumbnail-large', array('title' => esc_attr( get_the_title() ), 'alt' => esc_attr( get_the_title() ) ) ); ?></a>
								</header><!-- .entry-header -->					

							   	<div class="entry-content">
								    <?php $categories_list = get_the_category_list( __( ' ', 'gem' ) );
										if ( $categories_list ) {
											printf( '<span class="cat-links">' . __( '%1$s ', 'gem' ) . '</span>', $categories_list );
										}
									   the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						                <div class="magazine-blog-meta">
							                <span class="date-structure">				
						                           <span class="dd"><a class="url fn n" href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'),get_the_time('d')); ?>"><i class="fa fa-calendar-o"></i><?php the_time('F j, Y'); ?></a></span>		
					                         </span>
									    <?php $tags_list = get_the_tag_list( '', __( ', ', 'gem' ) );
											if ( $tags_list ) {
												printf( '/ <span class="tags-links"><i class="fa fa-camera"></i> ' . __( '%1$s ', 'gem' ) . '</span>', $tags_list );
											} ?>
										</div>
							<?php	the_content(); ?>									
								</div><!-- .entry-content -->

						    </article>
						</div>
						     <div class="small-posts-vertical eight columns clearfix">
		        <?php   else: ?>
		                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'small-post clearfix' ); ?>>

								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'gem-thumbnail-small', array('title' => esc_attr( get_the_title() ), 'alt' => esc_attr( get_the_title() ) ) ); ?></a>
								<?php endif; ?>

								<div class="small-post-content">
							      <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						               <div class="magazine-blog-meta">
						                <span class="date-structure">				
					                           <span class="dd"><a class="url fn n" href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'),get_the_time('d')); ?>"><i class="fa fa-calendar-o"></i><?php the_time('F j, Y'); ?></a></span>		
				                         </span>
								    <?php $tags_list = get_the_tag_list( '', __( ', ', 'gem' ) );
										if ( $tags_list ) {
											printf( '/<span class="tags-links"><i class="fa fa-camera"></i> ' . __( '%1$s ', 'gem' ) . '</span>', $tags_list );
										} ?>
									</div>									
								</div>

							</article>
		        <?php	endif;
				      	$i++;    	      		      		
		        	endwhile; ?>
		        	</div>
		        	<?php
		        endif;
		        // Reset Post Data
		        wp_reset_postdata();
		}
       
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
			'post_layout' => __( 'horizontal', 'gem' ),		
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

		<p>
			<label for="<?php echo $this->get_field_id('post_layout') ?>"><?php _e('Post Layout', 'gem') ?></label>
			<select id="<?php echo $this->get_field_id('post_layout') ?>" name="<?php echo $this->get_field_name('post_layout') ?>">
				<option value="horizontal" <?php selected($instance['post_layout'], "horizontal") ?>>Horizontal Arrangement</option>
				<option value="vertical" <?php selected($instance['post_layout'], "vertical") ?>>Vertical Arrangement</option>
			</select>
		</p>


		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['post_cat'] = ( ! empty( $new_instance['post_cat'] ) ) ? strip_tags( $new_instance['post_cat'] ) : '';
		$instance['post_count'] = ( ! empty( $new_instance['post_count'] ) ) ? strip_tags( $new_instance['post_count'] ) : '';
		$instance['post_layout'] = ( ! empty( $new_instance['post_layout'] ) ) ? strip_tags( $new_instance['post_layout'] ) : '';
		$instance['post_model'] = ( ! empty( $new_instance['post_model'] ) ) ? strip_tags( $new_instance['post_model'] ) : '';
		
		return $instance;
	}

} // class Foo_Widget