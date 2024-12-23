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
define( 'AUTH_KEY',          '[1Ka#x~k(-p{H6V2M-j(EXykczwgNF3{AwQ5x-AI(Q|.GC,`f;m7qa#YN*M5,%wW' );
define( 'SECURE_AUTH_KEY',   '%}vCH,7$rM0EJO,Sh %hl{fVe}o[uxMr&mc$d8z+EA0}31I()hRUg#M0aUe?>?/T' );
define( 'LOGGED_IN_KEY',     'QUA7@$nr1:}`x)4BVu,)h7j^ZYC@R-PgR}BItLi~67d>,k0LwOILP_>kVX,hYL# ' );
define( 'NONCE_KEY',         'z|Z|O@luNVeUk%NX;aAV^7N{u8Zy}lG5ThHw+ 0=tU9!g=oH[[Lb_O|c2N7vypBJ' );
define( 'AUTH_SALT',         ']8o3e5b4*A]l0f^&a$A#YZ]DAG${VeJ^]N&~ANmqLg_>9cjeF~f3]Ue>*~O2KvkX' );
define( 'SECURE_AUTH_SALT',  '/Fae/4ktR1f@G%PkT,w&@}nXt;IRwRI2Pl9EK@er(XO;nKbx#>%#E:ap>=q@TOhh' );
define( 'LOGGED_IN_SALT',    'H8^_4eEfy:3|L85ruxXykf|J,>Z_^#qL.Y [j/sNI+OO#NmXJ9yK5!siO.5U^+zl' );
define( 'NONCE_SALT',        'e>ZaZL&{|pVm)OP4,<iY~(lwmaU=G<:&`(MjFE6M|GsUhmT[eUNd5{Fu-()d2~@w' );
define( 'WP_CACHE_KEY_SALT', 'YF]v6{JuHRxR`>Dyx)=DBH`2[E$Omo2JWyi5Ij$l=gCL7xtziqM&)O}XS]G!7bg/' );


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
