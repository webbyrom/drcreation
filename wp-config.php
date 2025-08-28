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
define( 'DB_NAME', 'wp_drcreation_db' );

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
define( 'AUTH_KEY',          'cxy-v|*<y3,^s/ik3qUkA7(-:fGs+9/h.ib:955ZCOyF$]PMik2;L0_J9blYxsOF' );
define( 'SECURE_AUTH_KEY',   'Ml`7Tv4rs)!OkRg /((Fw48,d#d6--{GrGL4A!q>{iO%^fyqHAaT()?PIMEeozA)' );
define( 'LOGGED_IN_KEY',     '9vpTJLcJIqx,J<$9X.Px2d o|>YF504lW$:hazj?fu-a]TB[Zm&*>J)!W8ueJdpM' );
define( 'NONCE_KEY',         '<1=}kQ8:n0Bg/HJGmp<r*3(xN+:Do=T=_JVH;_<+>#NLGovYM?1iBT0@*s26}@t8' );
define( 'AUTH_SALT',         '!N4!0$YgH[`(biwv<{f@L^@Y+OyUd1s4}k`Lw`=LrSm]plO8aNoE.aro|%Zk@U/)' );
define( 'SECURE_AUTH_SALT',  '[@TUifQRi``NDki>c/U:,R 6Mign;xSoOON#f&mp[NM[cdJDjvC3CJq~Z;3ocecr' );
define( 'LOGGED_IN_SALT',    'OYgQjp#C[0>d&&ZboO^S<jN!5};d)-GC6cJq*q,^Xm&c0NNhDkj)~+k68&FK#|mM' );
define( 'NONCE_SALT',        'ATA$MvXvi~ET:l@*e?_WI^)B3DY?!*NC}#FgF|~F`VWF{_)8?C)*l%..HqC<O,;9' );
define( 'WP_CACHE_KEY_SALT', 'ler.At+S3l,boFhepK)|mg_az_NU`:dg}@1ylk~_1=IX4oX=P5xgB,3,,(SyhmH(' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
