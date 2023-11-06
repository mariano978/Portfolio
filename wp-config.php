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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'VNQ_>($XN%s1KB*l,h1~P+t9:Ch%!6flM8$DDpA0_N<J|)4Hd#iB}vqgL%0Suv5_' );
define( 'SECURE_AUTH_KEY',  '43>z~!k,Hub`HET!:^P>#Vwe{%g4QpQ%YCHnTH5.f*ie} sf<WS9l@V=R<7FmOPl' );
define( 'LOGGED_IN_KEY',    'o}h)C + 58WRjf|s,E=//d:x]U=6M%_*uB|wgSH3KhA5+49d`|ak~K0mNFW[~_.~' );
define( 'NONCE_KEY',        '%GC++IUjo=(I.FyY*COG%J]:fxH2YWh;CP*g}k:7=OzH}jB=>#VX0[kV$2yg4!$I' );
define( 'AUTH_SALT',        'q^eBWfR MmXd?|8G|gbFAY]6YLhSPQM0j<PAnpKZDv]!igwje1?!e7|L>Pnadk7J' );
define( 'SECURE_AUTH_SALT', '9SNpNP-!?x&YHB:VH@wnFC.Giq)C6n6KGt@`r`WTe ZeU&g[M3Z7}[z/n[wy6?Ab' );
define( 'LOGGED_IN_SALT',   'lE!r._IE33r8`Lq*o1 ;UOG1o;Ampf)&7y[?;W!@n%naCr<*PMoaW(+%p~md2 5Y' );
define( 'NONCE_SALT',       'AM/*+4R]8_`yg5tse>/y>.[=I:pj5r4!HUef:XwLV6ko#>yQs+{X5~Q@H=1=kH:>' );

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
