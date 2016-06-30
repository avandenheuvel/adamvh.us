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
define('DB_NAME', 'adamvh99_dbamber');

/** MySQL database username */
define('DB_USER', 'adamvh99_dbamber');

/** MySQL database password */
define('DB_PASSWORD', '(2PkP4[65S');

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
define('AUTH_KEY',         'hw939wsim8rxlbvndcom00ufdrntj6ep6d4gjzodvyvtlqupxnr6ajdexddxumia');
define('SECURE_AUTH_KEY',  'l9lagc1uecjeypygjsifp7oirpjzhyzwuvbcio1ppjgezzokfsebnns8zb781hh4');
define('LOGGED_IN_KEY',    'g7rnrti1bwwom65upes3rcv7wdra76e0dpfrubwi2rsokt8vsvqye0kednlss27k');
define('NONCE_KEY',        'z9bibqcbam3n5zjew6ykuyjgenclsteyrflvqw2ejfi9bfyx7zh5t7zieu5re1zm');
define('AUTH_SALT',        'szcndayhruyryxhrrtujqzpsrb4yvzuwf7ucpwygv6zcvmhrqjd7dwmgd7vkopnx');
define('SECURE_AUTH_SALT', 'slyygg6xz0zfxl3hztvyxcrl3lof15wsmqmwnkaiihnjoikthfw6x3hrlvj14kwe');
define('LOGGED_IN_SALT',   'kxq1jawcr2pv3pnn4b2ab4srll6io0qyfwmn49a26a0hcujvo0dnbb6tfh9gv2pn');
define('NONCE_SALT',       'wjanzxhva5ls5mgukz7rnaqfmwrsyeucfu6sh8v0y3hvwamxacbr7t9ms95vom4y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
