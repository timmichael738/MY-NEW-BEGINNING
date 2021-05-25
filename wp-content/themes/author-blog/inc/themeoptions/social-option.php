<?php
$wp_customize->add_section(
	'social_links',
	array(
		'priority'    => 1,
		'panel'       => 'author-blog',
		'title'       => __( 'Social Links', 'author-blog' ),
		'description' => __( 'Social Links. to disable social Icon keep that fields empty.', 'author-blog' ),
		'capability'  => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'facebook',
	array(
		'default'           => '',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'facebook',
	array(
		'label'   => __( 'Facebook Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'twitter',
	array(
		'default'           => '',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'twitter',
	array(
		'label'   => __( 'twitter Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'pinterest',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'pinterest',
	array(
		'label'   => __( 'pinterest Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'youtube',
	array(
		'default'           => '',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'youtube',
	array(
		'label'   => __( 'youtube Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'amazon',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'amazon',
	array(
		'label'   => __( 'Amazon Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'linkedin',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'linkedin',
	array(
		'label'   => __( 'linkedin Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'instagram',
	array(
		'default'           => '',
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'instagram',
	array(
		'label'   => __( 'Instagram Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'github',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'github',
	array(
		'label'   => __( 'github Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'stumbleupon',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'stumbleupon',
	array(
		'label'   => __( 'stumbleupon Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'tumblr',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'tumblr',
	array(
		'label'   => __( 'tumblr Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'whatsapp',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'whatsapp',
	array(
		'label'   => __( 'WhatsApp Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'weixin',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'weixin',
	array(
		'label'   => __( 'weixin Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'snapchat',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'snapchat',
	array(
		'label'   => __( 'snapchat Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'qq',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'qq',
	array(
		'label'   => __( 'QQ Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
$wp_customize->add_setting(
	'reddit',
	array(
		'transport'         => 'refresh', // Options: refresh or postMessage.
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'reddit',
	array(
		'label'   => __( 'reddit Link', 'author-blog' ),
		'section' => 'social_links',
		'type'    => 'url',
	)
);
