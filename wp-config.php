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
define('DB_NAME', 'iskcon-goa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '_>;L<.fs5ToyOB;=B+(^siKu@r@q&c4#.Ie/f1~>Tt7#B4^$y% Vf^F&6sSLMLXG');
define('SECURE_AUTH_KEY',  'Zv=nl^{t3U`z&nKWsCQ?P`;U>)wAmJ2%4e_numNTVx$tO=^IhP-knDTp#|m@A@I)');
define('LOGGED_IN_KEY',    '}j[9M1_v:W*55pRc? ^6}NkbhTY*|)fz1,693f1jVdr*,A(T,Ax94KmoXnmwX?):');
define('NONCE_KEY',        'l0R5Tw}n6Fh|d6F&^!L$=u?/?#kxo%#I:02Ddd8]awSWV 0Cau=_FbA,8Mbm<cA7');
define('AUTH_SALT',        'iaID+M<V}W-2iXrq}A^x4;?vi98D+S&@/ V |&BD.]U^%L*atnrIaH#&7g>.| }F');
define('SECURE_AUTH_SALT', 'JiJ%T}_di;fYk5ZI%n?3_f/-|m(=IqS^]!5(Wk$+NL.BMkhz+G^is0ox }!8jG(!');
define('LOGGED_IN_SALT',   'a3/c+4I*nP{^oh?U9Gdiy&{e@WY:mb5fgIcr?+(HZ^{I3DNjG~J^nlz3]Ha(OF5U');
define('NONCE_SALT',       '@esJbe5LfIA$7M|(xGfxQHHHh$ykD(1mlU1zj9&>d%D_>0zdv0&[}%0%z!^R|=m}');

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
