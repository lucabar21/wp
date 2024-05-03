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
define( 'DB_NAME', 'ifoa_bw4' );

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
define( 'AUTH_KEY',         '@bIPKzpkGf{s1;KA,(>V/k4wwe<3&M3$NVQQ6ZzW<b Zq=P3%<oCj]cc&8Lm>67G' );
define( 'SECURE_AUTH_KEY',  '2ay)J)xx1 Dv#ciuegc[#e^a@JIwVj&j/&jX)Yjtk:hB2vzpssKd8(TN1EBNjH53' );
define( 'LOGGED_IN_KEY',    '9LPoY0XAxL1/$GLM[eWXpO}dNc3O8ki3Zf6%<v#fVQd!{4P:eaT;-YZ[]yqe&rIy' );
define( 'NONCE_KEY',        '4lA5O 1ctl)-e{g]Wj-=qIu1)0dOuGp.b+|PfyOK3@SFp-kC*^U;=($X%nM}Qoc*' );
define( 'AUTH_SALT',        'caR!ZBRv]a9m}(6ZA>~Q7j0U-0E-9NOvTY.6sj-73{ry^28|LBg;*)j~GLn+k0A4' );
define( 'SECURE_AUTH_SALT', 'B>x!BAX=E.SO|]@9x@4 #MIX{c<APGy:|SbwVwj}|LU^7dwm9M?e|#B#!{QH$o4;' );
define( 'LOGGED_IN_SALT',   'n!6q,|U@RY*{46dGPDjy(wI7,7N?!9BgF<]x^,P^3nEAHMrSwV-oCo?;xMcfh]:C' );
define( 'NONCE_SALT',       '5:h*mv8!BlF}hh)jxJb6.-V)i;X_,4GR$GiB(4+2e/-iJpJ?o^4r]Q{o<5(VS_[*' );

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
