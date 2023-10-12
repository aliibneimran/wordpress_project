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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_theme' );

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
define( 'AUTH_KEY',         '?_6Ih9).a<6Yu9huABHy|Zfkrmp+3:hOgy^FEzJnmH]6Xue!I)Zw1Y6-! LBwiB:' );
define( 'SECURE_AUTH_KEY',  '.CcLwbPD6GC$P?p/T=77npi|RQZI93~h5:q1(Gg/DRQ!jXZ`{?YcbRMJxq@4rFH9' );
define( 'LOGGED_IN_KEY',    'QNeS(X<9Oyn[9T2[NRW&OX:4>5y|` @{P!U^a~`#J#Oo/,`@OOz~wdeo(PHi9;?J' );
define( 'NONCE_KEY',        ';lqLj|?+z!QJ;qcW*lOFJ7nGU9#?5RQ38|*#ZD^Y(6)W/I+x=N]xN3 g0?n*WO22' );
define( 'AUTH_SALT',        '9OdTz%TE>rUfb+g|bxj`O@U6TnE7I`Q@_*VW9BKT{E./RXAbt03X)_%yp!MNc$g0' );
define( 'SECURE_AUTH_SALT', 'PS1/TEV-&6fT`Lwdg]>e5m}8)L2[}=~i(zL7@,HU$QbG:M/lly@FCH]6U;7>^X0R' );
define( 'LOGGED_IN_SALT',   '%Z4fQV-#  e0yJCs>.?@KzR9abr<#m6`*Xn?+!8 j95~r*vPv2|G=(4^ux`Yf@se' );
define( 'NONCE_SALT',       '5B@1Zj}.tC=SlzbYHYV6$rdg6+),Qg$^u?xO;C{Nu0RP Gja<#rw>@==C<T$2_[6' );

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
