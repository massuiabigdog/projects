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
define('DB_NAME', 'projects');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         ';xF*L|&E)hJ+k>|y_]XAtd/V.lm?5DX/)|ehZr2s>AzwHQ2aSs=4+<N7re7} Jt9');
define('SECURE_AUTH_KEY',  'd/?x}oafQF6fTT N3F?jP^.M<:>Ur?]G_lo*!@JP+ax#MjiYxBB0+/32D[8Eud?U');
define('LOGGED_IN_KEY',    './Ue;~-sM{7$>T?BNE8 20G#/wN&IWgp8nth?WI-Sitf;Ny&`!uJ0t>*y.sY[V>m');
define('NONCE_KEY',        'O)#k%NeY!,jE|7`It1])+QPpk7:d|K.|E8BQd!}Z94[:!c{!v-p#47fVr8m}!&w6');
define('AUTH_SALT',        '1[[z/D~xECX-4|&aTKj_(gO)uRHnjKq/3Npb=.wR1oW=Mi+8n-P0gg,-ad`4]?pI');
define('SECURE_AUTH_SALT', 'YyTGTm{akOZ)V^*.3;H-h@EtClsZ _*|f_b,s{BP<Vdf?5496BY5HL$v JL1kj;>');
define('LOGGED_IN_SALT',   ' /VW/Rj|[OuFT)QXI%*c(,gw9kVL_JE=n`!r~m=pr>9s#%f;C^ebRH3?t p>fjDz');
define('NONCE_SALT',       'LRDl?F)_azeU*/Yh:fczDt}PSZ%FWlm%EeGdb@})-b@SmCJrvGq9jMm(=fC%z9dj');

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
