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

// ** Heroku Postgres settings - from Heroku Environment ** //
//$db = parse_url($_ENV["DATABASE_URL"]);
if (isset($_ENV["DATABASE_URL"]))
  $db = parse_url($_ENV["DATABASE_URL"]);
else
  $db = parse_url($_SERVER["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'N<)|]8/r$@POHZi+DIHw)HXGPla_Kp2O*+C]fcA=|rXP>^]sNTV4f8q0HhU4%{c]');
define('SECURE_AUTH_KEY',  '.CAm/Jm3fE?1r`?FS2vbmUTq|WVlZeqUj2}N/M@ofoDygM@3q[i65VC:LUPZhoT2');
define('LOGGED_IN_KEY',    'E|n8*r1o@/zpj0`8~FV;)z_wnyD<%NAG|/GOPIJGz.CL[V)j]+Z^hL=wUQ/+_o_X');
define('NONCE_KEY',        ',<J&f~%oTJhJ$b_+9X<|~zYwB-(-rS4]k<J,+^bbiaA}?wyas^m=AG:OuT!$|B[J');
define('AUTH_SALT',        '/^0NO*S [w0K#~KE?zbqER^Y+X7z!ds#sM-~YOqPF$axRYVvmldl#vT7n-|+L*|]');
define('SECURE_AUTH_SALT', 'q`r-c#-Hw](Vb>@8j%0/OI8L@I|G+$=f)nE4dTCaWbU2h@LK?Z-q8gGF?B6dEmc4');
define('LOGGED_IN_SALT',   '+Ro)27RbC|*,{-6fL}i8|hEV<5O8F]*{xkA?yG(O&Fg(D[x}_0# -*^Gv^bqIt6E');
define('NONCE_SALT',       'Gejm+TN7HrQhare/&RDag-tjF+},|+`2!ytF}t:wLc$jgWfl)Gz1=!|2C{f[Eg<J');

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
