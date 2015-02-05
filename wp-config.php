<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp_xtz_data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '$tg^91Nm%w}L?V/?n*@P7cYv)m5FN9%RwCT{Dc3A|9WB1uvv[A-~Y8TB!6?;m(h;');
define('SECURE_AUTH_KEY',  'aj:QQLf$e2 iVF:n: A}U.[?zW+/]anw]lUB^wyPAZ>9bn-`;^P|ev&#.YDaR2-;');
define('LOGGED_IN_KEY',    'ppqw[AhP7KL`hA!As/WO$5 vrYjxF)>u?g?I%,&hEEvF5@hnG90Z&xvS<qLn{/*q');
define('NONCE_KEY',        'vdtpRqa-/!p`*5a%:Y:ev|OJu|BD^AlfcIYaK469i,8Ehg*9 Lj-_!cl@E:&?vGl');
define('AUTH_SALT',        '8bVfkihA$)D1j[g=|MsC|jk3+-,X|ds;8kY`4zh-,-k=U^mDmBPFs@voJUZF4U+Q');
define('SECURE_AUTH_SALT', 'q  cG:%ndw|]5ayAL4&c>R*SdJ@Eq-40Un_g(]M?_43*:lSte~hL&I-zwjnLhS5c');
define('LOGGED_IN_SALT',   'f+]S+NMJ-9Q!*P(0x/)K5&eZDwhs#L,n)#PesBIk?mnQ`?]]A8Qo2&X}~/$$F=oS');
define('NONCE_SALT',       'qGu}laeK)b45E|iHe}:8.@WK0f0`>VEVn_|9e)|ixw!^i?r]$c*+SU+{Y+CR-y/g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xtz_';

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
