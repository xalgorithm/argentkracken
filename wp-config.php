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
define('DB_NAME', 'argentkraken');

/** MySQL database username */
define('DB_USER', 'xalg');

/** MySQL database password */
define('DB_PASSWORD', '13xLuth0r');

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
define('AUTH_KEY',         'M+@GdLUXYL{PDj?awT|5ff~eI!}*Y:FPN2wt$|sX.n8QDy9>uBj#99K]Bigv8EFv');
define('SECURE_AUTH_KEY',  'H/ie`.1h)XO6%Qdy`UW]ShsrI5PrZdYf)-oBpjT|*7=^wMWw?kE-<WWFU08^,7aK');
define('LOGGED_IN_KEY',    '29OQl^Ea@:w8fwNJexmcWJ]Z@XfB,NRvl-B}w^r|1;B%On~2aD]WfI^,eD%>dq0i');
define('NONCE_KEY',        'k9qCFbwCrioJGIJbDbJx*xI|fRG{lM7l*Bja|MA5A29PH5`J_+0j[a0G:#|1%yDK');
define('AUTH_SALT',        '^P??j-P~x3MlE=:QD!>nR0ttE9ZvZAw*2Mq c$+*G!X&xY5V+?aEufoWW* 8nnz=');
define('SECURE_AUTH_SALT', 'Y`c_74!6i&Ww`EsGxrlJdB}-=Np:3odg3ZP5&mldR!>=!;2QxO)`IH4,Kp|-9$S_');
define('LOGGED_IN_SALT',   '1M+@:__E[{#B=|@O7j<6Sw>Eb7pUTV7oZopdXG`-{vqg0tRlD3TIn_~Fkw}3EJ/D');
define('NONCE_SALT',       'yAD<U|s&n~W-^y%VfO2GKu&OIF0QO.3NW<u3z%>WHq|(FL+7zYkH-Cjx.Ly` ={-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
