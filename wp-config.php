<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*1IT +@$]?,q4G=n>xVmbkY,N+b%K,{XKl7o_BZVi<mO-vtIYW{)&%f,i,P$LF3M' );
define( 'SECURE_AUTH_KEY',  'P^7fN9wt%E!p5!;B7`?o4`HQ096Cs/JiWks0G*gvM29,E*G4%9%RGCTMUdwJ_gR+' );
define( 'LOGGED_IN_KEY',    ';C{iszexqJeW,2cm^_[Y$>XK`kz_pU*YnW&9:pJiB--fDW?w--i8!>?A}jo[u93m' );
define( 'NONCE_KEY',        'Px+=FGS#<>hEVU]XIh=`P`gyY8V[j09d>|t9yTA%Bq:%NRR~fMSnIo;!66S*Whl|' );
define( 'AUTH_SALT',        'Hd0:HM,{yF@.=qr*&N~x<E{]bWk3?N;o>B#feoz2X{IiMgZ7;Mp`hjg~/p4x(dCs' );
define( 'SECURE_AUTH_SALT', '5yv|z#~jw~!Qnu]?oC[88tHO~d:Y}3OOdCYvHjZ/;TMJ 8PION5(9c[Af/x6*%-t' );
define( 'LOGGED_IN_SALT',   '`j+1TS `VqSM`$GvRQ}lG#~cHdIKcfnd.Ya0`L=2&8E|+EP.N;.Q%XAcK,vex a-' );
define( 'NONCE_SALT',       'A;~|O+7`b|TsERwy?15^Ooh9bI7j/XSj-C(cWj0R!u={9pBXMpjAf^2?_QDeXZxK' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
