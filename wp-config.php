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
define( 'DB_NAME', 'gsvsDB' );

/** Database username */
define( 'DB_USER', 'gsvsDB' );

/** Database password */
define( 'DB_PASSWORD', 'gsvsDB' );

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
define( 'AUTH_KEY',         'c(h7N^2X)Gmp1aCrAeIpvk-Fdq4yqh-=fb+R5k<oENTgd6@f#,;@Kn)d1CRJE@hL' );
define( 'SECURE_AUTH_KEY',  'ZO9|:A&4&IK/LK)/6.@> 2E,H4j;DmXu0aMr8cioDZ%{iX)=][W_sbwt#-@jkte6' );
define( 'LOGGED_IN_KEY',    'h.934J szPSNE-;:O;{xMyCDq!K17w48i|}#2V*D5|%9RC0g8+tpCZ<t.54sJsv^' );
define( 'NONCE_KEY',        'Kw^}q0c]GP3wO&#aMSH1lpbx|Tx<f$6gC:P~wV}-(3ODjBHJ E-ZLs)f;UQOMRGq' );
define( 'AUTH_SALT',        '(DSxpu1[2;65w~OcZ>w#4Reor5EY*+;EP^sdc^?,GChETHHmmi*R-DzcMQmKWV6r' );
define( 'SECURE_AUTH_SALT', '!I(AWS4h2}>:*)4pX%A86mvZs6`b$!@ko!b$fW,a2={*Z-CEk^~3K|LkpS=on8rn' );
define( 'LOGGED_IN_SALT',   'mu-D0B]gwn::)73^+dR]]9M=38G|Sl)CmP.)UKxgok#<cFl]c$O^(U-<>St./&!;' );
define( 'NONCE_SALT',       '^O^k,?O@`-3*m`Yy}5PQ1f#^=dw9*N#6Pi;!U9wNe9[wxw7{=gLA~[&S|uV>s90A' );

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
