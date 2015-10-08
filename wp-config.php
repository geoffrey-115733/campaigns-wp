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
define('DB_NAME', 'campaigns');

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
define('AUTH_KEY',         '?!5TrLLcA%g-F4M|He&QF}*+OdM:nzI.Z/z7n#;_U5<3k6~ycTt0+%y8wL/Q]eCv');
define('SECURE_AUTH_KEY',  'sv]WW{|v+K-$|H#w,|F}/OA;^Y)Ua/R2WqA^Wo6*ytw ^ug)3?IO`.~1G;Mn!rQX');
define('LOGGED_IN_KEY',    'M)mjIbAeR%Kt!i_?aR1bfHKe+w=~0)T2J-Nq#lFYS%(kkJwRN/|@3>M+Y!@n2Qcm');
define('NONCE_KEY',        '>9rw1U=KFpS(qUIL]_+/j%{v_!,P{l[MR)Um^)OFoKF!faw/W>G |B0]bNW4};=A');
define('AUTH_SALT',        '7%R{8zZTkl#H;u5U{]4-[HTkSb^z(pHFE:wP59k#$|MP_:r^n8<!ta73Nm4,D|&e');
define('SECURE_AUTH_SALT', 'UzKmv?!#J+qT+N+.-zJc@Y^e{&T2E<Q-6_!&!Jyrp+Ua>B+?Qoo5(fU4j&|+FqZT');
define('LOGGED_IN_SALT',   '|^c|ab*/cf0:EMtwc3kf)0iryfw1FVnh#S|*LmJl%qg,E<$YEu#ESF72A2[knr<>');
define('NONCE_SALT',       '_?Z:IbHk-Y<{3jh0G^Y,(4!w2`?D379]Rlj,tL-pMVP+i|_Q%lLxg81--n+;UTc5');

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
