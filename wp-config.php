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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp519' );

/** MySQL database username */
define( 'DB_USER', 'wp519' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W7S]795)Kp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '52r0tatwfz14scdlze50fcz1b3mwqhyuiilvsqsm2xthbia6p7bcfjupydffd6a4' );
define( 'SECURE_AUTH_KEY',  'nbnacyuitcxdjlrdijdvbk3hojy5ynw3nggvw0wzaokzudleshfbkk7wsiikmekh' );
define( 'LOGGED_IN_KEY',    '4yp40fcpaej9t08i5nlryho35u3xtwawvco4okv7yloxsyotadvxljyepxrfzlc1' );
define( 'NONCE_KEY',        'fizzkyps4hgidb2yp08d1smarxnrfwwbbk3mtva8e6mv4ukhwwtguunuf651mpvi' );
define( 'AUTH_SALT',        'gyj6otvdrkzgrluze7vq056eqfno3ezazvjllajmegqvjpy8eha304eitkivem5h' );
define( 'SECURE_AUTH_SALT', 'vybplwvpb3ccchkcgaliartfbyo8y9mjshozrgkvqms1k1hhkkwycwuolawhmlx4' );
define( 'LOGGED_IN_SALT',   'zmm1l6cqyofunaytu12kb1yuafqxxhy71vghq5ietab5dt8j1swdd0r55zpetlri' );
define( 'NONCE_SALT',       'sqbhhpobjgf2kyxzpts7wqphegmqbi8vokajzmicxkxcllvpbu3fry7wpzyjqpqs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
