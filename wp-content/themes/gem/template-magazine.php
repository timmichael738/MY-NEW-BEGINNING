<?php
/**
 * Template Name: Magazine Page
 *
 * Description: A custom page template for displaying the magazine homepage widgets.
 *
 * @package Gem
 */

get_header(); ?>

    <?php   if( get_theme_mod('magazine-slider',false) ) { 
	           get_template_part('category-slider');
            }
            do_action('gem_before_content');
    ?>

	<div id="content" class="site-content">
		<div class="container">

		<div id="primary" class="content-area <?php gem_magazine_page_primary_class(); ?> columns">

			<main id="main" class="site-main" role="main">

				<?php // Display Magazine Homepage Widgets
					if( is_active_sidebar( 'magazine-page' ) ) : ?>

						<div id="magazine-page-widgets" class="widget-area clearfix">

							<?php dynamic_sidebar( 'magazine-page' ); ?>

						</div><!-- #magazine-page-widgets -->

					<?php // Display Description about Magazine Homepage Widgets when widget area is empty
					else : 
					
						// Display only to users with permission
						if ( current_user_can( 'edit_theme_options' ) ) : ?>

							<p class="empty-widget-area">
								<?php esc_html_e( 'Please go to Appearance &#8594; Widgets and add at least one widget to the "Magazine Page" widget area. You can use the Gem : Featured Category Slider & Gem : Magazine Posts Boxed widgets to set up magazine page.', 'gem' ); ?>
							</p>
							
						<?php endif;

					endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php
 if( !get_theme_mod('magazine_sidebar',false) ) {
	 get_sidebar();
	}
?>
<?php get_footer(); ?>
