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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'changeme' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'dXVZIN(K2K3Ivt:EXy3E0bK;uW[0FcVsw;|Af]XWs/K4%I&Laq]:NC&{qjgz~SMd' );
define( 'SECURE_AUTH_KEY',  '%x0pS>%R]c10%xppF82!/XAt~yUWsyk i8P%q}F+H q2~V5MENvxT5lGm;amd<T+' );
define( 'LOGGED_IN_KEY',    '*Y,^W>e)[Q dDXS`<kY<zd*)EY}a{qoC)>~*AECI/}y`i(*DQ/#B!2kWXrc7p|>m' );
define( 'NONCE_KEY',        'NXm2]kX!Q|=^*V0~Gr xkli4Oo; 3tH}~!5|YD>aUrS5DpY5M?7cj/^u_XPxG,jH' );
define( 'AUTH_SALT',        'S6KICv%[q0Hz*R72NFG%J=tujTM*p}odsCPvnO>2^oFHKp^InGpvNi2tj)Vu}!|s' );
define( 'SECURE_AUTH_SALT', '|Wxp1nadWfJY5A12$wRFsFPzG:mHTm}MrE?:~hVjD2$f}`WbYVY0MF*,qdZcHK8i' );
define( 'LOGGED_IN_SALT',   'KTYWmts*``-a85`Rp|Hz)LwjTaHutuL+ta!N!cPbu~Me{(np.V<0*zEtw%l{nmMe' );
define( 'NONCE_SALT',       'M1?X#Tt;0M<v$jo![GmQ3eewHo]W7a+2yTPfPC SL@jrfQ!h.iG.I3,39#&*i/1N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
