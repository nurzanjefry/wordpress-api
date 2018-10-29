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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a1');

/** MySQL hostname */
define('DB_HOST', '172.16.10.50');

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
define('AUTH_KEY',         '7-}!^YJzP1^}r@^vgqQx2VJF$}fZQ<{<i3%>+U{LPQmwrC{HI*FI(-.D%tM3f4wO');
define('SECURE_AUTH_KEY',  '!,$#{0Vj-XS[QeV(>9Wh/(B)8A?fp0S9l7*7e7u&tRTH(HXBgQ=*xjc;W6W!(Ts6');
define('LOGGED_IN_KEY',    'BG)}4l#-x!4d&cvV!.>(r>+M7fD/A42a(`:*{4ETAa~(h>t$!3%_DkqY5ZR)P+g#');
define('NONCE_KEY',        'XnG3r$(qJ_b7S)7)GDn%au+ mxp+L/ a?5|W4*2?gs`T|5KPQt,,x$((Rs3b6`,e');
define('AUTH_SALT',        'WH>D*pZ@do>JRz:hxM@k`s-6x(oW Hgf,Zz>H@QAl7Ic- nBZyDu<jzF[+hukJ5U');
define('SECURE_AUTH_SALT', 'chCm;.nL8y]E>CN(t^oo 4zfV^x}Tmsz9ypxkVQ(?Gtju.7/e$d^:Ow<bXhH]%@>');
define('LOGGED_IN_SALT',   'l%MayN`Zy!6Sw2-O^RrCKMBvrisN+)z`^Miy:DRZ,D2[V%+?!Jl2cTx$kky~d&bG');
define('NONCE_SALT',       '2u2$!E2nO9w.yGxxtzP9Xt>K9nI?1z.QL:L~)|k.G0O5.(N=.|ERW>g,uj>mYhzl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'test_';

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
