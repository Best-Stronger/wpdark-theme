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
define( 'DB_NAME', 'dark_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-#qb-3t*cp}5*GTEdVv<(y+8pyFOT2r9pk<sh{mC%.(Y*R(,bQp+=V#b,>TOb4S9' );
define( 'SECURE_AUTH_KEY',  'h:XBV]&+|(h6}<Gq:K];`}=^H!YxqHf4LI(6i5OEnUE@,Yb([U;VPorJu[)RNa7g' );
define( 'LOGGED_IN_KEY',    '*,4ORguk&0J?t;Rc,U0DIZbHelRr.:MaACM!@D]q),r>)vjURg:Lz;DL[ZGmVl^C' );
define( 'NONCE_KEY',        'ZBkOF97<5Lbl]Rs_NF]X5vV_d Bx<+RpkoS;!~^:bD_o=]s}4/-aaS9T|5=-MCNK' );
define( 'AUTH_SALT',        'uir1=WsS*/}[0Aou&!gFdiW 21%xZ2H]c5*B^>T[9MG Qa;Z&NL0/#d8NpT[-NH(' );
define( 'SECURE_AUTH_SALT', 'x:(1#Trt`/:[nS(-yIlQr!F~ lg`e)-4++N;fm2Yhw!fq80StwW9&SW[=Qy};M$s' );
define( 'LOGGED_IN_SALT',   '>m&+{ s2o[:qzUckt?YyU7/geLOdyLNNQHB!m#nW& DK3$#pV|EHq~[3=vA^OcMI' );
define( 'NONCE_SALT',       'j{u=vg?1&EP5J+YgO@_!<1gL8C_R4$*jChNFB=[=N]UGor~//hmZo8zuW)KnGOP8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
