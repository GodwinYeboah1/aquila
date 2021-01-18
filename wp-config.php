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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'gadmin_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '`|*st>NGNrHeaFL;u12AtZg{5K9|8|ywYkvGk3-$a:lpao;23Q)5N<|1q0J8HowM' );
define( 'SECURE_AUTH_KEY',  'F3nM?HKm@{Z#B) `+=nWWCmkv*9Uz8v6Z<`CK[hzv&kLT3Nv!,?Md@x>JM.62uRI' );
define( 'LOGGED_IN_KEY',    '>_3DmWt|u>Cx>(7JCs8#p|dls2;~TO;>$%H^TXTUf:#Q%U @xo SHwd>3{^R !}}' );
define( 'NONCE_KEY',        '?$$2VFhA0^N(c>.W,lF|SV4rk3-u c#dFq0b)$/$w` U-`RnwzF_)e<zD4isae:}' );
define( 'AUTH_SALT',        'CI^m#,>a8p4m?[+lC=aTE;U%47LbF1Fz~}`(x/;;7F4i+Ir-BaiOu.K7FWb${+p8' );
define( 'SECURE_AUTH_SALT', ')1ncs/NTBI6foXeus),}XJ/sw|Eyq&U{0>aYu@xj0w1gnrh6/9@L-3)2r4#hrygw' );
define( 'LOGGED_IN_SALT',   'V-c@,yoV[.m:h[@5{G2U8^:A&kd;6k>2>Si?ki_C,lj7n/j^IaMkRbVs<t;8c#Wg' );
define( 'NONCE_SALT',       'AXb2W]J1*EH]e~XZe9>(>G>3B_}2 hg/T[|+C3&tA?2=;Ml/sT0^RM!*+Fm]Rz6x' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
