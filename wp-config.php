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
define( 'DB_NAME', 'wordpress02' );

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
define( 'AUTH_KEY',         'vzpkFznGg`gAc/l^mM7@.Us_u><v<7ldy67y,LS$_oMSOT7VRI<MFIdj%i5aDG}z' );
define( 'SECURE_AUTH_KEY',  'u]$$NcYj6r(UOQ _GC=DP;PBZQ,LY:=,yFn$xqB{uLG5qJ$-Ea1g)up!MU18TchA' );
define( 'LOGGED_IN_KEY',    'oy!,g@8=$|PRVz}=N,C+vXE3.DSIc/U_9&p}M[cyZ80FZD`:]Q$n:8oOo&Evt 1Q' );
define( 'NONCE_KEY',        '}V`u0H23(.;yr4xeQ K*~K*%v[z_4T m_D0*)+yd{lWTUDLfy^UJ+b4zQdG!-%@V' );
define( 'AUTH_SALT',        'rF:,]dn97QOx @$?U. .?So)_UT&pA&Twh.u.5t]v_,%0)o6fpd@lBa(Xi?,-2c/' );
define( 'SECURE_AUTH_SALT', 'F6cINU&@GjJ[7~tldSZCLYtq>i^kc4txF-cK5V rpo8dv>}<`#,]<v}`YbW}sq#=' );
define( 'LOGGED_IN_SALT',   'JoDzG`5RAQfJ)QG$=7sg}Y;aWpel~XE$8CL|$MoY#K{9d%q#v~(2b5+=}<>YBrtm' );
define( 'NONCE_SALT',       'XJTl?zke8bDiYR>5gS/Vn^,gb%i[uGeywE8~D)0[.Afqo.Fl`w0fP&J2F]?^vZ+G' );

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
