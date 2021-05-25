<?php
/**
 * Created by PhpStorm.
 * User: venkat
 * Date: 2/5/16
 * Time: 4:32 PM        
 */ 
     
include_once( get_template_directory() . '/admin/kirki/kirki.php' );   
include_once( get_template_directory() . '/admin/kirki-helpers/class-gem-kirki.php' ); 


Gem_Kirki::add_config( 'gem', array(     
	'capability'    => 'edit_theme_options',                  
	'option_type'   => 'theme_mod',          
) );             
     
// Gem option start //   

//  site identity section // 

Gem_Kirki::add_section( 'title_tagline', array(
	'title'          => __( 'Site Identity','gem' ),
	'description'    => __( 'Site Header Options', 'gem'),       
	'priority'       => 8,         																																		
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'logo_title',
	'label'    => __( 'Enable Logo as Title', 'gem' ),
	'section'  => 'title_tagline',
	'type'     => 'switch',
	'priority' => 5,
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',   
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'tagline',
	'label'    => __( 'Show site Tagline', 'gem' ), 
	'section'  => 'title_tagline',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'on',
) );

// home panel //

Gem_Kirki::add_panel( 'home_options', array(     
	'title'       => __( 'Home', 'gem' ),
	'description' => __( 'Home Page Related Options', 'gem' ),     
) );  

// home page type section

Gem_Kirki::add_section( 'home_type_section', array(
	'title'          => __( 'Home Page Type','gem' ),
	'description'    => __( 'Home Page options', 'gem'),
	'panel'          => 'home_options', // Not typically needed. 
) );
 /*Gem_Kirki::add_field( 'gem', array(   
			'settings' => 'flexslider',
			'label'    => __( 'Enter FlexSlider shortcode (FlexSlider for Home Page)', 'wbls-gem' ),
			'section'  => 'pro_home_section',   
			'type'     => 'select', 
			'choices'  => wbls_get_home_slider_group(),    
			'multiple'    => 1,
			'description' => __('FlexSlider for Home Page. Create Flexsldier ( Goto Dashboard => Flex Sliders => Add New Slide ) and  Enter a FlexSlider shortcode  to be displayed on Home Page','wbls-gem'),
			'active_callback' => array(  
				array(
					'setting'  => 'page-builder',     
					'operator' => '==',
					'value'    => true,  
				),
	        ),	      
	        'description' => __('FlexSlider for Home Page. Create Flexsldier ( Goto Dashboard => Flex Sliders => Add New Slide ) and  Enter a FlexSlider shortcode  to be displayed on Home Page','wbls-gem'),
		) ); */

Gem_Kirki::add_field( 'gem', array(   
	'settings' => 'home-page-type',
	'label'    => __( 'Select Home Page Type', 'gem' ),
	'section'  => 'home_type_section',
	'type'     => 'radio-buttonset',
	'choices' => array(
		'default'  => esc_attr__( 'Normal', 'gem' ), 
		'magazine' => esc_attr__( 'Magazine', 'gem' ),
	),
	'default'  => 'default',
	'tooltip' => __('Select Home Page Type','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_home_default_content',
	'label'    => __( 'Enable Home Page Default Content', 'gem' ),
	'section'  => 'home_type_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'active_callback' => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
    ),
	'default'  => 'off',
	'tooltip' => __('Enable home page default content ( home page content )','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'home_sidebar',
	'label'    => __( 'Enable sidebar on the Home page', 'gem' ),
	'section'  => 'home_type_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'active_callback' => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
    ),
	'default'  => 'off',
	'tooltip' => __('Disable by default. If you want to display the sidebars in your frontpage, turn this Enable.','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'magazine_sidebar',
	'label'    => __( 'Enable FullWidth on the Magazine page', 'gem' ),
	'section'  => 'home_type_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'active_callback' => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'magazine',
		),
    ),
	'default'  => 'off',
	'tooltip' => __('Disable by default. If you want to display fullwidth magazine page, turn this Enable.','gem'),
) );  

// Slider section

Gem_Kirki::add_section( 'slider_section', array(
	'title'          => __( 'Slider Section','gem' ),
	'description'    => __( 'Home Page Slider Related Options', 'gem'),
	'panel'          => 'home_options', // Not typically needed. 
) );
Gem_Kirki::add_field( 'gem', array(  
	'settings' => 'enable_slider',
	'label'    => __( 'Enable Slider Post ( Section )', 'gem' ),
	'section'  => 'slider_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ),
	),
	'default'  => 'on',
	'active_callback'    => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
	),
	'tooltip' => __('Enable Slider Post in home page','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'magazine-slider',
	'label'    => __( 'Enable to show the slider on Magazine Page', 'gem' ),
	'section'  => 'slider_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'active_callback'    => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'magazine',
		),
	),
	'default'  => 'on',
	'tooltip' => __('If you select page template as Magazine Page or Magazine Home page , here you will select whether the page to show the slider or not.','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'slider_cat',
	'label'    => __( 'Slider Posts category', 'gem' ),
	'section'  => 'slider_section',
	'type'     => 'select',
	'choices' => Kirki_Helper::get_terms( 'category' ),
	'active_callback' => array(
		array(
			'setting'  => 'enable_slider',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Create post ( Goto Dashboard => Post => Add New ) and Post Featured Image ( Preferred size is 1200 x 450 pixels ) as taken as slider image and Post Content as taken as Flexcaption.','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'slider_count',
	'label'    => __( 'No. of Sliders', 'gem' ),
	'section'  => 'slider_section',
	'type'     => 'number',
	'choices' => array(
		'min' => 1,
		'max' => 999,
		'step' => 1,
	),
	'default'  => 2,
	'active_callback' => array(
		array(
			'setting'  => 'enable_slider',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Enter number of slides you want to display under your selected Category','gem'),
) );

// magazine page content section 

Gem_Kirki::add_section( 'sidebar-widgets-magazine-page', array(   
	'title'          => __( 'Magazine Content Section','gem' ),
	'description'    => __( 'You can use the following widgets here ( Gem: Featured Category Slider, Gem: Highlighted Post, Gem: Magazine Posts Boxed )', 'gem'),
	'panel'          => 'home_options', // Not typically needed.
) );
     
// service section 

Gem_Kirki::add_section( 'service_section', array(
	'title'          => __( 'Service Section','gem' ),
	'description'    => __( 'Home Page - Service Related Options', 'gem'),
	'panel'          => 'home_options', // Not typically needed. 
) );

Gem_Kirki::add_field( 'gem', array( 
	'settings' => 'enable_service',
	'label'    => __( 'Enable Service Section', 'gem' ),
	'section'  => 'service_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'active_callback'    => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
	),
	'default'  => 'on',
	'tooltip' => __('Enable service section in home page','gem'),
) ); 
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'service_count',
	'label'    => __( 'No. of Service Section', 'gem' ),
	'description' => __('Save the Settings, and Reload this page to Configure the service section','gem'),
	'section'  => 'service_section',
	'type'     => 'number',
	'choices' => array(
		'min' => 3,
		'max' => 99,
		'step' => 3,
	),
	'default'  => 6,
	'active_callback' => array(
		array(
			'setting'  => 'enable_service',
			'operator' => '==',
			'value'    => true,
		),
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
    ),
    'tooltip' => __('Enter number of service page you want to display','gem'),
) );

if ( get_theme_mod('service_count') > 0 ) {
 $service = get_theme_mod('service_count');
 		for ( $i = 1 ; $i <= $service ; $i++ ) {
             //Create the settings Once, and Loop through it.
 			Gem_Kirki::add_field( 'gem', array(
				'settings' => 'service_'.$i,
				'label'    => sprintf(__( 'Service Section #%1$s', 'gem' ), $i ),
				'section'  => 'service_section',
				'type'     => 'dropdown-pages',	
				//'tooltip' => __('Create Page ( Goto Dashboard => Page =>Add New ) and Page Featured Image ( Preferred size is 100 x 100 pixels )','gem'),
				'active_callback' => array(
					array(
						'setting'  => 'enable_service',
						'operator' => '==',
						'value'    => true,
					),
					array(
						'setting'  => 'home-page-type',
						'operator' => '==',
						'value'    => 'default',
					),
                ), 
               // 'description' => __('Create Page ( Goto Dashboard => Page =>Add New ) and Page Featured Image ( Preferred size is 100 x 100 pixels )','gem'),
        
			) );
 		}
}

// latest blog section 

Gem_Kirki::add_section( 'latest_blog_section', array(
	'title'          => __( 'Latest Blog Section','gem' ),
	'description'    => __( 'Home Page - Latest Blog Options', 'gem'),
	'panel'          => 'home_options', // Not typically needed. 
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_recent_post_service',
	'label'    => __( 'Enable Recent Post Section', 'gem' ),
	'section'  => 'latest_blog_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'active_callback' => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
    ), 
	'default'  => 'on',
	'tooltip' => __('Enable recent post section in home page','gem'),
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'recent_posts_count',
	'label'    => __( 'No. of Recent Posts', 'gem' ),
	'section'  => 'latest_blog_section',
	'type'     => 'number',
	'choices' => array(
		'min' => 3,
		'max' => 99,
		'step' => 3,
	),
	'default'  => 4,
	'active_callback' => array(
		array(
			'setting'  => 'enable_recent_post_service',
			'operator' => '==',
			'value'    => true,
		),
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
    ),
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'recent_posts_exclude', 
	'label'    => __( 'Exclude the Posts from Home Page. Post IDs, separated by commas', 'gem' ),
	'section'  => 'latest_blog_section',
	'type'     => 'text',
	'active_callback' => array(
		array(
			'setting'  => 'enable_recent_post_service',
			'operator' => '==',
			'value'    => true,
		),
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'default',
		),
    ),
) );

