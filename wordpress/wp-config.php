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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '=cG*YO*|4UE9{e-AX&zD7So_e)[B C><WtyuF|pndDlGPq#vg)xZ~=oDQSHd5963');
define('SECURE_AUTH_KEY',  'wl`x&oQEZ&:A,*LzAO&YNyvyz2F3ZGq<EhmQ!3HbY2tASAs0^x!G6|fi]7VAY3`M');
define('LOGGED_IN_KEY',    '/{H9AR&P-bvv%it_#FAq&h)z*v9,S}bW%LNFm8UsrNZ45zSg_uIvv^|u3Onn ]tD');
define('NONCE_KEY',        'c=1VXa9II@glmH+2T^gJC+c2D9VQ}_$Hg0s)Ap~s1@Sco.0OfkqUFPJs(W>#rhqY');
define('AUTH_SALT',        ']]ZO&y,iwR5:%h#8o7p-?oJ)=Z>yr~.M)[Q9{DD4r&;<-.>h-Tc=rdYe1@GV-sM#');
define('SECURE_AUTH_SALT', '{3PVk2&uK_?`zFNhq}$wf{#{~3FB)FqSQj]/}Jc3srh:aG<GN$rg;edvQ5v<]U.+');
define('LOGGED_IN_SALT',   'R?e7P&.3J.w0EYp0c>Wo?JQ=<t#Ey|38)TC1nD}}I><RMY/;oEW6%{zK;mOQttb1');
define('NONCE_SALT',       'f;bdGZBgq_:2Un-RdNj^1dY6WwPUYaCCBB(>b+i:;XYrx51l9@3&J`MhseAEgHSf');

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
define('FS_METHOD', 'direct');
define('WP_MAX_MEMORY_LIMIT', '256M' );

switch ($domain = $_SERVER['SERVER_NAME']){
        case 'senvoigrohe.com.vn':
        case 'www.senvoigrohe.com.vn':
        case 'cdn.senvoigrohe.com.vn':
                define('DB_NAME', 'wp_senvoigrohe');
                define('DB_USER', 'senvoigrohe');
                define('DB_PASSWORD', 'uC6FJuWvS30i');
                break;
        case 'nuockhoangmylam.com':
        case 'www.nuockhoangmylam.com':
        case 'cdn.nuockhoangmylam.com':
                define('DB_NAME', 'wp_nuockhoangmylam');
                define('DB_USER', 'nuockhoangmylam');
                define('DB_PASSWORD', 'G58ANlN38I19');
                break;
        default:
		define('DB_NAME', 'wp');
                define('DB_USER', 'root');
                define('DB_PASSWORD', '');
		define('UPLOADS', 'uploads');
                break;
}

$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https' : 'http';
define('WP_HOME',"$proto://$domain" );
define('WP_SITEURL',"$proto://$domain");


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
