<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'edomorem_wp183' );

/** MySQL database username */
define( 'DB_USER', 'edomorem_wp183' );

/** MySQL database password */
define( 'DB_PASSWORD', '9lh4t)4.3cSp![' );

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
define( 'AUTH_KEY',         'gd5rlyf2kkrytpzotrgedj7jj6mowbd7lm24rwjgrxiyhkrufoohlvb00oxwbrw5' );
define( 'SECURE_AUTH_KEY',  'jdumzwxmjqkeywlapjd4ptkauopicyzyn1ntfcy3mvnbage0falpdeu5h6fnpwlt' );
define( 'LOGGED_IN_KEY',    'y364p7xxpacfk1zo5l2dusjxg21e53crghl2sv3w7t4usbn23ccn8xlyj6vpgazp' );
define( 'NONCE_KEY',        'ageaba10k7vedyp4oupl948r681bc4cb2uil5a0laqlxog2hpfyfvovdviacpsga' );
define( 'AUTH_SALT',        'uobb2c1abh1p9ygmsrgrjdt1odj72vju1cfl9uhqn3gziqfdttwfdp16djuag52b' );
define( 'SECURE_AUTH_SALT', 'ezq4nheqluhaeuibg1a1rrpbcnsrwtmyjtvfcso2cpi45vuxypgad54yucc6rlwm' );
define( 'LOGGED_IN_SALT',   'yzlxey0jdpbdtnxz7ku9gg56qpyjvtrn15x0hympieqzk26ves8ygbspxj2oelj9' );
define( 'NONCE_SALT',       'gecczde0flyc09eptkadekqbffxrw7k8utnfuisq49vb8q2zrvi4ue9fzlzexbsw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmv_';

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
