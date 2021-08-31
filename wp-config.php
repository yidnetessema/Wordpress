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
define( 'DB_NAME', 'nib_internal_portal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+XUx>#PZJ-[>D1 2Q, v8MO|=rs)&b056yrgCj]`!KRwIHpA#hfbj(jA[Gz%_47,' );
define( 'SECURE_AUTH_KEY',  'Hw[JHAqK|$!x=Ro$$?R@kq|kCzexl,^fCF&:0mXReoh*_pfBM8pv.NYGQ?h%*=Vj' );
define( 'LOGGED_IN_KEY',    '10azUUY%73)6*ar;z/0P>#M@h%h)p5ozrMMN*R5RB%.x_78=qq}$ `cdHa|`Y`nr' );
define( 'NONCE_KEY',        '}+ZE|:9{Du*E#,o;%(DZw.T}TT,/Si?cVqF/FRti,}*[`#Qm(Pe3l[9znFNh>qQ ' );
define( 'AUTH_SALT',        '[exn;B7E:p:@&FB i!LMZw<3/{eiy^v`!d&c/Uqx6K+4sD(HCV8t$FLmR.:mL#2U' );
define( 'SECURE_AUTH_SALT', ',Q4)VaL=AFFfZq<tRzKDAtNhjPuoO|n5*negOP#<%<M4z)J>xY|WI/iZ2ABqv&=;' );
define( 'LOGGED_IN_SALT',   '4fcS#/=M`vV{^yrR,/ jp=J@94!gv2aJz=XeU{/mRo-HX7Ke*<W]H.b1L^[v+FVP' );
define( 'NONCE_SALT',       'DY),SNKr!!a>E0 }uC4L:tn%P{,`u,$[ygH.]RwH}6}MppGQrXTu6-^|]4Y@LmIz' );

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
