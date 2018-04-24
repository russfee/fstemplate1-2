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
define('DB_NAME', 'fstemplate1-2');

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
define('AUTH_KEY',         't+8FDr614V<.]8 &Z,DKZzw]D(zeq_kVg3(OIP%-#^+gjWiaW+X%~BIN<Q+M}<=n');
define('SECURE_AUTH_KEY',  'G.SFDt>vFDc#)4G%o29kJ2IL/i5!$=c^+:EvA8 sXw Rs Hlqg@z9T8*p*j/T;oB');
define('LOGGED_IN_KEY',    'cJ#aJwyvvXm*LH&nKzIOjW#|FO/LH@E?:{aeXDnTbp6?ro)nG!IyI,65%N1fZo[0');
define('NONCE_KEY',        'UsEbR#_He(3&)p^EQ}gF7*I)kVfc>7OE5s1d5H@:=A6R)|f^;_UkX^G3xXMt^SyA');
define('AUTH_SALT',        'DzrOwZ>-DBsY@7;1*VChB5XCCz^h_$4z[xVYuu,[py?/ti*3mR`fz,r? Pj6li/s');
define('SECURE_AUTH_SALT', '89*h]3SPr)N9_Y;U1~=+&aTI#&W.ew^:yzMYR-R5_nxaH?Ih#kKGz0[mb6zml_Ab');
define('LOGGED_IN_SALT',   '8ZGb^C}w98jBJmai%#v|4<fY|.EDC(G.{MdPm!azy*QPZ:neJ~G(E4sng}KiZyu@');
define('NONCE_SALT',       ';f&:;jG=0lF=Fz Kl0n0l),EXg*0X(eR9xo!K!Q0Q|/*{vy_ygOp7dU/JpsIC*J)');

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
