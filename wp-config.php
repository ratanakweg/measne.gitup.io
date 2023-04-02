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
define( 'DB_NAME', 'dailyreport' );

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
define( 'AUTH_KEY',         ';Hfq1{#u$w7we_|&?{*)hrN-XJ=NFGR[q6l#U?FmiGK|i8?aDiP1V4+bzIF.f<&Y' );
define( 'SECURE_AUTH_KEY',  'PW(UYbRRUybN)jF219?+mZrf{S.MA{I>:Vu by+7QsTA#JOjJ9a:d;/Gic-P{IBx' );
define( 'LOGGED_IN_KEY',    'Fyf&v)O:jFF(q^|xsg gEI9lM vwGCtv3BTEPV-]|h+{LA; NQ=[O|}uY6; Y{,a' );
define( 'NONCE_KEY',        'I>@;QIFhaN)?x?/S6mj[Wu?]Q1d3K LRH_l7~fqY%m7#uG%s7PcuJM1a5*&TO.cY' );
define( 'AUTH_SALT',        '$*3{~6p:S6HapU(KmN<HZ1H|-4OPRwgbP?-I-.wD~iY]Dv:-A*/0c!!FRTV)m[%W' );
define( 'SECURE_AUTH_SALT', ')0[pM?[Nf;i_(0TPauZ6U8_# Y]~B|%LV4bw!@0NAv I c(1i909(WE4f!M00}@Y' );
define( 'LOGGED_IN_SALT',   'nSvc(b>0hDm^>@X<dZ6Is$&<1Pxe`1:}BOWv^7&PKs/5Mr+VSk#jd<l{d@5FmDNO' );
define( 'NONCE_SALT',       'r_`f~2t9:}[Jq<VkbZ{m4~?<5nc7o3+h,5lN~_m!2):!gn63)*($>gJLjYD#Y~t*' );

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
