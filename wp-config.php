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
define('DB_NAME', 'learnfromcode');

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
define('AUTH_KEY',         'm}Dyk]0&=?CzEjI}ytmk&QXbc$*BEN,K6!k0Ug6F`z~#p(6QaGT6zcCFxE<:yxnr');
define('SECURE_AUTH_KEY',  'DPJO+ZiO?mbKlHEe(%6vTfykH]|H?UN#Cjmkh,.`W^Q]jmSEn+x(;B.M78VfdiV6');
define('LOGGED_IN_KEY',    '|z/ln9G[PM(5##SE4./DryWx<4Wf: oELN L1V}Cvpx4cE<RhTz(`w>M.IRG}6.v');
define('NONCE_KEY',        '{y>*#,M8_/Z/Gxp$q$6^uzt2]6U}=np%OV+~-N4^M6xWk*]E$@~8$u8-:Bl-1 q+');
define('AUTH_SALT',        'OF yxi?h)}4uq-v,+_Hq !s5i-8P.Y0SIc*#17^u[*LTHjl)rp:Z1bNOk&Ml~5/V');
define('SECURE_AUTH_SALT', 'FE{DljTP,Q}xrTkMxxq1HX$WfE~K-LD#4>>0a;uZG6bXX#_(.jLa>.X2wn&uk^sM');
define('LOGGED_IN_SALT',   'r EHYrUse$MaRgJ*uHcS[v,x&[_$qZs![rsc7K{nT`XvZQ%IxmwFDI]V!?IV@8ED');
define('NONCE_SALT',       'waO;g_%6X+uzG{s8={__&9E/~By,15IIOXn!T={clKWnx!U3{9l:/JkM<3!n[1~Z');

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
