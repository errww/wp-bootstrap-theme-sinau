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
define('DB_NAME', 'db_wp_lat08');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '88BoDuV9FR:X; ^V.)G7bqPU!$Ee6fQ8ny1D!zR7p36Uh}0{t!&[C]xO]pd@NK}N');
define('SECURE_AUTH_KEY',  '`zPS:_r-*K$vrcdZ+jVVuyx7z,eM0Ov4N-zFcoB[frLGHgx-0?/oHx*5J^Bq}2{V');
define('LOGGED_IN_KEY',    'eMWLzaDl{I=JYWQH8kTSxas-NVHYbBJklM.F/_~vLTkk:!rb=-{zyAX(dKX_9:a&');
define('NONCE_KEY',        'a;QcBuRf6f(t6w!HO;3-tvD~hhnCkgs?y-Abjko{,xe57}Be?<J=7WD$u:7+?.BY');
define('AUTH_SALT',        'Lom3Qu9>6#){ssN(mjE)K5*wDB7h^4iR7GCxI2@x_OHqAQfJSeowQOEg[,E|rR@h');
define('SECURE_AUTH_SALT', ']=V>}CDsoHGZ@c$#TI/UYy.V=x6]e[LV3,aS1:mP4ybN55=vV`c$P<Jx]*-%&hxK');
define('LOGGED_IN_SALT',   'L7^8h-{M6*M/6i,Tt}:=]2t@0QtcC%pq>2_WD!w&6-)DPAjdy{ K9k[%jF0[o,n-');
define('NONCE_SALT',       '8kzPhh[AyWA&_F|y7tDF:# 3Y/.nou`q,hu}Dx&~L6/si)<045<=5%QFNmH/g{tf');

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
