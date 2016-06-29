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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db632930293');

/** MySQL database username */
define('DB_USER', 'dbo632930293');

/** MySQL database password */
define('DB_PASSWORD', '@Admin123#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@32~D::)&_4+z?m3m~d7><=fPJZ:WJ3>=)Baj%g1dzE&Yt>e%98V*_Sd2OS,IL*M');
define('SECURE_AUTH_KEY',  'w@!R_%Ic^igeV)S*HZnrd5}b+)DrXoWVCle.+6Eq?w!-d/U?ax3h Kw1{9#!WJZ4');
define('LOGGED_IN_KEY',    'zWiz5Cb[?u~1HSQzuK,6csgU!:cC?z3OPi>w-:$h?^%e4g7)VAy|RfePH_C9|u2g');
define('NONCE_KEY',        'L9<[PNU =gsEctfkL#OR%0]GF/{bO:gT<_QZyd_)BlMdw=e38DP?g8cUQX|%q)o9');
define('AUTH_SALT',        '-^,c]dr%,[ PE :E8iKsOh~vn#B_l]ABwHa`|gB/}D$P|cH }8v<Xs^FF^L(%IP|');
define('SECURE_AUTH_SALT', ';U{1]{NqC;N+T{UZo(jVxp[`bQ&JXr&K ,JM?&WiOe5sdw3:xI{RNSKxzM6SdD)m');
define('LOGGED_IN_SALT',   '324JWNxnru/7AAsLm`GIyD%/g]N3:UAp K-?(0(_kCEbL$PW!ejX^Zb$*ii[EMA&');
define('NONCE_SALT',       'vI2(l!5f!B&*);=LR^hS#a23FZf XfN2]WM>HZwF0`1Qbs^3bFP(o:66$#lygNw6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define ( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
