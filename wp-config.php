<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mask_man' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D))?.0do-WOS[6[d|RBYa;%Rq^g1E2t5[YEc]8QOT.Udl}U^@9?z-!M;kgV@]lV2' );
define( 'SECURE_AUTH_KEY',  '][7 t//B0a2UGVpD;H<V2$4;a`qb8S0Yhv_VfEwxgt5krfy16FnZu^UEb?rd4vHC' );
define( 'LOGGED_IN_KEY',    'fO}]~lC~4&M@}*)L*sX5qwi5es4,F]k?1]Sd=w(ikF/` 2xc3.5:_Y:q*yu.h)gM' );
define( 'NONCE_KEY',        'Jd{<) 8aB_<(nF372i.oj8:HH7(PH6l1+6gA1Nyz-hxmME[&l$=i8$fxsl4PS6Gb' );
define( 'AUTH_SALT',        'z/8$YvhT%fp7ePg~yBL6jHfaeZwz!4kD?kn662DEd!;.hQ%PcM`^WM3lrc)&c}PO' );
define( 'SECURE_AUTH_SALT', 'QP:yz.xg5 _(w)VzRHk]<w cHB8C/B0GMNAEiDoQ;i&jmUBoVGH&g)oX~C_$_lcK' );
define( 'LOGGED_IN_SALT',   '@dI0D-c6#EY6S.<`MYbi:[b~s*6[%Hp mnm{DZ0*r*~fHN;;=)*FzJPv>SGz)exp' );
define( 'NONCE_SALT',       'W$*&A~9)j[&>{3@a}C|4Oqke.&H$}I}/[W/Npkv%|]$NmEge_1%D&[vcUO[6t#Oj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
