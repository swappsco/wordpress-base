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

$loader = require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));
/** MySQL database username */
define('DB_USER', getenv('DB_USER'));
/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));
/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'Y+yCA`^|w05OaA`p<41+f`+3q|+d.@~7c>BF(-&?ikLGBKWMv.*Cy)Y7-/u=f7%V');
define('SECURE_AUTH_KEY',  'B!-G#yWeSzB`9Y>_#.to@{.iml{UhVJoz8`vi,(JejjwiEfzZY +tJ.d)7@zGe|f');
define('LOGGED_IN_KEY',    'HC7Si; Rd:<,v2.z}1}D0w8S-lY@H|zq*h8mmK~|TL5K1p{(9b-AP6*>.Rc7/-UZ');
define('NONCE_KEY',        'ga]2*{t_sS_z.p_Sz $kF.-q(J_)5NGnzWFwb!BXr5]*DMP#32hdc_)5;;Oku+=;');
define('AUTH_SALT',        ')n9|V!?{(qVAG#o<H2|xAH<e2J.Y>&!V?#N})+gGv{KweP3bT2fA35gdc3v94J+<');
define('SECURE_AUTH_SALT', ';[-`t-%/zMlf&;}GqN 5|n}Z[{Oq*lZE/t]{I`w-D&j:u5!kL<IrGNCqpN3r{q=*');
define('LOGGED_IN_SALT',   'b=qec+tmy2s._i>uP>TWf6Ym9^lXu*|LhIAxBARvi<Fp=5ZW#xU9_b)!(Y`;_UzY');
define('NONCE_SALT',       '> )~3C}-K(/R6y>U-M,^[2GkP$H&:qPP_znfP_XgXV,Re-4`sn.~FnCGy7}U;z.m');

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
$wp_debug = filter_var(getenv('WP_DEBUG'), FILTER_VALIDATE_BOOLEAN);
define('WP_DEBUG', $wp_debug);

define( 'DBI_AWS_ACCESS_KEY_ID', getenv('AWS_ACCESS_KEY_ID') );
define( 'DBI_AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY'));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
