<?php
/*Blog Page Settings*/
$wp_customize->add_section(
	'blog_page_settings',
	array(
		'priority'    => 6,
		'panel'       => 'author-blog',
		'title'       => __( 'Blog Settings', 'author-blog' ),
		'description' => __( 'Customize Blog Page', 'author-blog' ),
		'capability'  => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'grid_column',
	array(
		'default'           => 'col-sm-4',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_radio',
	)
);
$wp_customize->add_control(
	'grid_column',
	array(
		'label'   => __( 'Grid Column', 'author-blog' ),
		'section' => 'blog_page_settings',
		'type'    => 'radio',
		'choices' => array(
			'col-sm-3' => __( '4 Colmun', 'author-blog' ),
			'col-sm-4' => __( '3 Column', 'author-blog' ),
			'col-sm-6' => __( '2 Column', 'author-blog' ),
		),
	)
);
$wp_customize->add_setting(
	'blog_page_sidebar',
	array(
		'default'           => 'no',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_radio',
	)
);
$wp_customize->add_control(
	'blog_page_sidebar',
	array(
		'label'   => __( 'Blog & Archive Page Sidebar', 'author-blog' ),
		'section' => 'blog_page_settings',
		'type'    => 'radio',
		'choices' => array(
			'left'  => __( 'Left Sidebar', 'author-blog' ),
			'right' => __( 'Right Sidebar', 'author-blog' ),
			'no'    => __( 'No Sidebar', 'author-blog' ),
		),
	)
);

$wp_customize->add_setting(
	'blog_page_pagination',
	array(
		'default'           => 'center',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_radio',
	)
);
$wp_customize->add_control(
	'blog_page_pagination',
	array(
		'label'   => __( 'Pagination Alignment', 'author-blog' ),
		'section' => 'blog_page_settings',
		'type'    => 'radio',
		'choices' => array(
			'left'   => __( 'Left', 'author-blog' ),
			'right'  => __( 'Right', 'author-blog' ),
			'center' => __( 'center', 'author-blog' ),
		),
	)
);
