<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'design');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         '/2]>=bI616Yq|b$]q,12$VE+O:PfQ(yp7C=AeElhb)VAZ9m;K%t1 @g]kAeaV0fl');
define('SECURE_AUTH_KEY',  'eW;>Ga#(9hI*YJ1v`6(K!I2Cz^-wrE4rmqz- K%!4k~sy#vSB>jzz/-@M9:^$/{ ');
define('LOGGED_IN_KEY',    '&)+T6Evf>h$6qhA[?ba{/88Q)9QC!u#4y.r70IG&4UahxDmt)WlnSL{kS 1G11VL');
define('NONCE_KEY',        'b+ )InPZ$<m4q&0z2 %vUO^h;L!EOI*2:ei^//IoA|$8BP@K&,t|J.%WZJ*NYo+1');
define('AUTH_SALT',        '`y<wA#:^-$AO|J}SI[e~`@7o6&v-M!imq|7l9(@Nc5I.&m5*9y/88|2VOKl+o)]Z');
define('SECURE_AUTH_SALT', 'loIjf^?? /ZsjB>FHtJET$G;|*B!PTtxr/ n:f-ox-ms?Y#c7>D>-F+*@+B7GHrE');
define('LOGGED_IN_SALT',   'w@yasSXxmRLG?8=-Of;B :{8!r.58V3]=z)*z>$OxVF-/$2g4)+-SPGjs=]tPAHl');
define('NONCE_SALT',       '$:2~@|+&[+Bby_|J%:v((>os*m2q||=R@<h^0{EUpU7?C4Oh+CJs|! a#1L1jqNN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
