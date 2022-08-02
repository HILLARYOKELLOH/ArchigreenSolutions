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

//THIS IS LOCAL DATABASE

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'ArchigreenSolutions' );

/** Database username */
//define( 'DB_USER', 'root' );

/** Database password */
//define( 'DB_PASSWORD', '' );

/** Database hostname */
//define( 'DB_HOST', 'localhost' );

//THIS IS REMOTE DATABASE
define( 'DB_NAME', 'ZqiVgdKgho' );


define( 'DB_USER', 'ZqiVgdKgho' );

/** Database password */
define( 'DB_PASSWORD', 'N9QLXvsxLp' );

/** Database hostname */
define( 'DB_HOST', 'remotemysql.com' );


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
define( 'AUTH_KEY',         'f3pXO_GpQYsp<o&rV:3Zuy2mq(VmP>cm]}Mfi^*9)aD*<dh$Zd4$FyybZhs{T|At' );
define( 'SECURE_AUTH_KEY',  'Gzym,Llb@T!v^$J`OeMWtnxMdBcV7g[LX8^%.Eh2rn]%=lCG sPmUi#YiFwztn1<' );
define( 'LOGGED_IN_KEY',    'kBI>p*^W#`z:T40mPrGNTgDaD.lLtX<zmX!W$`12G&d9v.VA!ezi)V,=}$D2g7?P' );
define( 'NONCE_KEY',        'a6!$AEvA:Pkp-RS-Uedz:WQg]_o|bgeiBEA:A1.8+03r9*<*v^{<_wziuR>*pfn/' );
define( 'AUTH_SALT',        '.vlKGInJ9q0wbzQ8BMzg^5@sqX #]?p<M8E#>)(lo(q)?fGIZpxLInR_{DCK*vH]' );
define( 'SECURE_AUTH_SALT', ':l]k8%,M3qW6?e=yq55BhWux|c;,gmsEOD2s!bJdCI`YC-`qM((`vU:qL4g$w=EK' );
define( 'LOGGED_IN_SALT',   '=H;LoX3<b?#.YO4iBT7$34:9|I]TlA:^~1_=+{PDvLSw-KTCJeG4,BaOPBdwkN7$' );
define( 'NONCE_SALT',       ' bE)(i|D_fKI47FnC<cO%oZxU1@*Z+9+31h^e4[[W]_<<+(]|<cPfN6w?xz1bUC^' );

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
