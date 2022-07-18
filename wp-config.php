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
define( 'DB_NAME', 'websiteapp' );

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
define( 'AUTH_KEY',         'dOwJ:>CP1q]0YeFMxw/rC_zLOr8MWn&GH@{z@1a&6_is[kd&RVnPtY)&]( 1-|By' );
define( 'SECURE_AUTH_KEY',  'QT#|xCe#U6S83Z/qa#/<wC1*}}Ku(r.]8gVq[lvqB,=$.D`+=&^k1!fQWe[aAY#T' );
define( 'LOGGED_IN_KEY',    'V[V )-lpem=c1&zuO4leC=Y7P&N#[|3^%~bM!z.IrL,D&6th$]=adsqFo{-=Z^fK' );
define( 'NONCE_KEY',        '%n~#LoFLbnv]Y5@7Op$xB?E;{A;q?yr{-T+@pa0-=S|t.myMUwF F?p5_p]0!8k6' );
define( 'AUTH_SALT',        '])53yK?t?no3TGZ!gg:iItJ8sY}w*mA$ZNw&9^-M2@F>)+Q1y}T|%^zM 8A(z6d:' );
define( 'SECURE_AUTH_SALT', 'Gu G<Yo7Pi=):QO3Z5C&,}~;bk/S&XJaPRKQ=q!6yu+ pjc6n|^6MS;_OZmxCw3d' );
define( 'LOGGED_IN_SALT',   'L)8y5TBhHfRvXVSBOG%`v@m]ucgD8hQO5sX8xP,3d4j@V<vrv1j*Xz0HIBu8{kAN' );
define( 'NONCE_SALT',       'a!dD/*<9;z({pY8B{U?$u~ek>F>RD}(N{)lZ(XXk==@-:CkzNUAvBf>fgR|Ky1F,' );

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
