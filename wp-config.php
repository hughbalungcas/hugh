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
define( 'DB_NAME', 'password' );

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
define( 'AUTH_KEY',         '|DU>-I6-pf4&.Vz75y^n6=[->Jm2gm0*j}RBQ2@pZj1,lGUz`Os>[Tsr?6DR3K v' );
define( 'SECURE_AUTH_KEY',  '=UNmP}!cAZK2pXir/2A9YCi91od{4XEDvjAAX#z>l*r?&y?4;V=0hLZWnC,X1A&H' );
define( 'LOGGED_IN_KEY',    'bD9r`MF,&I5SyB6ss]S[@L^/5CE#jk2l!^ 3lU@}I.yS0S|qU>f6I(;RD5@+.D[#' );
define( 'NONCE_KEY',        '~HIPt{I|Cl+T5^6v|#8eOu1s_#b/Y>#D./uxk.d#:K;SVtx3f.Z[2`=7cGe5sUGk' );
define( 'AUTH_SALT',        '( * kQBfdp/ +#/MZH~nN ~69fV#]Nnz!w2o&f(qgv?rpq2-o_%h|!xxaojR~0E*' );
define( 'SECURE_AUTH_SALT', '#3a9#jG?<?].J$TNL]/m:4a,X@Y*{~JkWaa>(hY7V=7X`Z7~d^R]BZUVt*{WHEDd' );
define( 'LOGGED_IN_SALT',   'EVgTE^Q-IQs!^Jh}VKzM2+b?`|Qvjdd&SjvX-M:>^sq4[%/e{L#)xym6,[y%/2gb' );
define( 'NONCE_SALT',       'Ui,%uYmRZsiE}FvK4<;PV7rGdE;h|J@VBJWG)(JOlJm- :a)s9<;Zf.^ecjc>q;1' );

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
