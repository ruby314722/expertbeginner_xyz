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
define('DB_NAME', 'expertbeginner_xyz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fou84cault');

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
define('AUTH_KEY',         ')9Z(4kE)8B&|R4;^mBzI7Eo0GZD!fUs(~x&y1A"0RPyQN3|E9d`?!zX!%/bQ?KrN');
define('SECURE_AUTH_KEY',  '?GdwP!2aqXIH"bKrbKRMq9NU_+I7e*?6Fy$$Um0Ck1^q!pXVZR%g9e`t99Kg%_HR');
define('LOGGED_IN_KEY',    '|&v+5xxipJhG%G@w:fhr6_"5z;^vhu!1YG3DlCKhbrT?`B8gHR*A;VT&^Zf&cyAY');
define('NONCE_KEY',        '6PF5XPcY1)4y1UNbR43N?1/+)8rrZ|n`D_Q~9wDo@93mG1A8CP^dW24rKH!!OF&c');
define('AUTH_SALT',        'u_9d+8Lc?YvT5z`ry#vxj%OMvo`I"Gm/ka)zTdaLU!|(WMn$HOt879+idh@Cj6+@');
define('SECURE_AUTH_SALT', '5z("VYKnrcF0*G2CH&aE!LsN1wh2a#:fO%*fL"J_D6(bgCxKb`aPuNqO^G%KKvv*');
define('LOGGED_IN_SALT',   'Ur_X|tIue|5^I%nr1syfZbWAo|m?yk_CY/Cu)JwQj4_T^LUN6xrRi$BZ0^Ujbn|#');
define('NONCE_SALT',       'k*re8"%9ZKATore1eb^N6Ub1GE/#GeYe((YoZw_u~&TYRkL)oi&^f(U+f|6u`|&e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_b66iv8_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
