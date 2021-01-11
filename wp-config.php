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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/fmAhN uF~wx)aggtuD;&ZjEV%FZ+I2&AI3=uqlfZu{$<5kg?+C5cM[!GLDL.LHV' );
define( 'SECURE_AUTH_KEY',  'u8eX<qWO=i=[TJE3g,tsb_Qp35nM#ThhbJ@OW7I{pfI{Z| o($dt (|9q?g}.E{i' );
define( 'LOGGED_IN_KEY',    't]QoH;yo`ua`VLn@=]1^Y4dgC @{*#{E-sJ&$/tL4&YdouV$Q^poIIiB)REA]D P' );
define( 'NONCE_KEY',        'Z%*5~aOHr]6Y@e*C`Z/RI8q3g4XXpV;m#iTK&kpt#FQ$R*8t}idEa8([3v&Q%R>X' );
define( 'AUTH_SALT',        'V9{AM:<Lcwm9A+{He@idq2jRda4:%Sf`A8}EBAL>bt21E2PE7v5BsG{r3dXySOj~' );
define( 'SECURE_AUTH_SALT', ')0}!*2gHLHt}^OUC<ZAb|chNWs|*Nj54CU@@36IHpZHTGfzt|6%#%2piRl:PHU=p' );
define( 'LOGGED_IN_SALT',   '] 7lFaql<61jj$$:[&q a+1A<n9(-:c|CDbS[8#5Q$NfNd$*H1SMggTxFURx|AcZ' );
define( 'NONCE_SALT',       'Mjaz&%c+emKhN>c9SqIp&S4qVN{9Hn?MPb$(S60F;0|{]~K#+`nWv$w0U^zVJ%Kr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
