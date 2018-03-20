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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'fqX@`g4.SD`x&_Uc/7^&CZKdF#bmP$,TUjoARBu@w4JZM`o!t%+(Vh5X|}RI@coS');
define('SECURE_AUTH_KEY',  'T;GpU}nzn@ nEL=P 2EM+e7cFD#JKljnR2ba%{4z[!.CG$Qq}`1I~E)&-cXzQiU+');
define('LOGGED_IN_KEY',    '$Z2y/ 9#4S%_Ow)7@&8WTOkza/&t`d0@|~en$r.;}oBq$RWsnDo.46x%-f]~[?/.');
define('NONCE_KEY',        'o*{|$)Ype-$_eRZ0_YbpscIfc@trb8eb3-E?K~kW:)0PQDf4mHto|L%!n#YNi} h');
define('AUTH_SALT',        'lQZX/=j{eT@f9=:YsZhy`McdZW3*Dvt[gCAsNrL5>f12A`1$uEZ9_0%cAlFU|Mxy');
define('SECURE_AUTH_SALT', 'ls(jJ=[Cr:vxa6+GqS4dze#iJtWLg8Ez}<9S%|2uKh,g_;U(et#0F%x:ysu]zfaM');
define('LOGGED_IN_SALT',   '.x:(Bmi>(Yk8=S0GFsrVO95::zvde!ATFjql5sI6sh__v%4r>Q:x0m}U_._j=h89');
define('NONCE_SALT',       'djOIxD.VlP:3zM3BeotSn[SeS6u%;/F=A92xcPg#IpCQMawEXwC48I0.0vAtFXlW');

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

