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
define( 'AUTH_KEY',         '}K%WKRdB2++U5R1Wrfuk1A];Us?JcD&A/Vi6gZwv0.L8%TZ.SUy%tFrY`MHi;yhx' );
define( 'SECURE_AUTH_KEY',  'yBG!On[.Pc~7E62M~?w[/OQ1ww!JX8tY!8@e.1OV<C;Ulk2k8O<60JFAOeA+Lyn(' );
define( 'LOGGED_IN_KEY',    '=`}UAV8U=<wGQNsIe_`o[ Zto0je$^)O4GEw>eCz],UX c+,Do}vQaVwF}Cbk19)' );
define( 'NONCE_KEY',        '`Xd!#V%xy]?Y=My^({qLR{`UX_Q(B, `xwnmm Ej($<~cLk~U8)(u]gd(HSgEy#W' );
define( 'AUTH_SALT',        '2fYNk_,TE2,xiV{HjjH)2/;BC^zs0#>[<T+Z[l)L`nOqwdA2qb7JWDNiT.Y-.e,~' );
define( 'SECURE_AUTH_SALT', '=*(Z$FQ4|2|b}(gc*O`7FIT`f4p1GN`!0}5$9}fKY,r2r=i]U|tPy&`V8UlfIb_9' );
define( 'LOGGED_IN_SALT',   'g9%-8hiTl8^(=Z<?*2+e_O{Vz=fV#,5)@Y-ITW^RBydM0mGrL*&~J_j5;7d4(00r' );
define( 'NONCE_SALT',       'nIy1@.s8gXv+5{%v{~#7ADgIho[Mu#ve|3!3T/pe~JGrV;+QYRXUKhT8 uDl]v|6' );

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
