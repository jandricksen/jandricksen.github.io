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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DxI=-wPc^[ViD;Pu5}r_Wcwi#mCDoszsW^^k/AFs nW9 <J5S1P+vT~Y5u.IL{e ');
define('SECURE_AUTH_KEY',  'tgJz-bSJ|(WH1>#RBH{V;j%SWVH,)Jazuu3Dw2WW%{:0-xY} ]]cxb3[o7M (J<c');
define('LOGGED_IN_KEY',    'V<X4)Vi=:A_I.FOi6>-/j?L&(XQ0*Jd!~ +laWxeEX4I[=4Dzf`R~t0kz@9 ;y|-');
define('NONCE_KEY',        '^a*W0Juo5VXZL[b<l>Z>`S@Q7t5R`>):J5%i!(vAf|I31Q@;o*@MRw-iE>J]Vh}n');
define('AUTH_SALT',        '}movI;oW~~`cG=<;uHw#.uhh=(+Lqkqw)MIyC.+.U$V^M:H(7N@RpbJgu|+S78sk');
define('SECURE_AUTH_SALT', '0352( a?w|*sO4]pNPHXZG2Swc>+-*hW`-py^$B3~WV`CS=mZp*5{jgC6&1FYXP5');
define('LOGGED_IN_SALT',   '51,V`u8.5&BIj-z$)8nfZu6ZGZ+WAvqn%ZyNsUK&tKk`p:@kY/d~_Z/RWZ$pR1wU');
define('NONCE_SALT',       'jb~H&EH9ka}BKgjIybffFoefD:vR@d3_F)Kn*iv4&!{<^J3cQH~ U;|%FDDgz5^f');

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
