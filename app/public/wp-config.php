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
define('AUTH_KEY',         'YHR8CmN3Kp+X2gSsPSJIv55hyuxUyJu3JBcoOKKmYUDs4EgDH+6bxzRmIpA2qnHzQQf+2BTM0zys1ZBS+nBnJA==');
define('SECURE_AUTH_KEY',  'oBhJ7hZNgkQlaEwlADLMJ9MJypjTIFj1ZiloiVJRHm3Iqd1uKU37PCQaQxwvojkwMWm3Kwk6pSRSZmqsJWil/Q==');
define('LOGGED_IN_KEY',    'XOHMXG58cBah5ZGtW2PZWWm9pwvByMfJRvUws1GhiJbSASjhy4fo9y2ZXxTLd7SYStxHZ1FCdCWy+VnCcgPVJA==');
define('NONCE_KEY',        '/Pv/G3BhEVWy0xaK4WxG1Y+DhhsZvJmT8FD4qcwKEPIreX5TIyLn4uqGVwMbPGCLV2lHrfayi+KHk1/5CXzFpA==');
define('AUTH_SALT',        'lWNLFl7p88L0ynGjEqDvJSlf7LpYTUevzSowbx1DtWrMoKijPPJ6uMYCAsByFb3QWEHMfDrCA6Kwi26iLOnj8g==');
define('SECURE_AUTH_SALT', '5wrJxODnOwIgfufgGQtJ1auBc1SK7dS/TwYJcqL+SGkxw16cuUWvDmsefpA9OFOndJy4Jmvdcjm8KreUCpZKjQ==');
define('LOGGED_IN_SALT',   '1zFKHGVNl+c7Py1zlH/NrBeSzpxsvGeFjIOhjrmIFMJLyCwPg64NaQyXBobE1n9UyTlaNRQXcLMdn/Kk3xKqZQ==');
define('NONCE_SALT',       '/CihfptWwC0eqZJPGfD9Y0l9h8/0ScBPf+ircUe8rVKc+oqr9IYrvqF/EFu8RnQ+lWqaoTDHAJxFCh4Orovn2g==');

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
