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

define( 'DB_NAME', "mapshop" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'i,N{s#R66sFnZ$=m?5d}7yp=G:45Q1rgO3V[EVr`:PDn>]wn{_GWDwaNM%]aNEi|' );

define( 'SECURE_AUTH_KEY',  'UM!7)e/+AvhSRl*c!kwWG}hT3AUTeB^{2ad]Vqf{yUK>j0_WQW)H4*R5%0n-.@eK' );

define( 'LOGGED_IN_KEY',    'p)>%H|37r-.!4,xS3C*mvZ<Na]j8`~PW1.,`-#)%x95/6#T,/h;}$_UgZgfF`Rw{' );

define( 'NONCE_KEY',        ';ztF;JL{mqM}r-I{mW()MjP;pW[X?6U#1V}Il:1Cw?y.O%hiz<?W85k+|)g9p}Zn' );

define( 'AUTH_SALT',        '[?JM{Hz-/E{}WNBJnujW%9`[^FiLOz>SBLVpAD$pU@1md u1m9tZDd`Q+@Qz]KLM' );

define( 'SECURE_AUTH_SALT', 'Dyd5x{~rD!6)Ylt>/)(^8lp5}g5jZrw)~jD[N_Osh}Efn?>jWfe`8-kC4j^5~#bu' );

define( 'LOGGED_IN_SALT',   '/.NRY$a%>i/e`xDJjr=9%lf0 7H{c$JfK?%VJYV@~/`:anFQ^Fo@q%_ /+{RL3gZ' );

define( 'NONCE_SALT',       '>bOHlOz_9B2RTM_~bZ9AT[_e}kU?|xIG|{6%qcCGohqSAJjZ3eR*=fI#%g9skL.]' );


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

