<?php
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => '#ff9585',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Primary Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'footer_background_color',
	array(
		'default'           => '#1a1a1a',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_background_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Footer Background', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'book_title_color',
	array(
		'default'           => '#ffffff',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'book_title_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Title Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'book_paragraph_color',
	array(
		'default'           => '#ffffff',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'book_paragraph_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Description Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'button_bg_color',
	array(
		'default'           => '#ff9585',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'button_bg_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Button Background Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'button_text_color',
	array(
		'default'           => '#ffffff',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'button_text_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Button Text Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'copyright_top_br_color',
	array(
		'default'           => '#262626',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'copyright_top_br_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Copyright Top Border Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'copyright_text_color',
	array(
		'default'           => '#ffffff',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'copyright_text_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Copyright Text Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'copyright_link_color',
	array(
		'default'           => '#ab9595',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'copyright_link_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Copyright Link Color', 'author-blog' ),
		)
	)
);
$wp_customize->add_setting(
	'copyright_link_hover_color',
	array(
		'default'           => '#ff9585',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'copyright_link_hover_color',
		array(
			'section' => 'colors',
			'label'   => __( 'Copyright Link Hover Color', 'author-blog' ),
		)
	)
);
