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
define( 'DB_NAME', 'kidsreview' );

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
define( 'AUTH_KEY',         'uX[1OQ]hQkJH:,M>q,0y$iMYuz,xaw((Mt8T#$yx/ kU?-m7:/GR~LXyX0Je)nHm' );
define( 'SECURE_AUTH_KEY',  'QXAyiAMx`RwzWS~og-#WTXY:}b7PpF,5ruU7@ynP^$ ^# *tUKPv03|^#`4O68j^' );
define( 'LOGGED_IN_KEY',    '6D!S)a3y$#mv 2?b~R |6M|H~&+vMKU{n`Yjdy)S3DUe>#EEfZd0t .fNy$!VkC0' );
define( 'NONCE_KEY',        'j)h8*Rs?=Y )TF.8zl~$F}+a#;^%S`EweB$)C54oj{/HDb3$nvgPThQ.EL sLiK~' );
define( 'AUTH_SALT',        ':l5bE]R:_~1_PFM1mx8jGNFW*=UXv`sH4<VGbVn1x4SraH~/)eS5@ukN/r}*p?G]' );
define( 'SECURE_AUTH_SALT', '9knGHnRTg<y%MFu$V|{Z<a[93tVb`OE&{gJhdoa q|ZuB+w+eM>n(2Wcq UVb+, ' );
define( 'LOGGED_IN_SALT',   'b-t<3wN@Z4S;G/,9:DzQ<?1%b>zJ&wz3/g]r;)tk4NDr84L%W.#7O.wB%Oyc~6+7' );
define( 'NONCE_SALT',       '6<Q>O%{zA7Ng{0@WbKPAfh[_j:k]WV@|d?|LNR(CpEXzlh^uZr:r5)g -8Eq?QWw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kr';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
