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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\daruttaqwah\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'shopbook');

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
define('AUTH_KEY',         ']Ok6bqDL0cA*i-o:-# _<Qog&{K@~YP8t/74g]3Zv}h3yypjAO<@nR]e3^yQe%@4');
define('SECURE_AUTH_KEY',  'd Gd(L{^2{g>`aKsvG#7;.[ms.:?B{ay}(0lZvY^! QS[(Q`)i?qd+sY%*Q]PTkE');
define('LOGGED_IN_KEY',    'FLR(a%ON3?Iac!AakBoHR47.EcaY -=#3z@8$?YHnI#TnJ^X{Cq2tyc0c[7Whr1}');
define('NONCE_KEY',        '2m]CfK[(O7.C!L4~6eb%oyn+gFdW^{.h>`.kw+8@Hn3;f/skm@T)9Rwa6Bel%r=%');
define('AUTH_SALT',        'rerPL=0]2S|&H~6CH5q<^f{B)D gM6J:sINAHz75j|OB0vo +RD*/3?2S}xU2uqF');
define('SECURE_AUTH_SALT', '4J|iF:<hNI/yH~$T8uM[n;j4#zj9eHl48tuy86]Z3DISWZr{<B#|OCKffh*Qi@!f');
define('LOGGED_IN_SALT',   '(It2qj8._]l;vaSba$.Ce=O}ihPNg]D[op]B/zJ&Dni%]&sI8S4zh8(KLTM8@ DY');
define('NONCE_SALT',       'P>ZPQ21`8-=#Dm%pkqz$4qYzNpyED>/HTL0Lyad!s|!^4JT_]A%uW!099[%[nW@i');

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
