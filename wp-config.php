<?php
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
define( 'DB_NAME', 'atelierp5' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UK`{,x+I+k|lnQp4U#NnH*+_1ZJ;/*&)YSF8Ya7pEp}rBW =e@-#2tl+]}g$H6Z;' );
define( 'SECURE_AUTH_KEY',  'N=jjXTDo*=YG/)Ur}%0PkMGLRlIyP1*dO+K|zpZf6x4}jGO|j8IOdw{xg68d_oN&' );
define( 'LOGGED_IN_KEY',    ';0rCLgQpI<asdVmXORHz><Y5>Kp%[b2^&kMV;D]*ou]VOnrJ$p0}1Z~>dMUItA~N' );
define( 'NONCE_KEY',        'Vlz1!#1B3wHrw<{^(kh/aVu8^-!x|rbT.9v9Y]txZ{g:PW!5Mo_Sjg[|4Tp<?,CN' );
define( 'AUTH_SALT',        '-:=lgQ?&k8L~f*%uN.7!Ev0xu~V`VNa2zEnV?cAg|$/@t^%),Np3e/&-J.HpY8v0' );
define( 'SECURE_AUTH_SALT', '890u~=WN}WIjo4JO_#~vo>r!$x0^c:]CPayJAbBZi?JA{cpzEffH<}A9@MKTQt7j' );
define( 'LOGGED_IN_SALT',   '$5+|aq>m>~Z`@=s+Z~6;=Hb$sK9t$qqr|c 1ze5V2U(?xYReSs9[]Gq[<LZLKbgC' );
define( 'NONCE_SALT',       'w*Z,bLiX1c|(RFmgf-RIPicyL_ =m|x#DHh0>rC&#sv6vq$ip2AfXK9d!5z8gOks' );

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
