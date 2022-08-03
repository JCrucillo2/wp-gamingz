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
define( 'DB_NAME', 'jcrucillo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':y9Y[IHs1qNT^P.Q^S:o1@aqJKS}b2Ez:|q}P0UV}8JnNN?4XmBzsD0J*MXxAb=q' );
define( 'SECURE_AUTH_KEY',  '2tbuquY~<*M7amxob/V%ZwM8b0:cq0H(T#-_2eO>igJeE_7~ni6V|S,Ae-X3v5|S' );
define( 'LOGGED_IN_KEY',    'wb4*zZkL&y<.(mgJN$rzKK+3fEcL&z+f}<ag`!|L<srbu?)uc3gU/#L1d.rdSDap' );
define( 'NONCE_KEY',        'LXdakbnK_#yWoo^vQ{H>zflEH&7bK_T$>cikoFq@R7t4DIMnXo2FH_]_Pu8dkntY' );
define( 'AUTH_SALT',        'Y!jGk48|19f&72c~,oBivf!v|6r>;/ul?Vo!TbLCFZ6_4T6S;O{+h!u.h! K|9<W' );
define( 'SECURE_AUTH_SALT', 'SEbD+B~#];thy^!U<K!DfqT.U<*8Ex4}!fl4a=y>&cPVK]0ghB|q9:.pxzTFZv=1' );
define( 'LOGGED_IN_SALT',   '!ziF(4[/p; 9AT-#zE;V05XN50H&`n~V[ rJ6s`(QNM=T8`}EZ5$qw1iFeuKo. 0' );
define( 'NONCE_SALT',       '^V{OdLeRAeM{{L;Iw>uG*a}4,zq AdgY<ge|zJ&$[x8p.+vxwv^);s}Hg[,=T21i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gamingz';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
