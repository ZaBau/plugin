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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'auoshop' );

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
define( 'AUTH_KEY',         'n4IIcg|SJ6^FX{ClUNfNqaQn^L{</JhP<C4N~->*~3>2VyA{p]c0R*w;Lms.cSt!' );
define( 'SECURE_AUTH_KEY',  '*|@%jB?w1(Z+ZAW4<EVXdEP09#~c~8s)?}d(>a3QIdfwwFQbq3}BxpF&-A=.-${5' );
define( 'LOGGED_IN_KEY',    'FwU|5wvh=<^6w lo7zgEG:]Vohzqb9W([Kcsf+.<(loz1pk,Aw2:yT}_E5)DZ$1)' );
define( 'NONCE_KEY',        'bnV1>a!|~5QcbJmjO-ggn5/k{3_FwpPwPo@>E?fH!=Fdun7J:auGhtd&7M?*0E7:' );
define( 'AUTH_SALT',        '4OV+(C5E?dq e&9MKhm?,T:-s;GZ3i+d{&o3pp}fGXWI1N1a |o}:N`!|l[ (/gu' );
define( 'SECURE_AUTH_SALT', '$lR/Y=x.A3>$bJL.T]mThBl$oyOw6qU9A+XsRxt?weU&wg/{Xp.u_:vjH*MuhI|Y' );
define( 'LOGGED_IN_SALT',   '5)*,[a^f[{NlV;.m~2$6-J{I@&qJgv!EqUQ2u~O0p)Z#nsg*KZ$^.mE+[:58jVlK' );
define( 'NONCE_SALT',       '2D_p%QLTJEIP=BAFQd4i_jK%@Gc5>^ kLT}VzjTlRf2x/5-brFU*WR*_9@wdk/$m' );

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
