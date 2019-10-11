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
define( 'DB_NAME', 'retailpro' );

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
define( 'AUTH_KEY',         'fgLd2%+1e~ &,4:(}{OS/%v)B $c|<<j+I{4:srjI*y)H6U+X2[k$g%X4jf *hcg' );
define( 'SECURE_AUTH_KEY',  ',][} p*%_H.O{FU3(`$;`A-).l,DLP{#Z,8?HY$naa%~L//GUlWZj_1:lHmN PU*' );
define( 'LOGGED_IN_KEY',    'hkd=MR.CL`f(.3*fM ~l9-:]P-tq tV2&eK4Ujm,_(6t^&z1:g+eu*+y/4Gp[:/_' );
define( 'NONCE_KEY',        'GO)2|^SyA%OENDVH9nZeb^dhJe,LVI]po#[|T$BiZ*yYcE/@]@%`8.M`ia6!``+2' );
define( 'AUTH_SALT',        '|B1HG2)Us#BwXxQ,@7j(b$-|5Skm`&!.-:O3+YQCI9>wRwe(Ed3+m9fX!O(X^X[F' );
define( 'SECURE_AUTH_SALT', 'OJNa/#dQW+[.r]eV$$6:*)jPsof|Q!qeKp#Ie]@;*Gx?`hz:33DT46n =B;|HhkV' );
define( 'LOGGED_IN_SALT',   'JZd=:g!kQc{4d#Oa=2rk0F,|5EnWY@s:,U#Vh2hw4BB)sJO7_sAs/lAU6LIE{?34' );
define( 'NONCE_SALT',       'TQ|Ki*xrlO]/7`6<#ZN5AYiym4d.6AO^AHUL3q(x1X4gD|Fh[WIlgGK W4:d:(O*' );

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
