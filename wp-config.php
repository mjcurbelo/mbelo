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
define( 'DB_NAME', 'mbelo' );

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
define( 'AUTH_KEY',         '_I@u<hq 4<g.s^89?JvmD_^]z]3d)2SiM`Txq`r;X.ri<`7Q)=y=V3|,3K,RZC/<' );
define( 'SECURE_AUTH_KEY',  'VTP2)z$2Ct1H+WXY$<MvDUY&/y*t(`XLiKga5]|4#tEJ1(ked+L3aZYbxQBtv 1F' );
define( 'LOGGED_IN_KEY',    ' u[Su>#:f,>GEb 6i6-SLhVC ZIdTKA!E3*4%>LQHWe8j9](l:+q$Y`Hz9 39R;=' );
define( 'NONCE_KEY',        ')T)XU.[8QZDCM-ovn%jn&w5V:^:-0`+qw%ypH*LPa|3 _xH/Y88O?@UIFUCrTqQ5' );
define( 'AUTH_SALT',        'c)ybxyS$sY&|h7/kQvACsAn{#Qz@9U,c*1JeNWudPmG_<k*5) &KboBOPu=4cGeW' );
define( 'SECURE_AUTH_SALT', 'W]3FS|f[nt4Rqz(G(E.f6a)}I8z}^Pj~]=F/+NFp_.-?4bo3#LhDv7V5rHV=7w)E' );
define( 'LOGGED_IN_SALT',   '!vQ:@UmrS@CK}Q?1:ItJj$xhQ5x/<w:L@KjG,AKf6G>*PtQpLri6:hTcf(/iweg5' );
define( 'NONCE_SALT',       '>5O~#?R;hw9R+/R(ut!}8(4DPML!sJQb(^=t_.E@?WUr+%Ejh{v}52[@;~/J6P&V' );

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
