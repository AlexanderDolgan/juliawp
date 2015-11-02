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
define('DB_NAME', '5704737');

/** MySQL database username */
define('DB_USER', '5704737');

/** MySQL database password */
define('DB_PASSWORD', 'Alizee12');

/** MySQL hostname */
define('DB_HOST', 'mysql.5704737.myjino.ru');

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
define('AUTH_KEY',         'oO77u}&zD~wb/jt3wzou9VFG@$,=99Dbr8:LO*1Sz,!<GaU,,D@;lz5ueYtfkPA&');
define('SECURE_AUTH_KEY',  '[TTI46_wZ@?pl.; *5$K}d=q5B*l;5*I{=`d]QP 6#!<z/G2bu.A*Qpe@{>i[lM.');
define('LOGGED_IN_KEY',    'sTt!H-FQ#2LI`-{8<}4p$hgg7jt-HK1x%pu# x9zOs#w|uQD;O){4.PcV_-* V{%');
define('NONCE_KEY',        'vFc*!+V)qKj rHqQju;umdi]#J()55(^_0h$`3=vDQSw p<cy{4/^!Agu7R3%DRq');
define('AUTH_SALT',        ')65=#w|rO2}5i1 6Tb&-.n<.CWmR2CuI/Pv+KH]Iw3?}hLA`]W5CCyY4_bvxiV+b');
define('SECURE_AUTH_SALT', '6@_[N/{|+j<f]k7O-s,4z_4@uk0lW]Q(k_9aZzlU2W|JHY~{`-:)VmI4WKCs#fXi');
define('LOGGED_IN_SALT',   'H=x.`ewVJ<rhC_jM6p8U[|%[uc&}i_54S$vm.BnHE.-diaG[f,0,I$t2.{ ZDa^%');
define('NONCE_SALT',       '=R6+VcxR!:b`_.J~gE952*B. i!5Y:1WVDdrhm;-<oo&j$6cM&P4pb3JJ@-LCXp#');

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
