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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hb*s-m|kgC<D^{&[&u?xd#+%PCxc$oFiGKa0.#x_F)e?{>QM ;T?$5+A1xN!<K`k');
define('SECURE_AUTH_KEY',  'A+uRFbxVxQyr;D_P[5d*S%9^qT+<suNfck}),[0+4_R}88Bvf+>]07Dp(Z_~1[x2');
define('LOGGED_IN_KEY',    '=|+qNq |Ra#BK)h,^|S8$r^*P<3d.w5(EJ]VAz/yZfne5>tr]%x4D6yDfu[>j8~1');
define('NONCE_KEY',        '68f;$R@68EEL9]|3FCbEaY:/:|q6.C+5RBnEn3:,/,iUwu_6F^;LZQNP@)iq&z5.');
define('AUTH_SALT',        '}p8YzQvOKiC]r[ ]SVxK9NNk,%f_Vv=0|emcoIJ{]/Si;bJy.I21e.TKHa:|poPC');
define('SECURE_AUTH_SALT', '7,#Tm=rr(!|KC=Sw `|v<PS11,EVZ-wDLFaP5(+O!sag$g;b-$WwnaM74!mn_yku');
define('LOGGED_IN_SALT',   'Od_q*yP>)v^(<.)Qs1cbZq`i(AxgL?-^W/31L_k nN)Z-XgUy0 %HIos5gx}7hly');
define('NONCE_SALT',       'x6=te/__j&#NquWRvfDf,a3;AK&}1ZUURip8u?p<a$>HSX)}IS!OD[mcd+_-?A|i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
