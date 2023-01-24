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
define( 'DB_NAME', 'testt' );

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
define( 'AUTH_KEY',         '<i8iSHF)z!3MGg3:?31X#_[gEAe$?)u)l=dCbrB0;d>K<{afo;&m.Mx$J@2.J]UV' );
define( 'SECURE_AUTH_KEY',  'aQ5}:X6:W&/qpXBm>)x8)e^lxBGkjG 0-&|=ggPt}pKRPiwHJ&DMVJ,~;wCYpU/p' );
define( 'LOGGED_IN_KEY',    '<Z7x NlGqOET)At[B|uk7:JyHphONT<?`g8^YP(d.Sr]zH{R)}=g)h]xf7A`pQJe' );
define( 'NONCE_KEY',        '$bpbRfE13K}QFfnK|yHeH9/o!QMF{6&*$P,$whY9 j[<}>-Hw=eXe:?CF)9cpfu>' );
define( 'AUTH_SALT',        'IWY7azV,lIhl_._/,nqFv6Wc5OmO`St%{hh{tSURKmeNl`|JU!a?VbrmsD:kR&`X' );
define( 'SECURE_AUTH_SALT', 'W}PbHmG.J|olap?)~?RevR>csPs2Tsm|g-6<hyoh0/MJArZP.V!%6yGr{7r1/X0D' );
define( 'LOGGED_IN_SALT',   'yj@9!?/eI&mg+OKFTQK@7m:d0XP+0_MHyl{nFcjw|Og(F&H,Dd.]q1^F,i6`?O]{' );
define( 'NONCE_SALT',       '9pBHG;A^.l+oZ0IR<d{sfytaC2)h<.Z?z`IvB(_>HRC5VT:U; 4^&D)zlg^:@CN`' );

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
