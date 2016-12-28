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
define('DB_NAME', 'Strategos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ';p4vug8I;$f{Muj.t<CBw@Aw(NNzDe_x8$z~(gQnxQ7s1uGWtP$jt;(nPok9AWN-');
define('SECURE_AUTH_KEY',  'K6R|?wrR}weJJZ(bgdUkt2PA~.+Bg[)Q&V3&sWed%=L(CDHXpM~6$Zkv^6B2|l(x');
define('LOGGED_IN_KEY',    'V/*,F6}`y~,>5r0yKT9ie/{?WjpV`s<c*9EJAuZ[&HQ##9:fqlv0XfE:;cL~fd<$');
define('NONCE_KEY',        '}/trRuSP#t r{FxkzN~YrCD};myg-jE.`u|VoGz-+z6uhFhkQ|g*s_xE??#QCue7');
define('AUTH_SALT',        '-K2fUo}JQ`/$#+!?9i)~J6dMI@,V,ZA?B]ZU;WVO^,HpQZ9^5nx+3(FqV&yZ4>AZ');
define('SECURE_AUTH_SALT', 'B=*aHwF0>=f@x-P:=&!H%p1JnIu$F$>pw=X?Nl<O9ksYOJ[;(qamezzq,}qo@/*e');
define('LOGGED_IN_SALT',   '#Z4%urx4x^r(eoqU,*ALyn6bF&!(mqn*)R:{3p5m>p7tE2vkE{ELIm.|a=caky{`');
define('NONCE_SALT',       ')73sDM3(<Oe j!uU22!w[,JBrz*ypV)$t]f1 [h{1I2f7U~y4RG(9VTqF!dfE$c?');

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
