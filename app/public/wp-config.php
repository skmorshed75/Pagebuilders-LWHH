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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'SdcUAvBZ/OsGLZ+wwSTetTqjARKBmIP8FfDJQodqgzMz/skbpgx7pZikCknlsS6R0OD4sgfHgnqKQwhmlpCnsA==');
define('SECURE_AUTH_KEY',  'u0VQYwRugBJnX4IR3oCO/q63jof5hMhj6zzypuzbwd7fK8+NhCrLVjjDywD0FAuLbKCkk/7Ka020Ewm7DBr7Mw==');
define('LOGGED_IN_KEY',    '4P15sA59OBsXjmOalcOaGKYIJbui0P/UaGAfRCqOctpClRvfrwNgm+n+2q8ibWBTMqKoLvjffqmknRuo0adWbA==');
define('NONCE_KEY',        '8sY6qT3Y6isyA1I7c1kWMkwkryXgh0UDcG4szjghrEHOmURyyelxdS5v+Ku03Q4xoIxT72T41Gu5IlhaNxieeQ==');
define('AUTH_SALT',        'AqC20kpGIDPxgJ2Fy5Pmm0o7IlFi6wYiEz9xpUfiGvAh/pq8Nc0sGl+Ipi0X1rrPsgtIe4t6oZTvFd8Z4/GavA==');
define('SECURE_AUTH_SALT', '018lF2okk6kdAMyZVwf9k0psuKpCasJuh6w5g7J2iY5NQ0ikkk/1Qhpjoomt0FyF5PXjSO47NWJh6BTdH5aIJA==');
define('LOGGED_IN_SALT',   'c2YXNT/c9w6V29VMrvtf6Qtf3NMWHORrmWXW6AzkZOyUhSz2Wr2OYQ7e52lfabRsauecM8A3spVa9N7pce6u/w==');
define('NONCE_SALT',       'z3eXL9iOpGixvc3dyYYPTM1f9sCcUzGk2f/WrO3dulaPgDDGH0LEc+Gr6VDMEJMKPtU5fQKp3zD13H2YoHpnwQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
