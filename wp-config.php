<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4)1nVPcdyL^s,$X,2:k uO|]XxV#{3,}^kY~h}`iz=ETp <AT;d@#>/2U0*0y/lW' );
define( 'SECURE_AUTH_KEY',  'M5rMz&eqE|Sxfy&Lvl=JM!SC2~3(Ya`BOz7g-h-&*[.Aop2uK8ep@%eLn!f%CC,q' );
define( 'LOGGED_IN_KEY',    'A1dWrI.<(bEVs?GW_tbaEZ odZiw-7fd L1oTX@:p9oguF:3kAB7}T2RM72 jl:,' );
define( 'NONCE_KEY',        '0hMM s*hk,bO%7q39fp_+cd_c+D>0=~0:!_C,c3 Zmwau!T 4&Wzx>hhu{V)n}Bs' );
define( 'AUTH_SALT',        '|#8Dsw-b/ah4+$>7E?&;Jn{2dsa1ik6k(_:rcSzs qgIqi? >9G];t/3*Qf!~/G>' );
define( 'SECURE_AUTH_SALT', '%>s.q`{k3]XsM<|6NTN4@zN*$kLLO9IOH(kALhXW_/FK(bR]t]<fGIVY>?1V^7lB' );
define( 'LOGGED_IN_SALT',   '9b?;p^S0;aA3Jl_wx18hBwth3746;{|<A-D=E?WtKW^&Kv: S}YuELDRAcUizdZE' );
define( 'NONCE_SALT',       '7 !h-sIJZT~`aYjH6fYV|V0)Gz]96Z#+:dNHEM-{N3Pn.m.C1m44BMxZ]0z3%UqD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
