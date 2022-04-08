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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'E,V,A{NOzIw#yX{G}7nT!pkdz.lKk[a!iI.Fo0UEE;6{REalK3hhmRC#*W-6rVrZ' );
define( 'SECURE_AUTH_KEY',  'fQHwglx%$_5a~(`<MF]m rU4 t8L}kEjD3 :[1?aF.Iv-hb+xG|Y(4n]*zs%n3Rz' );
define( 'LOGGED_IN_KEY',    ',Q8y=O}6R2S!zbL!~+8/i3*va..aGP.j/-y*}>LJ#aZ35P{R=`TZ}&j!JdG-&Jkw' );
define( 'NONCE_KEY',        '7n%qJZ#iG_-dJvNw$I=y{J dr7{b&Kse,qCEE(cZjL:|GzZ[sCT{*Rh~ubY3oGDE' );
define( 'AUTH_SALT',        'zRlR</vzL(1{tn5H*VA$c_O_YWMRSAKE2mg&z,XpD)I0(cp~6^pBlZ$0u=`ruI$?' );
define( 'SECURE_AUTH_SALT', '=a2t oXKEJqqrFH._A!18#Pb6gyV(LO2~1HFuak_B,TC+}V,/-|Sed1d2gj+Bl,|' );
define( 'LOGGED_IN_SALT',   'U)33U52IUFTW3oG]YC@XmEBt(1NtiGHaQk62*rV!$B1JlVz;TN<9-}q73l+OwHxW' );
define( 'NONCE_SALT',       'wW&NDLwXeK~USBu03:X(l5j]qEBE3TQtrZhalaK7Z}0!`aN{:=*b{Dg7b4V!R@rF' );

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
