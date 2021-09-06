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
define( 'DB_NAME', 'midcenturycanberra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'sx3{MqgM^3>V[! 1~zX p5eoUW!e_P^%YrM=L@:,qQz:rV7#j!Nq[0g9vft28yEt' );
define( 'SECURE_AUTH_KEY',  'f_aW!ssdr0[$CsS`oMmmQwYlG-^:g 6W78zt!s~&gbS^h-zv*,T%lwk+e,{eN:_)' );
define( 'LOGGED_IN_KEY',    'C*).Agm;LS:7Z|JhlwLM=`VIyG}W3W&H5r @vh=6[I;a-,3U@TZMbg^DK4_*lwLI' );
define( 'NONCE_KEY',        '}}e831I*2y31srDQR1B8xGW:sIEWH<dvj1?Da~JH@Sci7H1gQmn`nE:|;{9:T6~|' );
define( 'AUTH_SALT',        'q?L)>QbK1*O>v`tp~-XUF<TeU^{uK+[d(<:cEP.xr4H 3QTh_$2Y)Vq@b3%E&d^-' );
define( 'SECURE_AUTH_SALT', 'F3Ss@)Gz)}bnp391UeARBET&8bXX1~Nyg*T:Md=RI~x-#ZMNsT,BrFNnzB;A,J%|' );
define( 'LOGGED_IN_SALT',   '{|c|OwGZzn7UN,[N}c+X#]YjrLm.z~*>t`D(<OPL&?{D?lg6$oKjXieNc{mX4UK4' );
define( 'NONCE_SALT',       'qz]=}3$t;b(LOG;u<>ZmA$N8xcX)pxHCS%1)+e%sz*P:qR~VMc>N9?5RO]lQ!y5w' );

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
