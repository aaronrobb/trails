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
define('DB_NAME', 'rivertr1');

/** MySQL database username */
define('DB_USER', 'rivertr1');

/** MySQL database password */
define('DB_PASSWORD', '86Y6gvb2nJ');

/** MySQL hostname */
define('DB_HOST', 127.0.0.1');

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
define('AUTH_KEY',         '&ff.7]rME8If&(2{$.1Qpzn#qTm$|*u%.)Xm@dx(x2N>8Q+tk=2*Ea9qo;%6B_,B');
define('SECURE_AUTH_KEY',  'MgXT?:=94=+t2-1HNR[tHkfw),NR~Tn{1CuLDk6PqQo`7+rz/-ube8)Mz-i2U>$$');
define('LOGGED_IN_KEY',    '@G<$9B0dCz|GSA!BCcQMe0P+75F%!}D3_+j@[-sa->Ll0;nQpN5u|0By]|3IupHs');
define('NONCE_KEY',        '5T@q@2#N#99|`KW=iV4F~M2<dCxY|[/=#9?15?:- 4?{BzI6e|si@q/kCT(Ya-nc');
define('AUTH_SALT',        ':jhG//{{O|-|;?O!3@G4^bvbKH @L`$Kn$(iZan d0@5<ZJ0+%CsF@zh%+Nx| v3');
define('SECURE_AUTH_SALT', 'RMgsBZmrS|5{:hI?HJk;/q)7k>NjW71Q-)[Kw-We?PX}+-#TOeH0-g:T1$|k-k~1');
define('LOGGED_IN_SALT',   'E8TRLHn~nXO-]fq-E!Wk=IhVYqQ+m|%)*tlK{b?uPOOm5i}h+D.o-M1yL<j(I3S6');
define('NONCE_SALT',       'Y/_@JZm,sA{|m0m,obg>7OG?&}3l|4#vD>H*9H-bEw$||(x4&-$xl:m> 5:ERSuS');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
