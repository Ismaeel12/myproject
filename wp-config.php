<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ismaeel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XPa/7?[F}g`{Wv8rL_?HWN_-F3#OsDT-qRzO=LA[oI1<f?5g7cytQLRDl)@ l]9#' );
define( 'SECURE_AUTH_KEY',  'K`%7p[~vt*5+;#]I0TuSrD/ Ihps#GhC}OH2i#b(b-Wn)zwwO_ZY]rQvyYw=]4-~' );
define( 'LOGGED_IN_KEY',    'N+&6.kCu^hs!kw|~Vb71Qww^#?diKnADZa>pG[+m5g;6{GvkblGlxD]:T{=W7-<<' );
define( 'NONCE_KEY',        '5G,`HqJ)AdAc=V5YfgTa0VZGT=VPOXr,z$,?3T7Z<3)BD*(H5zKi0I:zy|k<#4?/' );
define( 'AUTH_SALT',        '}qmNw}T[O1W(@Zjyc3Z-.kO4W9fQo/3P:S-;Eyo0:!h4UXGh<%D7;bG_Exu7^,LT' );
define( 'SECURE_AUTH_SALT', 'l=g~+tTS%2m~5fXn+}&WTKsw@q>J_@@qDHQhjc|Z1kT(.W85|&Ljsu6^2aM8.`*u' );
define( 'LOGGED_IN_SALT',   ' xa6VJ+iW`KKk#.@1Z?SdOg80w46l1o1f1Q9}k1h6^W4!4p8i;~ue^Yq>{.dxj_R' );
define( 'NONCE_SALT',       '/=8|{^n9$mKnSA*=vlq<0@mcA-B-27;-:niEhv.z+2>+Ic:YT~Run6_$l^HUBAfT' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
