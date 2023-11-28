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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '%{J<E%eii#)Nc3=XLp&kri4P425vk}xX:%1*:tLT?BjeV?%Pk=*m6Kc}d|0/BK6O' );
define( 'SECURE_AUTH_KEY',  '1]5YVd0519PuE@I{N0%&}c)!G!J&IHzT}:~d>*wEfuv0=SUIea;frRyz&IrrfkdM' );
define( 'LOGGED_IN_KEY',    'O(2:`)N,SSO}mT|R$zoYoR+n7~F f0_US|8Tb Q`k(&z_2S[GtXW]<Ecx~}.=:~(' );
define( 'NONCE_KEY',        'M$c<>YUzPB>qO,>`r/.4Oe[S(B}zT/s3%1*XIZHZ+fdRha*fOJ7C`+Wup7``A+-1' );
define( 'AUTH_SALT',        '[nuk)uy=/:8vN)x#5K{ f>;ub*HLiyXzV$0eK7lHHcnS#;w3>b{K/,my|_vv7?VK' );
define( 'SECURE_AUTH_SALT', '2D#OT4nMvM4 p&-)ByH9mXFr7ek5y@Ua-^sc?rgcPbzvdUyy6M_cEl4E2OO~U`YQ' );
define( 'LOGGED_IN_SALT',   '_)%Cy&crCo&ti//i,R*^xkTOv7+a(>~w<s{uUo,xWstg tK7 +rA#gkS3R+mvtv)' );
define( 'NONCE_SALT',       'DgMD!F K?e|@S&!4~9zj2s@BcTQbmvdN^1?sPJAV8N%;XEj~kt3!%(]{LtFM~WXN' );

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
