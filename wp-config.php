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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ascmnew_db' );

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
define( 'AUTH_KEY',         '4|w6G0+W)kH,Hn6W0H50sP2`J&L@GR%;.IaG^E.i%i#<X:ui6sr;3A0%6.S^nhdk' );
define( 'SECURE_AUTH_KEY',  '4nF!sFNaT+pnsdn!-EPR^{/;4ldGqxC!V9lqL<Wpk-{FDYn:EzAD[]xc=u/->pjy' );
define( 'LOGGED_IN_KEY',    '$F^~O75V# G:0;|I[=:_CDmw;LXr -d%vrXT(Ms4my-jT:F0nALiA}]G65fqL#KP' );
define( 'NONCE_KEY',        'EJMJmN9LJj4J/<RC_6EIe7cOcdDS&y_:cN=hViz26cIfeVoM*,n0PN<Ju-SdpyhH' );
define( 'AUTH_SALT',        'O6:@V3.7<u+Nqxx#@p-5n&R>iNY+T*N>u ar-Z5 HI0O,[(eJBmkC?l|D B3bAt;' );
define( 'SECURE_AUTH_SALT', 'i)y#*~Ckahl^/Y7C1K$jU>4gTfq4)J}IQcfBY:+zZdqBN^{:Ua~Jd7I=lc/m)[xJ' );
define( 'LOGGED_IN_SALT',   'ArwMKpC]($56tzBJ0-HfYLx)9 ~iK>r>Ld2N:p|4#enVgNLwxM;Y&DS4s~VU76,^' );
define( 'NONCE_SALT',       'dbk1&/:!$5Q?:5x#c}/z+s]S0,Plbv~UP[JQxh^l}=kz^Z4S:#i@T$^MM<HDi&I;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
