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
define( 'DB_NAME', 'webhanger' );

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
define( 'AUTH_KEY',         ';sm{;6R:YO3zXW-Sk>ga%CtJCBJf-hIP59a}%yFrMq[5{,&JrJ 83+j (&8paoko' );
define( 'SECURE_AUTH_KEY',  'e**8x+gTeAhuPP5XrXpo;kWBZs?u;ME`q~lD81a?woD:c!Hl=|Eg03}Udk0z<>Qh' );
define( 'LOGGED_IN_KEY',    '+ou[-F%fhhK!avL?N00u$]LP&Zi+N_oDtlX2,:HuF]O@wX!r%82-1Ve0nse+:E,k' );
define( 'NONCE_KEY',        '%)=~<7L4@DhJ&90/kK</y4;OUZm{t))uq 1D:v*xxLeJtc6pDmf0+@Q0L!Q@nd9K' );
define( 'AUTH_SALT',        'Ow>m6+uP+eoO)/H~[URr1&}xi0j<8q%r4(+^Y?JVC2XHm^?DS_3;7vxMD-*9um,g' );
define( 'SECURE_AUTH_SALT', '0l%gXCLJ+eV:deyndXr!]94?KiZ>+*E^)Xz(/uFYF3&l25 %A6l-WY+8-n0S#Gth' );
define( 'LOGGED_IN_SALT',   '|+_xP{M5#KvT^F3:en(&#_Q6S<zDz{E)H+NY_&nn_Rbx4`;P#AB6:mI.#bSfb+Qt' );
define( 'NONCE_SALT',       'W}rM#S+TXLWdS&>dxaU]&o)&d1L?a`on90lPahcfmQ@]!UI]U0:_9+7&BSe[OaJ3' );

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