// general panel   

Gem_Kirki::add_panel( 'general_panel', array(   
	'title'       => __( 'General Settings', 'gem' ),  
	'description' => __( 'general settings', 'gem' ),         
) );

//  Page title bar section // 

Gem_Kirki::add_section( 'header-pagetitle-bar', array(   
	'title'          => __( 'Page Title Bar & Breadcrumb','gem' ),
	'description'    => __( 'Page Title bar related options', 'gem'),
	'panel'          => 'general_panel', // Not typically needed.
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'page_titlebar',  
	'label'    => __( 'Page Title Bar', 'gem' ),
	'section'  => 'header-pagetitle-bar', 
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		1 => __( 'Show Bar and Content', 'gem' ),
		2 => __( 'Show Content Only ', 'gem' ),
		3 => __('Hide','gem'),
    ),
    'default' => 1,
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'page_titlebar_text',  
	'label'    => __( 'Page Title Bar Text', 'gem' ),
	'section'  => 'header-pagetitle-bar', 
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		1 => __( 'Show', 'gem' ),
		2 => __( 'Hide', 'gem' ), 
    ),
    'default' => 1,
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'breadcrumb',  
	'label'    => __( 'Breadcrumb', 'gem' ),
	'section'  => 'header-pagetitle-bar', 
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ),
	),
	'default'  => 'on',
) ); 

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'breadcrumb_char',
	'label'    => __( 'Breadcrumb Character', 'gem' ),
	'section'  => 'header-pagetitle-bar',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		1 => __( ' >> ', 'gem' ),
		2 => __( ' / ', 'gem' ),
		3 => __( ' > ', 'gem' ),
	),
	'default'  => 1,
	'active_callback' => array(
		array(
			'setting'  => 'breadcrumb',
			'operator' => '==',
			'value'    => true,
		),
	),
	//'sanitize_callback' => 'allow_htmlentities'
) );

//  pagination section // 

Gem_Kirki::add_section( 'general-pagination', array(   
	'title'          => __( 'Pagination','gem' ),
	'description'    => __( 'Pagination related options', 'gem'),
	'panel'          => 'general_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'numeric_pagination',
	'label'    => __( 'Numeric Pagination', 'gem' ),   
	'section'  => 'general-pagination',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Numbered', 'gem' ),
		'off' => esc_attr__( 'Next/Previous', 'gem' )
	),
	'default'  => 'on',
) );

// skin color panel 

Gem_Kirki::add_panel( 'skin_color_panel', array(   
	'title'       => __( 'Skin Color', 'gem' ),  
	'description' => __( 'Color Settings', 'gem' ),         
) );

// Change Color Options

