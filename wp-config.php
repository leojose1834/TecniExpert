<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tecniexp_wp531' );

/** Database username */
define( 'DB_USER', 'tecniexp_wp531' );

/** Database password */
define( 'DB_PASSWORD', '10L4SpT@@9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'legzlcyp5jzlweq9rjbtf6fmrbch2zywxczq8h8cioasgosyiett5lpitpts9czr' );
define( 'SECURE_AUTH_KEY',  'thjmwvxvulvrpxhwmthyynix8qowactlubg25w395sfmifdi9dl9wp2gjgce9x14' );
define( 'LOGGED_IN_KEY',    'xulxdae9qf9obnqqwkvxfompdlnle2e7yzm3f5zii6763cusui3aji8tibvcf4zl' );
define( 'NONCE_KEY',        'kuy3ql8vukx1xzzs4x5vrqjkpdzsp3nntohuli3lmwwh3otaxu41zzwzcnhi04ar' );
define( 'AUTH_SALT',        '0xcsar2zjltpqdnbhniew2tavlb4smkc5nndcemprefzap7u1s3r298mhlz9kezr' );
define( 'SECURE_AUTH_SALT', 'uc5m75cvyrds7of7jda7khqhnzdykpgjjvprvhqqfoqow0ei05x4vdkdmmjsx8oh' );
define( 'LOGGED_IN_SALT',   '1xg6d5kd72gi9awsjrqfwxvsijqjojdxtmcqnyjut1vndcb32emy9qo7m91ckmbh' );
define( 'NONCE_SALT',       'das1lp6oh8emnyh3ihrvi2otcolutf0ayme80mjmry8snoh4zbibeor6vvp55uqn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkg_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
