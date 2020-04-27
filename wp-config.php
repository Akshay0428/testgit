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
define('DB_NAME', 'golligollu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY',         '%QVXkb{f5Cr]xpir=mLRU2|%Y%c+B7p6Bwg)hnT!ZiD+5 QM<x^},*- z45lf~k1');
define('SECURE_AUTH_KEY',  'i3y{oF&u]MCUPnM)%;LlJ9&Zk$/ter-/GR,~TNVgBSA/<E_UN*V@/bvaep<8]Mg3');
define('LOGGED_IN_KEY',    '.Y#(*zrtGzs>ejZ$`(R4XU<(UavND:jGFI)!Q200h&kU`CP_wtp6*6+s)dSRyYwR');
define('NONCE_KEY',        '($|=OTI96G5Ik@%SXyZXC7*79&k/y^C`~*?>t1F[#Wlbc9yph[DV_68p1&N5n_f%');
define('AUTH_SALT',        '_v/+R&rN{K`-pBv]?>L)fAH5$jRmo/s O S1goJE)wy9(2%n&<=sT6s^i390~pD[');
define('SECURE_AUTH_SALT', 'oxcsD$$&+yL1=+x25 &~.KS@m0Q><Y3?=S$#hJi,W_ -;!CzohOEZdNKg0}}<eB?');
define('LOGGED_IN_SALT',   '7}a~f)`+n7oM18C2#*M:d(qJc]xi$[K;/ZSEF0ypAl=F,s?e#IX4=3&f*@Wns&9W');
define('NONCE_SALT',       '9bvF,Fl_.0IxPZ4t:9jENey#CHqzM0%bq6M#t%jLhccxM_8jzjd6iIY*Pd_HV>Z<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
