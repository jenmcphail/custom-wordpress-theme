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
define('DB_NAME', 'popperscDB9f4z1');

/** MySQL database username */
define('DB_USER', 'popperscDB9f4z1');

/** MySQL database password */
define('DB_PASSWORD', 'e6vyvQN8N8');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3uP+{Xm2EAm+Q$>UQf<7u,Qf<7jfup~LW;95e~HDO#1:Wx91SmitLDP#2;Wx96H');
define('SECURE_AUTH_KEY',  's@Gg[!Cyv^UQc{7rnyMIU<,jfrEAMrnzNJU>,0kgrJUN,0>grjBMFLEP<2]iumD');
define('LOGGED_IN_KEY',    'Cs_Zld5GCw!~RdZ!84o-w]HDl#~Hha_D5d~w9aS-5:WwNFgY!B4c@v7Y!@>gYkBNF');
define('NONCE_KEY',        'Y$>RJV}84ozvJVR|0}groBNJ@>,<3jumEPI*{.bmf6IAy.+TeX^{,bnf7IBy,$Uf');
define('AUTH_SALT',        ',XyA7I^{<Qnj{IEm<^IjbSt51Ox#_Khd#HplwOaW[51Lm;#6pmxPHS]9i+D9L_;]');
define('SECURE_AUTH_SALT', '+x2Ht_Mb<6f{T2Lt.*ZwCOKs:VSd5GCw_~KV:84Op1l#OKh]#Dlh~GDa_~[ZVh51O');
define('LOGGED_IN_SALT',   '$T{HlOW9dHK:S<;eHP;W9D#LCVRg8KJZ0C8g!9KGp~Vl:C9hwOd|!:k-r^MJY^n$');
define('NONCE_SALT',       'Z4gr5GCl|SdZ!CkhsKVR-4dZkQcY^Bjfr7UQy3brnQIr{JVR,4}YkBNJr}UQc3FB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
