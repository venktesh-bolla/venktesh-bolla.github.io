<?php
/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

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
define('DB_NAME', 'ELKDD');

/** MySQL database username */
define('DB_USER', 'volkp');

/** MySQL database password */
define('DB_PASSWORD', 'Da3m0n@linux');

/** MySQL hostname */
define('DB_HOST', 'elinuxdrivers.com');

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
define('AUTH_KEY',         'l8yubK[tiP+`8|tH>%xwzyxk=I#1hZrCv~E F&h%E^7;^lvE((ti8a)X#F*+90Ql');
define('SECURE_AUTH_KEY',  '4J^FI+B(@},g@1>RK321LOU!f10mk+`X+z3B~6>+3R-n/5!?M57Y5QUs|YW-J}8d');
define('LOGGED_IN_KEY',    '{=JyXaIaq8CuQY5G.o200HG9_}=Cb>px8RQQaevtOiy2RKYp#PP-3X_5|bnAjp~i');
define('NONCE_KEY',        '}h#dln+]BIyT^A$:V>=-4GxQlpjP<dC<VH$R@17Q9cmc$E*p98%Hm{wOCwIcBd v');
define('AUTH_SALT',        'PhwSia?! !7rfF5^Apd7^sWLt.E*xu*1*2_:+.X4+gDU6&X+G]Bs$`E#m&<26p0M');
define('SECURE_AUTH_SALT', '>-4$to_Z)2u|E:R-I(}BiPKj38Nl! crD|c|Ec9bT+z#$Swkh8t|!7n<NnLA]mtT');
define('LOGGED_IN_SALT',   '0pRZi5qP)=Dg8NG-&/?7:-YwpW!_+CT,asaPzD_W86ewp@!s.^st(/)z}_IMdQr_');
define('NONCE_SALT',       'Q+|Di7|#)9uyS+F=F1$Bp9Z!xwz>r]!P@1w}L}:d,AN5_/+oo8+WNEz[;i-5G?mv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'elkdd_';

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
