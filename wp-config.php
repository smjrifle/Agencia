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

/*$mysql_host = "mysql7.000webhost.com";
$mysql_database = "a6154704_agencia";
$mysql_user = "a6154704_agencia";
$mysql_password = "K@zi5tudi0s";*/

define('DB_NAME', 'agencia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         'O>q5VJ>9Dw G*@abJQGN=wMr1g98;_-At%uZK&</EVmr*L9+uJk({^mr^p7T#uP]');
define('SECURE_AUTH_KEY',  'Jir2g1}KddJ}nz<V6L%9ThDFGpOUAOfL)b;n;K3d~/n1X3[/<~Z%e3VPt6$SO?TO');
define('LOGGED_IN_KEY',    '``5+UooR?4i&YJVy{QEV9{Yt`}i0Yr{H2Vj<NM>H!ztiEL&Euzj+N67M-Iu0_-*|');
define('NONCE_KEY',        '/)r$mUq1j!=!l |sZso`Rbm)4fX}(Zd%7R>(XI0i[7yx9}%08%,]?(S$+T$CEN<T');
define('AUTH_SALT',        '8$Tc+@/gy%*e4gjPe(8!j_75c5#@;p9eiW%b~gJU95RQTs)`W[z<%fE%C,t)Am;1');
define('SECURE_AUTH_SALT', 'Ucv}]_w6*epUr1#T-dYtF%Iz(K44AJQ[GIZ$aX0=@^(/V#^|OZ%dZT^Oy!0EC<GO');
define('LOGGED_IN_SALT',   'Gfs;5BQ``5II/IDbMT~*Rqm?>eh`2r+5qY847s@F)GgI([]%j?<@yETIS0+]DVdy');
define('NONCE_SALT',       'eq78Rel3G7IB$M.5xB!qnNUkB$2CwF88>TqR-&zybCC?V+i `S=/vnV)KuO#;I,6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ac_';

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
