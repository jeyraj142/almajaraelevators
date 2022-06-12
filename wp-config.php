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
define( 'DB_NAME', 'majara_db' );

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
define( 'AUTH_KEY',         '(0Zu>1M_%ITW,gEo, -bg;N[rWN=<;!lp~V8?0&j`<R%J.d^ M9xtD:5T@G<T^2&' );
define( 'SECURE_AUTH_KEY',  'hr1`A=JMe7tczgU[LNq)_%9L)6c0n5j89bZ3&ntQse-.XOZOW4n.UG|:k!siu4h{' );
define( 'LOGGED_IN_KEY',    'vCKKV-A7Ah2S##+|SuSRkyd2+9;ggfgJAT($QI5bHI/Gbw:EeH2FRwRS~UllKNEG' );
define( 'NONCE_KEY',        '.zH(V&=RcOH@d5O<A7#4-K4LJ}PU{zCk}A~T{5OJv:mMu.RT]Ici&<,d7BAq2Gz:' );
define( 'AUTH_SALT',        '`gJocKrUDTnK`$JsSZ9h@Yp*Y7ZB^peWi&rMo0ZI#|=u[vO~/UKQI[>GYVeyi=Pd' );
define( 'SECURE_AUTH_SALT', 'fUdjf$O|sUPs}]aUltLZ`16WK0uaehM!LjcSW{*NYM%O&(QJ}G*%:%w+O6bV@:Bt' );
define( 'LOGGED_IN_SALT',   'H~LK=ZTIW+#YT* Zm1)%}db n1M{W^x^g_.{E5RO1,i m<9/$X(fMW~~@0Tgg2D6' );
define( 'NONCE_SALT',       'dOs<z4t3$1m@AR{%D]( CopMaB*vd)ne( 5@&>HK5my%!;?Y;R!<0M*4RJ6%FwIB' );

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
define('WP_ALLOW_REPAIR', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