Gem_Kirki::add_section( 'primary_color_field', array(
	'title'          => __( 'Change Color Options','gem' ),
	'description'    => __( 'This will reflect in links, buttons,Navigation and many others. Choose a color to match your site.', 'gem'),
	'panel'          => 'skin_color_panel', // Not typically needed.
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_primary_color',
	'label'    => __( 'Enable Custom Primary color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
Gem_Kirki::add_field( 'gem', array(  
	'settings' => 'primary_color',
	'label'    => __( 'Primary color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'color',   
	'default'  => '#E5493A',
	"choices"  => array (
		'alpha' => true,
	),
	'active_callback' => array(
		array (
			'setting'  => 'enable_primary_color',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output' => array(
		array(
			'element'  => 'input[type="text"]:focus,
							.widget_image-box-widget .image-box img,
							input[type="url"]:focus,
							input[type="search"]:focus,
							.home .post-wrapper .latest-post:hover h4,
							textarea:focus,
							ol.comment-list li.byuser article,
							.home .post-wrapper .latest-post:hover,.site-content .navigation a:hover,
							.site-content .more-link:hover,
							.site-content .comment-navigation a:hover ',
			'property' => 'border-color',
		),
		array(
			'element'  => '.main-navigation .current_page_item > a,.site-content .btn-mini,
							.main-navigation .current-menu-item > a,
							.main-navigation .current_page_ancestor > a,
							.main-navigation ul.nav-menu > li a:hover,.share-box ul li a:hover, .social ul li a:hover,input[type="button"],
							.cnt-form .wpcf7-form input[type="submit"],
							input[type="submit"],
							.navigation a:hover,
							.widget_calendar table #today,
							.widget_calendar table caption,
							.site-header .branding .site-branding::before,
							.site-header .branding .site-branding,
							.site-footer .scroll-to-top,
							.site-footer .scroll-to-top:hover,
							.social .widget_social-networks-widget ul li a:hover,
							.main-navigation .current_page_item a,
							.main-navigation .current-menu-item a,
							.main-navigation .current-menu-parent > a,
							.main-navigation .current_page_parent > a,
							.entry-content blockquote::after,
							.widget_tag_cloud a:hover,
							.site-content .navigation a:hover,
							.site-content .comment-navigation a:hover,
							.site-content .more-link,
							.site-content .page-links a:hover,
							.site-footer .footer-widgets .widget-title::after,
							.home .flexslider .slides .flex-caption p a,
							.home .site-content #primary .post-wrapper-head h2::after,
							.footer-widgets .textwidget .wpcf7-form input.wpcf7-submit,
							.webulous_page_navi li.bpn-current,
							.webulous_page_navi li a:hover,
							.webulous_page_navi li.bpn-next-link a:hover,
							.webulous_page_navi li.bpn-prev-link a:hover,
							.share-box ul li a:hover,
							.site-footer .widget_social-networks-widget ul li a,
							.search-form input.search-submit,.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover,
							.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
							.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a:hover,
							.woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover,
							.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
							.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
							.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
							.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
							.sidebar .icon-vertical .fa-stack,.woocommerce #content nav.woocommerce-pagination ul li a:focus,
							.woocommerce #content nav.woocommerce-pagination ul li a:hover,
							.woocommerce #content nav.woocommerce-pagination ul li span.current,
							.woocommerce nav.woocommerce-pagination ul li a:focus,
							.woocommerce nav.woocommerce-pagination ul li a:hover,
							.woocommerce nav.woocommerce-pagination ul li span.current,
							.woocommerce-page #content nav.woocommerce-pagination ul li a:focus,
							.woocommerce-page #content nav.woocommerce-pagination ul li a:hover,
							.woocommerce-page #content nav.woocommerce-pagination ul li span.current,
							.woocommerce-page nav.woocommerce-pagination ul li a:focus,.site-header .branding,button.menu-toggle,
							.woocommerce-page nav.woocommerce-pagination ul li a:hover,
							.woocommerce-page nav.woocommerce-pagination ul li span.current,
							#secondary.sidebar .widget_testimonial-widget .testimonial-container .testimonials,
							.circle-icon-box .circle-icon-wrapper,.woocommerce a.remove,.site-content .pagination .page-numbers:hover,.site-content .pagination .next:hover, .site-content .pagination .current,
							.widget_magazine-post-boxed-widget .entry-content .cat-links a,.widget_magazine-post-boxed-widget .mag-divider,.mag-divider',
			'property' => 'background-color',
		),
		array(
			'element'  => '.main-navigation a:hover::after,
							 .main-navigation .current_page_item > a::after,
							 .main-navigation .current-menu-item > a::after,
							 .main-navigation .current_page_ancestor > a::after,
							 .main-navigation .current_page_parent > a::after,.widget_magazine-post-boxed-widget .entry-content .cat-links a::after,.widget_magazine-post-boxed-widget .mag-divider::after,.mag-divider::after',
			'property' => 'border-left-color',
		),
		array(
			'element'  => '#filters ul.filter-options li a.selected,
							.sidebar ul li a:hover,
							#secondary .widget_rss a:hover,
							.footer-top ul li a:hover,
							.widget_calendar table th a,
							.widget_calendar table td a,
							.site-footer .footer-top a:hover,
							.home .post-wrapper .latest-post:hover h4,     
							.hentry.sticky h1.entry-title a:hover,
							.hentry.sticky a:hover,
							.hentry.post h1 a:hover,
							.comment-metadata a:hover,
							a.more-link:hover,
							.site-main .comment-navigation a,
							#primary .entry-title a:hover,
							a,
							.widget-area .left-sidebar ul li a:hover,
							.copyright a,
							.copyright ul.menu li a:hover,
							.site-footer .footer-widgets a:hover,
							.breadcrumb-wrap .breadcrumb a:hover,
							.breadcrumb-wrap .breadcrumb a:focus,
							.site-footer .footer-widgets .widget_calendar table td a,
							.site-footer .footer-widgets .widget_rss ul a,
							.site-footer .footer-widgets .widget_tag_cloud a:hover,
							.latest-post-content h1 a:hover,
							.latest-post-content h2 a:hover,
							.latest-post-content h3 a:hover,
							.latest-post-content h4 a:hover,
							.latest-post-content h5 a:hover,
							.latest-post-content h6 a:hover,
							.copyright ul.menu li.current_page_item a,
							.comment-list > li article .comment-meta .comment-author b,
							.comment-list > li article .comment-meta .comment-author a,
							.comment-list > li article .comment-meta .comment-author cite,
							.comment-list > li article .reply i,.latest-post-content a.btn-readmore:hover,
							.woocommerce #content table.cart a.remove,
							.woocommerce table.cart a.remove,
							.woocommerce-page #content table.cart a.remove,
							.woocommerce-page table.cart a.remove,
					        .cart-subtotal .amount,
					        .woocommerce .woocommerce-breadcrumb a:hover,
					         .woocommerce-page .woocommerce-breadcrumb a:hover,.footer-bottom ul.menu li.current_page_item a, .footer-bottom ul.menu a:hover,.services-wrapper .service-content h5 a:hover,#recentcomments a,
					         .breaknews .breaknews-wrapper ul .bn-content a:hover,
					         .widget_magazine-highlighted-post-widget .single-highlited-post .highlights-content .magazine-slider-top-meta a:hover,#primary .widget_magazine-highlighted-post-widget .single-highlited-post .entry-title a:hover,
					         .widget_magazine-post-boxed-widget .magazine-blog-meta a:hover,#secondary .single-highlited-post h1:hover, #secondary .single-highlited-post h1 a:hover, .site-footer .footer-widgets .single-highlited-post h1:hover, .site-footer .footer-widgets .single-highlited-post h1 a:hover',
			'property' => 'color',
		),
		array(
			'element'  => 'th a,
							.left-sidebar #recentcomments a,
							#recentcomments a,
							.left-sidebar .widget_rss a,
							.widget_tag_cloud a:hover,.widget_magazine-featured-slider-widget .magazine-featured-slider-wrapper .flexslider .slides .flex-caption a:hover',
			'property' => 'color',
			'suffix' => '!important',
		),
		array(
			'element'  => '#primary .sticky,.woocommerce #content input.button:hover,
							.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,
							.woocommerce button.button:hover,
							.woocommerce input.button:hover,
							.woocommerce-page #content input.button:hover,.woocommerce-page a.button:hover,
							.woocommerce-page #respond input#submit:hover,
							.woocommerce-page button.button:hover,
							.woocommerce-page input.button:hover,
							.sub-menu .current_page_item > a,
							.sub-menu .current-menu-item > a,
							.sub-menu .current_page_ancestor > a,.main-navigation .sub-menu .current_page_item > a, .main-navigation .sub-menu .current-menu-item > a, .main-navigation .sub-menu .current_page_ancestor > a ',
			'property' => 'background-color',
			'suffix' => '!important',
		),
		array(
			'element' => '.site-header .branding .social .widget .textwidget li:hover a::after,
							.site-footer .footer-widgets .widget-title::before,
							.home .site-content #primary .post-wrapper-head h2::before,
							.social .widget_social-networks-widget ul li:hover a:after',
			'property' => 'border-top-color',
		),
		array(
			'element' => '.site-footer .footer-widgets .widget-title::before,
		                 .home .site-content #primary .post-wrapper-head h2::before,.widget_magazine-post-boxed-widget h3.widget-title',
			'property' => 'border-bottom-color',
		),
		array(
			'element' => '.widget_calendar table caption::before,.site-content .btn-mini::before ',
			'property' => 'border-right-color',
		),
		array(
			'element' => '.widget_calendar table caption::after,.site-content .btn-mini::after,
		                 .site-header .branding .site-branding::after,.main-navigation a:hover::after, .main-navigation .current_page_item > a::after, .main-navigation .current-menu-item > a::after, .main-navigation .current-menu-parent > a::after, .main-navigation .current_page_ancestor > a::after, .main-navigation .current_page_parent > a::after',
			'property' => 'border-left-color',
		),
	),
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_nav_bar_color',
	'label'    => __( 'Enable Navigation Bar BG Color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'nav_bar_color',
	'label'    => __( 'Navigation Bar BG Color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'color',
	'default'  => '#242424',
	"choices"  => array (
		'alpha' => true,
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_nav_bar_color',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output' => array(
		array(
			'element' => '#nav-wrap',
			'property' => 'background-color',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_nav_hover_color',
	'label'    => __( 'Enable Navigation Hover color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );    
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'nav_hover_color',
	'label'    => __( 'Navigation Hover Color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'color',
	'default'  => '#E5493A',
	"choices"  => array (
		'alpha' => true,
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_nav_hover_color',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output' => array(
		array(
			'element' => '.main-navigation .current_page_item > a:hover,
							.main-navigation .current-menu-item > a:hover,
							.main-navigation .current_page_ancestor > a:hover,
							.main-navigation ul.nav-menu > li a:hover,
							.current-menu-parent a:hover',
			'property' => 'background-color',
		),
		array(
			'element' => '.main-navigation a:hover::after',
			'property' => 'border-left-color',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_secondary_color',
	'label'    => __( 'Enable Custom Secondary color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'secondary_color',
	'label'    => __( 'Secondary Color', 'gem' ),
	'section'  => 'primary_color_field',
	'type'     => 'color',
	'default'  => '#222222',
	"choices"  => array (
		'alpha' => true,
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_secondary_color',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output' => array(
		array(
			'element' => '.not-found-inner a:hover,
							.footer-bottom p a:hover,
							.entry-meta span a:hover,
							.entry-footer span a:hover,
							#secondary .widget_rss .widget-title .rsswidget,
							.footer-top ul li a,
							.more-link .meta-nav,
							.error-404.not-found,
							a.more-link,
							.site-main .comment-navigation a:hover,
							a:hover,
							a:focus,
							a:active,
							.comment-list > li article .reply:hover i,
							.comment-list > li article .comment-meta .comment-author b:hover,
							.comment-list > li article .comment-meta .comment-author a:hover,
							.comment-list > li article .comment-meta .comment-author cite:hover,
							.widget_calendar table th a:hover,
							.widget_calendar table td a:hover',
			'property' => 'color',
		),
		array(
			'element' => 'th a:hover,
							#recentcomments a:hover,
							.left-sidebar .widget_rss a:hover',
			'property' => 'color',
			'suffix' => '!important',
		),
		array(
			'element' => '.home .flexslider .slides .flex-caption p a:hover,
							.home .flexslider .slides .flex-caption a:hover,
							.footer-widgets .textwidget .wpcf7-form input.wpcf7-submit:hover,
							.site-header .branding .social .widget .textwidget li a,
							.share-box ul li a,
							.site-footer .widget_social-networks-widget ul li a:hover,
							.site-footer .search-form input.search-submit:hover,
							.site-footer .search-form input[type="submit"]:hover',
			'property' => 'background-color',
		),
       array(
			'element' => '.flexslider .slides .flex-caption p a::after',
			'property' => 'border-left-color',
			'suffix' => '!important',
		),
        array(
			'element' => '.social .widget_social-networks-widget ul li a::after',
			'property' => 'border-top-color',
		),
	),
) );
// typography panel //

Gem_Kirki::add_panel( 'typography', array( 
	'title'       => __( 'Typography', 'gem' ),
	'description' => __( 'Typography and Link Color Settings', 'gem' ),
) );
   
    Gem_Kirki::add_section( 'typography_section', array(
		'title'          => __( 'General Settings','gem' ),
		'description'    => __( 'General Settings', 'gem'),
		'panel'          => 'typography', // Not typically needed.
	) );
	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'custom_typography',
		'label'    => __( 'Enable Custom Typography', 'gem' ),
		'description' => __('Save the Settings, and Reload this page to Configure the typography section','gem'),
		'section'  => 'typography_section',
		'type'     => 'switch',
		'choices' => array(
			'on'  => esc_attr__( 'Enable', 'gem' ),
			'off' => esc_attr__( 'Disable', 'gem' )
		),
		'tooltip' => __('Turn on to customize typography and turn off for default typography','gem'),
		'default'  => 'off',
	) );

$typography_setting = get_theme_mod('custom_typography',false );
if( $typography_setting ) :

        $body_font = get_theme_mod('body_family','Lato');		        
	    $body_color = get_theme_mod( 'body_color','#242424' );   
		$body_size = get_theme_mod( 'body_size','13');
		$body_weight = get_theme_mod( 'body_weight','regular');
		$body_weight == 'bold' ? $body_weight = '700':  $body_weight = 'regular';
		

	Gem_Kirki::add_section( 'body_font', array(
		'title'          => __( 'Body Font','gem' ),
		'description'    => __( 'Specify the body font properties', 'gem'),
		'panel'          => 'typography', // Not typically needed.
	) ); 


	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'body',
		'label'    => __( 'Body Settings', 'gem' ),
		'section'  => 'body_font', 
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => $body_font,
			'variant'        => $body_weight,
			'font-size'      => $body_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $body_color,
		),
		'output'      => array(
			array(
				'element' => 'body',
				//'suffix' => '!important',
			),
		),
	) );


	Gem_Kirki::add_section( 'heading_section', array(
		'title'          => __( 'Heading Font','gem' ),
		'description'    => __( 'Specify typography of H1, H2, H3, H4, H5, H6', 'gem'),
		'panel'          => 'typography', // Not typically needed.
	) );


	$h1_font = get_theme_mod('h1_family','Montserrat');
	$h1_color = get_theme_mod( 'h1_color','#242424' );
	$h1_size = get_theme_mod( 'h1_size','48');
	$h1_weight = get_theme_mod( 'h1_weight','700');
	$h1_weight == 'bold' ? $h1_weight = '700' : $h1_weight = 'regular';

	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'h1',
		'label'    => __( 'H1 Settings', 'gem' ),
		'section'  => 'heading_section',
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => $h1_font,
			'variant'        => $h1_weight,
			'font-size'      => $h1_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $h1_color,
		),
		'output'      => array(
			array(
				'element' => 'h1',
			),
		),
		
	) );

	$h2_font = get_theme_mod('h2_family','Montserrat');
	$h2_color = get_theme_mod( 'h2_color','#242424' );
	$h2_size = get_theme_mod( 'h2_size','36');
	$h2_weight = get_theme_mod( 'h2_weight','700');
	$h2_weight == 'bold' ? $h2_weight = '700' : $h2_weight = 'regular';

	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'h2',
		'label'    => __( 'H2 Settings', 'gem' ),
		'section'  => 'heading_section',
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => $h2_font,
			'variant'        => $h2_weight,
			'font-size'      => $h2_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $h2_color,
		),
		'output'      => array(
			array(
				'element' => 'h2',
			),
		),
		
	) );

	$h3_font = get_theme_mod('h3_family','Montserrat');
	$h3_color = get_theme_mod( 'h3_color','#242424' );
	$h3_size = get_theme_mod( 'h3_size','30');
	$h3_weight = get_theme_mod( 'h3_weight','700');
	$h3_weight == 'bold' ? $h3_weight = '700' : $h3_weight = 'regular';

	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'h3',
		'label'    => __( 'H3 Settings', 'gem' ),
		'section'  => 'heading_section',
		'type'     => 'typography',
		'default' => array(
			'font-family'    => $h3_font,
			'variant'        => $h3_weight,
			'font-size'      => $h3_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $h3_color,
		),
		'output'      => array(
			array(
				'element' => 'h3',
			),
		),
		
	) );

	$h4_font = get_theme_mod('h4_family','Montserrat');
	$h4_color = get_theme_mod( 'h4_color','#242424' );
	$h4_size = get_theme_mod( 'h4_size','24');
	$h4_weight = get_theme_mod( 'h4_weight','700');
	$h4_weight == 'bold' ? $h4_weight = '700' : $h4_weight = 'regular';


	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'h4',
		'label'    => __( 'H4 Settings', 'gem' ),
		'section'  => 'heading_section',
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => $h4_font,
			'variant'        => $h4_weight,
			'font-size'      => $h4_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $h4_color,
		),
		'output'      => array(
			array(
				'element' => 'h4',
			),
		),
		
	) );

    $h5_font = get_theme_mod('h5_family','Montserrat');
	$h5_color = get_theme_mod( 'h5_color','#242424' );
	$h5_size = get_theme_mod( 'h5_size','18');
	$h5_weight = get_theme_mod( 'h5_weight','700');
	$h5_weight == 'bold' ? $h5_weight = '700' : $h5_weight = 'regular';


	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'h5',
		'label'    => __( 'H5 Settings', 'gem' ),
		'section'  => 'heading_section',
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => $h5_font,
			'variant'        => $h5_weight,
			'font-size'      => $h5_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $h5_color,
		),
		'output'      => array(
			array(
				'element' => 'h5',
			),
		),
	) );

	$h6_font = get_theme_mod('h6_family','Montserrat');
	$h6_color = get_theme_mod( 'h6_color','#242424' );
	$h6_size = get_theme_mod( 'h6_size','16');
	$h6_weight = get_theme_mod( 'h6_weight','700');
	$h6_weight == 'bold' ? $h6_weight = '700' : $h6_weight = 'regular';


	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'h6',
		'label'    => __( 'H6 Settings', 'gem' ),
		'section'  => 'heading_section',
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => $h6_font,
			'variant'        => $h6_weight,
			'font-size'      => $h6_size.'px',
			'line-height'    => '1.8',
			'letter-spacing' => '0',
			'color'          => $h6_color,
		),
		'output'      => array(
			array(
				'element' => 'h6',
			),
		),
		
	) );

	// navigation font 
	Gem_Kirki::add_section( 'navigation_section', array(
		'title'          => __( 'Navigation Font','gem' ),
		'description'    => __( 'Specify Navigation font properties', 'gem'),
		'panel'          => 'typography', // Not typically needed.
	) );

	Gem_Kirki::add_field( 'gem', array(
		'settings' => 'navigation_font',
		'label'    => __( 'Navigation Font Settings', 'gem' ),
		'section'  => 'navigation_section',
		'type'     => 'typography',
		'default'     => array(
			'font-family'    => 'Lato',
			'variant'        => '700',
			'font-size'      => '15px',
			'line-height'    => '1.8', 
			'letter-spacing' => '0',
			'color'          => '#ffffff',
		),
		'output'      => array(
			array(
				'element' => '.main-navigation a',
			),
		),
	) );
