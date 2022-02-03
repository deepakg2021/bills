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
define( 'DB_NAME', 'Bills' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/*opentable client token generate using api*/

define('CLIENT_TOKEN_URL', 'https://oauth-pp.opentable.com/api/v2/oauth/token?grant_type=client_credentials');

define('CLIENT_TOKEN_SECRET', '4ioU664jmjZU31qrN2tA9fC64ECP31fz');

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
define( 'AUTH_KEY',         's$8q/K(;Z%go/pXY wG5TW!0UAox~`Ko=WRH~ydb#mve;FL&{`,_n~z}eo4m]<`K' );
define( 'SECURE_AUTH_KEY',  '2#y*K@gYR%:qyWV95|_::<DoG._/(7{wD[aKw3~>rP/b4:+e37zn)~Hu@~:3f<>q' );
define( 'LOGGED_IN_KEY',    '/u_Ioi`LJ}r$v4&,nN=.7q)y*x(;Fb1s5fyv0K=pL@]#LB(Y}g-]5cSgY+[B#86W' );
define( 'NONCE_KEY',        '.(.~P2dFTH<.=[)IR_DPKX`q={$w.8sn%9feP|K2~E}QDA`TMr9z5~eiZ2}^l*U0' );
define( 'AUTH_SALT',        '2@^M(-F~ZzlEqw+)$#dCsSXghIC~D|grE{ov+:_FHnsYNO<h>!%u;bP_T4p`AmK@' );
define( 'SECURE_AUTH_SALT', '}[)+mA6:?8pETH{c;B<_ybpYblSDB&;lae)[Vg!KH8Co.n0`fhE#x`Od2|L8>LEs' );
define( 'LOGGED_IN_SALT',   'D,4Pt;M1]/({#2?lnpZNl6&0Vdf`gD!5595.C?IEHn:[z.7Nl]_IImBQtFt|Dp$?' );
define( 'NONCE_SALT',       '~lM+lXSzlR<C?*w=WQ]=87P<2IH,*_*;A#%|J6[__%&t`Tt?%6[~-kW9GlCtt!##' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
/*define( 'SUBDOMAIN_INSTALL', true );*/
define( 'DOMAIN_CURRENT_SITE', '192.168.7.79' );
define( 'PATH_CURRENT_SITE', '/Bills/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

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
