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
define( 'DB_NAME', 'db_adminsekolah' );

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
define( 'AUTH_KEY',         '<R*C8O=%&X]Y<}vy@Z<ZiBO0$7>qiT]f)@m~Edk;m@/Y=~XUM38zwQ.{IAdB_@Zu' );
define( 'SECURE_AUTH_KEY',  '&dHQfE7R5cw0olop_=cy~^%F |OPKSx0IVXE#(]j:(GmeyJ7?O6-U%6dI#d}p%RQ' );
define( 'LOGGED_IN_KEY',    'w:Qo-|cd1dO(0Wd<8<GStmh(7e;:X6DT^/E7DsT>>pN/w=z~C6x0I7DN|&R/c}V|' );
define( 'NONCE_KEY',        'FlvL}ksqK::N{:q{%)<WnAV ]v88}LDgOv8+*fHp{,R]>IShJ4]kN}aO`!bSjr,_' );
define( 'AUTH_SALT',        'c1DW>7BV8$MxwD#Dvf({&IDnjON=?h^8FH8@~;!.Cb>=Zr9y 1b#oDR>,U|x,Eeq' );
define( 'SECURE_AUTH_SALT', 'UCIzJ28nDMqy%:>!=aE?>0+)gs~IVAJp5g~}Sr!~lqCgWaazsR3b Yja=vU2>Ud+' );
define( 'LOGGED_IN_SALT',   ']OtdzD,WD75-Ol,5u.D&Pb,UO|P>OO! lSy~$0t7bxe.b7AuB^|2VlpyoveP7PQ{' );
define( 'NONCE_SALT',       'y4O8)Y?<R:YC7*|rY%a-RgpTU6rlec9i.g 0K-s678:?|./rKD^3xJf6;]Y<IRM*' );

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
