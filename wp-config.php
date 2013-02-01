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
define('AUTH_KEY',         '3/17ub&kt17IDjQ+|t?m%`p9216J6q1^{-p,ROHY&XNhbeXj[^W&o9%%|<7vve=l');
define('SECURE_AUTH_KEY',  'Yz=V7LondIV-GiJ([e?x<L}[Zkmyzz4B!!t--34V2ycea(|za^^;LO-|-Z;z,sE{');
define('LOGGED_IN_KEY',    '~3C+6o-A<WV-QcS(sPPs-KjU)V7C+%({9TwsIg@8LnpF`8Aj082N&cPu2xK 2mV#');
define('NONCE_KEY',        'gt3$!(ehaRl`qYtY6mob8ZI!g?8p|zIh+vi,<<M#u!ENzk;|swzAx.?};iL4l+WM');
define('AUTH_SALT',        '[j4qO1rfH3}Aq*dJV.<nu*4(OOXLIJ>KCj+K B+cjgAN[^QWPq$ :[n]sJ,}Q];M');
define('SECURE_AUTH_SALT', 'X S-}f5T6tSq2zPmjB(-/CW|]vpXXyG,#Y5z*-oS qG1}||~>X`hIT1,T`Rx-]^_');
define('LOGGED_IN_SALT',   '.BbY,ry(x-Nae-f2^pz:78T}8#G%Z^+VTV9g+kBTf94E{b,*vRQ+KMmnnT/ee!7&');
define('NONCE_SALT',       'Nu^9-+ea5UyD.%4YUUk;f^8mzHt*[<i_EgLh18O?U|-!9I1!zU?@D*8hJ-0KqJ_|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sandbox_';

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

/**
 * SWB: Turn of javascript concatenation. Apparently the PHP community has not
 * figured out how to do that right yet and it breaks some pages. See:
 *
 *   http://wordpress.org/support/topic/35-causing-major-jquery-and-javascript-errors
 *   http://www.wpaustralia.org/topic/jquery-script-load-fail-on-wordpress-3-5/
 */
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
