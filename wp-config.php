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
define( 'AUTH_KEY',         '(*V?(/*(rJ#Vq9XqDJXBEi>x-W}?aYK 8o4+hz=r/TP8wK}vUxE^E8iE2R<#02t.' );
define( 'SECURE_AUTH_KEY',  '8NlW8-Q #Ro$#6pTviB3ycGuj7K59~u9jn?+:r8KRZf&D;?m*W|y$)h(MG@+Cj67' );
define( 'LOGGED_IN_KEY',    'q(Um~yNI~io#?kZ,jqH_lq?(|#!MYhi3#sO!f9.U;[@|HEm?`Z)/0yJLRS)6dx(.' );
define( 'NONCE_KEY',        'V#K9[e#$b1ZO[SjGm!|IyYG:?[JpTFV$~2yeK4;%P rNW~mmHYrO:TRM5:jB4{Ky' );
define( 'AUTH_SALT',        'p1T0$W<F%XnPxkRw!_Fx8KR|jqQREC<kvUt x1KEqoF&OKPR?1u.&VxadP|,3y)t' );
define( 'SECURE_AUTH_SALT', 'hqZ[E4xUijCd8.n+tdK[2gY]K#7}+N?,bmo9QzKk0`/rf~;~E.-4V3NHl9a}tNb1' );
define( 'LOGGED_IN_SALT',   'BYhzi2*rJrirF n#^Ot8&qw%[:Dg6S6I>Zg;^QB>h!nf^2ZSGU8(Jid7eeMeRt=[' );
define( 'NONCE_SALT',       'd!Q`s[Q N{xr8Fjh%n9f(ocuU@3V}bL0BB:qVQ[D;+jz*`kyg)`m%QQ]DoL9Y]<b' );

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
