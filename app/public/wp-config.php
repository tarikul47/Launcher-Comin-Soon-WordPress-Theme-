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
define('AUTH_KEY',         'C0MqsHz0kE6ESBM/OEEDoQ2gpwedcrcKQclab6UEmYJldooJSECeaMsds1SMwbdqIjBrU2YdiNJXDNkvqDg3VA==');
define('SECURE_AUTH_KEY',  'R5BCBu5i9htCcdWT7rryNmF8VkI+/awyRs5gDFHKvINx4AoiC/cVAPyZekU1YkJMhS+6R2I1LGBTL6LEg+6afQ==');
define('LOGGED_IN_KEY',    'mTtDTxdgp1mSEZZcjOplYDmoRLKoPDw8yAY/P9v09HZzahvJHmpLFbj0enl0/KlgjBPTRpDnNjZkLOqy9aBF2g==');
define('NONCE_KEY',        'YOenXHZ5EhNS3njvQpq2UF1HsJDu/XvkaecGewkOl4enos6KPTF3+68iXfT8JQw+eMQOcAxr0JduAdnIv1KMSw==');
define('AUTH_SALT',        'O9Gp70aXgzZpb2z4wmCg7YhpFnMzjriN35jL6xWv1qSVvJwn9weuBikuXR+H8LeeWX4ZWkP/9YD0oBICKt/hvg==');
define('SECURE_AUTH_SALT', 'EoIE16jnC5++sOMeVbfwadQx34Nk1dvarNof5Ux/SiqSFKN/4aliBV5pHybaCgDvVt8mDl30SzHCBND5wfaLCQ==');
define('LOGGED_IN_SALT',   'BM//YgbNMS3wmzqFbNh3z6hH2J3712SvaAhEf/WMSDH4fOUVPP0NHCO3Km21nwGiKnVfmtPY7zfKbUBfyxLO+w==');
define('NONCE_SALT',       '5V9y3sN49n4BLmtRL/PnWo4UZo6KRCJnaNMQtxd22oziD+DYD/qWg/J70lTdOoUfhYxo2xE+jQXtqCNzKBrGWg==');

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
