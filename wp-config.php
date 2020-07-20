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
define('AUTH_KEY',         'ZUHFo0eq1pSGKMyB4+88yXvecOZFTDcS2vN8sWvqKwvZg/Okb8XSOgvKPNr6xIrtzJhUBUIP9VXoWDnlDisRFA==');
define('SECURE_AUTH_KEY',  'dDkvy8TBrYYdOzbYQts8fBFOUqrjaEN/528LsKeAZGtBvkuvc5PxfJ6uqQltddvztaNusXX/0pwlktZi8LhLQw==');
define('LOGGED_IN_KEY',    'Np2tTaXSD2D+8N7AiA1KzcfJqnmSLESXxbTw3cN1bmCxxq9cJ5YUcjQZditxhA5HVP8TxS3fCQ6TWFKnHFbmGg==');
define('NONCE_KEY',        'liBINnIaCu0m+gE+WQGCViwzltKKSNCIPSNIj6WK/BcGn7R0l+oarJFAQeC8O43Q7gSaXkHP8kDc+EQoCRm+og==');
define('AUTH_SALT',        'pgml5xEpSc0E1HsD4f/+c+u3fbF1ar+J8g5I3kg4CUjRl27AH91CU7zuCCUqOwxfMa6/s1p17403ToXH8n8y5Q==');
define('SECURE_AUTH_SALT', '4LKlrXjuo6EOB0mwLoQvRh01FqWMaQPZvF16ld3LP5Fl8Zx5jdDtD4vCa04m8t8w7HwawOtL4cTpSCBjw4AiQg==');
define('LOGGED_IN_SALT',   'f6eXEZD4qrjZfw82iR8LoiY/slJlWcL9ep9voaBHqUpO9D8NlFqv5pMa25CsDT+9w0IwRF4IqLZeLuOaithxnQ==');
define('NONCE_SALT',       'TXN+1X06KSAC/K2vcyTVErhbM43MVgUtJ6/af9Nc9nRdB7CORh9Qh9XAYlx4V8NYFi5QZFMolhCe+dRw8uBmcA==');

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
