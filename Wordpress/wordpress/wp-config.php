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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0( 6#<`Jam$!j6Fr1f<&#<h$a=2ALqbD7q8VihM48OX6{ks}#9did3Zw9NvP4~)X' );
define( 'SECURE_AUTH_KEY',  '9mciiE%3D_2=&~s7&kFzOBe44T-s<YD-C_I/_yVT=27dZ[JU1GZ~H(IQV)v?.JVC' );
define( 'LOGGED_IN_KEY',    '7dg{Zh&:~^I+4{to=43xlD39=sb>i*aOTJ}7YU2(1F1;(z-h*{+U8W,T2!8<i[U ' );
define( 'NONCE_KEY',        '7Ny_CGT3ZzCS!m2$,Pi[/o?ko%xdW].l5.1Z`{{PB3Edk?y4b{:+7yZJ5)=.}:RH' );
define( 'AUTH_SALT',        '260rY*cS7Nt60ZB8oncPry|OPz7CRkd<a()A!iQZW<hOs45&(!~Jb;{dNmGGI0k1' );
define( 'SECURE_AUTH_SALT', '_djUiPE kx~Nl`k-)v%YT@ ErH3NP1W2aWw|qP0=gLc=Fxg[GYvWQ`BiNt|m+<q0' );
define( 'LOGGED_IN_SALT',   'rHWze,~K?~WBS2~S6W}2r&hCg5a+&my={s_/0=p]x}Q{n+Vr3Bh.VMG][mB^2Ij,' );
define( 'NONCE_SALT',       'UN)7Zb,A2?%Go- 69,j)jem])*Gpeda~X:yR/d@/^LaHxQ@e~uQ@Ar%uQsS#j._]' );

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
