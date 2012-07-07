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
define('DB_NAME', 'multisite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ionica');

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
define('AUTH_KEY',         '8#RtPPf^=?LGs_$1s/ue~Ar1)64?j)-*S}C=^e$b,L5+u4C<ly/ytdud_;r3xUQY');
define('SECURE_AUTH_KEY',  'hOhdyZd]# 5&{=m.>une6t!c3 5^M2s=tP#;@kkQ7Z^-1+M0ci38ZgD`v8Z<.|O8');
define('LOGGED_IN_KEY',    'y4*w$Oq*8$uM9rX-FY_W8+Y<P{F*tX4{igz(Wyo# gWB/,Y&-XN,w$W5@w$J*bpw');
define('NONCE_KEY',        '`+5^mSe^N9n4[mY=zDm]4=d&f-S8<O/Wz7#Ar8}l2u^i7/A| K)!pf!vfX;PZ:dh');
define('AUTH_SALT',        'lnrBgDJZXe!P83.*_7]xi3D1f_GZbKa6wX%X(W%)cM_W5R?{c[;y`h877<eR! Rf');
define('SECURE_AUTH_SALT', '$EZ1^q_ GQ;7VAk^#BDvJg&U#I{%NB9JIY5}v~oNm@1f<C<k*5>)lqRH@<LPXkr*');
define('LOGGED_IN_SALT',   'hwfnn4MG%@6MftrG,lin7**]rNiL]SvSftq/Xb>OQ3M6p%Gtn^1K.6$5|^VK~+&s');
define('NONCE_SALT',       't3q13Wvvv >u7DIoQMMc({UB.+yc @a)z2`Aj_.Fj=-8:.^@:fcwuQm~3/VR*7{{');

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/multisite/';
define('DOMAIN_CURRENT_SITE', 'boxed.dyndns.tv');
define('PATH_CURRENT_SITE', '/multisite/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WP_ALLOW_MULTISITE', true);
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
