<?php
$wp_customize->add_section(
	'footer_sections',
	array(
		'priority'   => 1,
		'panel'      => 'author-blog',
		'title'      => __( 'Footer Sections', 'author-blog' ),
		'capability' => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'transparent_footer_bg',
	array(
		'default'           => false,
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	'transparent_footer_bg',
	array(
		'label'   => __( 'Transparent Footer Background', 'author-blog' ),
		'section' => 'footer_sections',
		'type'    => 'checkbox',
	)
);
$wp_customize->add_setting(
	'footer_column',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_radio',
		'default'           => 'four',
	)
);
$wp_customize->add_control(
	'footer_column',
	array(
		'label'   => __( 'Footer Column', 'author-blog' ),
		'section' => 'footer_sections',
		'type'    => 'radio',
		'choices' => array(
			'two'   => __( '2 Column', 'author-blog' ),
			'three' => __( '3 Column', 'author-blog' ),
			'four'  => __( '4 Column', 'author-blog' ),
		),
	)
);
