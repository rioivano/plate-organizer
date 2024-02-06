<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u996054513_ycX4S' );

/** Database username */
define( 'DB_USER', 'u996054513_633Vd' );

/** Database password */
define( 'DB_PASSWORD', 's0UHIoqIJV' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'f#ch70MP}}>a/#M7~J:0ED<-JV#rc!G^h@C`(Uf4LF[-d[Ymdo8O&+cK{Ll8UR%|' );
define( 'SECURE_AUTH_KEY',   '6.fxA/lg<jxH]kVjOHID}e?2fSH+K~xcdikJVT2l-g,P>&rh9ZA,Cd=7fMZWhIlF' );
define( 'LOGGED_IN_KEY',     'fshTx{+OW@ry~e=pLH%=o?/!PDin]1a<I)@RUv]!`<JY5I`at?`:8{g8%lRe(jEq' );
define( 'NONCE_KEY',         'X%0xc:o(wg{gyE~]KS~Ym=)j*`tu0[F Ab-] (aeLDr&=w06R<Z{KZ8x|Y%m/8w[' );
define( 'AUTH_SALT',         '$Z-d:Ar wUs!9AH.?I1Z4x}/VF+n2XKNQ6nqcu^?5p(o7/.1=lbe K]SJ^>^MVZD' );
define( 'SECURE_AUTH_SALT',  'KH @S;3vAj>WH^6|<;*ORhlN(tU/R]oFz:bsRy)lIf%*i<&kv_*uKE 7k+lRM,2s' );
define( 'LOGGED_IN_SALT',    '72c?yR?=6@,uMTrZg3d2&{m=8}qkV@N1qt.6u+3z,Q3FAte _Hq4zbE R1 w`G-O' );
define( 'NONCE_SALT',        'j-jl~LH .NA~^Ak40rZ5CHgP|{&lJ2Fq!Ag.<+g1}ZLnK Pk]u0Tx:/lIjr_9j[}' );
define( 'WP_CACHE_KEY_SALT', '6&<cfpK=O|cbc{*1W7U<2o#^^VvMx>N<2DAm}GX].Ls44I&XDUqHDaL|V,r3.p~-' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
