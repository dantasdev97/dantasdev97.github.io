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
define( 'DB_NAME', 'corpus-mentis' );

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
define( 'AUTH_KEY',         'qRuVyo>k;)e]~-u5{7d,&Xd`)WLMwR)O9({^V!JXND[;L`h0Yc,i/9#Z% RZDv,0' );
define( 'SECURE_AUTH_KEY',  'f6~P6L*6.NM]VFTz9iOIeZU5v}J:orA6)zyy4,1h}jL-35~5^/O@XoAi2@A.g[{q' );
define( 'LOGGED_IN_KEY',    '14hQ&*vyP{VXoGf!iv^KLjAGuL7*gKAr~xj<v(9K=CA3nV+Q)_Orlw;5i#.%wO;R' );
define( 'NONCE_KEY',        '>mu^b?OkChSXM~$A#x6nu}f!V# v{N]zrgZG5Qu87I^8uVw4=EXLo&Nj9+J9P^Kg' );
define( 'AUTH_SALT',        'WH=7dr*NO,z|IUwVhreV&?kD=B[s0ZT^zAU`Irr6i_5u68Q*BZGh>Y#?rFGm~ue?' );
define( 'SECURE_AUTH_SALT', 'nMN`[0(Sa7AR:t65Fr1<67o5<a]Ero6*`dI.3n9y:55wodo?mpp:v*TW7;y?nk-C' );
define( 'LOGGED_IN_SALT',   'TkiSfEx(Ca>VifU3op;o?(#yEi0DTbD/O:cpyh*SZp?,sI%I#g|>!V-Fg$d~zB-T' );
define( 'NONCE_SALT',       '+*U$^vl]F`}#apdfGSc]&b[R-1btoAl!g$ 7Cu88#%Id6vANvcf7z.V^XjS@XS4h' );

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
