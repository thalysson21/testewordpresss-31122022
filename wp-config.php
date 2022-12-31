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
define( 'DB_NAME', 'basededadosistv' );

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
define( 'AUTH_KEY',         '_r/pdX.;kv{hA1_8lU:h*tc>`;7h)-V]{MsDXj2pn& 8_jom)<Hu{Un:oqqsTM5-' );
define( 'SECURE_AUTH_KEY',  '&5N6&*K@_BV2OOs]/dT^@F:w>b>>VaqvpZfm*3/mzGH 4-mjye9/NW/|1!4c31rM' );
define( 'LOGGED_IN_KEY',    't>fpY2Zk{b`JbMGBwJGQX_)!nO@h@j3ka:gD {]IP /~Jm>1Es2I}Z0;nz+d*H{F' );
define( 'NONCE_KEY',        'rxYJP-m8>tc2e3@?fEd%qi-mbuh&lnx4e`])$P~?3+<6=1D/*29]5;7Pre<(6G#;' );
define( 'AUTH_SALT',        'Q54?%F9v .:IiFvYr]_2Xw/tILzu-/LTnlEZz(GSA1JL{zSBf`!@b>w(}t{O6z8l' );
define( 'SECURE_AUTH_SALT', 'kGwEX+%0?IObLp.>{Uzo, 7APm2 Gge>~fNFh4qyprA(k-hu~BLi$[e. 5%cTJaO' );
define( 'LOGGED_IN_SALT',   'A$R0V~/YL#11Yp/whM+u=yXW+x`<KHmeT@BFu;caI|!{_da$fd;yj_`!?gqH$dm-' );
define( 'NONCE_SALT',       '{8y-cY14r#z{`EU-=yAA{#iBDT=517W!$<i$.Y)U0]1(Jomdb,c}=09jw%SN=wKK' );

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
