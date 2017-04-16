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
define('DB_NAME', 'u368686260_data');

/** MySQL database username */
define('DB_USER', 'u368686260_user');

/** MySQL database password */
define('DB_PASSWORD', 'xuanhuy');

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
define('AUTH_KEY',         'fpeeDS}vO1xOVNew|QKLfz{i{0_,,7|Y)R[>wv)Mcy!8RGNi-Y%)7izt7qNB?zL,');
define('SECURE_AUTH_KEY',  'z5kRsVm+r9HpZ*ix|.gk?1HHI(7a k:_MQc|ZBAR5|!0qnHL@Y+2%mdb<4?2h?|y');
define('LOGGED_IN_KEY',    '0Qm2!sP=wZYw%pFpPh0=v)0=8DV0a<)+#]6t|eT1YHp>q`mQh8drHQ$aGb+>Y%i_');
define('NONCE_KEY',        '2iCI?|)!Umev?{P>>nXbt4KR-AFX-vc#5w&)MXeav;1{+dih?M*+]@QX ~)/|z@W');
define('AUTH_SALT',        'hPk8kc!QH.HB9H1d;RU<[)c)wWGBi}y9r7Mz*buF4cAr]l5nZ!bua/4|/,P+d0n[');
define('SECURE_AUTH_SALT', '~?>eG_RfA)`OGe:,?@`3k!m+S_-(j>  p4&L@J%)o<$.m;T1#&)5-OSt,(K$w?oX');
define('LOGGED_IN_SALT',   ';/UM#k(|h%He{k5zMvULks?_fM%~)gU!v/OB^E3_AknREQ~.`,! o/O;fWJ)#,T.');
define('NONCE_SALT',       'p6%CTy+d}8zG?&kn1*ko nm:VE4,&XgE(+Us1WY+.kL4$AAPGi D-+2F9}j5qKsF');

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
