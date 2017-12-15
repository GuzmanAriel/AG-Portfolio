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
define('DB_NAME', 'guzmanar_wrdp1');

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

define('WP_HOME', 'http://guzmanster.com');
define('WP_SITEURL', 'http://guzmanster.com');
define('AUTH_KEY',         'g.x;!!x>21.~FNuGazdJcu>+el&YdeS t=gaXQY`rwIXTT*JYYPS RaYn1CDnsfv');
define('SECURE_AUTH_KEY',  '|RZ,S{BBmYnNI)t8D,8 ee Ryfs.H#s#}dfnP%sa0a;j`~J>-=NJjgBwIwnU.MJ0');
define('LOGGED_IN_KEY',    'FGrUf VNHv9(Z0c6dvN%q-b9#O+7k9w.[9MM(l>W2VT*kjJ9%3rbg}?Yo>y(H2^O');
define('NONCE_KEY',        'I1eY$m?>q7GhgIWr[,P.VcfMl!~T*,;Cn1I2m} l,Z=m!N@QfLFHNZ5LNG)[ZFuV');
define('AUTH_SALT',        'u&).4VF#$,KE^#)t)kBs8TKg`pSu2Jd#97IzyTmZ`!NkP`]6V$qt5uQ[Xyp^16/V');
define('SECURE_AUTH_SALT', 'ye]Nk^4!Xj/ jX@)&qm:xSfI51AA}+%jOq}u/8U${BNL>oj/,:hkA7Wy+(=_mC.T');
define('LOGGED_IN_SALT',   '?(Mp%a/oX8U<$CFTjFA&p(G0hDeS61Ft^9M?jG9p)k$;g~ .ox3It/GH[vKLI1Hu');
define('NONCE_SALT',       'SxrXF,;]CW=!nQ{4b?[=g_4DPDT92L@[(1}1XVrA):_s/Mi3z6;9S0*j ,wNNO8.');

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
