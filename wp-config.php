<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u529157219_GndmW' );

/** MySQL database username */
define( 'DB_USER', 'u529157219_6dXhP' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Utz1HtPWE9' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'j*=sRzj>f0>[6gyZsThF$`eKuO3rb$45:<U 6aY4Yt4Lqz)@< AbMZ%MzLBtO_2t' );
define( 'SECURE_AUTH_KEY',   'XdySQ.!<11NRhwPG&H-Ta#Xu+ZlsECAD}`~VAKj6,!g~k7@vPi_j~Zgb|eQ)e^Ej' );
define( 'LOGGED_IN_KEY',     'oC% ]OHrppzx&|JP*Ev4%]8MI}H(&a_R5BHR9 %>(cw]y!WwR4}K<j07*,kKU-7(' );
define( 'NONCE_KEY',         'rdfpXm]?vjyrCu3b&UAYcWTQX0yP)<%|feU)`WK*n@9DVK;[~K$i}0X B/,RHoP#' );
define( 'AUTH_SALT',         'P-jdb*PH0>k)=x2u~B!6H,Qpsk>d>FY-jzTW_Q!t|bLoVw/V_lL&kJ[u&w@3 !+I' );
define( 'SECURE_AUTH_SALT',  'c:0YE=2xM*:`v5;G[zL+5 i<F#Bv:*9sjT#t.p/yDXRNqRj+RNwg:m+D[$o.7tz3' );
define( 'LOGGED_IN_SALT',    'Ulsf60WinS-5YD6`0T5o6g9^Or/-bkYi{flEX@bUh8yPw]mtbD`Uf3MSF+XaGrwJ' );
define( 'NONCE_SALT',        ',Q#FSTruSVGl4QEr&/Q^X[<`q8)W7h 3y>uHW5::Oxdfaq}P{dwLMO*(p^fPo9.k' );
define( 'WP_CACHE_KEY_SALT', 'iI`G4UfCA@6e3:e%YY}AbB?i$GU>5!feMZ`19b#0.clVhG!Su@.2v/__))`[iCGm' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
