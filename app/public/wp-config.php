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
define( 'AUTH_KEY',          'g:mmAi9Da]nXcY]EZdbCG ]hQ7c)Gkfg/6BZbIL)<c^{tWUaeTCvC5T&T`Ve.-ju' );
define( 'SECURE_AUTH_KEY',   '^l_xXoEI_0V01,gJED0n5h/g>^M5puFQ*$+Vr|YKJ~l!1<]:~ eMUch0 >b7_DR_' );
define( 'LOGGED_IN_KEY',     'C(y9.R06_VL[@i EK[dHfnnOR+{z=LkD!Uf ],:@z0d+1oJvY|!&qtrw1J}>_cto' );
define( 'NONCE_KEY',         '3n]ei~6/,/~AyuamWB}:$suqh%aV$!beJ%1Y>JmHChE_3q,jX!(3MMfRR[%t}1n3' );
define( 'AUTH_SALT',         '2RcAvCpp,#=6NHSzR4%zv)$yvG#c~@G[%.P+1I0</:wxI}~8`oy#>Rq5|K/} KkS' );
define( 'SECURE_AUTH_SALT',  '#VBa@o%(b%OjJ]k5iw_m2WUpwZ650%~kN}dwx|QU x HRxL*:]MM*:/}6?#s*CYI' );
define( 'LOGGED_IN_SALT',    'Ag&8P?S*/o;2jz.!Ea`zeSR-V>VGD@lKq_@h`?ke<fD!-~Z.Gp{E;c?`pnAi|`PZ' );
define( 'NONCE_SALT',        'mCMoyiQ.nA.P>RltTt}/<HlR;W!+4Or0KEpYs1bAoaAV3!A5; |uFJ<DpX%ACLt!' );
define( 'WP_CACHE_KEY_SALT', 'n?vWr)$LO4-;2:6mnkL`{&)7lIeGl/yc<H-E.f&HY.QaRK/K#Y+G!}9Hvgz-b8Gk' );


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