endif; 


// header panel //

Gem_Kirki::add_panel( 'header_panel', array(     
	'title'       => __( 'Header', 'gem' ),
	'description' => __( 'Header Related Options', 'gem' ), 
) );  

Gem_Kirki::add_section( 'header', array(
	'title'          => __( 'General Header','gem' ),
	'description'    => __( 'Header options', 'gem'),
	'panel'          => 'header_panel', // Not typically needed.  
) );    

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_text_color',
	'label'    => __( 'Header Text Color', 'gem' ),
	'section'  => 'header',
	'type'     => 'color',
	"choices"  => array (
		'alpha' => true,
	),
	'default'  => '#ffffff', 
	'output'   => array(
		array(
			'element'  => '.main-navigation a,.site-header .branding .site-branding .site-title a,.main-navigation ul ul a,.main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current-menu-parent > a, .main-navigation .current_page_ancestor > a, .main-navigation .current_page_parent > a',
			'property' => 'color',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_search',
	'label'    => __( 'Enable to Show Search box in Header', 'gem' ), 
	'section'  => 'header',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'on',
) );
/* Breaking News section  */
Gem_Kirki::add_section( 'header_breaking_news', array(
	'title'          => __( 'Breaking News','gem' ),
	'description'    => __( 'Breaking News', 'gem'),
	'panel'          => 'header_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_breaking_news',
	'label'    => __( 'Enable Breaking News', 'gem' ), 
	'section'  => 'header_breaking_news',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'active_callback' => array(
		array(
			'setting'  => 'home-page-type',
			'operator' => '==',
			'value'    => 'magazine',
		),
    ),
	'default'  => 'off',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_breaking_news_title',
	'label'    => __( 'Breaking News Title', 'gem' ),
	'section'  => 'header_breaking_news',
	'type'     => 'text',
	'active_callback' => array(
		array(
			'setting'  => 'home-page-type', 
			'operator' => '==',
			'value'    => 'magazine',
		),
		array(
			'setting'  => 'header_breaking_news', 
			'operator' => '==',
			'value'    => true,
		),
    ),
    'default' => __('LATEST NEWS','gem'),   
) );
/* STICKY HEADER section */   

