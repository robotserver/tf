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
define( 'DB_NAME', 'tf_db' );

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
define( 'AUTH_KEY',         '}=|LZI#hX~6B[z]rhI#_tEiC/v5=Oq&_(~3|iL`O_5r.D.! JimIv8>u0 ~Sq7)~' );
define( 'SECURE_AUTH_KEY',  'tWrShD<Ck~Ct_M{ygKtN~ZmB&##f:8WwP&Gw]!z&^:.(Wl*zTjh_:(O8ai],(^HQ' );
define( 'LOGGED_IN_KEY',    '-HGI@gXv_dZ{;|o`ie_<`(EE=,EX2J^Xwy(MAC4/s!w^,c  H?`<d9y+emrX/3u.' );
define( 'NONCE_KEY',        'VyUU4laaE;Fhy7z.5LY.o|*sk^B/NtFGaP=Idr5LeI`]u9yAWJe!ASd`=czRNpLA' );
define( 'AUTH_SALT',        '%el0)ps>hi~:`u7~xtTKBBE%hQR%t ~`_&Gsi6#RH<aaH3uIlhc38[62|Nj2:x(#' );
define( 'SECURE_AUTH_SALT', 'X?[1>&s=}?Q#jZ@Xs0il4+hUiVvc`6SmKyb$:[rKwq1IIypb0s*!Kol9|>I@.h@N' );
define( 'LOGGED_IN_SALT',   'ZVFRhm8je,7[X`8}mKw[V|W.0!*;4b& ,LLFvp~bMeV(e>11)YN5JF)x-h!jYQsK' );
define( 'NONCE_SALT',       '1[7_pZ@QZ{X:;up}QLx++_tOtDm|l(PQE#89}-SD{GP_P8H*@)/pm)7=U`64L;45' );

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
