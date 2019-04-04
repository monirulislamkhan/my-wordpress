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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-wordpress' );

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
define( 'AUTH_KEY',         '7Y^ew4O:(np(zT&^0(kA:ql#t|nO|,7ZWhq:kbV@o-$@WKw_Bi_]6X`K?uO:n__D' );
define( 'SECURE_AUTH_KEY',  'm0<Kg?~F9!o4|fjJhqC< 5nu13f[nh*ho@*Ri#33tx382|U*g},H4wQB8N~3SDd#' );
define( 'LOGGED_IN_KEY',    'roWgX63gFQ9iDdaR;4N?yd776zaC=Ceip?n[#xU3M]w*pv3+64l;CyT3MMIVs*3>' );
define( 'NONCE_KEY',        'j)VE)3?lQ&n_Ax]t#1shf7iZJWj%/8s{eZ`/bC}XQN3b@_{AP$0g_ok:wUldp~_m' );
define( 'AUTH_SALT',        'wLmW0U+|H]/Nx:qe[+=m()geIftI9#WeDxA@3u8>gs;~yd|5MJ8UIF^@/i7O1l.%' );
define( 'SECURE_AUTH_SALT', 'xa+l{K&uUm3qZ*sz@m>m,Ta3h>2.{q`4pvricXvD_4Upi*1#<ZEERXFi=.>k$%Bf' );
define( 'LOGGED_IN_SALT',   'hRJ{5x}/AL){f^SD{<E;E|/bp&{9qQBeIZq9kAJR:)CCQ.X/r6QpeSi&):bYI5Ba' );
define( 'NONCE_SALT',       'oDj7!YfN1*lp^wx$hP()O;s{(<2_%#leY0odvVI#ne{iDh=g?lIR;RA{jXPH{Nl!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
