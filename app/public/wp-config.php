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
define('AUTH_KEY',         'LqKbILpqdh3umXTlQyz/sm6xwiuCHb3OnCUapFH/DyiHfF0C900TUaDEQcQLV5Tuzhcxpqj+XWFhnpJzKjsx/g==');
define('SECURE_AUTH_KEY',  'BTZfaPc4plLfpNH4ZfBCGnF8h2ehS+ie8F0JWziy6bazCwXNmhdUjTYflBRT4KwqchcvMUwMJAQFq3P6ZGnr3w==');
define('LOGGED_IN_KEY',    'H8Gugtgl6d9s5dinOGl7qq2a1/e/TPEI2Oi6z13n+kVDW0R0QW7bs8XSyXNIMPcnVVyHueT3QIFlK5gTe8xmBg==');
define('NONCE_KEY',        'zuzc4JwIkC8NIG3Qj1gPSaP6yi9vUSbsDVqMeTr8Ex4QIF8YYBmERUAXpIjlE27/xFf81/zm+1VyU1zUjXIgsA==');
define('AUTH_SALT',        'ETdob9lNBHkLNHekqjdh6GY+a02WXxd3SerNtKH8GGkK2vNOOK9JGwrXE5rkWp/IllcGhTXzXYC3VhA4rF9BNQ==');
define('SECURE_AUTH_SALT', '8haGTaL25wVkWBGUbAJHpz1aNIdsdy0aHXbzn1xaRIGAa+KZaJWxirsTbWs/WsvvOuOjNi6+GWPDAS0tY1YRlg==');
define('LOGGED_IN_SALT',   '+s4AaEuDPboQ3bwG8AsXP21n+aRvD1RT4k+rGnkoA3cyQWxC8NR+yKW7sYDTtrsmbQ9uom+LSDUE1Q2z7I3THQ==');
define('NONCE_SALT',       '7rz5TDWrEDbqvfu9NgDuF0CnQbcWZTk17UMQiDkIS7XS3xCTBvwtAIdfTG2tT2saCS6rfl83ClcfBCQImjRRIQ==');

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
