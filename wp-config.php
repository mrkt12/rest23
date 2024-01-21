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
define( 'DB_NAME', 'amnuay_wp775' );

/** Database username */
define( 'DB_USER', 'amnuay_wp775' );

/** Database password */
define( 'DB_PASSWORD', 'MpC3W7S(-4' );

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
define( 'AUTH_KEY',         'fcduhin1sujlrg7qubkjsnvm4r96ghtorpmq9qlxx1etspwakatlvw0jkqgde8v7' );
define( 'SECURE_AUTH_KEY',  'hrgpgk68op3flkxrinqtmdhavvhyeu1kueciezj66nbnwjblmnwyooklwqnzbbfv' );
define( 'LOGGED_IN_KEY',    '27kbchyvxnrxpp6mfnaprhntyujgpgnmayzizbxcbbxlbnw9qlswysqul9rxqi3g' );
define( 'NONCE_KEY',        'zqkbslogdvxhsw2kamdscvctenemhsluuzeupoq7kcxstocgyqulubl32dhohesy' );
define( 'AUTH_SALT',        'bnqelyvl9bmucmejbuqpo39nsuovnuhgdmda4ws1ltsiuy5ffsxhtuad7gfwf604' );
define( 'SECURE_AUTH_SALT', 'nxigdve3nqmofxx1hu4icubt9dzcikxar4pyzku33r4wdemtu9oaknenejfgs0cv' );
define( 'LOGGED_IN_SALT',   '9ly8iszkt1rhoo3j1ub7faujw2vhxtvetulyxf96hyxc68jsmrufixttzpndhpre' );
define( 'NONCE_SALT',       'gvgicdadjxqjdhbkpcxejqqerijv8zmg3qiblfo1jsszul2c8twwzdoymleglymv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpx2_';
define( 'WP_MEMORY_LIMIT', '2048M' );
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
