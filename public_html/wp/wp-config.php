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
define('DB_NAME', 'rigorese_wp102');

/** MySQL database username */
define('DB_USER', 'rigorese_wp102');

/** MySQL database password */
define('DB_PASSWORD', '3g8@[gS1Pu');

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
define('AUTH_KEY',         'fxzhzgpra6qnpnx4tz0cvtakkk9vl7gseihbuzt4ieuqkpfjmpxp9fzokzchdwhd');
define('SECURE_AUTH_KEY',  'sobbl7dxlk2p7jkxfygorgpek8fma6lfnd2asbufait6zjrhjavvxnmd3mdnerd8');
define('LOGGED_IN_KEY',    'xbetm6eb3dh6zhac3lpnsjad9venze32blhwijvvgroc3rm39iswhrbz5o6nvnwm');
define('NONCE_KEY',        '7hfdpqreyfqyu4xuyb84dwm61oma6pfmdjsovwqbh8krqlexw55gtgfnl5oufnxj');
define('AUTH_SALT',        'lj7cqisojakrklamgravgax2yvuje8fl3bzdzcatnk7c9efvzqtfo6yklqusbayo');
define('SECURE_AUTH_SALT', 'e9hwhhyrvvuifhmf0xcnx3yzabcx4yxohae4q7anjkjrkrrxxm6xqvrdatz9prrl');
define('LOGGED_IN_SALT',   '5efa0qnumfrwxnbzfpnsue2pgbgnsjkbvxu09xfmurppocauutrrv3gjcksodwtc');
define('NONCE_SALT',       'ofjm7ekloik4xdmf55f4m4m3tpa09bcsisywhjbqupglkoanwgp3ee6h0eebuz9y');

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
define( 'WP_AUTO_UPDATE_CORE', false );
