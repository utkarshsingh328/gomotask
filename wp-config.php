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
define( 'DB_NAME', 'gomo' );

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
define( 'AUTH_KEY',         'c0%}1OAd-HA-4}qs7Pw91JTrI<Ov1-XQuO%w|U)ymUxkXC5=|shmjf#t8]]Ka-Ng' );
define( 'SECURE_AUTH_KEY',  '[9M58aRq)}{AwWPUc!LjBw u*?Khq4<}yxnA 2Do:FRA3yiC1FPTYXe}2Kz^J;[7' );
define( 'LOGGED_IN_KEY',    ']/kF0HH5k+]<MyCK<5y4p->lFn(1/9bw^3zPKVUwwc-VqBmWx}%<p> W&dl5)1^1' );
define( 'NONCE_KEY',        'u><r-XoCEu/2Z~Q?C|@*JAUOzfmnF;xS3SSOb9RVH9dr!e@SPL1GcyWvCK)rYN!F' );
define( 'AUTH_SALT',        '6>sz,($k-<tj&|8 EL:}DO1#&rDg+)gxA7$ILt[Sg@TA]n=/d&&@;$Q]ocP:atfC' );
define( 'SECURE_AUTH_SALT', '@@kqP<;_JNTYl ;~(D /K:^5*`|-t)*z 67@oS<;7D%LqJF8J9-ok)mKgFZ.>2kP' );
define( 'LOGGED_IN_SALT',   'qlu?!P!]7LpR$N75IjN(lA2W{A/Yh0~0_&Zq@tvNar|V&r#c>6v#t|HX1^y|X o/' );
define( 'NONCE_SALT',       'm=jgwph7ZGz<c?0yXBd +J2>b|8zoc8RDV3+MEnj.hdbs?=Y;~Nptv5<_Pp*-;M/' );

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
