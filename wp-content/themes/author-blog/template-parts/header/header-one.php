<header id="masthead" class="site-header header-three" style="background-image: url(<?php echo esc_url( get_header_image());?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-3 align-self-center">
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) :
						the_custom_logo();
					endif;
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					$author_blog_description = get_bloginfo( 'description', 'display' );
					if ( $author_blog_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html( $author_blog_description ); /* WPCS: xss ok. */ ?></p>
						<?php
					endif;
					?>
				</div><!-- .site-branding -->
			</div>
			<div class="col-md-6 align-self-center text-center">
				<div class="cssmenu" id="cssmenu">
					<?php
						wp_nav_menu(array(
							'theme_location'	=>	'main-menu',
							'container'			=>	'ul',
						));
					?>    
                </div>
			</div>
			<div class="col-md-3 align-self-center">
				<div class="social-link-top">
					<?php author_blog_social_activity();?>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
<div class="searchform-area">
 	<div class="search-close">
 		<i class="fa fa-close"></i>
 	</div>
 	<div class="search-form-inner">
	 	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
 </div>