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
define( 'DB_NAME', 'dbgq0rwhtshd9c' );

/** MySQL database username */
define( 'DB_USER', 'ugz0zhybkji70' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alugrasysjzp' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'a7eU~)h$6nK%8I*z;d d kQ~pc]y$N6wa1@:#tNJL1WNpyp-YsoI)Q!_s7McXsVy' );
define( 'SECURE_AUTH_KEY',  'G5M/jyY{OR6 -RX<Mx|T5*>`#$d~bbmL1YJLG/rS) EKq e}+;hKzzFG[1&3P(_K' );
define( 'LOGGED_IN_KEY',    '*bkBUiZ%5G*`vy@R?D2]>]xBQj^FT2<_<328|Ot9D3@=!P+#?a0G6tf6lAO~^Nt_' );
define( 'NONCE_KEY',        'LdSLv4aq`m@3`f&FI7hJsn,Y_L?M.+Dxz>-~;E^OFh(TM-l]cs0Y`]dxT;2WgW;l' );
define( 'AUTH_SALT',        '2-WL5rL*N#cgtLm&Cdh=L3uegt^@^1$@j&I5%gOP3F&vyS},66~3#3FGOS=;0kTu' );
define( 'SECURE_AUTH_SALT', 'ff(7@lb%hL`zC7xngf8stCUK&.aaNHv:%jL~@+:[PB?@8wCw]I%N$%G<18F>^WqF' );
define( 'LOGGED_IN_SALT',   'q_=/nN!7e@[g..t~*umI}f&i^]AV>~!=3y4V)_+^3>M97R^iSpPpTuu35S5:P5S{' );
define( 'NONCE_SALT',       '6A_U}rSxx9#r*%+09f00NkhP7Pbd2Jmp|`BuNYXxp=R3t1F^<O*9apbc]JcPyo /' );

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
