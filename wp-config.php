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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ndianko86' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AdminD86$' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ys06:WyWPdpv~r,S xJ!lq;,.n`iv`o*}gd~o*Y4.GY TG5DJ][ F>s|]3QEdS&U' );
define( 'SECURE_AUTH_KEY',  '(y77.GKu@,Cj6#_R7%/PTsF j9=#ywc`ZaK=?_=Z3}3$iJXQk(O5K}/C on}(5}N' );
define( 'LOGGED_IN_KEY',    '>@k5Ct9Oq7RbL=;qra,7Cts?=/TejNiQ#JF0Wq)5TNbUViKO:Y-Y{JZ0zARzPm9)' );
define( 'NONCE_KEY',        'Eg[kQ&a0=ds8#~0wN!4_5In?riZ|ZE?K7CDBK^jwpX8-7XR7dk!-U+KV5S/5O#9>' );
define( 'AUTH_SALT',        'Fjkazx[Za!FWC}zcGq(}6*3gNk2AAB>Nr=Jx`c4xNgLmSBWmqQ0Qr9&otfq|$+_m' );
define( 'SECURE_AUTH_SALT', '|qfio]-p!V<)R.<F0*_HHFMR12&ihFNYja-5N}?SA=po+}-qsm*O9LWi7z~~X3Ye' );
define( 'LOGGED_IN_SALT',   'o2O/)>b 8Q%I;~a*(j8ttF.0ElxIs+PZA.@L+q$c;J6!h>gaF7Ksu8;m/v[xdA%/' );
define( 'NONCE_SALT',       'fWT=%Dzw/(*]S]c=!l&4j?(0#`mmaY%]ge}@d|`I_[^hRsq%-v$8[u!IpL8,?+wg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
