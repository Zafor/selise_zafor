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
define( 'DB_NAME', 'selise' );

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
define( 'AUTH_KEY',         'Li*gx&w(R6KMUI{Uz[0Bz#c)r=D >k}D.b7k%x&FBk)GIgBmHrh]n(N6vLGxL2%v' );
define( 'SECURE_AUTH_KEY',  'Orrxpr-.nbU2gq{KV<O;w)?Nk;eA2@}pi#s6eO:lG^V>eZ2Y&:t;=pgx6uw1jMLl' );
define( 'LOGGED_IN_KEY',    'Rj?pIE*k%5}`e)$J59l*0TMbHFQ>-!6V;Ta|Gv3F=%y:KB5;|X&*3-1:bw@B8WM_' );
define( 'NONCE_KEY',        't#=]X:Dba_gCO bl|oN#UXPU5)xO*.WWdg+XVkk>7pUYkM;psSGUfbxc{JQ6Pi> ' );
define( 'AUTH_SALT',        '+a}0Vfdx:Q=&)[A0%bXt:T+1(nEqI?vNgb#j/:Q@tx;&:K!5/9 ;iR;:`ddoEK(h' );
define( 'SECURE_AUTH_SALT', 'tefI1IRIphw=a GthoFajgZq|S#CL0h9*azW0NDMwp|# t<1pE3#l9hP$T]/]h:H' );
define( 'LOGGED_IN_SALT',   '[qKh5ii5bNnF_[@!=fuG-hZ`M}tTdmG4kXCC :^fA+f%CA cLWcP=>?8$<?9S?C?' );
define( 'NONCE_SALT',       'UUF|EG7Njgg^6V!uBUnUSxI{hSrJn`U*Vj3Vk+xL$NXK~T,c9fDmYoL=)PiZhU2Q' );

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
