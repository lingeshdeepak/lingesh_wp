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
define( 'DB_NAME', 'lingesh_wp' );

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
define( 'AUTH_KEY',         'p`yp+CATmHjb*-iXh-h*a/,n5qkM,FU!P}wVKIq4MK$Mk0P`u1s+N5.dvH<qu,}D' );
define( 'SECURE_AUTH_KEY',  'XDk_]5u I4XP3b!6MvN5~Gbq[_(f0u~i:=xApQ|7T?`d{+8HQ#1)eDNak_Cpqn(Z' );
define( 'LOGGED_IN_KEY',    'WU)u]5eFpgZum.Xxrj_RKKofd~^:uw>,P)eU_lS?=ce_!Y@]nZs#F$Q2mfI2o)mI' );
define( 'NONCE_KEY',        'QCO(kn*Qh0xs%Up<kXL2@a@By`VIc0!>NF9xY}?, Zge!oQ)J#z<@]5ch4beGmX5' );
define( 'AUTH_SALT',        '9QEhzP@{SdJ!DF`{g&;w10<M>lB]XQ}d?XT!-W+Cf]}s7aI!&5f5dzmNjR9I/U5N' );
define( 'SECURE_AUTH_SALT', 'JcJ^M|80/mGaUCQK4A5e;ja-Zp/W2A$Z.%`[DK`wS4@ >ZDKa+h]7!GJi7c.Je5 ' );
define( 'LOGGED_IN_SALT',   'B^=Rdg6QBT|m#4qZ6E}Su<Xqx Sj<52?^x*:,Es%C5)8O7}7!*dNdQW,qCW/(gsG' );
define( 'NONCE_SALT',       'Ff+b99;f|fW3wq.Un;b.d?&E>%.lR>zh9|A%wG0eVB&zAtj7PBHr*c&8jO&CdELT' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
