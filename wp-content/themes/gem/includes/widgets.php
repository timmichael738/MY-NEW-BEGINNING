<?php 
get_template_part('includes/widgets/gem-widget-magazine-posts-boxed');
get_template_part('includes/widgets/gem-featured-slider');
get_template_part('includes/widgets/gem-highlighted-post');

if( !function_exists('gem_register_magazine_widgets') ) {
	add_action('widgets_init','gem_register_magazine_widgets');
	
	function gem_register_magazine_widgets() {
		register_widget( 'Gem_Magazine_Post_Boxed_Widget' );
		register_widget( 'Gem_Featured_Slider_Widget' );
		register_widget( 'Gem_Highlighted_Post_Widget' );
	}
}
