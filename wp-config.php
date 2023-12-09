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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u962153669_I31iI' );

/** Database username */
define( 'DB_USER', 'u962153669_2C0GX' );

/** Database password */
define( 'DB_PASSWORD', 'aYuqhGFCH0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k[S%0f_7 0c^YJ@4yO6Jt-%+s?*++%jS{xKF[Xfp;T|dBcB[&Ut-M3l:~$n,Y1wB' );
define( 'SECURE_AUTH_KEY',   'Gzp#[)/14nX o1&ptJrM^K`!)a5MbG5oIjIQPe=XC*bQH7CH2#`HyfT[]]lPEURl' );
define( 'LOGGED_IN_KEY',     '_URxoDeMF_feE>X67`h=}#l/=#=K4`3;^19U<H^abAV)6)qooqS19$|oSfoX?Qh4' );
define( 'NONCE_KEY',         'XGT@U&b#]=jH?t3;Dl )Q,uU+^qN$nfl+PFK+Y-|Nc(KS>df}#xIbw[}l+.$Ix_M' );
define( 'AUTH_SALT',         'T9R+cDeu5Bpwrs{k1|6!9y%cq6 )Z6Dx{-8#}0?Izy[-}N#kE0+CtaOSf0$5&k.$' );
define( 'SECURE_AUTH_SALT',  'p-5l!i?Bq *JwP*F2#x$#^pH+3ZAm*v[D1K)&6Trzb-d:+XyCyqvP.f{J=9N~MZW' );
define( 'LOGGED_IN_SALT',    '0!DQExFjS[n,J$f*cu+f1PjQ:@jP$VR`[rMl(X|`YE}ZZ}YQ)K|NRj[KpX6vS<E3' );
define( 'NONCE_SALT',        'Ao&g[^nx`9;p{J&JlpAv)!KQ0347;H;zb&HUn&,-{Nkjv+Ut:xGSt&lQ.)z]N`4Q' );
define( 'WP_CACHE_KEY_SALT', '%A76($+~9YrC[wb@1mdyLyjXuzol:%S42rtTBc[YQgT0tAKL0x!*.t/7=3~kt/g[' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
