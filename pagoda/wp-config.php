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
define('DB_NAME', $_SERVER["DB1_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB1_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB1_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB1_HOST"]);

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
define('AUTH_KEY',         'ZEL3#u?0PJeFf6UtZ~._3k#5 Qo}^M<`1eeUMJ.KBSYtrR?svA=fMSZzdh;|-A8Q');
define('SECURE_AUTH_KEY',  'b%A2|=|rQY<L5s2<imxPEW],tWO:a*3to`3?YNm$XlO+Hu*JOEYMpE}ElCyGUr[Z');
define('LOGGED_IN_KEY',    'kdCCq0JkN;rc#J+e]hAjyL2o8Y<w~y17l$-u}YZ4^7##:@t(rwjIOw^nWIw-cS*^');
define('NONCE_KEY',        '5 OTfV9]w1z=t3CmS,a|]u /BgHEfyL=+!I@ul2+&0hj!3*/;Q}C-|E|AL{N=q|F');
define('AUTH_SALT',        '9)uPH0sEo.Xb<Cy5z0XW^Fhfh$r[CBJM-n#W&Di&08<v/qp4G2cU+gM2<?W0cH=z');
define('SECURE_AUTH_SALT', 'vkc|#-|egc-1+^+Br38W::h|q8{x8&FIbYn),Fo/.Dl{&n|FiZ1cnlDL!n|6|Y#h');
define('LOGGED_IN_SALT',   '!}f45bFZAg9.d<7bekQenKh,wdQhNXNv-5m:aneW>*IFAu;9C@3}(}i5!u3tf0R?');
define('NONCE_SALT',       'Uip_Rdp76vUptf>U_2jd@H`Ko% |[_s.nmClkQ8+hJqe481-C@4w0t#ZAboJ>g:h');

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

define('FS_METHOD', 'ssh2');
define('FTP_HOST', 'pagodabox.com');
define('FTP_USER', $_SERVER['APP_NAME']);
define('FTP_PASS', $_SERVER['SSH_PASS']);
define('FTP_BASE', '/home/'.$_SERVER['APP_NAME'].'/shared/');
define('FTP_CONTENT_DIR', '/home/'.$_SERVER['APP_NAME'].'/shared/wp-content/');
define('FTP_PLUGIN_DIR ', '/home/'.$_SERVER['APP_NAME'].'/shared/wp-content/plugins/');

define('WP_POST_REVISIONS', false );
define('WP_ALLOW_MULTISITE', true );

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');