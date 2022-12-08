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
define( 'AUTH_KEY',         'cn2wsTo6Nt8oIi=o8okvtQDsN_i[|vXx!YmCtcFw4oDn3;tAWWe(io58+4B)5A&Q' );
define( 'SECURE_AUTH_KEY',  '&6HSza3K6YWzZ&&M#^uPfAPJ|y:HV<q[C#Fc4;: )qZ&a[=-KH5gV,c2)c]&S!E:' );
define( 'LOGGED_IN_KEY',    '%,3@PD&Xn`(#4_v?C~AUuy$M5/R:!irJkBFe?A8^X)wLO+{G&zXD36&R3Dm23?kq' );
define( 'NONCE_KEY',        'g4-<9^WY>RT.MQi8q8vK2f_eFI>AGMXp[-G%#796p) L-TSN)3ldRVn;#py|9p+d' );
define( 'AUTH_SALT',        '-VIQX.3p!2SA>2??rPTQp)0@~cch6gm+Khc_;XL@NXbXD?IF08n/mD7ZiT5C9/.d' );
define( 'SECURE_AUTH_SALT', 'kZkDL2nhj`}/d{WJ)[jBz}Ap_vC:XHkX8&^_scZf-o!2RMdEZF]w#w2{O_?b)yF5' );
define( 'LOGGED_IN_SALT',   '-=XvzfiVXpG?kPES#-a^+T`xBCZ0ZJm6&*Z!^[TO(:7ioY,~GZl`7ESyRS2S,_,E' );
define( 'NONCE_SALT',       '>Nr>ZFO>5TV7&Q1KD&$_h4y<8Wq>0hy DbAc= Lxn>;%oYox%;?<|/YSRHLbE^DQ' );

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
