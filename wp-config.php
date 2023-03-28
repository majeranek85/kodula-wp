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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kodula-wp' );

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
define( 'AUTH_KEY',         'YMMi6828n _8l05Zo0$,F$LObG6^RwEj&w`]FLhJJ,IWoj@X+V~<200g)<fye#)v' );
define( 'SECURE_AUTH_KEY',  '!Q^P]Z((yk#E:6,1R)moG{+u5S1@~@gm~1%O0M/D<.WwH;:k$V)s?CdijZZ;,_$e' );
define( 'LOGGED_IN_KEY',    '#TPe%ylUNhfXdRowQ/TI|Vx;W;&-fmedPoByE$EsfC?09*xg>D%s^8p[YS)p{!f.' );
define( 'NONCE_KEY',        '(b+xtd#!LFA0$x?$bUuR_UYy!k]yS1/[1irM(K>s#gZ=^L,w?P96)jdqZ>iO<fCV' );
define( 'AUTH_SALT',        '?UZDnn / HXq/PvgwbVL Ng)RE0<uM$Vr{;B[BiCmXzVa]~V,*5sAE-2AE6pfDw=' );
define( 'SECURE_AUTH_SALT', 'd-T4qF%#);?PHb|t&+#3`3d5Dm0[bqbml3#.rmP RYZ# _P6JlCt TuS0G4-=rO)' );
define( 'LOGGED_IN_SALT',   '=j.~K&H2xC-$VD3]k0BM]]xiD [(F}g&af!|?[37N$u:mXcHG)rF8nj&wbs.=Ox~' );
define( 'NONCE_SALT',       'wE8M5brps,:-W)0k%Dn,,xYt%ro,;/9VZaU7BT2cQ|4GHB5JALd1}RT@/QSv!!]Q' );

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
