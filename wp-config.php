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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bryanarr_wordpress_tienda' );

/** Database username */
define( 'DB_USER', 'bryanweb' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost/wordpress_tienda' );

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
define( 'AUTH_KEY',         'pKI5/L#$bMN<a*]HP=]>;.ZZp`Gi]O42;FnCs2!rIlBddt$>8b1OlVukV;kG< iS' );
define( 'SECURE_AUTH_KEY',  '&=8#1:XaH* q_R c[0Z*#%W4|-5,HFcJ9Mr 2{<:&ccdXh6Qog0DL.v$Ar;JIhL6' );
define( 'LOGGED_IN_KEY',    '3EfS1PstxojN<ij0X)gCP_:(6]rFM4%9aB|om6txge/eZj^)NhVbW_y/[QB$Z`KX' );
define( 'NONCE_KEY',        '6L*X_r?`Vdvo{M.aJBNJ:pu;kN=`2r_o)b6sN=[=X}#&W_]e.2.Ga4/p/)?U&(vl' );
define( 'AUTH_SALT',        '7kSJ:+{(hhfL2HtmCFI/uBPr|I4ow(>V)wu>2DM5Q #+Z%@YB4Zz{TkRD^(qlXcB' );
define( 'SECURE_AUTH_SALT', '3YBB>Wfn@<2A;+D!ejEn]:i4BdY]0[!] WJdgH*Thk=`;QafI3HAyZ>[!$ND5mnp' );
define( 'LOGGED_IN_SALT',   '$aXS-1WsGO|l{E,!1n}gTr:&AHP6!dzA(@Tq_8PO+?$SUHPXn)oqMy%67)6$Xavm' );
define( 'NONCE_SALT',       'FY$pA%/xpnqtpl!mr)iG3sgfF+rDs4XpDTAVAby !jq`7dv #00[K_6mH8m/AR^)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
