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
define('DB_NAME', 'smoothre_wp773');

/** MySQL database username */
define('DB_USER', 'smoothre_wp773');

/** MySQL database password */
define('DB_PASSWORD', 'U@S8f9p63!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'otmggdxzgmn3qooq2igvi6ypwuvkbe1zpznshwo3nutrughg8h2sbr0goepkw35j');
define('SECURE_AUTH_KEY',  'wylgicr5zwadatmwpdmyrtenx9cheszhla9eio0awhud8s4zu99dfzlz8rjvzzqw');
define('LOGGED_IN_KEY',    'kthtxznqmfjogicf30docj8fjyu1fupkr3wkr1jvsd8qpiaflcv7sx9i8oezyc4q');
define('NONCE_KEY',        'fhvdoj11f9xjpgwgxgtve6torkfyehf2je0fssrozy0j1dwfcp7yzq3hi48awlqa');
define('AUTH_SALT',        'c9kmr5teoevj0shoqrpzoo6hqewquvefmchddpwu5eohvrpommndq9v06ymeqmk3');
define('SECURE_AUTH_SALT', 'kxclxfzxcbsuh73iwtbzdb6fsqidinavg1nx9tqbti6qyy29qrunhocqxhkobhl9');
define('LOGGED_IN_SALT',   'sygeiqcmmxjyu2ceyvdxty1axipk8fsfqmggbp8zt7ntq0ne05krughxhxol8kzk');
define('NONCE_SALT',       '0m3v29chew5y3oxtjjrook4tjfwidqirxgvvs6m4xtf5hmgrka40tgdjci7nqbmi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp8e_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
