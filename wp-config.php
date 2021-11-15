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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rentit_wp' );

/** MySQL database username */
define( 'DB_USER', 'rentit_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'evVx7dWF6fw1' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fMVCv<l`,R3y4=_% U6-m$( 0i)/6^}B(Ot2#G<~c8e3<=t-#;D*Zbdo[a}oDm8R' );
define( 'SECURE_AUTH_KEY',  'j+=&hP]1.1Jjpj/sFtw0%U_?Z5z.@!`SI0<#t/#~;`yStd&1yZ)$9~JSI1Aq!%Z!' );
define( 'LOGGED_IN_KEY',    'mEnE7hyH1U!Rtpj:)?d>:(ZShO?5O<Ur])A^h^@7Yv@.(Sun22?Y_7gT@ih-<k^8' );
define( 'NONCE_KEY',        'A6E#B<_w#8@%ARnA3$bMVzm;D 9K*k4&YaV5esxN8v,4<~.p5s?.kzX`sUzN`aWD' );
define( 'AUTH_SALT',        'K=9C9Vpa2NkrhH@X9c0G4RzkmE~DeFhU&@+?YfrYMj(`%9cb)W#(22v2j8[5QWb}' );
define( 'SECURE_AUTH_SALT', 'eJ*p+.A(@9{7nV[RAVo/Z.~%Uek.uw2reB@l0+}6n)9}Ag0Gze(dhb?k1><Ddz?I' );
define( 'LOGGED_IN_SALT',   '%Cr^kBPG>tuD^aIJ 0+M(#YlO^.S}/!PsjEkWJ!( qmP@Mw1dJH72_>or.(@*;Z^' );
define( 'NONCE_SALT',       'BO4MIEVk|9R.M[B$ o+gvPc~F;.rhO?&J#HUqMp3dh<EzCv*dVxVHEOy^wRWUm)M' );

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
