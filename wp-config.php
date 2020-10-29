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
define( 'DB_NAME', 'wp-plugins' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql123' );

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
define( 'AUTH_KEY',         'rKeH<@U,ZaWEn@:Ty[ukaXVVGTN`|coxCfemRlgv?vad2B+&?97^dhW*|YLZ@{lC' );
define( 'SECURE_AUTH_KEY',  'U_Njy%, (,C&.X&vL;%C[onL:l3]^.jN4 q`cM.pW`Y}#eh%pv;j<!m<e;v)T Fp' );
define( 'LOGGED_IN_KEY',    'b:L.{4w<yQ[~_lofiH+Ad7xc:(hEb13Z&EMK=!.!b9qDRi>e#_T:$.oL~M7m8f.L' );
define( 'NONCE_KEY',        'B4u9d{794x]7VBy!U(Lx_^5~ttt@TB;CO&,BryWLJ DMn|lw@iG/~-YH^XCvF|P0' );
define( 'AUTH_SALT',        'WWz|~cxp<*=T+PAJ*?|uN1dY$ eIwFIYaLiyobh@#<uJ7|:5CSYG4s9!=F#RBOOQ' );
define( 'SECURE_AUTH_SALT', 'WiQaC%BsB<?f%;emc$S|^7H#OS&d9Dh[Sy{Mf-oVU#n<Q9a>jw{bX6?o~oC1b~,6' );
define( 'LOGGED_IN_SALT',   'neCgR.~@V:^AW^cIz>Z[DPH Q53qvoi_C4!q2w%:]^D/oI=q4~au1^wr#62PkB)|' );
define( 'NONCE_SALT',       'qez/*?.#ti}~WAckU[ZSSYf t%kb`v]6;;+7hcn>%T)6QGHPzoj#eCXGPZAU:=P-' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
