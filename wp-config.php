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
define('AUTH_KEY',         '`@T-qL(6>ZDXIzMZliC0PlG{6bT7^YCXEf8C`1+7kJ5DLt+vhF+|oe|f};v9%-O=');
define('SECURE_AUTH_KEY',  'VnwWWqzVx8FNJ1N>aRavr=VuUQr9ESLf3Q4<cZI%.+J-R4Q#.v[WJx6/M8 jX{`/');
define('LOGGED_IN_KEY',    '#rD|qJ;YUd!K=PPrq*w<T3&Sh;FGUA`Qw%z|.^o8?-zQ-yKd0C-WtuMJj4bU#2r6');
define('NONCE_KEY',        'J)np&M4<z,|/Af0_-D9UJ3{aIXBmReW:6w3f-];VM!A8F>tOgbfMa[7y~GCp_u[l');
define('AUTH_SALT',        'G-*UZt!(G+dS.<i^_x&M); kt{5kOKi5+2$a10~Xf(&x?rzq]S+KC[@Ar|l]3JCG');
define('SECURE_AUTH_SALT', '}}u-V?xI4<&,[Tmkjbp#-$=ble4#qjZ0h5$B#|e47b[-22TI-Znu-4*,{Bbq++dR');
define('LOGGED_IN_SALT',   '|SVX;M|l)y];i8t&NY=Kn@t)>oNWcxW?rb1-)*|o1!%ptn50l,B1Ef%EQ8ncY*wm');
define('NONCE_SALT',       '-]Y252wp~aIb`--;v=L.?rbiW{ W{gO^MO)[F,fiiPUKW*DNl<,]T@+s-LuZk *L');

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
