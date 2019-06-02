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
define( 'DB_NAME', 'wp_college' );

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
define( 'AUTH_KEY',         '$JS]1@=q*V~vMBSy2y]bp<.v{eOCO}J~Bm<5?iH,TZl8Xf*B$jH/+]:u$TU?sA}3' );
define( 'SECURE_AUTH_KEY',  '78ohA/-uS-~#q.cuv!7`rnp#vb dcy0j3`~alGnC/#$4e$NBTt>{T#ci;%Gl` ^H' );
define( 'LOGGED_IN_KEY',    'Q~SOo9lOV#jng/gK+R6_0Q-S`1+J)P^8!M`4jxpUCWNlmY^}^l->Gw?L`,&(*rND' );
define( 'NONCE_KEY',        '0d-&lRE=&A:&N3c:VoKr,!>B/<Cxb}w4}6|Hb&PYoa*l3nUVu15Mpm#~#l,+77m4' );
define( 'AUTH_SALT',        'pQFH~iQ4Dt1! wb-g1rV-5-SW/kudu$Zx5baX:TVOUB6CvrU6)yQ(z2Ch^+ZlqH&' );
define( 'SECURE_AUTH_SALT', 'yW9URTxvsGkMvrs;.e@^lk8>_jJ@^tgv+PM9:JZE(PWv}Gl5S%X[#4Dq/d*B`>.N' );
define( 'LOGGED_IN_SALT',   'LY6Cn{bJxQNDI1YgKuyMxo}0A,1OX_d}WI(sTw[ 6wPm,=T0ij@E-1_a.6GcTy8J' );
define( 'NONCE_SALT',       'jrXwsb[A|X4jS3Ctg=w>>;9wskzvf+v8#7;NSM*9-tQmSuoWdH7|M?oAYJ(]x#cv' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
// define('NONCE_SALT','justputtingthishereforreferencesoyoucanspottheconstants');
 
define('GOOGLE_MAPS_API_KEY', 'AIzaSyA7zbksOL_nex-HzYicNSk2rduM4joRBOI');

