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
define( 'DB_NAME', 'multiplatform-medical-appointment-system-database' );

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
define( 'AUTH_KEY',         '12~y&}X,Jqo3ZsvV3d$qC17JS3#>^UH{Gk:;]mw-bx2&@|u&G##M:nxF~L:^)XBX' );
define( 'SECURE_AUTH_KEY',  '%DWAJbwVXrZ?GvrpR(rK_(RXMuc`swuISQ@,{!`VxwG[{Nb~G|XCRPRx;Y+v@=<9' );
define( 'LOGGED_IN_KEY',    'Q|krL3O`AD+oWw|*cBf/aPcVh+J 7;8~d7OQIzL7zrK8Y0LRC+Xx.J<~RR$6IzA*' );
define( 'NONCE_KEY',        'z xp`=p{=$XM*6s*tV+(vi}>kgcfTxK!`8lB5I*^X=QiQ^~}Dsseht-Dk>x+98]]' );
define( 'AUTH_SALT',        '%Dkz&CkP;K00?I0Eu/BX_h0Om)]hW~Wek$L|eMc`V&))`Nw^9 1(]gWWGy)4w@w9' );
define( 'SECURE_AUTH_SALT', 'xpj:#vP,a[yg)XrY~x1*;gYsI-R43jKw;({JJ*3T5j:<8H!(XP!(GqDVg4ZFNz5#' );
define( 'LOGGED_IN_SALT',   'G./%mf.U,5Wv xvCk7#ajhsJK~>hbYrL$ogg=q_70zMyA/-1z}H4?1O(%9r*_vh.' );
define( 'NONCE_SALT',       'MpwRJoA()V)@H/R@7VOHA8Qww}Ly+lnhHtewV(Xqe@$BGBzV?<%!U.o-OkjC|c:$' );

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
