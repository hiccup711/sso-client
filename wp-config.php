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
///** The name of the database for WordPress */
//define( 'DB_NAME', 'uc_ricky_zone' );
//
///** Database username */
//define( 'DB_USER', 'uc_ricky_zone' );
//
///** Database password */
//define( 'DB_PASSWORD', 'y8BbTyWC2jbZtMC8' );
//
///** Database hostname */
//define( 'DB_HOST', '127.0.0.1' );
//
///** Database charset to use in creating database tables. */
//define( 'DB_CHARSET', 'utf8' );
//
///** The database collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );

/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'YGZc6UlXtR4c423EGHQZius8L5ORNvB9Cj6vlY89bKwYWNqEval8747lHjPyQmAv' );
define( 'SECURE_AUTH_KEY',  'AJ43drfmKlVUAdjjLxA1cRFJYSx3shq0KK4oMbQBH0qvSbiWlobltyo7tyyhFU86' );
define( 'LOGGED_IN_KEY',    'Vk3fL9ySxVhgbqvmNHlHNnzEGsdZ3efCaNdDEVP1cjDU4Gh9KYbjENuG4THTkWaZ' );
define( 'NONCE_KEY',        'gV2siQRnkvCBMDGoOR7ooSuyo2UXBb47ARmSwFPoGuRieahl0ybhP4AfCeQwZYeU' );
define( 'AUTH_SALT',        'R0Ke3IUzyl7IxBJrrhh30n7jqHQyOLdojO9gyWmKcwegJMgv3Vn3jccE03Ws9NnQ' );
define( 'SECURE_AUTH_SALT', 'H2czXLHscqJBsjEtGXTE6SqUOs2MEXItkDxLKIr6JqMNAwhDr6KB5fjTEiZIMpBO' );
define( 'LOGGED_IN_SALT',   'H3mfS4In8Mjse8JCaFg7LJHN2U7TKaybqTYQVbt1h7Wbv5Fmxvnxo7RUnI0WRCMU' );
define( 'NONCE_SALT',       'URVqASDMpKEupss9Odw9sI6GpjE51N4XpyPxSeSMQhKzmZbUbSwN7vfpPaDGJUEq' );

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
