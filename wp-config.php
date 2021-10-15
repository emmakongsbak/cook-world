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
define( 'DB_NAME', 'cook-world' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ymz^.G$*/B:NR1]SZ>=XqoQYBW_h ;cgt&k?y05<nN4HZ{dYmS/h8+n>R0mXxuME' );
define( 'SECURE_AUTH_KEY',  'G$M7&nBZiuxwK.1JT#Mk|mvn[RF1t7TQKk|AMU#SL!c!XF{Rw<d&9<9ypr<0o_dP' );
define( 'LOGGED_IN_KEY',    'A>J*ttz$[]L70bwIxsJo917c(vv7lv0G=)h4kws,8DWBOL>c0_9t/d9*p!i=VM>S' );
define( 'NONCE_KEY',        ':rAGnxt&{3yXf^AX[Yco;,%h7|<ZneJBRnY:@@u[8l/n10-^&r5Yg*tUc|H?O&qW' );
define( 'AUTH_SALT',        '#86;bRGCcIF_k)J e@S_w^Hyk%ugEzy9C? M:Lk!i}4Z0b<GLY-H?3q%8uyuqz?q' );
define( 'SECURE_AUTH_SALT', '}[/ka<qZ .YicBT[74qnI6oA59tBX%kX%gk}8Sg]<|-_EJ@D><eOa>S_@%1J]ta.' );
define( 'LOGGED_IN_SALT',   '6 36B6>{PSF0S)=@:/&1b5<1g~K&52l9V4yf=ar&z^l%[iIhVcQ_p7Ow5oX&|,GU' );
define( 'NONCE_SALT',       'KwD6iRA-mt7GO|*zgyPs~<*%3WD~Fv?w-f|}=XU9yb(kr2xJ(YURIBO5MUe0ZzsO' );

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
