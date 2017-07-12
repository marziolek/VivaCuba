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

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

	/**
	 * Settings for local environment loaded if available from wp-config-local.php
	 */

	include dirname( __FILE__ ) . '/wp-config-local.php';
} else {

	/**
	 * Settings for non-local environments, used when wp-config-local.php not available
	 */

// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'm1238_viva' );

	/** MySQL database username */
	define( 'DB_USER', 'm1238_admin' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '90050800378#Martin1' );

	/** MySQL hostname */
	define( 'DB_HOST', 'mysql9.mydevil.net' );


	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each
	 * a unique prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix = 'ommtnqqs_';

	/**
	 * For developers: WordPress debugging mode.
	 *
	 * Change this to true to enable the display of notices during development.
	 * It is strongly recommended that plugin and theme developers use WP_DEBUG
	 * in their development environments.
	 *
	 * For information on other constants that can be used for debugging,
	 * visit the Codex.
	 *
	 * @link https://codex.wordpress.org/Debugging_in_WordPress
	 */
	define( 'WP_DEBUG', false );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

}

/**
 * Configuration for all available environments
 */

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6OWN/QUgp8O7auIF9MJlWgMNZC+26y079pytMW0X');
define('SECURE_AUTH_KEY',  'ADpkhBQytCUHTrr2+FbcupMdWFCf0395LmBz469w');
define('LOGGED_IN_KEY',    'VQzltcbEJzac4OMU5bYHF1F+J8JpstTythPVvLgo');
define('NONCE_KEY',        'YkTPIJIEpK0tXszy27kREeDvtkow+D/iKKDl0dXr');
define('AUTH_SALT',        'd1p4G56CjonXxtg6OOSF0+FNf3kBeLRtqGSYIz1x');
define('SECURE_AUTH_SALT', 'ioOUZYQjJLWOmv0T/+suHQhUIaOjai4cr+ec7pS7');
define('LOGGED_IN_SALT',   'EQUr46PAa5dBYHQ+flN9rXvvkgPDUVDhV7Zo2F2J');
define('NONCE_SALT',       'tdWZR19bURczdDNfR8LG56YbJvilDrAkADS42F3+');

/**#@-*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');