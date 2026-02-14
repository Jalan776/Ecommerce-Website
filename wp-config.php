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
define( 'AUTH_KEY',          'k2fE<SJ7%!^qB2QHJv:G)y-rcN{}Sa>NjvQt)A&0P3Dj+:fh<.J[Kb/dzG#FglX5' );
define( 'SECURE_AUTH_KEY',   'X8JjAlwoen0NVpePW9n0pX/=.M^QjBliR1grnfAp}tL67N>BJK5}`(w&HS:=[[%n' );
define( 'LOGGED_IN_KEY',     'Gbh%[Rnf0,7J%BfS;FRxG%<a=n7q~ofxb43nv(aa58pYTRJF?K@iqU~x>5^np+SA' );
define( 'NONCE_KEY',         '!>Zj[]=DBC})YVgSs!8Hxr$I2OWsQQ}-)VyFI=_G#*peL<@{i8SO?F({$bNk(w3[' );
define( 'AUTH_SALT',         ':*pa/<#+ewgrzRgY*A+AP*c.h?7#u!da;iZmEO u,Pnh%2%Pj?C;@LnPDwY+5X(_' );
define( 'SECURE_AUTH_SALT',  'OGwc%Bqzjj1;aeBLyu*Td!)m)vNa_X-G9G$jq$c82bQFEExEZ*JETIW|uH2a`O/0' );
define( 'LOGGED_IN_SALT',    '|I z%9H-X}b>^jlHu9+GG2uv,G(U1Qf!L(yS~YyIU$yJ-S>Ytewdojp[wHvn2MP[' );
define( 'NONCE_SALT',        'p*O^DjI?B340dgbmDx|3ox([CP]y.b)zZ9|kj7e|b+[0zimH&)3g]PBZ$z:gst=N' );
define( 'WP_CACHE_KEY_SALT', '8 /n[oWca~iU)X`+JyV0l-/ak6Hu9g{z9_2Z]1A]Bc3#JHi %U_>kd=~pH?/FK&=' );


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
