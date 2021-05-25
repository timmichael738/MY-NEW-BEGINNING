<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Author Blog
 */
$grid_column = get_theme_mod( 'grid_column', 'col-sm-4' );
if ($grid_column === 'col-sm-6') {
    $grid_column = 'col-lg-6 col-md-12';
}elseif ($grid_column === 'col-sm-4') {
    $grid_column = 'col-sm-12 col-md-6 col-lg-4';
}elseif ($grid_column === 'col-sm-3') {
    $grid_column = 'col-sm-12 col-md-6 col-lg-3';
}
$post_classes = 'author-blog-standard-post';
if (!has_post_thumbnail()) {
	$post_classes = 'author-blog-standard-post no-post-thumbnail ';
}
?>
<div class="<?php echo esc_attr($grid_column);?> blog-grid-layout">
	<article id="post-<?php the_ID(); ?>" <?php post_class( $post_classes ); ?>>
		<div class="author-blog-standard-post__entry-content text-left">
			<?php if (has_post_thumbnail()): ?>
				<div class="author-blog-standard-post__thumbnail post-header">
					<?php author_blog_post_thumbnail();?>
				</div>
			<?php endif;?>
			<div class="author-blog-standard-post__content-wrapper">
				<div class="author-blog-standard-post__blog-meta mt-0">
					<?php author_blog_categories();?>
				</div>
				<div class="author-blog-standard-post__post-title">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<?php the_excerpt(); ?>
				</div>
				<div class="author-blog-standard-post__blog-meta">
					<?php
					author_blog_posted_by(true);
					author_blog_posted_on();
					?>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>