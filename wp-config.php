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

/// ** MySQL settings - You can get this info from your web host ** //
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'valer762_mcc_wp');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'valer762_mcccece ');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'JyfF,trKbgHm');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z_,xZfJn31w)VUETYm=?U]`4 %H&N^@r>#+S DLr,5iY:EP:UaXh4@-:;zuQ0i}X');
define('SECURE_AUTH_KEY',  '7w^PcYae[Ef?cP8j#w(PI}<qAlX P>R5u2|7e}Ur8E>kAPN~&[6e%^pEGWsc3T;}');
define('LOGGED_IN_KEY',    '$_/ Uw DShEg*i-ghtrL4.(?wrgHA%?FTnN|eQ,r&+7Y9M0-[kkRPE%jZjO]Uxc{');
define('NONCE_KEY',        'nH,r-F+>4g,1pFFh0KxhB*c+/a?tdW0xLr0Y!{J$ PqsS+LxK55UZ^)f 4)M<:Zy');
define('AUTH_SALT',        '|nn#B[ajal=w(uZ$qMGDf9Rn[-MG@$RID+sf*p2asF82+E}gv=:CfD1I{`$s0TT|');
define('SECURE_AUTH_SALT', '[NyB~>mKdW NdBvW8wB%HpcUU=?-5!jP;&PzV<! fmRvl>}w~38Wz+Yz2TJdI-~&');
define('LOGGED_IN_SALT',   'gZ5l(Hbw[6D0)_Y:J++ov# N_1v|?Gu/cNZ09ad#4Fd]ZY*0$x:/tGBn^=;Bg,}`');
define('NONCE_SALT',       ')!r4&2AArGy96_s5<)dND$|gfTgh-,Ey]i(h]!:i#dz^Zn6]3/iI=M{k69kA1!NP');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
