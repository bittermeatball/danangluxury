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
define('DB_NAME', 'citya');

/** MySQL database username */
define('DB_USER', 'citya');

/** MySQL database password */
define('DB_PASSWORD', 'citya');

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
define('AUTH_KEY',         'Gi4JwbzZI.]6GAjt.lN+~ ;4)-N3~*V78kPpBGb:kz0M5<P]FA?r9Nh-,8Hz@FOg');
define('SECURE_AUTH_KEY',  'J(#Rb*pzWkh!!Y:tS~Xa.{wGT#n8v(Jx^[(k`8=p_^teRij,;y*,OCHr7^bs`=l^');
define('LOGGED_IN_KEY',    '>[%%BPqpMG;<fFSO+iCO[QxXJEOBfe1t_)}=DZcWkS/y]2m:phoI$l@SK,|w#G>u');
define('NONCE_KEY',        'fqg(_##ubA6 U4:hFd0z#6XwYy /n^5XS1kYVa=/c-m$M_+f$Q,*>KLfks)x(7*N');
define('AUTH_SALT',        'icv6cOJ7z5dmhakLc_xR?gn&XZbb@LwaoHxQxfdOH^09<roPJy_d%{Uj2}{F0J^A');
define('SECURE_AUTH_SALT', 'Z3Bk^g=p.1nC<0}]Pk#>MKc.v4K.oI_kwnf}q8y$rW&qbEdEAnp^Jl>o&VYKK*uG');
define('LOGGED_IN_SALT',   'F-h1%&^udb`YpUZOk3@m9#<!$Id*sh:_(04Br= nypJ8<!8?{xG[j_GJa#E!-jq&');
define('NONCE_SALT',       'J =&uvu4[D1p+2cHoDK_y`If%=E$=SFN@,/jGGtS&PS=e0;AG%D_/9_.$@G:-C]|');

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

define('FS_METHOD', 'direct'); // Allow plugins

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	 $_SERVER['HTTPS']='on';
