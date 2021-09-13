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
define( 'DB_NAME', 'week6' );

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
define( 'AUTH_KEY',         'g5}Ak9vSIv3-WaZ}3?bECxbN3P*X,www^sLX AVC}7U-05XssEd6M%<m5u[{7e8U' );
define( 'SECURE_AUTH_KEY',  'UlrtpT1%e*=BfG;)dC5Ltta!(mblPYHcC!ys%5v=j<g+(,8 M~Qs!j +h*>bZ_2~' );
define( 'LOGGED_IN_KEY',    '^,.kDZkR%:L(K]NE3RbQAqg< LORi>}Ffw&Y$>41g8Cw#2.p[IR:D<:sYtq* z62' );
define( 'NONCE_KEY',        'f,>R,+Bv:v0(jikNuQv1*vG%v8Xc~)CP9)u DW@3+~1er^Q;Jd&@3qV7+QT-N39!' );
define( 'AUTH_SALT',        'C>wYYV<Ryf</iw>$=ZQCvz~y5Hh>f8x[V/r#GL]fq*a0a}&_r*oHfdaG7lD7h`$F' );
define( 'SECURE_AUTH_SALT', '0xtwB8~V!la4>X8B {0bDn&rcD_On83.pf;TnL9m<Yid~XU{D4V7(4; (Aa{fU?[' );
define( 'LOGGED_IN_SALT',   'IFi@9+SPeo_/=k|iC+nTHwi+s%I<yfBOt#jDbcN>#M!I>JC~hMN1E7U69!j5ZRK(' );
define( 'NONCE_SALT',       'V+<!(&9tio71+6jv_RZOBZ$F$y6E0f9X =3j<;qRxqkR?9V>Z0)qiK^zl|6%5vt_' );

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
