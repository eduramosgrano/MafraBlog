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
define('DB_NAME', 'AndreMafra');

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
define('AUTH_KEY',         'd)Xlf*L$W8* ^yvfxll}Ic(?/:Ilw3L4|@,ytxlLHVtuWhMPQNzQ Tff8z6COwf1');
define('SECURE_AUTH_KEY',  '@(y:n(1C|GqM5#g,/BHu/r_eK6LD7e;wa0{LXF/5)$Tdf~6c5|PCdV[Q.:uZk92B');
define('LOGGED_IN_KEY',    '-12<#I+|{TdIzCGHgecEPmD61LRk5f?c,W.W43)irxvbtF$All6.#O}_0[tnhCq+');
define('NONCE_KEY',        'oPOt~z-n%57]S4I7HY*+A|i&C}:5:CTAivwgfOzyiA7bQ8f]9#bCr~ShpWF{12^1');
define('AUTH_SALT',        '24*/2QxyVipG7z&OL@bq[=ln#[UhTJ*a>y/1Kb[V:>hLR.9AM3,* Y6Q!iAsVa1d');
define('SECURE_AUTH_SALT', '6~ZolMbQ^cf?`;U)0g6k``1IZIwRLxE6s]/%A$i(KUna#2,3j;YdP*t`(B~94:}l');
define('LOGGED_IN_SALT',   'MD$+:ip6/W1.P5$kHa4ag&4II8X.E9oO7kQS<C9?RQLQ+&[mgoylCR cnA7VLX`m');
define('NONCE_SALT',       'xbzi%SxS?]S?iFBkI*caz2Qu6Kh9p!P74*#ME9=w&nVfD9,IAdA)>K`g!23RoFE7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'amb_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
