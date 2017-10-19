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
define('DB_NAME', 'haplos_db');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'JGjcV.&]8G]1)kS|v=&f6EEYFRS<Pm=/<)O7|:b*O]j?9n.Ose(Vv9bK9Gr1b/{h');
define('SECURE_AUTH_KEY',  'feirH(0@1yIOnhu~];XV_xvefWk(zh jmzrO)4$KYs+,4-_^9UhRGGPC)%Yu-z}R');
define('LOGGED_IN_KEY',    'De&`()bWQl9{$u=N~b S}AGP;|ih[6M8Z&0cp0U-?UQy$ONSx`WKIONISgjRtoW<');
define('NONCE_KEY',        'NMU*;%|!!xZto??kIIzfb=HNW<NEVgqOBM[g#MpU3,j-ju- {L)<%r{As_N*W34E');
define('AUTH_SALT',        'a#(AzSGHbv6%i}a&/qiEvw<=wcwfhfS@=M=IODkvC$r)m>jLsl!69m]giRHf#({~');
define('SECURE_AUTH_SALT', 'eF8GWXIlq;zUSn$uq&HCqv!8Q[HdwlJ$J:;phK~RZejeI113gwfRnQ_V6O}sNg0P');
define('LOGGED_IN_SALT',   '[-cH#}K6JsSAt&SpjWb]xb~jappF$0ah~3Ud)%EC.35Cg:#rF=N_U|9PrsDFYK{1');
define('NONCE_SALT',       '8oSo&Vnguy)@K~V]]L)|OUVJnrEOg9Xs@lx&4K~}MzZ2i(g:VgfA(Noq_F-OUP6p');

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
