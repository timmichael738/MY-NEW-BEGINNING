<?php
/*Book Section*/
$wp_customize->add_section(
	'book_section',
	array(
		'priority'    => 6,
		'panel'       => 'author-blog',
		'title'       => __( 'Book Section', 'author-blog' ),
		'description' => __( 'Customize Book Section', 'author-blog' ),
		'capability'  => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'book_section_show_hide',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_checkbox',
		'default'           => true,
	)
);
$wp_customize->add_control(
	'book_section_show_hide',
	array(
		'label'   => __( 'Book Section On//Off', 'author-blog' ),
		'section' => 'book_section',
		'type'    => 'checkbox',
	)
);
$wp_customize->add_setting(
	'book_image_upload',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'author_blog_sanitize_image',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'book_image_upload',
		array(
			'label'   => __( 'Upload Image', 'author-blog' ),
			'section' => 'book_section',
		)
	)
);
$wp_customize->add_setting(
	'book_name',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'wp_kses_post',
		'default'           => '',
	)
);
$wp_customize->add_control(
	'book_name',
	array(
		'label'   => __( 'Name of Book', 'author-blog' ),
		'section' => 'book_section',
		'type'    => 'textarea',
	)
);
$wp_customize->add_setting(
	'book_title',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'wp_kses_post',
		'default'           => __( 'Looking for a Great Book to Read? Look No Further!', 'author-blog' ),
	)
);
$wp_customize->add_control(
	'book_title',
	array(
		'label'   => __( 'Title', 'author-blog' ),
		'section' => 'book_section',
		'type'    => 'textarea',
	)
);
$wp_customize->add_setting(
	'book_description',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'wp_kses_post',
		'default'           => __( 'This section is perfect for displaying your paid book or your free email optin offer. You can turn it off or make changes to it from your theme options panel.', 'author-blog' ),
	)
);
$wp_customize->add_control(
	'book_description',
	array(
		'label'   => __( 'Description', 'author-blog' ),
		'section' => 'book_section',
		'type'    => 'textarea',
	)
);
$wp_customize->add_setting(
	'book_button_text',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => __( 'Get Your Copy Today>>', 'author-blog' ),
	)
);
$wp_customize->add_control(
	'book_button_text',
	array(
		'label'   => __( 'Button Text', 'author-blog' ),
		'section' => 'book_section',
		'type'    => 'text',
	)
);
$wp_customize->add_setting(
	'book_button_link',
	array(
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'default'           => '#',
	)
);
$wp_customize->add_control(
	'book_button_link',
	array(
		'label'   => __( 'Button Link', 'author-blog' ),
		'section' => 'book_section',
		'type'    => 'url',
	)
);