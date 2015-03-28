<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('AUTH_KEY',         '3Es8l?^==T|2:;sZb72e*uW9~[cKI<fl|R,|D!64cRE8~<m2D)WG_u18+6$1(N4&');
define('SECURE_AUTH_KEY',  'q1G)|Dqyb9oZwOX=4!e|H/vpqX33--$g)mUzN>d-R2]H3G$g|<]6|tfR1nyr.:j:');
define('LOGGED_IN_KEY',    '3oJ3#}$ a;&gpBFsH8MPT!.;~|$~MYy8S>(qT^@yo]d!`J|>4.&fbvintD8$DPr)');
define('NONCE_KEY',        'Tpoe.3=B-BdToi=:s1v,-Y7]jJ:AO8~PdzyGGNvkSYX&FQd&.jHh9bF|.KG%0J+:');
define('AUTH_SALT',        'RipJsPQg)ilVOJkOnZ#Mu@~R*p|}+~30Gjc{idCC-i@M-6:]0mDQ`F5NcnbK@RGL');
define('SECURE_AUTH_SALT', '/%dZt5Qw!D8sb0~`J_X?iiv8zBoE^pT66t0euyFoyDjbrK [E71G,G0QGiQz8++C');
define('LOGGED_IN_SALT',   'U2KI?S/5W=||e-vC?|kE=0sj*o|T($Y-~&^^Gq!TM-{=h,VR0c4+=,Wb]l+] 1Lr');
define('NONCE_SALT',       'G%NQ>1,u gj=B&Qiv!mP/;{#;w~w!k6;2F`g~|.5z/v:)nI>Yx%[: q PB)K&_,]');

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
