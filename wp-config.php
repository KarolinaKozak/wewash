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
define( 'DB_NAME', 'wewash' );

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
define( 'AUTH_KEY',         '?C~Lmv#XEa>pqGudu1+0,hj<FGpR3wmHr/X*YCB3#V#ubzR+]2S]+/Ueti[B_;p[' );
define( 'SECURE_AUTH_KEY',  'x~:bctmf{}8ny]<M*TedeOZpiZWi-oFawIy)8+YbYxB6{cO<H>3L!.6;JNv/B^Nk' );
define( 'LOGGED_IN_KEY',    'gtd=tnYY1D<as):pDnu;*zX`cJZ$n/S<j=l=c_(rUI@C=Ul)8q~IW2j^B$2FN.c#' );
define( 'NONCE_KEY',        '9>ouu4t&ws[Y7]qewy1d?Kiu7Or117&ea`3Ed4OcBoyPS AxfA7i)ar!#|PO[.+5' );
define( 'AUTH_SALT',        '@LU)coY[tFG<&U/Pv:yEG#6:ZRM)CQzixD6h>gYz/-x RO-dHnt`8*63/#?|3Qs8' );
define( 'SECURE_AUTH_SALT', 'B>/;ZH0EO{W{l;XT+I?Tyv`sL_>|?6u5^Azk)6(S3h2Z1>F6sCj~J0>t$:/EJud/' );
define( 'LOGGED_IN_SALT',   '}z|v_QqPp>4w/Rxn`h43fYPb4~(__TT<W48b3b>RLW>MnVd,o,:u&vP(s&8`3<!,' );
define( 'NONCE_SALT',       '++kM@PnLehp+h#BcKhhdf[^])2gR;]_l%u#*4=OTQOF7{NU/TB_5`]B$>44u<U| ' );

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
