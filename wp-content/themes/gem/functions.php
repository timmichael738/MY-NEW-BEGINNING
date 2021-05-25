<?php
/**
 * gem functions and definitions
 *
 * @package gem
 */

if ( ! function_exists( 'gem_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gem_setup() {

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) ) {
		$content_width = 780; /* pixels */
	}
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gem, use a find and replace
	 * to change 'gem' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gem', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );  

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	add_editor_style( 'css/editor-style.css' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'gem_recent-post-img', 380, 350, true);
	add_image_size( 'gem_service-img', 100, 100, true);
	add_image_size( 'gem-blog-full-width', 1200,350, true );
	add_image_size( 'gem-small-featured-image-width', 450,350, true );
	add_image_size( 'gem-blog-large-width', 800,350, true );
	add_image_size( 'gem-thumbnail-large', 400,200, true );
	add_image_size( 'gem-thumbnail-small', 130,90, true );
	add_image_size( 'gem-magazine_slider_thumbnail', 800,430, true );
	add_image_size( 'gem-highlighted-post', 550,300, true );
	
	
  

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gem' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats 
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	add_theme_support( 'custom-background' );
	

	add_theme_support( 'custom-logo' );

	/* Woocommerce support */

	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

 // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
     
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(

			// Put two core-defined widgets in the footer 2 area.
			'top-right' => array(
				// Widget ID
			    'my_text' => array(
					// Widget $id -> set when creating a Widget Class
		        	'text' , 
		        	// Widget $instance -> settings 
					array(
					  'text'  => '<ul><li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li><li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li><li><a href="http://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li><li><a href="http://www.tumblr.com/"><i class="fa fa-tumblr"></i></a></li></ul>'
					)
				),
			),

			'footer' => array(
				'calendar'
			),
			'footer-2' => array(
				// Widget ID
			    'archives'
			),
			'footer-3' => array(
				// Widget ID
			    'categories'
			),

			'footer-4' => array(
				'recent-posts'
			),

		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
			'home' => array(
				'post_type' => 'page',
			),
			'blog' => array(
				'post_type' => 'page',
			),
			/*'post-one' => array(
	            'post_type' => 'post',
	            'post_title' => __( 'Post One', 'gem'),
	            'post_content' => sprintf( __('<h1> Slider Setting </h1><p>You haven\'t created any slider yet. Create a post, set your slider image as Post\'s featured image ( Recommended image size 1280*450 ) ). Go to Customizer and click gem Options => Home and select Slider Post Category and No.of Sliders.<p><a href="%1$s"target="_blank"> Customizer </a></p>', 'gem'),  admin_url('customize.php') ),
	            'thumbnail' => '{{post-featured-image}}',
	        ),
	        'post-two' => array(
	            'post_type' => 'post',
	            'post_title' => __( 'Post Two', 'gem'),
	            'post_content' => sprintf( __('<h1> Slider Setting </h1><p>You haven\'t created any slider yet. Create a post, set your slider image as Post\'s featured image ( Recommended image size 1280*450 ) ). Go to Customizer and click gem Options => Home and select Slider Post Category and No.of Sliders.<p><a href="%1$s"target="_blank"> Customizer </a></p>', 'gem'),  admin_url('customize.php') ),
	            'thumbnail' => '{{post-featured-image}}',
	        ),  
			'service-one' => array(  
				'post_type' => 'page',
				'post_title' => __( 'Responsive Layout', 'gem'),
	            'post_content' => sprintf( __('You haven\'t created any service page yet. Create Page. Go to <a href="%1$s"target="_blank"> Customizer </a> and click gem Options => Home => Service Section #1 and select page from  dropdown page list.','gem'), admin_url('customize.php') ),
				'thumbnail' => '{{page-images}}',
			),
			'service-two' => array(
				'post_type' => 'page',
				'post_title' => __( 'Awesome Slider', 'gem'),
	            'post_content' => sprintf( __('You haven\'t created any service page yet. Create Page. Go to <a href="%1$s"target="_blank"> Customizer </a> and click gem Options => Home => Service Section #1 and select page from  dropdown page list.','gem'), admin_url('customize.php') ),
				'thumbnail' => '{{page-images}}',
			),
			'service-three' => array(
				'post_type' => 'page',
				'post_title' => __( 'Fully Customizable', 'gem'),
	            'post_content' => sprintf( __('You haven\'t created any service page yet. Create Page. Go to <a href="%1$s"target="_blank"> Customizer </a> and click gem Options => Home => Service Section #1 and select page from  dropdown page list.','gem'), admin_url('customize.php') ),
				'thumbnail' => '{{page-images}}',
			),	*/		
		),

		// Create the custom image attachments used as post thumbnails for pages.
		/*'attachments' => array(
			'post-featured-image' => array( 
				'post_title' => __( 'slider one', 'gem' ),
				'file' => 'images/slider.png', // URL relative to the template directory.
			),
			'page-images' => array(
				'post_title' => __( 'Page Images', 'gem' ),
				'file' => 'images/page.png', // URL relative to the template directory.
			),
		), */

		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),  

		// Set the front page section theme mods to the IDs of the core-registered pages.
		/*'theme_mods' => array( 
			'slider_cat' => '1',
			'service_1' => '{{service-one}}',
			'service_2' => '{{service-two}}',
			'service_3' => '{{service-three}}', 
		),*/

	);

	$starter_content = apply_filters( 'gem_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
  
	
}
endif; // gem_setup
add_action( 'after_setup_theme', 'gem_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gem_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'gem' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Primary sidebar', 'gem' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar Left', 'gem' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Left Sidebar', 'gem' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top Right', 'gem' ),
		'id'            => 'top-right',
		'description'   => __('Widget area at top right side of the header','gem'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebars( 4, array(
		'name'          => __( 'Footer %d', 'gem' ),
		'id'            => 'footer',
		'description'   => __( 'One of 4 Column Footer widget area','gem'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav', 'gem' ),
		'id'            => 'footer-nav',
		'description'   => __( 'Widget area in bottom right side of Footer','gem' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Magazine Page', 'gem' ),
		'id'            => 'magazine-page',
		'description'   => __( 'Appears on Magazine Page template only. You can use the Magazine Posts widgets here.','gem' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) ); 

}
add_action( 'widgets_init', 'gem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/includes/enqueue.php';
/**
 * Magazine Widgets file
 */
require get_template_directory() . '/includes/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Free Theme upgrade page 
 */
require get_template_directory() . '/includes/theme_upgrade.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';
/**
 * Implement the Custom Header feature.
 */
require  get_template_directory()  . '/includes/custom-header.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load Theme Options Panel
 */
require get_template_directory() . '/admin/theme-options.php';

/**
 * Inline style ( Theme Options )
 */
require get_template_directory() . '/includes/styles.php';

/**
 * Load Filter and Hook functions
 */
require get_template_directory() . '/includes/hooks-filters.php';


remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
add_action('woocommerce_before_main_content', 'gem_output_content_wrapper');


function gem_output_content_wrapper() {
	$woocommerce_sidebar = get_theme_mod('woocommerce_sidebar',true ) ;
	if( $woocommerce_sidebar ) {
        $woocommerce_sidebar_column = 'eleven';
    }else {
        $woocommerce_sidebar_column = 'sixteen';
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar');
    }
	echo '<div class="site-content container" id="content"><div id="primary" class="content-area '. $woocommerce_sidebar_column .' columns">';	
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end' );
add_action( 'woocommerce_after_main_content', 'gem_output_content_wrapper_end' );

function gem_output_content_wrapper_end () {
	echo "</div>";
}

add_action( 'init', 'gem_remove_wc_breadcrumbs' );  
function gem_remove_wc_breadcrumbs() {
   	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

include_once( get_template_directory() . '/admin/theme-options.php' ); 

add_action('after_setup_theme', 'gem_rename_template');   

if( !function_exists('gem_rename_template') ) {
	function gem_rename_template() {
	   $args = array(
	        'post_type' => 'page',
	        'posts_per_page' => -1
	    );

	$template_query =  new WP_Query($args);

	if( $template_query->have_posts() ) {
	   	while ( $template_query->have_posts() ) :
	   	     $template_query->the_post(); 
	   	     $old_template_name = get_post_meta( get_the_ID(), '_wp_page_template', true );
	   	    // echo $old_template_name .'</br>';
	   	     switch ( $old_template_name ) {
	       	    	case 'page-full-width.php':
	       	    		$new_template_name = 'template-full-width.php';
	       	    		break;
	   	    		case 'page-leftsidebar.php':
	   	    		   $new_template_name = 'template-leftsidebar.php';
	   	    		   break;
	   	    		case 'page-rightsidebar.php':
	   	    		    $new_template_name = 'template-rightsidebar.php';
	   	    		    break;
	   	    		case 'page-twosidebar.php':
	   	    		    $new_template_name = 'template-twosidebar.php';
	   	    		    break;
	   	    		case 'page-twosidebarleft.php':
	   	    		    $new_template_name = 'template-twosidebarleft.php';
	   	    		    break;
	   	    		case 'page-twosidebarright.php':
	   	    		     $new_template_name = 'template-twosidebarright.php';
	   	    		    break;
	   	    		default:
	   	    		    $new_template_name = $old_template_name;
			}
			if( $old_template_name != $new_template_name) {	
			   update_post_meta( get_the_ID(), '_wp_page_template' ,$new_template_name ,$old_template_name );
			}
	     endwhile; // end of the loop. 
	}
	$template_query = null;
	wp_reset_postdata();
		
	}
}
