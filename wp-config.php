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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '!pY{*@uFiZEytnzrM.r|q(7TW**fr8XPZ&mSDL`vG_A.|d)?ZWxD|Sk qm8ZA-Wa');
define('SECURE_AUTH_KEY',  'k9Z)LPCs/={gz|y|U]Hvq*!t; HnxP4}2*%dA^qO,?VjhT|8E/EV+8XN[_OWv=&[');
define('LOGGED_IN_KEY',    'kBs9wg|?Ibt%oIDDoB=O:BV#FTRW9-WW|;{6jpY,2BA4wqP/+[k)2MH+R_r]dyF,');
define('NONCE_KEY',        'CR/SZy{P_H9z7P+T z/^qk}w`I7oMc:wQP]y:VG5+X-%r&LcsxY[.7L#TWn1EZ L');
define('AUTH_SALT',        '<(=Q |R $qTx[t[n73#jsR*kL*n. P^[-N5G^ +?JAixAr*7{qb%V`s;|Tj~-V*_');
define('SECURE_AUTH_SALT', '1I;6wqKZ,Br TTz?*_}VdP4ym:|2,wMZ]CZUZK!6RiY)Iq`Eq[pbL2m1Z]Cqw#zF');
define('LOGGED_IN_SALT',   'Ngp2b-I-YBm-Y/UyaD:q93NImgFN=n]]rtb2(DE6:*vp%QlIzw[hz_4,Cy]RdJ-a');
define('NONCE_SALT',       '%Mh-JDn-m[:h_`PH(BNMtWA#|;{](/`1CPZkx7UGJ5bB<,#v:1egQ_|X{<YI[vs/');
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
