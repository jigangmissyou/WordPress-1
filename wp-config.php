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
define('DB_NAME', 'wordpress_new');

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
define('AUTH_KEY',         'isDu~QMqiyE_+L^vIgBH@D|$g>yEG^Zl0VRl<0}vr[|<R*8c7}Nmk)r`5I^7f&TU');
define('SECURE_AUTH_KEY',  '{&RZ0G,~2[3[-N&.9marMc7H1%)20$>$YYHD)11n3R;/Y+YiB0PeV<|P%v>z$-^?');
define('LOGGED_IN_KEY',    ']A(c) U=Wrda,{Th/qL+K6O6_)vG~Hran} |IeYWXiL/C=ANkx#a9vfvC4m0d`G}');
define('NONCE_KEY',        ')fu=c_=Iq$xY#zw3@(a34CE N~PsoY+:=`yG:reKnC;WmEm>z.Q&?WWCbC1PwOH]');
define('AUTH_SALT',        '_uM121)gZ]UoLBlw @4{.us;wVOHlVmIP.`mz,B^)r9(i-h64:<37IDvxqE})+<#');
define('SECURE_AUTH_SALT', 'd@HcrBJ321/2=PX1e+M 6{~u#0M7H]!_wQMbn~dz(EHDH4x7EQdy*#v+RWo;o|Q9');
define('LOGGED_IN_SALT',   'p.UP[PctR>XL!Y68Y<^d>&$#Y.y@#!*jO- d)`aiI]H?Y3Y8H597f^BHt{u(A->1');
define('NONCE_SALT',       ')zzt6{/sbI6dtoeUqRt7{|;G@H&bx/L[hqS>!n+r Op<pHw K0$&-:92S7@8$)68');

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
