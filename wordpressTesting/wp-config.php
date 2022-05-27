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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'koE+LAr~G&gtutA<[9`{DF7e$wB(h-g]NgzYHDk<!|4,Ag1:sa7W,/n91V7V!S<i' );
define( 'SECURE_AUTH_KEY',  '<st@75:]rwBQT%_1!]cB&r&6-1!8A*Dn^kynBNYuZjF%%v[mu>bg5{;h<}pBJEVC' );
define( 'LOGGED_IN_KEY',    '`K!6Q=8@jP[p=3&cM^22.JtOx1j3WuOC}ooci6T>b&v1P%%9gRK8P([.(o4V#S$O' );
define( 'NONCE_KEY',        'Li7Bb(Mj]^QkfbcfxPV#kxk/c!0;Jo-A<=x3%/#8X]eYv,Sz|kknbRN-H5SCfGt}' );
define( 'AUTH_SALT',        'dUXC*3jjr1QUu.+qk8-8^h:V^I.CDYmKb;hF:b}>?xRYb1K4LV*rnvZzR[p(?_# ' );
define( 'SECURE_AUTH_SALT', 'p &Gi@v=Xn$Lduu4Y4&~/iK%H:iVU7z1A4]-eR`[+!=a/|)m8{3Le#[a|T.=!nw4' );
define( 'LOGGED_IN_SALT',   '?Hus~h>>% J!a,tSzj7(>9,Q6^<kALCbW8;qQ_QCr` :p$jXhor|8ok?8 PCU4.-' );
define( 'NONCE_SALT',       ']2&+]?_OQ$5@c{+pkA.g]@u6tZH3R:*C=)M,~Lf[[}LdYt4nW*HLows$B+Z}^4}R' );

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
