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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '#kp~.82{Xun#%*Una>7@6pzcO)PdDunG^aZvvGJ~PjI:$=;gbub9H*/y*f!}O.rp' );
define( 'SECURE_AUTH_KEY',  'rL(>7^OB[%2>N|1xu du*tO7!fYK]N@t?Z/4muoVlZOMvcddF/FI.ziz=t7J$L~1' );
define( 'LOGGED_IN_KEY',    '<y,#@0}~V}:@4;9,7D&*+}bk48<?GMUjKYnS#^Rj5<+:QDr21qm6>d<gT$swIFc`' );
define( 'NONCE_KEY',        '/zEBaN<=)%`#f9Z:[IMA3+ws#L8]Fm,ZK|Cj?#.k/>Vm1*S[Czr+JJ6Ta,K5~>H<' );
define( 'AUTH_SALT',        'MHn2b&OOQ^kNha;KcYx[h $a^6M,o{&3eN1.q]>r3T {o%S>?hB:8>W 24pQj&fI' );
define( 'SECURE_AUTH_SALT', 'EQ=4_ F%t.i>pgfbEi@+AgQ!|{IHwf2#/:aCv_$}]01#R:G=SyiLc:o{~,NmCI~;' );
define( 'LOGGED_IN_SALT',   'nfOj!oR^d,p_N?TpbREeAZ#LK-uhv:0?O]pc<f`/*T]ftFIC<l[_A GD$8bax N:' );
define( 'NONCE_SALT',       '0As2||;Yn%o.](+.H}cXS7+nF]K(L]ps~Wmh_$8,~k-:%IqHe^(U {t[>{In4*O7' );

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
