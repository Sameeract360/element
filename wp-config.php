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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4DZ9hyiH{V_Q?Yhp>BH7bh1?V Y*D-dcnJGLuh@I6`E(0@CVPmn;4(P0s/=LbjJ:' );
define( 'SECURE_AUTH_KEY',  '9`OLth1 *.[=J~]Fc<Wd-6:{4<i1( X+o!($YNh=j]P/$C.[rO [7/sTQ,K6Tn3h' );
define( 'LOGGED_IN_KEY',    '<lat9{S}/?|0Gnx$m>PZ@OD7Yh@IC-t~<D)I4~o..Lem2`%;UMsV:Z%8)e{1*^tg' );
define( 'NONCE_KEY',        '!u6]..~9@4nt`:GlErmMVI;.)<V-xo/yJv)8W4[s~1Qo|^b8=,T{]>7:1>{z`jPM' );
define( 'AUTH_SALT',        'U{/[d&Mq-b-/cC=HXCa|9@lh1crA[r(MPmYFPmNSi~{>y/4L=n].88!moDErCNyF' );
define( 'SECURE_AUTH_SALT', '_>kOF@Ruoj9>&XvI+HHBE47jic! !8#C[vZHb$wSP#oyP/J0Q/:B+CtzN&LgSqqQ' );
define( 'LOGGED_IN_SALT',   'Qo!P)&G[~yR?W1)EP%v|ZNeq(zm?@0d!#*t0V]FUG9]0Pwz)*@f78F;Fc8BV9:zE' );
define( 'NONCE_SALT',       'uu:p?kak<VnC/c_@?$(FpfD{~[S*0#QTx/m91eWi1ABYOctQZXIb   ^l}UJ BH>' );

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
