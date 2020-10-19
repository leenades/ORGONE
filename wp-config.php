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
define( 'DB_NAME', 'orgone_db_' );

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
define( 'AUTH_KEY',         '2Kx2x7&{Y8U{6D^~{SvryV2bk>8$+VBl:wJCl3qW;LyPz>#PyhxhHt=P`QEfU6{=' );
define( 'SECURE_AUTH_KEY',  'P#PE k;eoCh8mQ}oCV/2+^a7Exo_EOpal>|+/&qBlT`hb!/xQ7OI8~EB2Ka8fo=R' );
define( 'LOGGED_IN_KEY',    'Y~lSqHaK}$W#?WSp[ISd)m.SoK!^ifN,:ej&Cr6XD|Q^mil}@3 3Y`;KZz#JZ4=u' );
define( 'NONCE_KEY',        '=HJAHWQWtR0;V!%3X^n4`Q*o7z~pES{q`~R_2*X7>>+wO~K%yhfWjP~HH&.Zl}Bd' );
define( 'AUTH_SALT',        '7g{:{U>GG,rQ@b+z*Q{$kXv2+YCQt(HbQa[uchu!0u:FyQg/D>rEOVq@>[(d8>qm' );
define( 'SECURE_AUTH_SALT', 'lWtC+z+r (KAX{3![N@;Vqs?eeWO9.s}x=y]tg;/;~UZ2H08@Tw%MK`{Qyb+|%8B' );
define( 'LOGGED_IN_SALT',   '}Ab4undiPOIK$#?`3RY<6Fb7F3g`obAf`qGoO0||(%F50eqFi0wDg4OEQ44}VjKt' );
define( 'NONCE_SALT',       'L]o3oo5OlYd|0q]>{+P48S_?91Sw&9b+:-$ad+;wyP^(u0|6KhUh>QPKD4Q~BLOC' );

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
