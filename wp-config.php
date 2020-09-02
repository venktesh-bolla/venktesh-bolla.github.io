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
define('DB_NAME', 'ELKDD');

/** MySQL database username */
define('DB_USER', 'volkp');

/** MySQL database password */
define('DB_PASSWORD', 'Da3m0n@linux');

/** MySQL hostname */
define('DB_HOST', 'www.elinuxdrivers.com');

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
define('AUTH_KEY',         '{+D.958Gie|?cgjoRjN3 ?}->-MzQ^/i6[JXYA@hH:.lejoID^)H0]vnh]EUfx6f');
define('SECURE_AUTH_KEY',  '}V]dRsGlyg+h++kI$+$.L)qTqe6w-vnC{Hr:V*H~+d(=S[J+vsq{rh9+1,!t-T?L');
define('LOGGED_IN_KEY',    '1!j(!-?k89N`G>|21AJ]0bWA&aAH{vS=~+@wKb0?!+a<V00EQV}4226,f^(_Z(Pl');
define('NONCE_KEY',        'vm@bjSVNlw@MVuD21xPPp3Ox5}V.q-)gU-L$=arJCK2zZUO|=,f6:jvz}c+!$Pp3');
define('AUTH_SALT',        '{B-h%@Q(=`JLyI?.46#7WVk0<%gnotob7zw-_5AC5lH(?DY9OnvD7jY}*p}zFo8{');
define('SECURE_AUTH_SALT', 'BV.}-c#Jlqm+(N=pR2ui}[y$SDS1ED`/3|WR;baLtSN}L$IaJw7_~**+3y>uGt&6');
define('LOGGED_IN_SALT',   '<Z,++z~|FS]Fb5;Bj#1[=o{#dn0Lq9&tS2Hlu3SZ9/n%Q*m _S`-T^MKDaz 6L(@');
define('NONCE_SALT',       'i7w%&SNu*JBAiUPw.j9R99o0xoQP]OPiN6?8oDh!S9s~JYT6hBksOvZ%L_YI>8}5');

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
