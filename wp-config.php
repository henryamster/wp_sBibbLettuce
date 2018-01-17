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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`a-VQcAPd4!HPEd)DWe19X`&=,uxLke?Ku{uxT~J2C,J/OAKsmhvt8nE>[T/4Cnf');
define('SECURE_AUTH_KEY',  '-n/^D`fy9CPg;xv;{`r~7)noK1~L:G1pxN[Lpk8B7Vg3Px3 7}Fxc)-K//5DSBsx');
define('LOGGED_IN_KEY',    '<B^SC1<NK>Bn%.f<LUwVH]oI_2 -iqRI;P3{nEY-~9kmNSQJ:GOMD=;&i/v9`J+D');
define('NONCE_KEY',        '<F=:sVoj  rQlmf^:281UJ)]; TG?8T+m_X!Xd%`Yrf4I+q^)-?hmAre~ct`2X{9');
define('AUTH_SALT',        ',/K@;}A9J0e5@E^IF!}/$.7t[)|G2pDbtm,HEO3oAG*|NyYK~/qKW**z,T1h`wm2');
define('SECURE_AUTH_SALT', 'D?7EbUF`D-T>|JMae5.vqD5KUhLOC+2oP*M?;|b/9nP,@W3/MN~5=(KqRbu6]b<)');
define('LOGGED_IN_SALT',   'ea);T^1w&1:x!u/9cO[wWP4EbG8ZRM?$3c-4BVo;WHB5.iwNU-iZB.4iM~!KBUvT');
define('NONCE_SALT',       'V1|qa{&(.Xno_/PU~?`sUbX)03v7*NA?-$GWe]?RTQ-:hJ!Q%*O`EC=4,h3QCX-X');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
