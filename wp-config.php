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
define( 'DB_NAME', 'mohammad alhajri' );

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
define( 'AUTH_KEY',         'ao4=Us?*nK5q7E]n57v4C}vT7FpY|w8lU}k9&3}<e_W<S]502,9We9f%k%9Z5?{i' );
define( 'SECURE_AUTH_KEY',  '8%r*2MCQpHlv}]gw#qHWT2HH~ka][@WBzk0]9-=7~uVgCi< y%zbVY]yk0oz!-T<' );
define( 'LOGGED_IN_KEY',    'P?Z,}l/SDsd; 3^o!joJb/Gl= @Uc{o%&Q;ni6(y;}Ghwlb>wlo<kiTvBi]uSYD ' );
define( 'NONCE_KEY',        '0*NTu6S9XH_b|n5`xS /TPJ7E/0a*MoIIv0S{!Ud&yfM6[biun%jun~1UQZ@P[=S' );
define( 'AUTH_SALT',        '7/v{[P7qsWpqq*0r:Tdy(ZE<Wuic NDJ|.76Cc, /^D+6pG+9m+04&Y^@^V( I:^' );
define( 'SECURE_AUTH_SALT', 'R_hSG[4;e.goBR3K.Y@F|+~:R3EYT=U_J[oy!%E/V@xK `l~/`fy[O`C!k?i3Rd$' );
define( 'LOGGED_IN_SALT',   '+<S&{pTv?v*/=H>a7lWf6wkoKbai,HpgQQf3jSWLM7f=2_1THYawL*k#eQeA?%FN' );
define( 'NONCE_SALT',       '.>1Ws7R`H-$Or!>AE:y2xE:aA?>xrIw$F)S87t9XbS~:5,w`<fg*]&$J6j3RT]I*' );

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
