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
define( 'DB_NAME', 'wordpress_project' );

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
define( 'AUTH_KEY',         ' QjZ|RL$+V31_Or(p2hv23Eor!xg<U4gBn`)A)%yQ!.aAqvPAXyYyv[Mc1I @goQ' );
define( 'SECURE_AUTH_KEY',  'c&KP%b6m=uYo,N}/*`!p$,B)Y/END3A2nT7UB@tt3f|AyQ2R;EpBb5a!`8P[z,8n' );
define( 'LOGGED_IN_KEY',    '@JlvRzTCNosZ~gVlsxRyAx}G)f8^:Uv+;cU]w^xQnJ<_rWc|K8j8gN~={UD7`w1t' );
define( 'NONCE_KEY',        'F_>|zDR/z^N8e{7FA`sF.6=hzsQVw,ZeIiNs,5< f%C(WU8_VC&,<]~3+yOR(>zT' );
define( 'AUTH_SALT',        'Ov_<7Ug&^&Pk7{8xPqhR e=]eU]MV*{xJ.az05^S9?Vq(_7Ltvb<=LqpYtfg*i^}' );
define( 'SECURE_AUTH_SALT', 'nv;!#%eedK%J{QJX9+kV/-DYmq,vosM&@].ZCvfeNJHR6H(!og9&SFEdrkFpDe3_' );
define( 'LOGGED_IN_SALT',   'm$:2?xL}>1zS!gyyGOm}0QO/z[*?hT/.p3./iR*,XcI_HGEI`JygaKu&vEzIW~@k' );
define( 'NONCE_SALT',       'DU0k`ZK/gOBHvBOD(#I<mv0SWE7CY!V/.A%m`.[LcjQ6bGA4z%1;SE5(&TkMw;X`' );

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
