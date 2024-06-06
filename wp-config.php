<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'radiotv_radio02' );

/** Database username */
define( 'DB_USER', 'radiotv_radio02' );

/** Database password */
define( 'DB_PASSWORD', 'radiotv_radio02' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4hpxqwwvmp9ym0aui0ktflkklj4lu7n8pkwh56kievrcxr6gvgysggqkamxcqui3' );
define( 'SECURE_AUTH_KEY',  'nhq3qaghe6piki2levzh1ncnmcrg9y1ik6bh2whqn3hhbuslunn7lje5nypjz3dz' );
define( 'LOGGED_IN_KEY',    'dl7lmixbirdmadjs61mfne6ozihuqmcjur1l3pw4hzpwxdwfyopkmukkacri2ccf' );
define( 'NONCE_KEY',        '4i8tarimhaahved9coqif2ys08shegyg4vttgscfegkjmxcqyljim81ivdz6tugb' );
define( 'AUTH_SALT',        'qcczxgsyyivulq2bt4sedcm7maorrfqkrxocelremmrqnj5l7mrepoiwvn2yplxt' );
define( 'SECURE_AUTH_SALT', 'put0ckoprdhmfan9xxgehi0hvilxx1cl96lhu1pxsc4lpomg70kv19ijoeo96so2' );
define( 'LOGGED_IN_SALT',   'qjnnrlxnd22l4qtbcgajmyl8f4xq54l3dkxgxdle4dh3zhyt31jfwecgef3nhhk0' );
define( 'NONCE_SALT',       '3sewm62k0aebmu8sahlpqms38q6i3n3y2ag5phiduqdsksi7z1ofcpz9yco1hw1s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpra_';

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
