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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bijoux' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WK~P7sUDb_s?HV2Falh !S6Z2T14Cp$`%3%%][#l%9+_L}/|>zhF4>O!as:buu(I' );
define( 'SECURE_AUTH_KEY',  'MTv%fVA3SeFFu*#g)Yvey ?*N]3f`8Kw6cc8C.?mXPYTeviJ_+PE_xS]%!3v;E6W' );
define( 'LOGGED_IN_KEY',    'NO1IM&i7&9L:RgTv>_eKjsNxBi_]V?j]FSm!$mcY?}C%zNdG-S7!oBL_H|+3MQaT' );
define( 'NONCE_KEY',        'f}@ !fe]0S{/^^1q~@6L1o NiPj$+Ty,9WOZ0 ltz>;bA[fG=aWL|]H6rV3WjKn!' );
define( 'AUTH_SALT',        'a^sKu&,O#HI/3W)8L]W F9f,-[A[pjOAAy;?Ce0[[)LSr3v=b`#qu@Qlb>YZ8m:_' );
define( 'SECURE_AUTH_SALT', 'oEvdtxgahb,?}<uK$C@*kE:xJKkQR`pCFnngR,6{G5x1 *tQv<[*h:I^:IzK*L^R' );
define( 'LOGGED_IN_SALT',   'Cr.)#Q9S)S3sKagsE48Oc6U:~uL@qGzJG2QSc=)D(*y/Pu}<z[LB@U[W$%3~gQIz' );
define( 'NONCE_SALT',       'z3/!l2{`h:i`;PO@urmvHI1^)YKa}F|S;N^I_av<dvPM R4aD7Y}T80Tfw%`}=X{' );

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
