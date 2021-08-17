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
define( 'DB_NAME', 'dhruv gupta' );

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
define( 'AUTH_KEY',         'YzZTW{o`d@0pe6&4:nTf+>sP.q:0k+dzp/[lUUug;7wRizcmeN5bBy>0Vv^>Igy7' );
define( 'SECURE_AUTH_KEY',  'Y`IxY>Q-r{ZT?:4s%(a? q*FwsoCYKuh=$-FN:FA~.a:eN*`Qj<fH,FwMwJ#R#.I' );
define( 'LOGGED_IN_KEY',    'i&5pgY>j.P {p:Bnl}F6DOZ68|@8oQRqec^eA;U&0GhyAO3F-^^iQOy$d(c$d=@Y' );
define( 'NONCE_KEY',        'Hvf!E4jQI+gly@5cTd_2p}-?(WOM_([7xgz6;o!1|Ijvd?>;P+&hdAx96mDg[D_/' );
define( 'AUTH_SALT',        '[epQf#;oZ.xE!ywwf8k}yeVvx1pX|B_rhBNJd[iYe/(4Bj /+4l9f9lv:y(r(%c}' );
define( 'SECURE_AUTH_SALT', ']~E-(a|PYpv57k@rHvKz,wxH12<YUsz6KAtgq%KfG*[PG1_:gj.32n&?0=@h(o54' );
define( 'LOGGED_IN_SALT',   'rFN:,>K<~E%Yotb)+sGF>O38|0T_M%gFvW|]J:Tn8R;2*#$(9L,EGna)RFTFJHx?' );
define( 'NONCE_SALT',       'SL_[DS:3RkgS)6W.V}&x~3NrF[pL9E@4q**JLjn-?2-Ty=O4U-v$fW^7J k]{=uw' );

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
