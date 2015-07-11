<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'foxfirekennel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ipn% 7`-3~Qq /@F,O/Yf#Q}0$>l!C5U2m.%h 4?&m<X01dxJ_3r>]bum<71<|v+');
define('SECURE_AUTH_KEY',  '+DGP4$Xao}]3)lAB  AdX_j[PiQJK>gR]F+<+d1PT|o7F(*!c^#%%3Tw8=7{Fa_x');
define('LOGGED_IN_KEY',    ')< o#B[pmhakY@>0Fp&sfG>Z_.|Z2W]$Hvae-o5+UjLgM&]=q|I&#@7f&cM4^-9u');
define('NONCE_KEY',        'Dz%5R7lle2n&P<pszCEOOeY(k(N>TF)3zK@)dMQqe`sHxo|_R!?9h|,@Lt-2g-O(');
define('AUTH_SALT',        'VuI3`9JTVF-H<QdKS8|p(s|>@5OB=s.43[i2sl>/]ki3jgPt-jK?[DS^D:&k35,1');
define('SECURE_AUTH_SALT', 'k[70reL}3j-a;5{t*~*,S(OX%+M/B^2D07KDJv$HWH<rh=thN<*-Ej/+o]]?|fqL');
define('LOGGED_IN_SALT',   'c6ZBy#aAH.hE3broD__0NEn#LyQ]fD@,Kd Op;e+Y5ke<Uw-I]QI+{fH8j:~Opo8');
define('NONCE_SALT',       '7+8AXz;#pAU#e< XU|2%c5l<B(yMBXc~;](jg7~|vb)+tK[ ;{+=jkifJ,OTXLiV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
