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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u219031756_aK2dl' );

/** Database username */
define( 'DB_USER', 'u219031756_Lgn3L' );

/** Database password */
define( 'DB_PASSWORD', 'Ew0BbxbHpV' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('ALLOW_UNFILTERED_UPLOADS', true);

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
define( 'AUTH_KEY',          'X40XB-8Z(e~>nJX7ijdu@ 6H9~}Y/~9`F} ?@TML>axjJ0u?sx;jz$<#M%v3$d:r' );
define( 'SECURE_AUTH_KEY',   '1bD`|%d:78m@3/VfB_=4DHQh]6kLjsPyw.YLp13`@f2a;?His:l!^4qdN(*sR$a[' );
define( 'LOGGED_IN_KEY',     '_3Q9+[]<RMpATyb*XP!lp5$piwhP2cP3I!@;9i#$|h (:ZMc.,}+j=N+qK|*Xh$c' );
define( 'NONCE_KEY',         'dLLM10.=3.<gLG?a+lGj=3-I-nuTXme{(759Q/Vo`</XI99m*^I$woTB&oVj`7lO' );
define( 'AUTH_SALT',         'bHs_}JB-u2889<|@*pMb8!ZGu+wtPDbbQW$hy8_17SX7hMa_6&l(z,2Q #{khZgx' );
define( 'SECURE_AUTH_SALT',  'NG6|`&#6DzV9|ny+SdL_V(xaN8! r!V^2vY;@ k*wp1?uD=mDOxvAt}!mt-9e+V>' );
define( 'LOGGED_IN_SALT',    'uw#LsKp=*U(SOW&)d.d}Bq}=_*371TX%` l,:us9!&K6BgcRx}N3r~IkO?JTL1JW' );
define( 'NONCE_SALT',        'RDLka ?O!h6;K)g_XVU$i`Hkh;wK~H0PY0jz%wl<sruIGClK:>,TC$Fw%6 kqZJb' );
define( 'WP_CACHE_KEY_SALT', '~b(7.[#*va)YNnn]6hD^^wa.F`S5zxgrd^YivX1.7~V0>q^XbX3%(4/(b-|YwITO' );


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
