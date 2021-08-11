<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SGVRvQyPrj+4Tt+roW/iFDpgqOJpQMVj960+JBQ8X963a8cPz/Ss23VEWIPHg1xADVjReOHVSUnIAtN1O0ZSZQ==');
define('SECURE_AUTH_KEY',  'ci7hqvkP4Uniol9aC/qlbcROW4nQGIvZgIuwekDTESZX/iupUYETyTlyYdqCjzebSKIlkSQOiKrdp3R0m5HGHg==');
define('LOGGED_IN_KEY',    'Pkprg5K8gxbU9RdLdvEX2L1tSk5FAFouZRRqrKSQdvQfhpWgB3LIHNYuiaPSnOEXDrzCKk6VcSsVnTWqB7HzGw==');
define('NONCE_KEY',        'Nbzvc3E9PZPOKFuJWyVgi/4YQ0hzW+YgBW3FVaZLzEnVJdu5DiiwuK1EoRrUP0ccQUvosZb5YQdLyffyudG41g==');
define('AUTH_SALT',        'Qlq8dizrYtSdzzqB4q3MUo5hmPyJyvRsW1cFp71rodbTN9gD7ETR2xiovcgG9rdVTJgXTuiMXE1W0ZG7skTt1w==');
define('SECURE_AUTH_SALT', 'afPbOv4nO8bhDBigD8xLrZ1BDHokW+41+J4nyP22CmFHOX3UwZ9SYlY3RXYhYey+ErMQdZZBxRFml6lxIUQR8w==');
define('LOGGED_IN_SALT',   '9zNicGggKE7U2nkRxxELTlCCRTXn4E0lPzhSmzTWmn3a7bQ2O6qslYI/nvzJZ4TJPdhJiMmwsWN2/SQOW5Is7A==');
define('NONCE_SALT',       'Gz3k3jdna21lrctckoj+pP1caP9L3BAagT+ZMWf5u1KHmpD8DpX4sMek+L8upXn+Auu49+wg5Lcf0LMgs2LVJg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
