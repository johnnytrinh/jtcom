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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         '@}6.4C]?!+[0+l+_;{+/$ b.r@=@1JdZ-h}!.`G&tj9C/,NSb@+YFYd<e4fLBSj9');
define('SECURE_AUTH_KEY',  ')dynU){^+-)O~-]-,KaN.lGMK(?w- B6qOKg@CtAG1FV9If;<Au<gU4xWs:%HWu]');
define('LOGGED_IN_KEY',    '*M-x]_J1>}-i$0XdCqVVckM(.!*wLl of=ydxMl>d@p2mN+**^uz_kzOz.AW Ge_');
define('NONCE_KEY',        '~DuNOGjBD1w?;Q|Ds)<-{hxj1phub=!BZMW=?+Vjfby3*^YzoZ|5LV(jT)yb|9rf');
define('AUTH_SALT',        'B7&a+1=ILi?`E/`$i#Q ^{@`ChFHG>) B7y0nFpQKAl&v4x=.[}@`COLRF9LQ!+h');
define('SECURE_AUTH_SALT', 'nJK7{~6GJ+:UaCs|&UO6s|ir$<tLhDT{/$4{=3-]&~%ZL(hxLxPQw,;y40UaX*W+');
define('LOGGED_IN_SALT',   'mb_k6KFQIMYM3;RS2c?,/d)%Hr7IUG+UV^-rZqHX##BWBHXU+t.?RV-<tGpVN-F&');
define('NONCE_SALT',       'm)s!IQXZW1~NSt1<81|jR2V5+jeUsiSK1%X(6+QPVNj+HVG{aeF-k48aN/.9/_ /');

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
