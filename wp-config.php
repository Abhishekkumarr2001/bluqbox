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
define( 'DB_NAME', 'u744806081_bluqbox' );

/** MySQL database username */
define( 'DB_USER', 'u744806081_bluqbox' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bluqbox@123#' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'E]KEuX<.Z)WTVNOgP*Mi!EyF}e^oZL6*L`(fdQS53N]WeF&#%C1I2%]h#dSaF`Ps' );
define( 'SECURE_AUTH_KEY',  ',tVbna??cTE;UnHTsQq]m#/A+c2Y<6$Z0WJReCY6n?An}k~M+B8ztOBppY1:pYs7' );
define( 'LOGGED_IN_KEY',    '7#q]KyS8)kwr>WF>&z`6s.0|=?/J{@lT.|Dthpoo3M`6zrKg%U@BOL_N-;v7mA[E' );
define( 'NONCE_KEY',        '=/2D7Pdkn%B*D:pF.~DZ+ nDtVD]PD]wrq=dh&>Wy9SysGhQY-Lv8^TBEm~LZ3_o' );
define( 'AUTH_SALT',        'L]EnS<~kvNJ@4ykD^Z};E8x?M6.n-,uw#&-x3uw)ArGGG+!4a^0xZPF}}u,aYhng' );
define( 'SECURE_AUTH_SALT', 'r#@hi|%I=,UCL}Z@9d7iR*h_t }9(!|b`{mkQM>J^BR}i?8#Y!T`oqkwWm.|7_Hu' );
define( 'LOGGED_IN_SALT',   ')<i-?D?]JLmR?PTn:rqd}udb7im%P9W3BfKMYq{?w[oge0fdA-nOWn0`iITm9OnY' );
define( 'NONCE_SALT',       '`HpcPUTC!=p/w]YB>!d{t=RZ^ MDC6WGS.Pkk+k:QL#V/w}I&IL{[jqN*v/_|ZEa' );

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
