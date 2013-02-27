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
define('DB_NAME', 'novacrystallis_1');

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
define('AUTH_KEY',         '=kec{.;0KSEf*+^3B2$lj0aC@F1mxP 0<(JAd#Y.;Oe/P_BwD9jG8o).N]J#7~It');
define('SECURE_AUTH_KEY',  '<XaIfQ<](K$}s30G;#=%[ueW!p_}D=og,nDW$ptR+PW[vD9(eIxoA<(+V,OvA~c(');
define('LOGGED_IN_KEY',    'N=DP<821?z:mXo5O9!G,cY>k4auC2OkZo=jdHq0McCN_G!Dd}kT]|SKn_!kpHJ0?');
define('NONCE_KEY',        '+{f5Mp0&V59<?EUVf!4?0<M%A}e$-Y-%UKZ=>ptqIy]zD5[*G*k>zp&xGDDq;pAt');
define('AUTH_SALT',        'mUGb/+{tmH`Dfr])fXG2..]PD,Q7ZwV%6j`PTL+}M8[ahfDk_r{{G8Bn~Iq!{m}7');
define('SECURE_AUTH_SALT', 'C`Ahiq.Izc5/_b`{1Z*m{L6=_2b/:u$;Y@|}:T DiaX*wa4pUnX)$8{AOV~rvR++');
define('LOGGED_IN_SALT',   'FcslfK*s:SO OUhGDkIyY|*|)p}<@.u3CdUhR#R(Yj4sN!Oot7|d~Z0Cb@~37rY:');
define('NONCE_SALT',       '/?L[V.7P/xuZ&dB;OSXy^:+<W<a]c|>#xNp,KV)gwH<ggSYAY@}|tqg`!moKQmN_');

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
