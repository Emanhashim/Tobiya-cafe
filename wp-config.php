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
define( 'DB_NAME', 'tobiya' );

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
define( 'AUTH_KEY',         '+.0a2/Wr[dNkbceCX`nVZVC^]gJsKe5<B{TIE+ZAa+NT?}a/A45.e*8Lf.iT{iqd' );
define( 'SECURE_AUTH_KEY',  'G +>~W 8]wCV_jo<{Hd{J+g|Q-B@Xd^^pJXry6;^}} +e;!Xw_-J)w@T-R_M8XX(' );
define( 'LOGGED_IN_KEY',    'FY$l]3+FwCPh=D)?7gQtq*XkX2X;84pT:S3t7=-J%x<*AKX{UF#T?95/czNRHp5)' );
define( 'NONCE_KEY',        'eE=VoMbdXMUg gju8uCO7>B$6eUumYy3A&NlOXs{l2K0C`LT+jL1dQBIUYJkGIO[' );
define( 'AUTH_SALT',        'kyW{;e<@kls~2q?8:v]uzx*CNnbLB&v-/CJ1@ET7n]).WwX=9@ed=NkRb9S2gqYz' );
define( 'SECURE_AUTH_SALT', ':>^wvC]Fu?/U+vf1aBh`WYhIc:@yf)n@V`q0fS91 44f.}4bTM3E|3tx0BWOO]~{' );
define( 'LOGGED_IN_SALT',   'Nd$1`d }G9Grfo/Bu/cv:}KYo^eGfO_5uDy)c*%Q:6e C).!xBP>c<,`mE.VJ3 t' );
define( 'NONCE_SALT',       'p?-5R!?@>U)Xs=:#={M/5b#8M^0PZ7jk:q[a[Y9nv;Z#7x0}y3[zwzgyN,yle/8I' );

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
