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
define( 'DB_NAME', 'ClassicBicycle' );

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
define( 'AUTH_KEY',         '}V|D{Ud0=6wc_08ga7G?1Ld)O`* (fp}u_/q @@,XG~W(jBHvzViR4<e5uAT4]ED' );
define( 'SECURE_AUTH_KEY',  'r`eU2`WV<)_BO[+_v|tO8XBlO7I`q|k6R:o^)S*TG)Jti*<v5QpO<UX?DzesG!%o' );
define( 'LOGGED_IN_KEY',    '{3WTN@P^Xcwtu9nK5S2M5uT?P9!=*$,l45o6[w@J~wBm[ar*Q&R#OZDA1{p1*bWZ' );
define( 'NONCE_KEY',        'tr8l*v6+;%{_0F1k,g&o<E/dST[fFEuz~8RR$Kn:G:5!Rr|sVz4l/+oohFa`7ihu' );
define( 'AUTH_SALT',        '0~v=7E}%-(S[LK5*DL&Q<gqZ#QB2:63j4f mLL8&<f_fDrBObh88=$3{K/W]4-Xz' );
define( 'SECURE_AUTH_SALT', '{W_Eef&1BM?7=9K_90De(B>:/(kRYelJP`HkT-oMcg;Zsr,)woy_ui.Q4V}pqn>l' );
define( 'LOGGED_IN_SALT',   'd5JFE=b@H+@E(@Cb=qAh/a{7cQ7qF3 `Ax$Uk]`k}KSPPGj(7`K=x/7-C>c_G&}g' );
define( 'NONCE_SALT',       ' ^TiU `vA q:L7CKYJO[*,$w]zh^<A~F^/1 <P AIvA=cesjs!qV6Q~Zt^K~-wME' );

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
