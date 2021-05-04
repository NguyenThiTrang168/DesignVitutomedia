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
define( 'DB_NAME', 'danaco' );

/** MySQL database username */
define( 'DB_USER', 'danaco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'danaco@123@@' );

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
define( 'AUTH_KEY',         '=vqM>t>`ik_.j^g^XE>d<j+apjlt9JGKi^iYXLWW=2qo~7Getj0ocaKl}`EM+z=:' );
define( 'SECURE_AUTH_KEY',  'XL~[!If8<844SBSUZ5v5O08V=5l5jRHD,.D$}YJcw^uP0,PSE7td(Y^+z._NL7dw' );
define( 'LOGGED_IN_KEY',    'X{]&-hhAS8r5N^n:=iP`~cS=V!u ;Ij.rkb;{5wokhDBI5 ~?[D)7/I!)xs?H<{_' );
define( 'NONCE_KEY',        ';-#am;fnE|;Xb}[G>uI4Q,um2Tb>nd]A],G_QwOP8|.F2H`ek5-@/}1+!]n~&Mjn' );
define( 'AUTH_SALT',        'yHxBcNUYk[~G$i]^|eCoh6@pB!`5+ZzJY/d[KQCPz6~e;n$29![SZ.|ASn32A;#m' );
define( 'SECURE_AUTH_SALT', '!6JwNwPC$xi7T/qPi84Ln6B]W_u.O 6=Y%X{f0ZoBTht@9yBW8q:zCO_H#`Z/W7(' );
define( 'LOGGED_IN_SALT',   '^W>q#P|6q9$iEb`=%?fj$;+Bf1hQv:Dy<B<B3Suwck(z >ng[@orOVe6p9Pp+&z3' );
define( 'NONCE_SALT',       '!mU_,f9TtT5fxhKhBr0mq[4{HAyPz<mvSZin`Fy>,LQ(*l/j.52X{h|e u}XfBw>' );

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