Gem_Kirki::add_section( 'stricky_header', array(
	'title'          => __( 'Sticky Menu','gem' ),
	'description'    => __( 'sticky header', 'gem'),
	'panel'          => 'header_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array(    
	'settings' => 'sticky_header',
	'label'    => __( 'Enable Sticky Header', 'gem' ),
	'section'  => 'stricky_header',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'sticky_header_position',
	'label'    => __( 'Enable Sticky Header Position', 'gem' ),
	'section'  => 'stricky_header',
	'type'     => 'radio-buttonset',
	'choices' => array(
		'top'  => esc_attr__( 'Top', 'gem' ),
		'bottom' => esc_attr__( 'Bottom', 'gem' )
	),
	'active_callback'    => array(
		array(
			'setting'  => 'sticky_header',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'top',
) );

Gem_Kirki::add_section( 'scroll_to_top', array(
	'title'          => __( 'Scroll to Top','gem' ),
	'description'    => __( 'Scroll to Top Button', 'gem'),
	'panel'          => 'header_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array(    
	'settings' => 'scroll_to_top_button',
	'label'    => __( 'Enable Scroll to Top', 'gem' ),
	'section'  => 'scroll_to_top',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'on',
) );

/*
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_top_margin',
	'label'    => __( 'Header Top Margin', 'gem' ),
	'description' => __('Select the top margin of header in pixels','gem'),
	'section'  => 'header',
	'type'     => 'number',
	'choices' => array(
		'min' => 1,
		'max' => 1000,
		'step' => 1,
	),
	//'default'  => '213',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_bottom_margin',
	'label'    => __( 'Header Bottom Margin', 'gem' ),
	'description' => __('Select the bottom margin of header in pixels','gem'),
	'section'  => 'header',
	'type'     => 'number',
	'choices' => array(
		'min' => 1,
		'max' => 1000,
		'step' => 1,
	),
	//'default'  => '213',
) );*/

Gem_Kirki::add_section( 'header_image', array(
	'title'          => __( 'Header Background Image & Video','gem' ),
	'description'    => __( 'Custom Header Image & Video options', 'gem'),
	'panel'          => 'header_panel', // Not typically needed.  
) );

Gem_Kirki::add_field( 'gem', array(   
	'settings' => 'header_bg_size',
	'label'    => __( 'Header Background Size', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'radio-buttonset', 
    'choices' => array(
		'cover'  => esc_attr__( 'Cover', 'gem' ),
		'contain' => esc_attr__( 'Contain', 'gem' ),
		'auto'  => esc_attr__( 'Auto', 'gem' ),
		'inherit'  => esc_attr__( 'Inherit', 'gem' ),
	),
	'output'   => array(
		array(
			'element'  => '.header-image',
			'property' => 'background-size',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_image',
			'operator' => '!=',
			'value'    => 'remove-header',
		),
	),
	'default'  => 'cover',
	'tooltip' => __('Header Background Image Size','gem'),
) );

/*Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_height',
	'label'    => __( 'Header Background Image Height', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'number',
	'choices' => array(
		'min' => 100,
		'max' => 600,
		'step' => 1,
	),
	'default'  => '213',
) ); */
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_bg_repeat',
	'label'    => __( 'Header Background Repeat', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'no-repeat' => esc_attr__('No Repeat', 'gem'),
        'repeat' => esc_attr__('Repeat', 'gem'),
        'repeat-x' => esc_attr__('Repeat Horizontally','gem'),
        'repeat-y' => esc_attr__('Repeat Vertically','gem'),
	),
	'output'   => array(
		array(
			'element'  => '.header-image',
			'property' => 'background-repeat',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_image',
			'operator' => '!=',
			'value'    => 'remove-header',
		),
	),
	'default'  => 'repeat',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_bg_position', 
	'label'    => __( 'Header Background Position', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'center top' => esc_attr__('Center Top', 'gem'),
        'center center' => esc_attr__('Center Center', 'gem'),
        'center bottom' => esc_attr__('Center Bottom', 'gem'),
        'left top' => esc_attr__('Left Top', 'gem'),
        'left center' => esc_attr__('Left Center', 'gem'),
        'left bottom' => esc_attr__('Left Bottom', 'gem'),
        'right top' => esc_attr__('Right Top', 'gem'),
        'right center' => esc_attr__('Right Center', 'gem'),
        'right bottom' => esc_attr__('Right Bottom', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.header-image',
			'property' => 'background-position',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_image',
			'operator' => '!=',
			'value'    => 'remove-header',
		),
	),
	'default'  => 'center center',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_bg_attachment',
	'label'    => __( 'Header Background Attachment', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'scroll' => esc_attr__('Scroll', 'gem'),
        'fixed' => esc_attr__('Fixed', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.header-image',
			'property' => 'background-attachment',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_image',
			'operator' => '!=',
			'value'    => 'remove-header',
		),
	),
	'default'  => 'scroll',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_overlay',
	'label'    => __( 'Enable Header( Background ) Overlay', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
  
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'header_overlay_color',
	'label'    => __( 'Header Overlay ( Background )color', 'gem' ),
	'section'  => 'header_image',
	'type'     => 'color',
	"choices"  => array (
		'alpha' => true,
	),
	'default'  => '#E5493A', 
	'output'   => array(
		array(
			'element'  => '.overlay-header',
			'property' => 'background-color',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_overlay',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

/*
/* e-option start */
/*
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'custon_favicon',
	'label'    => __( 'Custom Favicon', 'gem' ),
	'section'  => 'header',
	'type'     => 'upload',
	'default'  => '',
) ); */
/* e-option start */ 
/* Blog page section */


/* Blog panel */

Gem_Kirki::add_panel( 'blog_panel', array(     
	'title'       => __( 'Blog', 'gem' ),
	'description' => __( 'Blog Related Options', 'gem' ),     
) ); 
Gem_Kirki::add_section( 'blog', array(
	'title'          => __( 'Blog Page','gem' ),
	'description'    => __( 'Blog Related Options', 'gem'),
	'panel'          => 'blog_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'blog-slider',
	'label'    => __( 'Enable to show the slider on blog page', 'gem' ),
	'section'  => 'blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'off',
	'tooltip' => __('To show the slider on posts page','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'blog_slider_cat',
	'label'    => __( 'Blog Slider Posts category', 'gem' ),
	'section'  => 'blog',
	'type'     => 'select',
	'choices' => Kirki_Helper::get_terms( 'category' ),
	'active_callback' => array(
		array(
			'setting'  => 'blog-slider',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Create post ( Goto Dashboard => Post => Add New ) and Post Featured Image ( Preferred size is 1200 x 450 pixels ) as taken as slider image and Post Content as taken as Flexcaption.','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'blog_slider_count',
	'label'    => __( 'No. of Sliders', 'gem' ),
	'section'  => 'blog',
	'type'     => 'number',
	'choices' => array(
		'min' => 1,
		'max' => 999,
		'step' => 1,
	),
	'default'  => 2,
	'active_callback' => array(
		array(
			'setting'  => 'blog-slider',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Enter number of slides you want to display under your selected Category','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'blog_layout',
	'label'    => __( 'Select Blog Page Layout you prefer', 'gem' ),
	'section'  => 'blog',
	'type'     => 'select',
	'multiple'  => 1,
	'choices' => array(
		1  => esc_attr__( 'Default ( One Column )', 'gem' ),
		2 => esc_attr__( 'Two Columns ', 'gem' ),
		3 => esc_attr__( 'Three Columns ( Without Sidebar ) ', 'gem' ),
		4 => esc_attr__( 'Two Columns With Masonry', 'gem' ),
		5 => esc_attr__( 'Three Columns With Masonry ( Without Sidebar ) ', 'gem' ),
	),
	'default'  => 1,
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'featured_image',
	'label'    => __( 'Enable Featured Image', 'gem' ),
	'section'  => 'blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
	'tooltip' => __('Enable Featured Image for blog page','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'more_text',
	'label'    => __( 'More Text', 'gem' ),
	'section'  => 'blog',
	'type'     => 'text',
	'description' => __('Text to display in case of text too long','gem'),
	'default' => __('Read More','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'featured_image_size',
	'label'    => __( 'Choose the Featured Image Size for Blog Page', 'gem' ),
	'section'  => 'blog',
	'type'     => 'select',
	'multiple'  => 1,
	'choices' => array(
		1 => esc_attr__( 'Large Featured Image', 'gem' ),
		2 => esc_attr__( 'Small Featured Image', 'gem' ),
		3 => esc_attr__( 'Original Size', 'gem' ),
		4 => esc_attr__( 'Medium', 'gem' ),
		5 => esc_attr__( 'Large', 'gem' ), 
	),
	'default'  => 1,
	'active_callback' => array(
		array(
			'setting'  => 'featured_image',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Set large and medium image size: Goto Dashboard => Settings => Media', 'gem') ,
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_single_post_top_meta',
	'label'    => __( 'Enable to display top post meta data', 'gem' ),
	'section'  => 'blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
	'tooltip' => __('Enable to Display Top Post Meta Details. This will reflect for blog page, single blog page, blog full width & blog large templates','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'single_post_top_meta',
	'label'    => __( 'Activate and Arrange the Order of Top Post Meta elements', 'gem' ),
	'section'  => 'blog',
	'type'     => 'sortable',
	'choices'     => array(
		1 => esc_attr__( 'date', 'gem' ),
		2 => esc_attr__( 'author', 'gem' ),
		3 => esc_attr__( 'comment', 'gem' ),
		4 => esc_attr__( 'category', 'gem' ),
		5 => esc_attr__( 'tags', 'gem' ),
		6 => esc_attr__( 'edit', 'gem' ),
	),
	'default'  => array(1, 2, 6),
	'active_callback' => array(
		array(
			'setting'  => 'enable_single_post_top_meta',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Click above eye icon in order to activate the field, This will reflect for blog page, single blog page, blog full width & blog large templates','gem'),

) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'enable_single_post_bottom_meta',
	'label'    => __( 'Enable to display bottom post meta data', 'gem' ),
	'section'  => 'blog', 
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'tooltip' => __('Enable to Display Top Post Meta Details. This will reflect for blog page, single blog page, blog full width & blog large templates','gem'),
	'default'  => 'on',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'single_post_bottom_meta',
	'label'    => __( 'Activate and arrange the Order of Bottom Post Meta elements', 'gem' ),
	'section'  => 'blog',
	'type'     => 'sortable',
	'choices'     => array(
		1 => esc_attr__( 'date', 'gem' ),
		2 => esc_attr__( 'author', 'gem' ),
		3 => esc_attr__( 'comment', 'gem' ),
		4 => esc_attr__( 'category', 'gem' ),
		5 => esc_attr__( 'tags', 'gem' ),
		6 => esc_attr__( 'edit', 'gem' ),
	),
	'default'  => array(3,4,5),
	'active_callback' => array(
		array(
			'setting'  => 'enable_single_post_bottom_meta',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Click above eye icon in order to activate the field, This will reflect for blog page, single blog page, blog full width & blog large templates','gem'),
) );


/* Single Blog page section */

Gem_Kirki::add_section( 'single_blog', array(
	'title'          => __( 'Single Blog Page','gem' ),
	'description'    => __( 'Single Blog Page Related Options', 'gem'),
	'panel'          => 'blog_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'single_featured_image',
	'label'    => __( 'Enable Single Post Featured Image', 'gem' ),
	'section'  => 'single_blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
	'tooltip' => __('Enable Featured Image for Single Post Page','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'single_featured_image_size',
	'label'    => __( 'Choose the featured image display type for Single Post Page', 'gem' ),
	'section'  => 'single_blog',
	'type'     => 'radio',
	'choices' => array(
		1  => esc_attr__( 'Large Featured Image', 'gem' ),
		2 => esc_attr__( 'Small Featured Image', 'gem' ),
		3 => esc_attr__( 'FullWidth Featured Image', 'gem' ),
	),
	'default'  => 1,
	'active_callback' => array(
		array(
			'setting'  => 'single_featured_image',
			'operator' => '==',
			'value'    => true,
		),
    ),
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'author_bio_box',
	'label'    => __( 'Enable Author Bio Box below single post', 'gem' ),
	'section'  => 'single_blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'off',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'related_posts',
	'label'    => __( 'Show Related Posts', 'gem' ),
	'section'  => 'single_blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'off',
	'tooltip' => __('Show the Related Post for Single Blog Page','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'related_posts_hierarchy',
	'label'    => __( 'Related Posts Must Be Shown As:', 'gem' ),
	'section'  => 'single_blog',
	'type'     => 'radio',
	'choices' => array(
		1  => esc_attr__( 'Related Posts By Tags', 'gem' ),
		2 => esc_attr__( 'Related Posts By Categories', 'gem' ) 
	),
	'default'  => 1,
	'active_callback' => array(
		array(
			'setting'  => 'related_posts',
			'operator' => '==',
			'value'    => true,
		),
    ),
    'tooltip' => __('Select the Hierarchy','gem'),

) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'comments',
	'label'    => __( ' Show Comments', 'gem' ),
	'section'  => 'single_blog',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
	'tooltip' => __('Show the Comments for Single Blog Page','gem'),
) );
/* FOOTER SECTION 
footer panel */

Gem_Kirki::add_panel( 'footer_panel', array(     
	'title'       => __( 'Footer', 'gem' ),
	'description' => __( 'Footer Related Options', 'gem' ),     
) );  

Gem_Kirki::add_section( 'footer', array(
	'title'          => __( 'Footer','gem' ),
	'description'    => __( 'Footer related options', 'gem'),
	'panel'          => 'footer_panel', // Not typically needed.
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_widgets',
	'label'    => __( 'Footer Widget Area', 'gem' ),
	'description' => sprintf(__('Select widgets, Goto <a href="%1$s"target="_blank"> Customizer </a> => Widgets','gem'),admin_url('customize.php') ),
	'section'  => 'footer',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
) );
/* Choose No.Of Footer area */
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_widgets_count',
	'label'    => __( 'Choose No.of widget area you want in footer', 'gem' ),
	'section'  => 'footer',
	'type'     => 'radio-buttonset',
	'choices' => array(
		1  => esc_attr__( '1', 'gem' ),
		2  => esc_attr__( '2', 'gem' ),
		3  => esc_attr__( '3', 'gem' ),
		4  => esc_attr__( '4', 'gem' ),
	),
	'default'  => 4,
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'copyright',
	'label'    => __( 'Footer Copyright Text', 'gem' ),
	'section'  => 'footer',
	'type'     => 'textarea',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_top_margin',
	'label'    => __( 'Footer Top Margin', 'gem' ),
	'description' => __('Select the top margin of footer in pixels','gem'),
	'section'  => 'footer',
	'type'     => 'number',
	'choices' => array(
		'min' => 1,
		'max' => 1000,
		'step' => 1, 
	),
	'output'   => array(
		array(
			'element'  => '.site-footer',
			'property' => 'margin-top',
			'units' => 'px',
		),
	),
	'default'  => 0,
) );

/* CUSTOM FOOTER BACKGROUND IMAGE 
footer background image section  */

Gem_Kirki::add_section( 'footer_image', array(
	'title'          => __( 'Footer Image','gem' ),
	'description'    => __( 'Custom Footer Image options', 'gem'),
	'panel'          => 'footer_panel', // Not typically needed.
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_image',
	'label'    => __( 'Upload Footer Background Image', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'upload',
	'default'  => '',
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-image',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_size',
	'label'    => __( 'Footer Background Size', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'radio-buttonset',
    'choices' => array(
		'cover'  => esc_attr__( 'Cover', 'gem' ),
		'contain' => esc_attr__( 'Contain', 'gem' ),
		'auto'  => esc_attr__( 'Auto', 'gem' ),
		'inherit'  => esc_attr__( 'Inherit', 'gem' ),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-size',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'cover',
	'tooltip' => __('Footer Background Image Size','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_repeat',
	'label'    => __( 'Footer Background Repeat', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'no-repeat' => esc_attr__('No Repeat', 'gem'),
        'repeat' => esc_attr__('Repeat', 'gem'),
        'repeat-x' => esc_attr__('Repeat Horizontally','gem'),
        'repeat-y' => esc_attr__('Repeat Vertically','gem'),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-repeat',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'repeat',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_position',
	'label'    => __( 'Footer Background Position', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'center top' => esc_attr__('Center Top', 'gem'),
        'center center' => esc_attr__('Center Center', 'gem'),
        'center bottom' => esc_attr__('Center Bottom', 'gem'),
        'left top' => esc_attr__('Left Top', 'gem'),
        'left center' => esc_attr__('Left Center', 'gem'),
        'left bottom' => esc_attr__('Left Bottom', 'gem'),
        'right top' => esc_attr__('Right Top', 'gem'),
        'right center' => esc_attr__('Right Center', 'gem'),
        'right bottom' => esc_attr__('Right Bottom', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-position',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'center center',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_attachment',
	'label'    => __( 'Footer Background Attachment', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'scroll' => esc_attr__('Scroll', 'gem'),
        'fixed' => esc_attr__('Fixed', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-attachment',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'scroll',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_overlay',
	'label'    => __( 'Enable Footer( Background ) Overlay', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
  
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_overlay_color',
	'label'    => __( 'Footer Overlay ( Background )color', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'color',
	"choices"  => array (
		'alpha' => true,
	),
	'default'  => '#E5493A', 
	'active_callback' => array(
		array(
			'setting'  => 'footer_overlay',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output'   => array(
		array(
			'element'  => '.overlay-footer',
			'property' => 'background-color',
		),
	),
) );


// single page section //

Gem_Kirki::add_section( 'single_page', array(
	'title'          => __( 'Single Page','gem' ),
	'description'    => __( 'Single Page Related Options', 'gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'single_page_featured_image',
	'label'    => __( 'Enable Single Page Featured Image', 'gem' ),
	'section'  => 'single_page',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'single_page_featured_image_size',
	'label'    => __( 'Single Page Featured Image Size', 'gem' ),
	'section'  => 'single_page',
	'type'     => 'radio-buttonset',
	'choices' => array(
		1  => esc_attr__( 'Normal', 'gem' ),
		2 => esc_attr__( 'FullWidth', 'gem' ) 
	),
	'default'  => 1,
	'active_callback' => array(
		array(
			'setting'  => 'single_page_featured_image',
			'operator' => '==',
			'value'    => true,
		),
    ),
) );

// Layout section //

Gem_Kirki::add_section( 'layout', array(
	'title'          => __( 'Layout','gem' ),
	'description'    => __( 'Layout Related Options', 'gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'site-style',
	'label'    => __( 'Site Style', 'gem' ),
	'section'  => 'layout',
	'type'     => 'radio-buttonset',
	'choices' => array(
		'wide' =>  esc_attr__('Wide', 'gem'),
        'boxed' =>  esc_attr__('Boxed', 'gem'),
        'fluid' =>  esc_attr__('Fluid', 'gem'),  
        //'static' =>  esc_attr__('Static ( Non Responsive )', 'gem'),
    ),
	'default'  => 'wide',
	'tooltip' => __('Select the default site layout. Defaults to "Wide".','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'sidebar_position',
	'label'    => __( 'Main Layout', 'gem' ),
	'section'  => 'layout',
	'type'     => 'radio-image',   
	'description' => __('Select main content and sidebar arrangement.','gem'),
	'choices' => array(
		'left' =>  get_template_directory_uri() . '/admin/kirki/assets/images/2cl.png',
        'right' =>  get_template_directory_uri() . '/admin/kirki/assets/images/2cr.png',
        'two-sidebar' =>  get_template_directory_uri() . '/admin/kirki/assets/images/3cm.png',  
        'two-sidebar-left' =>  get_template_directory_uri() . '/admin/kirki/assets/images/3cl.png',
        'two-sidebar-right' =>  get_template_directory_uri() . '/admin/kirki/assets/images/3cr.png',
        'fullwidth' =>  get_template_directory_uri() . '/admin/kirki/assets/images/1c.png',
        'no-sidebar' =>  get_template_directory_uri() . '/images/no-sidebar.png',
    ),
	'default'  => 'right',
	'tooltip' => __('This layout will be reflected in all pages unless unique layout template is set for specific page','gem'),
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'body_top_margin',
	'label'    => __( 'Body Top Margin', 'gem' ),
	'description' => __('Select the top margin of body element in pixels','gem'),
	'section'  => 'layout',
	'type'     => 'number',
	'choices' => array(
		'min' => 0,
		'max' => 200,
		'step' => 1,
	),
	'active_callback'    => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
	),
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'margin-top',
			'units'    => 'px',
		),
	),
	'default'  => 0,
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'body_bottom_margin',
	'label'    => __( 'Body Bottom Margin', 'gem' ),
	'description' => __('Select the bottom margin of body element in pixels','gem'),
	'section'  => 'layout',
	'type'     => 'number',
	'choices' => array(
		'min' => 0,
		'max' => 200,
		'step' => 1,
	),
	'active_callback'    => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
	),
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'margin-bottom',
			'units'    => 'px',
		),
	),
	'default'  => 0,
) );

/* LAYOUT SECTION  */
/*
Gem_Kirki::add_section( 'layout', array(
	'title'          => __( 'Layout','gem' ),   
	'description'    => __( 'Layout settings that affects overall site', 'gem'),
	'panel'          => 'gem_options', // Not typically needed.
) );



Gem_Kirki::add_field( 'gem', array(
	'settings' => 'primary_sidebar_width',
	'label'    => __( 'Primary Sidebar Width', 'gem' ),
	'section'  => 'layout',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'1' => __( 'One Column', 'gem' ),
		'2' => __( 'Two Column', 'gem' ),
		'3' => __( 'Three Column', 'gem' ),
		'4' => __( 'Four Column', 'gem' ),
		'5' => __( 'Five Column ', 'gem' ),
	),
	'default'  => '5',  
	'tooltip' => __('Select the width of the Primary Sidebar. Please note that the values represent grid columns. The total width of the page is 16 columns, so selecting 5 here will make the primary sidebar to have a width of approximately 1/3 ( 4/16 ) of the total page width.','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'secondary_sidebar_width',
	'label'    => __( 'Secondary Sidebar Width', 'gem' ),
	'section'  => 'layout',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'1' => __( 'One Column', 'gem' ),
		'2' => __( 'Two Column', 'gem' ),
		'3' => __( 'Three Column', 'gem' ),
		'4' => __( 'Four Column', 'gem' ),
		'5' => __( 'Five Column ', 'gem' ),
	),            
	'default'  => '5',  
	'tooltip' => __('Select the width of the Secondary Sidebar. Please note that the values represent grid columns. The total width of the page is 16 columns, so selecting 5 here will make the primary sidebar to have a width of approximately 1/3 ( 4/16 ) of the total page width.','gem'),
) ); 

*/

/* FOOTER SECTION 
footer panel */

Gem_Kirki::add_panel( 'footer_panel', array(     
	'title'       => __( 'Footer', 'gem' ),
	'description' => __( 'Footer Related Options', 'gem' ),     
) );  

Gem_Kirki::add_section( 'footer', array(
	'title'          => __( 'Footer','gem' ),
	'description'    => __( 'Footer related options', 'gem'),
	'panel'          => 'footer_panel', // Not typically needed.
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_widgets',
	'label'    => __( 'Footer Widget Area', 'gem' ),
	'description' => sprintf(__('Select widgets, Goto <a href="%1$s"target="_blank"> Customizer </a> => Widgets','gem'),admin_url('customize.php') ),
	'section'  => 'footer',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' ) 
	),
	'default'  => 'on',
) );
/* Choose No.Of Footer area */
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_widgets_count',
	'label'    => __( 'Choose No.of widget area you want in footer', 'gem' ),
	'section'  => 'footer',
	'type'     => 'radio-buttonset',
	'choices' => array(
		1  => esc_attr__( '1', 'gem' ),
		2  => esc_attr__( '2', 'gem' ),
		3  => esc_attr__( '3', 'gem' ),
		4  => esc_attr__( '4', 'gem' ),
	),
	'default'  => 4,
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'copyright',
	'label'    => __( 'Footer Copyright Text', 'gem' ),
	'section'  => 'footer',
	'type'     => 'textarea',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_top_margin',
	'label'    => __( 'Footer Top Margin', 'gem' ),
	'description' => __('Select the top margin of footer in pixels','gem'),
	'section'  => 'footer',
	'type'     => 'number',
	'choices' => array(
		'min' => 1,
		'max' => 1000,
		'step' => 1, 
	),
	'output'   => array(
		array(
			'element'  => '.site-footer',
			'property' => 'margin-top',
			'units' => 'px',
		),
	),
	'default'  => 0,
) );

/* CUSTOM FOOTER BACKGROUND IMAGE 
footer background image section  */

Gem_Kirki::add_section( 'footer_image', array(
	'title'          => __( 'Footer Image','gem' ),
	'description'    => __( 'Custom Footer Image options', 'gem'),
	'panel'          => 'footer_panel', // Not typically needed.
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_image',
	'label'    => __( 'Upload Footer Background Image', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'upload',
	'default'  => '',
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-image',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_size',
	'label'    => __( 'Footer Background Size', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'radio-buttonset',
    'choices' => array(
		'cover'  => esc_attr__( 'Cover', 'gem' ),
		'contain' => esc_attr__( 'Contain', 'gem' ),
		'auto'  => esc_attr__( 'Auto', 'gem' ),
		'inherit'  => esc_attr__( 'Inherit', 'gem' ),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-size',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'cover',
	'tooltip' => __('Footer Background Image Size','gem'),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_repeat',
	'label'    => __( 'Footer Background Repeat', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'no-repeat' => esc_attr__('No Repeat', 'gem'),
        'repeat' => esc_attr__('Repeat', 'gem'),
        'repeat-x' => esc_attr__('Repeat Horizontally','gem'),
        'repeat-y' => esc_attr__('Repeat Vertically','gem'),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-repeat',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'repeat',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_position',
	'label'    => __( 'Footer Background Position', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'center top' => esc_attr__('Center Top', 'gem'),
        'center center' => esc_attr__('Center Center', 'gem'),
        'center bottom' => esc_attr__('Center Bottom', 'gem'),
        'left top' => esc_attr__('Left Top', 'gem'),
        'left center' => esc_attr__('Left Center', 'gem'),
        'left bottom' => esc_attr__('Left Bottom', 'gem'),
        'right top' => esc_attr__('Right Top', 'gem'),
        'right center' => esc_attr__('Right Center', 'gem'),
        'right bottom' => esc_attr__('Right Bottom', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-position',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'center center',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_bg_attachment',
	'label'    => __( 'Footer Background Attachment', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'scroll' => esc_attr__('Scroll', 'gem'),
        'fixed' => esc_attr__('Fixed', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.footer-image',
			'property' => 'background-attachment',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'footer_bg_image',
			'operator' => '=',
			'value'    => true,
		),
	),
	'default'  => 'scroll',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_overlay',
	'label'    => __( 'Enable Footer( Background ) Overlay', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )
	),
	'default'  => 'off',
) );
  
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'footer_overlay_color',
	'label'    => __( 'Footer Overlay ( Background )color', 'gem' ),
	'section'  => 'footer_image',
	'type'     => 'color',
	"choices"  => array (
		'alpha' => true,
	),
	'default'  => '#E5493A', 
	'active_callback' => array(
		array(
			'setting'  => 'footer_overlay',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output'   => array(
		array(
			'element'  => '.overlay-footer',
			'property' => 'background-color',
		),
	),
) );

//  slider panel //

Gem_Kirki::add_panel( 'slider_panel', array(   
	'title'       => __( 'Slider Settings', 'gem' ),  
	'description' => __( 'Flex slider related options', 'gem' ), 
	'priority'    => 11,    
) );

//  flexslider section  //

Gem_Kirki::add_section( 'flex_caption_section', array(
	'title'          => __( 'Flexcaption Settings','gem' ),
	'description'    => __( 'Flexcaption Related Options', 'gem'),
	'panel'          => 'slider_panel', // Not typically needed.
) );
Gem_Kirki::add_field( 'gem', array( 
	'settings' => 'enable_flex_caption_edit',
	'label'    => __( 'Enable Custom Flexcaption Settings', 'gem' ),
	'section'  => 'flex_caption_section',
	'type'     => 'switch',
	'choices' => array(
		'on'  => esc_attr__( 'Enable', 'gem' ),
		'off' => esc_attr__( 'Disable', 'gem' )  
	),
	'default'  => 'on',
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_bg',
	'label'    => __( 'Select Flexcaption Background Color', 'gem' ),
	'section'  => 'flex_caption_section',
	'type'     => 'color',
	'default'  => 'rgba(36, 36, 36, 0.6)',
	"choices"  => array (
		'alpha' => true,
	),
	'output'   => array(
		array( 
			'element'  => '.flex-caption',
			'property' => 'background-color',  
			'suffix' => '!important',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_align',
	'label'    => __( 'Select Flexcaption Alignment', 'gem' ),
	'section'  => 'flex_caption_section', 
	'type'     => 'select',
	'default'  => 'right',
	'choices' => array(
		'left' => esc_attr__( 'Left', 'gem' ),
		'right' => esc_attr__( 'Right', 'gem' ),
		'center' => esc_attr__( 'Center', 'gem' ),
		'justify' => esc_attr__( 'Justify', 'gem' ),
	),
	'output'   => array(
		array(
			'element'  => '.home .flexslider .slides .flex-caption p,.home .flexslider .slides .flex-caption h1, .home .flexslider .slides .flex-caption h2, .home .flexslider .slides .flex-caption h3, .home .flexslider .slides .flex-caption h4, .home .flexslider .slides .flex-caption h5, .home .flexslider .slides .flex-caption h6,.flexslider .slides .flex-caption,.flexslider .slides .flex-caption h1, .flexslider .slides .flex-caption h2, .flexslider .slides .flex-caption h3, .flexslider .slides .flex-caption h4, .flexslider .slides .flex-caption h5, .flexslider .slides .flex-caption h6,.flexslider .slides .flex-caption p,.flexslider .slides .flex-caption',
			'property' => 'text-align',
			//'suffix' => '!important',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),
) );
 Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_bg_position',
	'label'    => __( 'Select Flexcaption Background Horizontal Position', 'gem' ),
	'tooltip' => __('Select how far from right, Default value Right = 3 ( in % )','gem'),
	'section'  => 'flex_caption_section',
	'type'     => 'number',
	'default'  => '3',
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1, 
	),
	'output'   => array(
		array(
			'element'  => '.flexslider .slides .flex-caption,.home .flexslider .slides .flex-caption',
			'property' => 'right',
			'suffix' => '%',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),

) ); 
 Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_bg_vertical_position',
	'label'    => __( 'Select Flexcaption Background Vertical Position', 'gem' ),
	'tooltip' => __('Select how far from bottom, Default value Bottom = 5 ( in % )','gem'),
	'section'  => 'flex_caption_section',
	'type'     => 'number',
	'default'  => '5',
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1, 
	),
	'output'   => array(
		array(
			'element'  => '.flexslider .slides .flex-caption,.home .flexslider .slides .flex-caption',
			'property' => 'bottom',
			'suffix' => '%',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),
	
) ); 
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_bg_width',
	'label'    => __( 'Select Flexcaption Background Width', 'gem' ),
	'section'  => 'flex_caption_section',
	'type'     => 'number',
	'default'  => '35',
	'tooltip' => __('Select Flexcaption Background Width , Default width value 35','gem'),
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1, 
	),
	'output'   => array(
		array(
			'element'  => '.flexslider .slides .flex-caption,.home .flexslider .slides .flex-caption',
			'property' => 'width',
			'suffix' => '%',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),

) ); 
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_responsive_bg_width',
	'label'    => __( 'Select Responsive Flexcaption Background Width', 'gem' ),
	'section'  => 'flex_caption_section',
	'type'     => 'number',
	'default'  => '100',
	'tooltip' => __('Select Responsive Flexcaption Background Width, Default width value 100 ( This value will apply for max-width: 768px )','gem'),
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1, 
	),
	'output'   => array(
		array(
			'element'  => '.flexslider .slides .flex-caption,.home .flexslider .slides .flex-caption',
			'property' => 'width',
			'media_query' => '@media (max-width: 768px)',
			'value_pattern' => 'calc($%)',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'flexcaption_color',
	'label'    => __( 'Select Flexcaption Font Color', 'gem' ),
	'section'  => 'flex_caption_section',
	'type'     => 'color',
	'default'  => '#ffffff',
	"choices"  => array (
		'alpha' => true,
	),
	'output'   => array(
		array(
			'element'  => '.flex-caption,.home .flexslider .slides .flex-caption p,.flexslider .slides .flex-caption p,.home .flexslider .slides .flex-caption h1, .home .flexslider .slides .flex-caption h2, .home .flexslider .slides .flex-caption h3, .home .flexslider .slides .flex-caption h4, .home .flexslider .slides .flex-caption h5, .home .flexslider .slides .flex-caption h6,.flexslider .slides .flex-caption h1,.flexslider .slides .flex-caption h2,.flexslider .slides .flex-caption h3,.flexslider .slides .flex-caption h4,.flexslider .slides .flex-caption h5,.flexslider .slides .flex-caption h6',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'enable_flex_caption_edit',
			'operator' => '==',
			'value'    => true,
		),
    ),
) );

 if( class_exists( 'WooCommerce' ) ) {
	Gem_Kirki::add_section( 'woocommerce_section', array(
		'title'          => __( 'WooCommerce','gem' ),
		'description'    => __( 'Theme options related to woocommerce', 'gem'),
		'priority'       => 11, 
		'theme_supports' => '', // Rarely needed.
	) );
	Gem_Kirki::add_field( 'woocommerce', array(
		'settings' => 'woocommerce_sidebar',
		'label'    => __( 'Enable Woocommerce Sidebar', 'gem' ),
		'description' => __('Enable Sidebar for shop page','gem'),
		'section'  => 'woocommerce_section',
		'type'     => 'switch',
		'choices' => array(
			'on'  => esc_attr__( 'Enable', 'gem' ),
			'off' => esc_attr__( 'Disable', 'gem' ) 
		),

		'default'  => 'on',
	) );
}
	
// background color ( rename )

Gem_Kirki::add_section( 'colors', array(
	'title'          => __( 'Background Color','gem' ),
	'description'    => __( 'This will affect overall site background color', 'gem'),
	//'panel'          => 'skin_color_panel', // Not typically needed.
	'priority' => 11,
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'general_background_color',
	'label'    => __( 'General Background Color', 'gem' ),
	'section'  => 'colors',
	'type'     => 'color',
	"choices"  => array (
		'alpha' => true,
	),
	'default'  => '#ffffff',
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'background-color',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'content_background_color',
	'label'    => __( 'Content Background Color', 'gem' ),
	'section'  => 'colors',
	'type'     => 'color',
	'description' => __('when you are select boxed layout content background color will reflect the grid area','gem'), 
	"choices"  => array (
		'alpha' => true,
	), 
	'default'  => '#ffffff',
	'output'   => array(
		array(
			'element'  => '.boxed-container',
			'property' => 'background-color',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
	),
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'general_background_image',
	'label'    => __( 'General Background Image', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'upload',
	'default'  => '',
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'background-image',
		),
	),
) );

// background image ( general & boxed layout ) //


Gem_Kirki::add_field( 'gem', array(
	'settings' => 'general_background_repeat',
	'label'    => __( 'General Background Repeat', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'no-repeat' => esc_attr__('No Repeat', 'gem'),
        'repeat' => esc_attr__('Repeat', 'gem'),
        'repeat-x' => esc_attr__('Repeat Horizontally','gem'),
        'repeat-y' => esc_attr__('Repeat Vertically','gem'),
	),
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'background-repeat',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'general_background_image',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'repeat',  
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'general_background_size',
	'label'    => __( 'General Background Size', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
    'choices' => array(
		'cover'  => esc_attr__( 'Cover', 'gem' ),
		'contain' => esc_attr__( 'Contain', 'gem' ),
		'auto'  => esc_attr__( 'Auto', 'gem' ),
		'inherit'  => esc_attr__( 'Inherit', 'gem' ),
	),
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'background-size',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'general_background_image',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'cover',  
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'general_background_attachment',
	'label'    => __( 'General Background Attachment', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'scroll' => esc_attr__('Scroll', 'gem'),
        'fixed' => esc_attr__('Fixed', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'background-attachment',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'general_background_image',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'fixed',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'general_background_position',
	'label'    => __( 'General Background Position', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'center top' => esc_attr__('Center Top', 'gem'),
        'center center' => esc_attr__('Center Center', 'gem'),
        'center bottom' => esc_attr__('Center Bottom', 'gem'),
        'left top' => esc_attr__('Left Top', 'gem'),
        'left center' => esc_attr__('Left Center', 'gem'),
        'left bottom' => esc_attr__('Left Bottom', 'gem'),
        'right top' => esc_attr__('Right Top', 'gem'),
        'right center' => esc_attr__('Right Center', 'gem'),
        'right bottom' => esc_attr__('Right Bottom', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => 'body',
			'property' => 'background-position',
		),
	),
	'active_callback'    => array(
		array(
			'setting'  => 'general_background_image', 
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'center top',  
) );


/* CONTENT BACKGROUND ( boxed background image )*/

Gem_Kirki::add_field( 'gem', array(  
	'settings' => 'content_background_image',
	'label'    => __( 'Content Background Image', 'gem' ),
	'description' => __('when you are select boxed layout content background image will reflect the grid area','gem'),
	'section'  => 'background_image',
	'type'     => 'upload',
	'default'  => '',
	'output'   => array(
		array(
			'element'  => '.boxed-container',
			'property' => 'background-image',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
	),
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'content_background_repeat',
	'label'    => __( 'Content Background Repeat', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'no-repeat' => esc_attr__('No Repeat', 'gem'),
        'repeat' => esc_attr__('Repeat', 'gem'),
        'repeat-x' => esc_attr__('Repeat Horizontally','gem'),
        'repeat-y' => esc_attr__('Repeat Vertically','gem'),
	),
	'output'   => array(
		array(
			'element'  => '.boxed-container',
			'property' => 'background-repeat',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
		array(
			'setting'  => 'content_background_image', 
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'repeat',  
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'content_background_size',
	'label'    => __( 'Content Background Size', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
    'choices' => array(
		'cover'  => esc_attr__( 'Cover', 'gem' ),
		'contain' => esc_attr__( 'Contain', 'gem' ),
		'auto'  => esc_attr__( 'Auto', 'gem' ),
		'inherit'  => esc_attr__( 'Inherit', 'gem' ),
	),
	'output'   => array(
		array(
			'element'  => '.boxed-container',
			'property' => 'background-size',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
		array(
			'setting'  => 'content_background_image', 
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'cover',  
) );

Gem_Kirki::add_field( 'gem', array(
	'settings' => 'content_background_attachment',
	'label'    => __( 'Content Background Attachment', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'scroll' => esc_attr__('Scroll', 'gem'),
        'fixed' => esc_attr__('Fixed', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.boxed-container',
			'property' => 'background-attachment',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
		array(
			'setting'  => 'content_background_image', 
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'fixed',  
) );
Gem_Kirki::add_field( 'gem', array(
	'settings' => 'content_background_position',
	'label'    => __( 'Content Background Position', 'gem' ),
	'section'  => 'background_image',
	'type'     => 'select',
	'multiple'    => 1,
	'choices'     => array(
		'center top' => esc_attr__('Center Top', 'gem'),
        'center center' => esc_attr__('Center Center', 'gem'),
        'center bottom' => esc_attr__('Center Bottom', 'gem'),
        'left top' => esc_attr__('Left Top', 'gem'),
        'left center' => esc_attr__('Left Center', 'gem'),
        'left bottom' => esc_attr__('Left Bottom', 'gem'),
        'right top' => esc_attr__('Right Top', 'gem'),
        'right center' => esc_attr__('Right Center', 'gem'),
        'right bottom' => esc_attr__('Right Bottom', 'gem'),
	),
	'output'   => array(
		array(
			'element'  => '.boxed-container',
			'property' => 'background-position',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'site-style',
			'operator' => '==',
			'value'    => 'boxed',
		),
		array(
			'setting'  => 'content_background_image', 
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'  => 'center top',  
) );

do_action('wbls-gem_pro_customizer_options');
do_action('gem_child_customizer_options');
