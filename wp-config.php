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
define( 'DB_NAME', 'your_database_name' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'goldenhaven' );

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
define( 'AUTH_KEY',         '6da]w:NPbG4TR*SA]2S_>iUJgg4tkU}ojDG#|_-Il(w_8v)BN&ge[{8^]I}}N)|#' );
define( 'SECURE_AUTH_KEY',  '<.UbCdX:<pLX)#}PR1?/Z3ZsugB2sR<{(*MaH~PJ=IbQZ<eBcB+&8nuLszS8,:12' );
define( 'LOGGED_IN_KEY',    'yvq3QkTD/m[wn|woe+D0l<lZU%Uamj@YmB}J]ea*SH-6Q0?v~>}=qU`}u/K~Zogn' );
define( 'NONCE_KEY',        'lz+:%u;~f&&/SS&OwcUL|-[S8lIT1bw7jgVq:JP_1EFe/cZ^b8E8V!9L.xJ)+^e9' );
define( 'AUTH_SALT',        'ip,#8E&v}P~:%#M;&^d&7EU[3zbhDJ+^UM/n~O1r%kG/#1UJ@YOJGJ6ATok3L:3e' );
define( 'SECURE_AUTH_SALT', 'O.Z>2aO*r`zIsRiy}vKmM?EhJIr)tbYdMVL;)>[BbTVJ|/S6.00OH$e*<W]vivT`' );
define( 'LOGGED_IN_SALT',   ' :FYo,!6G<IFDE11vN7w;Ix&#YTaA(=yb-08k~re3Wqi$fg7~hRY?U}TllP^ndU|' );
define( 'NONCE_SALT',       ']3~^vq|b+ |aPJFS>x.=])^04I#EDB_@:La@r9j^x{Qvf=b7 4^R=3^uH.U4rOFH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gh_';

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
define( 'WP_DEBUG', true );

define( 'WP_CACHE', true /* Modified by NitroPack */ ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define( 'WP_MEMORY_LIMIT', '96M' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


