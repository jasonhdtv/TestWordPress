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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2Db<s4yQ&5~(wq& dxPT1j//-vP=->D}>SL!<9k]Er<Prt^5qFkzuLCk,~XR78`#' );
define( 'SECURE_AUTH_KEY',  'OD R<=,;4nvvi,M`{@v&1V3SMtv8cx ~^*pFyB+E!709K~)>::)U@Y=5oPO>]TTm' );
define( 'LOGGED_IN_KEY',    ':IB%~20t<kvd/YbJXe;;ZguTL2+_v1CO)>t^q=_8brdhAD/Xu9_-*9Bz{FQ<D6{d' );
define( 'NONCE_KEY',        '1!oGSNV]z0y}W!0EgpKUpr/HaI^(^1`A%^aL^</4}`Fq<&q`LJZ!&G/BW<w6g[>p' );
define( 'AUTH_SALT',        'r7CTdKVR2$HbLG6xm%cl:ps;^. ffE|e{/J^bBHWbuT@=m-BS)<9aQ;1[c)==HhS' );
define( 'SECURE_AUTH_SALT', '2s|{@dno~p7gXYC(.tY0,qKY%Rxb[w*qA(R%ph31br}_1gDZ~d!V(?OMK2t,+B5F' );
define( 'LOGGED_IN_SALT',   'M5gdQF=SIr<`*%h6)7FK$nsGSRr}Uhwx(Cc^?IXB>siVH+Y,d,ZsI?XgQVKzn9$3' );
define( 'NONCE_SALT',       'T^IB]-HAD%6Wa>j#ra<z9kX)7Q^64RBKM5S~xE8K+%>.3X;BgLDv+kf=LDH*pcgC' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
