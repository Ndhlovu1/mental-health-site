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
define( 'DB_NAME', 'convo_wp_db' );

/** Database username */
define( 'DB_USER', 'convo_user' );

/** Database password */
define( 'DB_PASSWORD', 'Convo@123' );

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
define( 'AUTH_KEY',         'OkGb|NL^MOjth[eg*(q}a>T8cLF+{7P#@:VqWzcxgMT2-6[]8;%,X2#8`.~/Vu;H' );
define( 'SECURE_AUTH_KEY',  '_G>fyM^s!b_?4%05idVuhr6s`/.yb8{>wGSE3lg?@9<UL8Cf]2.0>dbD2*EWpG;m' );
define( 'LOGGED_IN_KEY',    'FPkNk~BcJFu3i*+SBBk24so6}]F(dF,^)^YQ]:H+n7Muqh^3&2}rY;xR@j>E@AnE' );
define( 'NONCE_KEY',        'L5]&fWnBRpvwM;wHf9M(VvXAH$H<>H!S(=#]D;cqn2bTRqM-H$RRkvOWn/n;bX<d' );
define( 'AUTH_SALT',        'PYs;@w:pTaF3X#gkJ<1ehTjEcveqmoN}lioW]JxencJ3L?3Z+ fb [sbmW$VPymI' );
define( 'SECURE_AUTH_SALT', '(+aMSYnOk@AcXk^9BBAGA@:^&=s>`rqmb[BqUncA./).<MrZ#C$UudT6Ddq+^%Nm' );
define( 'LOGGED_IN_SALT',   'kh(EF6v|<EHuNTT )5A=~,?Oh4n4w~sK%Cc9l=*@)#E}1}6o_fw5CvG6T)Z<:T+%' );
define( 'NONCE_SALT',       '$sZP8zzK,U3-X:>Fq!7[9Z~LMs;3)sFr]HyVz{L}VVj%wKi]v*32_qsBSVL{@qM`' );

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
define('FS_METHOD', 'direct');
