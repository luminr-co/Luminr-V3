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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O<3F&Eaa@~(2QM=[g?+#i_][v[eZx!%n6#G[^5D~;kjVk_U:ayQ;%eRSRn091|It' );
define( 'SECURE_AUTH_KEY',   'kC`5e,M_Q^+ 9FDA fsSNV-u]0Lu-_4g#FlP$dx(!!{-z(]M$E B!7RKJVYsW2HQ' );
define( 'LOGGED_IN_KEY',     '>Bq1*QXdf6W5r%v MToD;M_Pf,P~)i|M(^Q?v}r+Hj:LBY+9GhiJhhKuE<]$U7MW' );
define( 'NONCE_KEY',         'I=5D+;k:-(X^/Y7<*/k!(iAg]PsH+Y+R_G-J*EAn`2=TR(ISUy_8(#3F),${D/-(' );
define( 'AUTH_SALT',         '}-E691t6?$Pdre8I.Y,t#*VV2xNhCH(nIHGYmAxkN;[Rn@A#_k:XqNy[s5i[>i.K' );
define( 'SECURE_AUTH_SALT',  'BD1Z}_{hTb4OA+MKOseMOc/TDgB^{mwh6:2?>TCd5n8Rz%s:QP_iqDdJSJK3*0yN' );
define( 'LOGGED_IN_SALT',    'Ph9S$|4s^h*$G#APYzb!5FV6R:7!/s|lTKNb%W?]pd@^0W0SSf N!spY;O3/_mQs' );
define( 'NONCE_SALT',        '31tM!/3%1:@nj=|5:vpH;xj<T7+dL}a_X8x}LNfT}(HFVQ(5a<`qGc!9s<l7UHyo' );
define( 'WP_CACHE_KEY_SALT', '3%Tx!c@-TD%5UVaxTz +;9x0krDlG9Wd-beAjoO1_oct5v |p4]l8N!^ch{rdyGS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
