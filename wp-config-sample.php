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
 define('AUTH_KEY',         'fG|vT*1+&M.,va|@rE (K%g<G&:|!F:r=#&cD^eQo|N!~}o4,`cg;}Ig H:<:Ih_');
 define('SECURE_AUTH_KEY',  'XUUxi#/Bk|QxiIYw4*z?FpS]9$Dv>:lpV4p-Td%vNexddK>>8g/jtw>0upl0(|rR');
 define('LOGGED_IN_KEY',    'k0EGyZ%xJNP`^QE/Cmw5|v:|UEdEVkqzRan(XXE1.jHb$l6gqZ]RJm{bO+,130LI');
 define('NONCE_KEY',        'kan&.ReE#4ow)Qtl[Gfh4$mxlihSm@6&^+l$=S/7_F)$F+SX>EYc:*+W[|ctZnDs');
 define('AUTH_SALT',        '`WDjz_SrR]|v&!SYcUyPU8K.2|sQ)<_05.%E&HJb0I,lCh|zjhupQV[vFB$T]M{h');
 define('SECURE_AUTH_SALT', '{Tb}Au|j!09vJOxBTmVk=1((l?mP.=+Yu _V,/whxJ0B&HeHd]SNv`bFm7GU##8u');
 define('LOGGED_IN_SALT',   '};|Qf>c!eh+d4.:%/y-Ht,W8Tr-n*yi}*PH;-_0sk)>~B]Rl+_HSd~IiK$Y6IU&T');
 define('NONCE_SALT',       'Vpl<GA)Y~Nw-S(-D[E~^FCW z0~8b6Ub+h!C6sB.}eT=0O%U.Xv]_sj><{IQn^%R');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
