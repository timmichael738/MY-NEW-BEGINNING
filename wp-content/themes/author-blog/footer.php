<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Author Blog
 */
?>
</div><!-- #content -->
<?php
$getfooter_column = get_theme_mod( 'footer_column', 'four' );
$footerlayout = 'four';
if ('four' === $getfooter_column) {
	$footerlayout = 'four';
}elseif ('two' === $getfooter_column) {
	$footerlayout = 'two';
}
$footer_default_class = 'footer-area section-padding yellowbg';
$transparent_footer_bg = get_theme_mod( 'transparent_footer_bg', false );
if (true === $transparent_footer_bg) {
	$footer_default_class = 'footer-area section-padding';
}
$book_section_args = array(
	'book_section_show_hide' => get_theme_mod( 'book_section_show_hide', true ),
	'book_image' => get_theme_mod( 'book_image_upload' ),
	'book_title' => get_theme_mod( 'book_title',   __( 'Looking for a Great Book to Read? Look No Further!', 'author-blog' )),
	'book_description' => get_theme_mod( 'book_description',  __( 'This section is perfect for displaying your paid book or your free email optin offer. You can turn it off or make changes to it from your theme options panel.', 'author-blog' )),
	'book_button_text' => get_theme_mod( 'book_button_text', __('Get Your Copy Today>>', 'author-blog') ),
	'book_button_link' => get_theme_mod( 'book_button_link', '#' ),
);
if (true === $book_section_args['book_section_show_hide']):
if($book_section_args['book_image']=='') $book_section_args['book_image'] = get_template_directory_uri().'/assets/img/default.jpg';
if($book_section_args['book_name']=='') $book_section_args['book_name'] = get_bloginfo('name');
	?>
	<section class="book-display-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 align-self-center">
	<div class="book-image">
	<a href="<?php echo esc_url('https://www.bookmockups.com'); ?>"><img src="<?php echo esc_url( $book_section_args['book_image'] );?>" alt="<?php echo esc_attr($book_section_args['book_name']);?>"></a>
					</div>
				</div>
				<div class="col-md-7 pl-lg-5 align-self-center">
					<div class="book-text pl-lg-5">
						<h2 class="mt-0"><?php echo esc_html( $book_section_args['book_title'] ); ?></h2>
						<p class="mb-5"><?php echo wp_kses_post($book_section_args['book_description']);?></p>
						<a href="<?php echo esc_url($book_section_args['book_button_link']);?>" class="btn default-btn-style"><?php echo esc_html($book_section_args['book_button_text']);?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
if (is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' )) :
?>
    <div class="<?php echo esc_attr($footer_default_class);?>">
        <div class="container">
            <div class="row justify-content-center">
            	<?php get_template_part( 'template-parts/footer/footer', $footerlayout ); ?>
           	</div>
        </div>
    </div>
	<?php endif; ?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 align-self-center">
					<div class="site-info text-left">
						© <?php bloginfo( 'name' );?> <?php echo date('Y'); ?> <?php
						echo wp_kses_post( get_theme_mod('copyright_text') );?>
							<a href="<?php echo esc_url('BookMockups.com');?>" class="fa fa-book"></a>
						</div><!-- .site-info -->
				</div>
				<div class="col-md-8 text-right">
					<div class="d-flex justify-content-end">
						<div class="copyright-menu">
							<?php
							wp_nav_menu(array(
								'theme_location'	=>	'footer-menu',
								'container'			=>	'ul',
							));
							?>
						</div>
						<div class="social-link-bottom">
							<?php author_blog_social_activity();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="scrooltotop">
		<a href="#" class="fa fa-angle-up"></a>
	</div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>