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
define( 'DB_NAME', 'parallax' );

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
define( 'AUTH_KEY',         '2nO>yNbnxJxb}pEINa+e>FPrkh3tHiqQ|6qswp{c08<s {87 R<m7)gEw>URN=qp' );
define( 'SECURE_AUTH_KEY',  'l.M_sCmTnkfwiGg,|vDoE}m<}K}_zV1ud<|?T  6z{KE=j5^n1w8ZOwCxvYIK9[n' );
define( 'LOGGED_IN_KEY',    ')ul>3M~<(|qgXuecn?%8S h}Q6WXE%/Xd&%iKya<~cj&XjT!=PV[}>HN+9Rn*K|$' );
define( 'NONCE_KEY',        '.oEe+K$]Y!;Pmk=<{15x>=5F3Pt!2:,Ulb~0dI>*HGpLPA$,Z>y&S?5.Q@/p`^6z' );
define( 'AUTH_SALT',        '*$c[8Q_#!!udT^on pBNCU2&kb}Xp`,rEB|!E9t[WnjR@yX# CwagQ5;6@3jvP#J' );
define( 'SECURE_AUTH_SALT', '>CIy8U]~C}/<.N[^M<rS^3)&Y&H[>YH/x).o~_(pQkSFhw#)8}e`={^% ]EDREy-' );
define( 'LOGGED_IN_SALT',   'C&{S1#JlO21e[w7]N }v%?;I@]iQ062xIO7W/s,+!y|aO,9U{gMF2cJZ6K7DC^uD' );
define( 'NONCE_SALT',       'b;&d&}~r0D@[*+P?{[Jn5;*^Wk^JTug_1qy Q<nJ_esh1A@1r<pVFev1j +Aq91]' );

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
