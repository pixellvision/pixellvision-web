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
define( 'DB_NAME', 'pixellvision' );

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
define( 'AUTH_KEY',         'QBXyM*KbUr`T0y%mp0B*[#=.KSB}#)=^CYvtGTcgT6@.g!@OV$]]8.$s4T8N9ldp' );
define( 'SECURE_AUTH_KEY',  'sv4p<lT`)eZmHCJ(A/(RM?#bi6Lt&?-.GthV$K??=+(^ 1>)_PUP*|S+B!-r)8>H' );
define( 'LOGGED_IN_KEY',    'f&{Lg;ohQO-_|@ o5WMIneaM7GeU_5tbn[epP,rAyzy_><#hbQHSc3JvE-bi_fyX' );
define( 'NONCE_KEY',        '*8~U|4KJ=#F3,-lw/a]!>!e5woWX-yLKk^mpUMRwd;NHiElxb3xM8XZ[KpvdxL*7' );
define( 'AUTH_SALT',        'oq#tEll$jVE%=>o@S~D WB;=g:+bHg3q:,}T2->7bbpCCRz$MeKpj2v|Oj?(}pg{' );
define( 'SECURE_AUTH_SALT', 'A%_3j5V}x1LuU>Kl2;bdm=|1h*RYy0tr9Ufbr<| QQd8Xc8pn?2)p[iS5ylUqL6L' );
define( 'LOGGED_IN_SALT',   '#[0gz!zEP;W1d5`pIiR!J}* -JU5{(uZo[S0nH8fa-4dS1OS_65b&i~hP~GquA-4' );
define( 'NONCE_SALT',       't@X,V9i2n%je.7&WZlbhTa2@m_1v1A(T*Xm5.q}ZNaDd3BtogqvzEDRE^=OLm$&L' );

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
