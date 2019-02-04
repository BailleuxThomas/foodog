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
define('DB_NAME', 'foodog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'user');

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
define('AUTH_KEY',         '0mFxILCT4ke#Yrs9#cyeyAeDOg*IyMaZ(}0}mZaG5)o6T}.F@7 3)x=QdSU[nm^H');
define('SECURE_AUTH_KEY',  ':[@UifMA9d0Sv.-B^qxL@1o;!5-#b4hr_~tln-PQ^w@R3@?1XAk!d@S.:jTps&k*');
define('LOGGED_IN_KEY',    '=_j#^gNM]vxbA.Ojo6XQ](]zIyzjkN2 53yXollT*V{2>Dr:;b4{XwQ,0 &!)}H}');
define('NONCE_KEY',        'uC~,^8Y.LXt|srat!j`LnuQqqz-`E^ JgNdB^TCwxdx%@8NK1FOdfzM<|$uT7]J-');
define('AUTH_SALT',        'wB@UL&no,#Ttt: a?g5ip2Q43y3*Rcju[0p%kgTJ,$f%+Rp+.G<N@:( L:_$tTBy');
define('SECURE_AUTH_SALT', '2]KD/P/%%v6#K~F*hMnx3{4Q-92kByv>C| %4rDvS-O< 1W.mWZ|jwM7|J1D=Rhe');
define('LOGGED_IN_SALT',   'U!Ow8J$|)NEjB<v?E]3T6V50&Sbr:f/}SkzPHI0p~9;i:d`8^%fh:xP-;bH}(iez');
define('NONCE_SALT',       'oOa$uSF]EG@(M2,&l?VIs7nqYQ~FPuK)o(l=H,~}D2<o /yL27T.V}5VSd=&iF3f');
define('FS_METHOD', 'direct');

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
