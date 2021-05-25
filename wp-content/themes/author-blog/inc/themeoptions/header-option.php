<?php
/**
 * Sticky Header
 */
$wp_customize->add_section(
	'header_sections',
	array(
		'priority'   => 1,
		'panel'      => 'author-blog',
		'title'      => __( 'Header Section', 'author-blog' ),
		'capability' => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'transparent_menu_bg',
	array(
		'default'           => false,
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	'transparent_menu_bg',
	array(
		'label'   => __( 'Transparent Menu Background', 'author-blog' ),
		'section' => 'header_sections',
		'type'    => 'checkbox',
	)
);
$wp_customize->add_setting(
	'sticky_header',
	array(
		'default'           => false,
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	'sticky_header',
	array(
		'label'   => __( 'Sticky Header On//Off', 'author-blog' ),
		'section' => 'header_sections',
		'type'    => 'checkbox',
	)
);