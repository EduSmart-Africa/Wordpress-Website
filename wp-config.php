<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'N4T009CSmLfTREVruwUFNcd21EIzNaJq7eZJKqMn6ZWzbjgpXznLLPQmWIYZxRIM');
//END Really Simple Security key
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
define( 'DB_NAME', 'edusmaq466' );

/** Database username */
define( 'DB_USER', 'edusmaq466' );

/** Database password */
define( 'DB_PASSWORD', 'Kq2qJrSq2Dkv' );

/** Database hostname */
define( 'DB_HOST', 'edusmaq466.mysql.db:3306' );

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
define( 'AUTH_KEY',         'xBqEwHnGhXwU2KvvluL+OMnMjNtM6gUfRbtWkOtHRuo5WA4l+DixvZqULNRg' );
define( 'SECURE_AUTH_KEY',  'Z8MBCBUs3RuoWGDiCR/MeEoWN6vFvTYBvc/IAjyZt2nLVuB6gBKV8n6COlGx' );
define( 'LOGGED_IN_KEY',    '2pB8KRQzqfZouk0UNyxMIgo7V4R8u9IHK1jcEqqS/TKSfIBJUCW6zLFLXAlZ' );
define( 'NONCE_KEY',        'AFddcbGX4aw3zAaOSYfUzEfn9GYf+U61kmTr5kHoptEep5wjqcYr7sEYvmFN' );
define( 'AUTH_SALT',        'Vd/EgIM9+m3cAtHX/xjQ0D4IcPtGJsAfOVMeLuzI2xXZjFNnoL4IDX3VvJMV' );
define( 'SECURE_AUTH_SALT', 'ZTfTZOcmE1C1MAkAW54i7icYBvO9XhNdPdO6n+VxlrtdfdB2LAtiQDnInYam' );
define( 'LOGGED_IN_SALT',   'xnzqwuB6oIa2U475ZP+VPrzOgOCi5WAjvhELy1UnGme4j1I5s90JdiPPmdxO' );
define( 'NONCE_SALT',       'Yu22WpWxEY/bBUB1Scs38dlMitehn9Z3xjtpzlbR62A3G6fXG9CoRfeC0/BR' );

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
$table_prefix = 'mod852_';

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
