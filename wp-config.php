<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define('DB_NAME', 'ifoa_bw4');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'Darx0O?xZ6,x#3>-# 0UTU80.4MF-A2=N}xbqR #a|O>=ueCx5^[:v;{x5!+z=}2');
define('SECURE_AUTH_KEY', '4mXy3TMr:LG0y L)=c&)(ak[4E~#z+xqAZzc!F9VIf;%*CZ^3C:Q+:vW,04[s$nQ');
define('LOGGED_IN_KEY', '%[WwYoGE4whK=Y` mY!>%f{dmmPC7^t6{4v2VZd^p?;Hcc#p[F?1nVJy714&FyEV');
define('NONCE_KEY', 'Vq<HqLlg+A[uv5W(yx{vWm?]vBFpZ5Z~4bsPj{.y<Nr$ESEF;KJW#nMlD7/H{CsX');
define('AUTH_SALT', 'p745grBsE||@l^Ui!nnpD/7E8RK%~WPu 1k!0Wdevl)-XYaS~G_xVa?3`wdWgc^b');
define('SECURE_AUTH_SALT', 'rIT[`92F,k1CupO<46&ASa%b.N60og.g20p.,x-=3voMV$)!0Lr41q@#VX*0GFHb');
define('LOGGED_IN_SALT', '[h(|Z+7?/8k*$^@OO>A$*j3IuNt-O2ghwh7c~iHfm<D!^T#$eC/9$JYLIjP0!cxx');
define('NONCE_SALT', '3BgB:TbMtl*#.CIW6p!`l,sjdhz]pSBPH+;xc%HKI&<)~E@(uT.:4Rf/)-G{Z Ru');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
