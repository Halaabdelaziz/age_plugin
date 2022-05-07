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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task_db' );

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
define( 'AUTH_KEY',         'cn[?rFX{$>FbYvfLqaHyu=[wd_0cI8_ls6)%pPEh.G tKI1DhOaD`ZSbl -%>l^{' );
define( 'SECURE_AUTH_KEY',  '|uy h=TXx]Z!@u!.7TJe|3DY+oJyhxd.0Jy!9pIrf.@7<kJqTX~jP2#EBwKg6/sT' );
define( 'LOGGED_IN_KEY',    '_$(Y>F0D05]=KX%<1sXsNAfo;sO#a(-!)`F8Idb5G|RT/>duXFm}5DxrM~k(:0]p' );
define( 'NONCE_KEY',        'L05E&H{Z2UyK%x*-G}`hIT-:i7{hvD~^ZjIuglzozuhuoJ8!A+G+^jKOZaBa=<4w' );
define( 'AUTH_SALT',        '^Q=C`7I}fS5J7WA;~(,#|dt4%SH=J#gU)yUDBkS_5avPu&,#Fg7.T5Ob]$;._Ew3' );
define( 'SECURE_AUTH_SALT', 'qYuSYm#YWr&nmj#rt.fzx}z;.@+GCjQAIEn/Z7<!$1Jb,I92:t{f8.7 ?d}[2h+m' );
define( 'LOGGED_IN_SALT',   '`;~t@>V!F5Y+%2<uJ~wvY?-+X/)Q@ZaVibm)ba0%z(hUTJ[fT3t_-nBDqu=:J>?X' );
define( 'NONCE_SALT',       '}I-nN429Rxs1XL&ewnh,A|lXipx9w{)*cX+4Bl)$4?]o^cC>NM/<(<oQ{<.6#EK]' );

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
