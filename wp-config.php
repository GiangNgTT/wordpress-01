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
define( 'DB_NAME', 'news' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ')L3VQ)cH?#hcFl@@t^ue?9&l$5ru!jPFFLvhKA97V?[yTux]O1S}xY5Jx@LX1DIj' );
define( 'SECURE_AUTH_KEY',  '!_8|UC C|;wp0}1%wA&bwP[Q**)8O1eeXQ*_JLD)iN06D-aK6vmU-v-Jvr.hRcIH' );
define( 'LOGGED_IN_KEY',    'f_s+b/$>(Q7fAIh`!c8pk=x<_Gb`$ytN8 1jCy|n,7MOE_$[v m| >ax~dH*,,0<' );
define( 'NONCE_KEY',        '`<6JC>a&X%%m:;;[9R8I:CqaYO:ezfz-Ao9CSf_Uyl(@a,3MmtAI+}MUCypyy:}|' );
define( 'AUTH_SALT',        'X>v{R+z3(7{R[J:E!;9{B?&5S0ZiDWgK0iH374nA,FCLDriZ%^5Z9;45tvgKN4B6' );
define( 'SECURE_AUTH_SALT', '`>Wk$^KZQ$$?k]t5$.=T<XGVmQ<VO4RG<mZil)bv-W,7pF+VR<iV,hZx`YpR*-X=' );
define( 'LOGGED_IN_SALT',   ' X(A~Uvmi73!s&cn!|,]c&wIcqO^-DH484<#4&:s!V%VkGID/%p-D!Y=,oBU;SUU' );
define( 'NONCE_SALT',       'b4rJbTx2!zQ Cs=<Rhh4scs4R*_%wY&qKrIn~AtFA%r`ROn&Vc2nVq!3pY`x]n6~' );

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
