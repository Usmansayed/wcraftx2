<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wcraftx2' );

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
define( 'AUTH_KEY',         'cxY,I0/oD/$y$ugi6xh7^Un|{Wa.(xde{ZcD/*VE.HS[HEm mb~mt<EwAl>PkX^a' );
define( 'SECURE_AUTH_KEY',  '8)5Cc$~Ev)Do*s/#:;F6;R1bOQmXljeys~&F+^727 ^)Z/5 aaY$@)-QVeB8L*Au' );
define( 'LOGGED_IN_KEY',    '8;:b;xX)vnr>dD4CoI;38nex}.=45i$p&bW9DuSZjsEm<=R56ow93GkC*:hj0ASz' );
define( 'NONCE_KEY',        'Y+5btcHGbApW{8DpDo|^n#1-No|m:nkP*?g6M1016&-83>yi?;.gVDf%C5B(zb:{' );
define( 'AUTH_SALT',        'Wx9x6m3D0-|Zc?Xwr|<vy;*xioX@dcdAm2xSx*{H]$7o=:8Qi.6p&5k9tbaEj|<`' );
define( 'SECURE_AUTH_SALT', 'kw%jk4;*tXcue 3f<*-gPrtEK6:!$Y2p@o5.!mdz30Pnw^sEqiHbm>T}F^{e~g|B' );
define( 'LOGGED_IN_SALT',   '@h>F-iy|8ht{.11!4~}/BMT0;gSU~An606RR|;eK3PD.JPAtK&p5jznI#FR2m9=J' );
define( 'NONCE_SALT',       'r$IGY[h4vJaqa,6%HD7~&~lzi>wlk]dT$lyzvWX/c6]IS-0)q4E&B!_h{9msHI*d' );

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
