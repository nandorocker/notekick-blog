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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']8[qyfR;KnRv$08#&/H5x}&7%nNgZ(Q,2EGUp3q+`-N5{~h}.o`,^2r+/QiP41M}');
define('SECURE_AUTH_KEY',  '_LwywRlrsZIs@@s;O>i.wUI]m`-#+I.[/EVPsms@6jBSOwX^Yn<spk6iD!5$N`a)');
define('LOGGED_IN_KEY',    ',:j*-3M8D6T=>2o0(|5CNC8ROYQt(|t@5!I!Id8lK~0<{I$<E1n?%ON560|MW9Ba');
define('NONCE_KEY',        'o5S9p0XZSy1`g?^Z~L5/q>SzSDITZv5jLL~5ge#=<K(O0X$5#jN&|_4?fZ(G+?yA');
define('AUTH_SALT',        '<Ja0I_nR!*}V/gHk0w?-MyRM9JJGOc_|.oov7LV-&}-{+Xcik-r-d JK57s)qcV?');
define('SECURE_AUTH_SALT', 'M![lPE?yty^Bcve1x?Af>(h3,m|OCb%Jsi0?||2 CNjuT6I*H{-1I&8T;mSU`$#K');
define('LOGGED_IN_SALT',   'C=u!cko7^-wr*)j[); ]y=<V=CI4u[W_0Una$Y=(%s8-k&YwBB&UX/BEXZxSvE&h');
define('NONCE_SALT',       'vp|?VSI,{z%CQK+[J+0|%6DjhW~8)D;0/W|eg]:o]g,LXUX99+4(Vs=|lB6^^Q[C');

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
