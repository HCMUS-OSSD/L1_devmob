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
define('DB_NAME', 'huynhduy');

/** MySQL database username */
define('DB_USER', 'huynhduy');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D^BM[V<k+G.[iF%||&09V}ZXtmTqDBp2 =)9m9@sFk$e8vE/7s(1Lcl(qjVf20Z<');
define('SECURE_AUTH_KEY',  '*]v:,#A%YyC)F.Xv G,E19#|33Hq!1IZeQK$8RF%:2HK=4ox?dSA8=q{B{J>I!wN');
define('LOGGED_IN_KEY',    '[gY5RJGmQ0EfNP*5J2YO{}BH5<t,KlD[Vq066}q9OSaHLQwP1wj+^087<#vmMWiU');
define('NONCE_KEY',        '%S*O9_?dHfGB3mCvX4|+9I(WFG`?f0q=gTO`jpZe?h2s@.h}BJJY DB?$sh$Gzfw');
define('AUTH_SALT',        '4bCdndG~_7^.K39Sn&p>AI8!lmNH)]YA(YGw{p<37*9>bJxn&R!k&R#o}zx-!Y6j');
define('SECURE_AUTH_SALT', '4^:f5lgOADOx]-gISAUk):W%Rh~JjBahC$?hc%#%2u{k/UtYEm`!%WWMO!;^ix){');
define('LOGGED_IN_SALT',   'Z_}z*K2K1I^%yzGp!{E044(7+6.R!*6db4&w$O=*sXEYcY8xO^NeZ#Gj2/*oBCR`');
define('NONCE_SALT',       '7UDktfATKn+g:+ooU]^I]2JUz8^k_01o8[Xj;xEn^h}=5/#)O[WDLqR!TQ.+ZP3n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hd_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
