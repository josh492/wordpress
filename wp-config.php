<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|<L[vGP8Y-J(]mqVJ+xdPDLP-n^] MhLg:K@7ww;?d%BPaKAhFdF$d5QPjQcL0Lg');
define('SECURE_AUTH_KEY',  '~}6Kau>o#jS0s_S,j-K<dr]RKm:*Trm5g |bOg+xhSuGdlD?0:9SlN]f_.Y|g>d&');
define('LOGGED_IN_KEY',    '}%c8V>U!o/TyDPhde}<sFi;+_|@}>U^|k @.QE5vCNeZoAK]bq0&X~9Vkcs9U1J~');
define('NONCE_KEY',        '`wviYLI]1~buH<x]S>7wVn;f<H^do.d}a0=oXLb+y@64~uI6NURvOKSu3/Y?/)L5');
define('AUTH_SALT',        'Mo[96!:+OPWH%pL!5Ak}2!jW{XwZJr~K<E4tKwvBoj~&Pmil<p|_qbKC-z~ZI8Da');
define('SECURE_AUTH_SALT', '-4^)<w+VRAPB^hje@~a%^NbEbWkM]Vv,LpLv?jcz xjYFlJR|VY5[t?:ci&HR{-P');
define('LOGGED_IN_SALT',   'qu-sHNRb,l`Nww}h8X2NtI)[nzDr=vbK4g>[Hga;OZloe{}~hdJC*WV>:b8E7!fX');
define('NONCE_SALT',       'eSuY:$-~4XVK?^enG<6 .)]v1eYn5w!08TxbRh-LfAk_h^WY<2aXlnw}Z/)H]>F&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
