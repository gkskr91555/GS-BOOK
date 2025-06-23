<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gsbook' );

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
define( 'AUTH_KEY',         'xj(3bt9I#UBDQ-L!2_rKivREEPoR|!TFr1MorREc<LCTKL!t|f*/?1/p;A6~/{E_' );
define( 'SECURE_AUTH_KEY',  '>=D|H!,{%)jl.(BJxpaL)(/v0~jTTuP*)|XV@Sce*R]bQH8>|-F}OM/E:W<v ~kf' );
define( 'LOGGED_IN_KEY',    'LF16O1+xx:)9cnRte}X/A}}V?bvOC]LM(a~`K*y[wXn0 A8qpVVKg3a1P=7#Me#|' );
define( 'NONCE_KEY',        'vdYz`8OTo/E&bh^jc=n:$0/Kq=JuKJyAWFU|t NdoTg~i&ac/Vz2d5Ks]p~T]`{z' );
define( 'AUTH_SALT',        'o7cFNlbEh45H+.TlM++tByX!a=w}cm8089R,.6C<K%0`9P z!<^^7pm.x9/Ank4)' );
define( 'SECURE_AUTH_SALT', 'mtpQa )XW,`3v.^m[-CIo|(2$~UxU+bzTi_Gn>9JN~xQMd,vOithHpxrgw1[1mEK' );
define( 'LOGGED_IN_SALT',   'u+hMRCIm,H<spz.}Gr!:j=WR~mxS2iqL$:2f~e58_gF{/8)U)~DtW][t`ZMPwGG ' );
define( 'NONCE_SALT',       'GS LSAr4Xk,}U<U7v:{pap:>tjnyQg{y29T_*qYE,hdKmix.R=00-W[odBiwpo#u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
