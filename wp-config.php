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
define( 'DB_NAME', 'periodkaakura' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'FZPmjfP$+X{^U~G2e8/GUBm|[,^B7N0OA5Nu:#8 s%if!!}Nj%`hCzV2(FL];u{;' );
define( 'SECURE_AUTH_KEY',  'pmr#+C.`KKj6%q|mDoF%K;cA~vFWg|urZ~ypQjahBgo(d+;&RD,qQ|0>}5z5H|v5' );
define( 'LOGGED_IN_KEY',    '&a#;-euYzb1t}6^y#jm0Y[<=A+R=4<MK%q[fzmN3):[fY=)Up7V!Ysd[eDA,9iC8' );
define( 'NONCE_KEY',        '``i 0 (?lEbhT`#*,bRyK30}T5oF?mni#B!Um[#Y;J3^9C5|;b7 ZfDAG#JZ91R<' );
define( 'AUTH_SALT',        'Q].WPY*>k@%&U,q<Hqo;;AE#efR3uYJC(YOO)nm-T7(rfA.R_!KSaS _s&>]]3@G' );
define( 'SECURE_AUTH_SALT', ',!*0UP09cut57Xz,`1=x6f,f3XcfB@?&gNu4tUHqwK^4DA5s:~gQZ v,wdx/m2+K' );
define( 'LOGGED_IN_SALT',   '6sfU9>JG]Mcb-[g<oHGz=hetu*{:q&p?9o16?81[CW?Z$%Q-sNu[a%{W6umcRE~6' );
define( 'NONCE_SALT',       '^i~:<w0{U8mW{>:Ls?)uBYL7Y#Ac[wid#HuHaPmQ,6W!26wN$Tx@U[LXNnHF/8>O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pkk_';

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
