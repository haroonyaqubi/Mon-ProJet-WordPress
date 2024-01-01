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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6(5lx_65b9]b&ImV8W9.(a{[-t5QX2TN;ZlS<c&<|DIKb!_Zo-VI0LBQBn_=v#9m' );
define( 'SECURE_AUTH_KEY',  '!TnUq+hG}slA!9z^KKpPxcIG]C5rI8(I+g5VF3qdATyU&[U/mcd`NCwa  =|5 }]' );
define( 'LOGGED_IN_KEY',    'ZDZ^m@Ns8GD`pM`fimNym%|6/HW`2uw?7L(OyaqsoA[*jUxWE]Gz1dwbsow~=A#7' );
define( 'NONCE_KEY',        'B$YSr{2KI)e~PNfN?hah3ET1]8M1K1#vW5EzKm~}`?(+QhU_B[lWX87p%nZH7Aav' );
define( 'AUTH_SALT',        '88r@9O=n(S[WJm,56MYE{Nys@*?y&(M}83:x*{^&QN%VouTK^0l:0:cMLs-&TRLP' );
define( 'SECURE_AUTH_SALT', 'XL(,a6l*$3.Wcwd0*w.JrOp_Ws#whDE}Ay1584BPQWc^vY5-V_%rCyyUWa=p)4Ec' );
define( 'LOGGED_IN_SALT',   'D~E&Zu?.3#@oViQJaPfObCST9IhpNaC#p~[!IPg#1o^l[{ZJ+]F3p6; |I!i^Ske' );
define( 'NONCE_SALT',       'SPk#t6ExL_~R,OQc[[!,Y}AFFZRb%)(:rOdN  2mIk:^{,=7RkV1d5FjPuD]zD,@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
