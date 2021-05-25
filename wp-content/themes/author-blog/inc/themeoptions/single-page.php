<?php
$wp_customize->add_section(
	'post_details',
	array(
		'priority'   => 1,
		'panel'      => 'author-blog',
		'title'      => __( 'Single Post', 'author-blog' ),
		'capability' => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'single_page_sidebar',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_select',
		'default'           => 'right',
	)
);
$wp_customize->add_control(
	'single_page_sidebar',
	array(
		'label'   => __( 'Single Post Sidebar', 'author-blog' ),
		'section' => 'post_details',
		'type'    => 'select',
		'choices' => array(
			'left'  => __( 'Left Sidebar', 'author-blog' ),
			'right' => __( 'Right Sidebar', 'author-blog' ),
			'no'    => __( 'No Sidebar', 'author-blog' ),
		),
	)
);
$wp_customize->add_setting(
	'post_navigation_show',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_checkbox',
		'default'           => true,
	)
);
$wp_customize->add_control(
	'post_navigation_show',
	array(
		'label'   => __( 'Post Navigation Show', 'author-blog' ),
		'section' => 'post_details',
		'type'    => 'checkbox',
	)
);