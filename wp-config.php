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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'g`;nT.e0w6^tm8{E|<Vf7P~15m]z39Zys;VS/YvqC7#9GP~ZAeaZf:,l?&_JpJ*S' );
define( 'SECURE_AUTH_KEY',   'B%lRy[[T@}qDcb`i_8GIVw% &_6#DN7h2(JL<xKyamqn7U$MI/gSP^2b^/9I1()H' );
define( 'LOGGED_IN_KEY',     '!Bl:!B#PIaUcytm &ZI$T4[sKsEHjtr_aiR#:ckMr1p)jXKaS=x#nsa)(>s>5O~C' );
define( 'NONCE_KEY',         ' 7g~R5@23 ]4gR7PB6#`nZ6Kgr[?>KW/NfibZ>.^U)FVtMw&b!l#p#6I.c>}NBv^' );
define( 'AUTH_SALT',         'JP+/A0{k+{is76a&Wi*a@9fnYfMX]i3|o:?z*Y//M$lJ4QEOXKR865 3#|V+P_X;' );
define( 'SECURE_AUTH_SALT',  'Aaa_(Am@w2u@3E,N`mNT%m7=!NM.ctG8IS~=sXl-7RGqu!c+*Us~,W9sC(h5tijB' );
define( 'LOGGED_IN_SALT',    'xw|L !z/U3kPTj[3U0zBt)/=5/gC+iBWd/I<&kp)j{%7J2r~8$$Tg.!1S~r%Iv/l' );
define( 'NONCE_SALT',        '3TO,&j^@UJ+Mh0wa#L%pV7<@;p$y.M+Lp-VQ?8yx~z&5tW8GSZEr5tj`gTAVCG`2' );
define( 'WP_CACHE_KEY_SALT', 'GYvDe-&=x=`pD}?J[/^iO,l_f.2Bc~amRBwkuz+U.MN?SjFO.=Y%[KDrMTiu|])o' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
