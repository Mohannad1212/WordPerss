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
define( 'DB_NAME', 'mohannad' );

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
define( 'AUTH_KEY',         'W@*#RUB$Pgvr6Q1[~M/J%rbOlOt,,wQL>gH}Qc{K<%q,qb)uh1>^ph|Ld,Eo3;CF' );
define( 'SECURE_AUTH_KEY',  '<_;V[~w-:#uxcZ.T_3c;0<6VoIv^Sm??3GX>k@#m]2oE!TYE/5Ap*.y BJICCbJq' );
define( 'LOGGED_IN_KEY',    '0-K?2nhaXus}mpSPDEy@IaI1 Kbw<=[;RcS9@}85CcpF^#uz>>_(YtH8C.e(>S@F' );
define( 'NONCE_KEY',        'n=ZnKN>MdttCj=HvNLYz@Co/lFwu1:pP]^|6zmiv{,aS2t6i>2P@IOCG6knb,U2]' );
define( 'AUTH_SALT',        'QKtis_BYaH7QJnSwIP+Nr&5_&*n^9*0j}OYHh_Q@);c*,KlY}Fe.!YzZ29QpjckI' );
define( 'SECURE_AUTH_SALT', 'O`x0.t0BHer}8|C7ICbTFD{X@ KNR5%$j!KY?_+3YyR)/Z.JU|t mX,?DvS!s0,v' );
define( 'LOGGED_IN_SALT',   'I@o7z|[YS(3zk>`niV-nC {Yb:0_DGH#[7oE;!@zi}(@,Y3@p#/Rdst[tkZh!?1r' );
define( 'NONCE_SALT',       '|5qAPlNL!BT$_Uy[DbhT_rH+^ZZY0yv?3{_<>pFC+$?]6Apl={ g@O*v6|3*Qb8O' );

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
