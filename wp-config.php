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
define( 'DB_NAME', 'netguru' );

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
define( 'AUTH_KEY',         '*<KTI-CnHxe2$d/_eOp~2VF<f f~k`[LeI[EVBgISC^p *QIoZ_+zxw#NYzNpNIS' );
define( 'SECURE_AUTH_KEY',  '9pH<TxX ,7Lwm:~K#ys8TUig2u)@Qdg4yv,5c?BIP`sXT,89/:0Q*6#kKAm7KM#X' );
define( 'LOGGED_IN_KEY',    'l*wcjr^qy8xpDMFrkt]VR],x2YulJOzFcwqq]+3)=eNwgML9jKXAs}j|!cR=.yt=' );
define( 'NONCE_KEY',        'zv~$}9ofR%YC<z,Xivv://t]GV3J+}/>@KEaFlTzhR2`2YakNRu$2zhkhcuirn:>' );
define( 'AUTH_SALT',        ' wE^p;k!_bxTa H+GJyR=7_,@dmi`AKh3M|7G# /79pNjD|5;yQ}rq54|Rhc{~3y' );
define( 'SECURE_AUTH_SALT', '<{^6m!gYZ5VzR&mBjhSdiuZU+p2`E,_Ge<gY`e>DRE7FWB`E[.HG)#XkY%phNJPa' );
define( 'LOGGED_IN_SALT',   'NZ2WG DFAOWWL=W<eESwbp[LzDEM;?.u*(y`L5v?!cA5?J-U)b*3br!HYp*R`k#W' );
define( 'NONCE_SALT',       'f5bJ^qD!t]UCFm*#3|_x$q{+l/r($#yK?Ce3sUKwWj3OFVde}[d;zj0>o(<TS,WI' );

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
