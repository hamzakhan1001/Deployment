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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '<;l-E}/~!<moQjmH>78ocK*9hp0z?6.FcS-k6d}kr7As<13N4KGC9X/ibs1_ukoX' );
define( 'SECURE_AUTH_KEY',  'VHtL1BX+8H$^!sdyFoT f@OoJWm;iU-<3CD?U-B|H~J`sjbfV;UJcE|GLB;5.sMk' );
define( 'LOGGED_IN_KEY',    'd1^l%uyJxj^uGQ3fp-C/ks#R)im{T}mhLJ |GMg&KJc0{xJw`e4mrszLHGv+e<51' );
define( 'NONCE_KEY',        ';?vZ,c<=_OZQVMsqvJQjU!`xwE*~[RqP1=|]1YA>yXl1knDL+n3mXOE[{HIeTl@!' );
define( 'AUTH_SALT',        'qJ5-pDiT=s=&N}7}0u@J&ul.rYf$Rv_V?8u~SGEf!4Xo[UAR6wS<8.I]EZ.v<>5[' );
define( 'SECURE_AUTH_SALT', 'oE]KxBM]#npPCKbWG.#5>SGxATTmw}6Q@!^JT~$_MpJKbNtFM=,XM{e38d4X4rAA' );
define( 'LOGGED_IN_SALT',   'Pi|B_u$;BPtSq4KOC*Z; =C|-Vkq5j%XNf~}H|@YKGa--[No0$ xUZ4s=R*mjku@' );
define( 'NONCE_SALT',       'no3-.nvbUuDR* ~|K-i#{`QkLfpQng5st.4c/(gf3K2hmM{&~t@7(|}F/>4s93TN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
