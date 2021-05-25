<?php
/**
 * Author Blog Theme Info
 *
 * @package Author_Blog
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function author_blog_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'theme_info', array(
		'title'       => __( 'Demo & Documentation' , 'author-blog' ),
		'priority'    => 6,
	) );
    
    /** Important Links */
	$wp_customize->add_setting( 'author_blog_theme_info',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $theme_info = '<p>';
	$theme_info .= sprintf( __( 'Author Blog Free Demo : %1$sClick here.%2$s', 'author-blog' ),  '<a href="' . esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/' ) . '" target="_blank">', '</a>' );
    $theme_info .= '</p><p>';
	$theme_info .= sprintf( __( 'Author Blog Pro Demo: %1$sClick here.%2$s', 'author-blog' ),  '<a href="' . esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/' ) . '" target="_blank">', '</a>' );
    $theme_info .= '</p><p>';
    $theme_info .= sprintf( __( 'Documentation Link: %1$sClick here.%2$s', 'author-blog' ),  '<a href="' . esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/' ) . '" target="_blank">', '</a>' );
     $theme_info .= '</p><p class="one-click-demo-import">';
    $theme_info .= sprintf( __( 'View Pro Version: %1$sView Details.%2$s', 'author-blog' ),  '<a href="' . esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/' ) . '" target="_blank">', '</a>' );
    $theme_info .= '</p>';
	
	$wp_customize->add_control( new Author_Blog_Note_Control( $wp_customize,
        'author_blog_theme_info', 
            array(
                'section'     => 'theme_info',
                'description' => $theme_info
            )
        )
    );
    
}
add_action( 'customize_register', 'author_blog_customizer_theme_info' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class author_blog_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self();
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require get_template_directory() . '/inc/upgradetopro/section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'Author_Blog_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Author_Blog_Customize_Section_Pro(
				$manager,
				'upgradetopro',
				array(
					'priority'       => 1,
					'pro_text' => esc_html__( 'Author Blog - Upgrade To Pro', 'author-blog' ),
					'pro_url'  => 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/',
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'author-blog-customize-controls', get_theme_file_uri( '/inc/upgradetopro/customize-controls.js' ), array( 'customize-controls' ) );

		wp_enqueue_style( 'author-blog-customize-controls', get_theme_file_uri( '/inc/upgradetopro/customize-controls.css' ));
	}
}

// Doing this customizer thang!
author_blog_Customize::get_instance();
