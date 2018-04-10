<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'u859264610_jce');

/** MySQL database username */
define('DB_USER', 'u859264610_jce');

/** MySQL database password */
define('DB_PASSWORD', 'jcejcejce');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.ua');

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
define('AUTH_KEY',         '|,F=#L/aEYT6Z`h#qzV29-:iU]P5j,6kZnJ]#IN2br:Q,R2+qS+9cF%3/+k~>*(M');
define('SECURE_AUTH_KEY',  'ti wr[>xhI:%bT2+35QChKA/c_ac|)~108Q~lg[bAV!L$}TI-@+|B{1Ec=A^_XtU');
define('LOGGED_IN_KEY',    '_T((SEnC?6vL0R0i-)}n}ex,Fu2m>QDlGP-LA/QTFWL+d%MS#cw~A:p-itRO-|=1');
define('NONCE_KEY',        'U cDEe: #_[(hB+GtOw-5PZ1X6R-3z~Z<k~)cat=x.K!iB}SWML)%sQqT?%|PypA');
define('AUTH_SALT',        'm{Pnw67vYgQ:hmYI<`<VC9n^6t:NgI5$t ?bs~xlq&O}2}VM:1fqvvqL CN>TI/i');
define('SECURE_AUTH_SALT', '{Fq]i5id-rldH>bqIiKvCP|Bd8AFnIEC7hBi-5<_z~F9sq0)8r5nI?Sf|-pk1AiY');
define('LOGGED_IN_SALT',   'yMxnv3$|FBP}[4@Fo`S]6iCFU)Twv;X~{Ng^+RDDC57yfcxX0kKnpD-fZL@qry`^');
define('NONCE_SALT',       '=,/YZ8.+5o|*xB1|JY>=cECS5s?ZbKfq+@qF5wfROROn)dy2VO*eG&mrZnf )u<n');

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
