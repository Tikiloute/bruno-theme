<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'bruno' );

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
define( 'AUTH_KEY',         '4P3P:zQ}_K]Q[,m_)9+8:$^wDZ(_vm1d%dMe hL5Eb@Kg0(8A0>(SRXGM-=-RJ{0' );
define( 'SECURE_AUTH_KEY',  'Q4/s<aj1K{0~Ub[JxLqk}t)4E0EbJ0fU,m{(5d;X^9&(`#QfO@S0?-97]dZ7v<N/' );
define( 'LOGGED_IN_KEY',    '1X;tBeS$?QBL=|9*wjobZTu4*x{2+AT`*76J,17~?Tv>LrtGD!?n&.&h$$Wq}B,y' );
define( 'NONCE_KEY',        '-ia1#L-6#U><8ytoVxlvx Y9Qi@y nt8iGK0t{B9[-DlXO6Ix>oeqls_yw]Z> {!' );
define( 'AUTH_SALT',        '%nl,)n).insy;Lx@->^ri9:O! 3Qqw(xD<dNO[lO*CPBhXEYS]Z<L/|H)#*/SV]C' );
define( 'SECURE_AUTH_SALT', '1<1dNm)3UjKDI^0XO!I2e1{9?t Yy9v5W9@3jh]=iE@;l2c1|RqO?6[SA4jgkb<c' );
define( 'LOGGED_IN_SALT',   'XxpG]&*[Kqvsvs|20Js>+Kq1^r^Svhlbtd2AOPNbb?PW95wdz,{u|wKOHw:R-k2z' );
define( 'NONCE_SALT',       '>]d4UuKF*qjH1:I$[);:i9p.V] h]1@[yMq~D`q&)W#8u7R{-1Mb.].]2|jPPYUq' );

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
$table_prefix = 'wp_00002';

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
