<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'fictional_university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',<R*@8j2&,LNQm}9?bQrqM);R@%dN_CW7>PMFh>=v*FD5u>i<+ f,;mMHBIJuo~}' );
define( 'SECURE_AUTH_KEY',  'Z6]J+3I|+]AOmBaK#0o`Oc&FX<y.*A%(#Qb2xf3(K?C4`qGqVrj!d{FmAT9$av~Y' );
define( 'LOGGED_IN_KEY',    '&hUpd+CJuW{IF]Z0FXU]L{L|LzLkm_C]MPVW# <FIl7#&X|:U3$TalT y{y>wO^q' );
define( 'NONCE_KEY',        '~5b]zKq}yd#>,oChM@v~vSO9W.p)x?I qtKEIb>3S%!C}UtJ8ALxL1xjYGsfIhe4' );
define( 'AUTH_SALT',        '^[^}hXXEZd<hN]!eG1e]5dxVk;>DO_Pgkh,`9ud>swwv5r4%V>Yt+CtM!azF~Bmf' );
define( 'SECURE_AUTH_SALT', '@$~Bz~>%Rh&Lo?B;4rka|Hi[8fx*mjl<v]2`Z86o8|YKx%`P3j5b4M>uqC;og:o{' );
define( 'LOGGED_IN_SALT',   'pGgB}M`{s:Q=BH#fJe3])I_l[]}bL4I(h`zS*.ljl}!a 8^L3m+&=s~n=jMSH7J(' );
define( 'NONCE_SALT',       'Ra{BiHfl>H/.2Z]A:fV:OT85u +jD@.w;fOM,]9>aThwv6DYK5_X{~-|*NIC;qu0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
