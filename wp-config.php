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
define('DB_NAME', 'wp_animals');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'b[~HNIzk.7vSMg97u WAyfuO?vx!2PQAK$(%y>*OVIgOEq0>D.h@8W9/AD<;zCnH');
define('SECURE_AUTH_KEY',  'Bl&SxdG!#3b 4zv%gTEs`O3{i*9G%BdT9U,~HokxnKy>Dd<5[__$$.lYtAkQHoDy');
define('LOGGED_IN_KEY',    '<jKj3OtlGRNK9^#3|_|,3F.SIW[XDjUO%0NYuseX~@fP)<s/1K#gU$=^.s~|&pN(');
define('NONCE_KEY',        'A{jz,x&$ Nr1PagBJf*=k0$Ga95m(RhF>h/:3U_Wo,sUl1gOvO(2rucpPA7n]`9a');
define('AUTH_SALT',        'z@Ydp?Tv0=swh8<[Wc^a4#mUryr_btk1AFjClkVJy.ql;.wGL2$;e6FXafb8;*az');
define('SECURE_AUTH_SALT', '=!Y5S*`cFxo+K=vBb^!5SHwo:nhWGa~uAQB=g9qw6:L]tjN}RWY5jvb=7Y8%(]!O');
define('LOGGED_IN_SALT',   'Xjd-d@^7Ad6D=v|E J@vl3 |X{EvO3Y1iLoKGV@E,-O9k5*vLL?#8QHUHZx|4I~i');
define('NONCE_SALT',       '*_0oid0/a68GK*2-7pY#WB@N^e;x=!zfB3L/sy|92u[G`^Q<iIN,1HjEIJu[f*l ');

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
