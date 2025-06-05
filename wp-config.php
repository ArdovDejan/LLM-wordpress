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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'llmwordpress' );

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
define( 'AUTH_KEY',         'Y};sb`Vz#PV3[Z2FccEu(2JSnxrye7D&WrxRl7r4#!P]EhS:4hR# H2UE{iquM l' );
define( 'SECURE_AUTH_KEY',  'l3:}?r@=S$S(y.~n.KLsa;{SN} q0E1z=L.x8iX_5G7]C,AK{I?3w98I6{33,Og7' );
define( 'LOGGED_IN_KEY',    'J60V?Irl&hZgX/*<)NKg+0o@0pU`S,YBH4B,{bn,7y&@;Sbyd@s&N*1q4S$q)bEw' );
define( 'NONCE_KEY',        '5h>lDNUwhrLtb-|Ra4?r>@$B;*gn_|0nQ,/BdCuIQ#Amqoo2@Dsu}Wv% :|RSS$3' );
define( 'AUTH_SALT',        '^{JC:JBLMZ86H2PP>*Jt1=z}xs`&mZ2E %TX2$jOwRqI%R>V;?xLsen3oA}dFQNu' );
define( 'SECURE_AUTH_SALT', 'xT*L:P^@I/&EUwaG^GV]XV,rp+&RIJtZqU p:zg9RHRnYpP/Z+-235]X>|8* 8${' );
define( 'LOGGED_IN_SALT',   '^9utU#H610=R-71ah$ N4Ch9F?cejmPWxPezR)C|}h|E[01j&GprS4<g:-glge8*' );
define( 'NONCE_SALT',       'y6><0k>v6QH0;Io(eYyFD0zBCv&vR;A/0]`2(P2U8|@IL``)#rJwa<@8XUE&c;EA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
