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
define('DB_NAME', 'patrickk_wordpress');

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
define('AUTH_KEY',         'y>njr?$$m7C[!-3c<&!] ^-.[>Rk{uk|?&>Bu=OEdQMgO<l6+Pp$L^}VZ7io8jdD');
define('SECURE_AUTH_KEY',  'hq 8w#5&<eZS9.bJ`fn=~gXmjx&6FVc<q3sR</`-c6Mv+d65oJ_guR82~K>~Y[52');
define('LOGGED_IN_KEY',    'hk6C j.-VBoPm-b<J`5ZqD |rj)v@rGc/B|+QB(}+jq06{caG#V+uUtoB]?=QkrF');
define('NONCE_KEY',        'D:W#[+2{>5)Zy`%{}AO+%*$awZSN[k!cdNA#|Ne?]+BAi-{||7fcP#>W_%g0x&4|');
define('AUTH_SALT',        '>)vdysB[,:%ifk#iEFq,8`,@*6E=kx?]<P#LR(V_({1&<+S{9M/BK :s2X=o+y{<');
define('SECURE_AUTH_SALT', '`8<0nv>rd=lp,_#!m/i-=@3a0&I)c!mVo+}@vA2,,qVSWCu8$mF$ItpOXs~X{EcY');
define('LOGGED_IN_SALT',   '78@XuM*suc[/AI`I{1hY2VI:@eoO@oC_c1Mic>Q4<#FXOR1nP[lm!K3JG7BXO+.Z');
define('NONCE_SALT',       'oB}?P|,3-Mi3(/ F.w&*ShD(HF*q(vLazIAY233BI`DaX]eMd ?faA{WI(j5yh3?');

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
