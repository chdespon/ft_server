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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** create the folders for uploads. */
define( 'UPLOADS', 'wp-content/uploads');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MdU]S>={?!t+~IP*Ny<x2I0HmHhPQy?>YqHf/;8%~m]Z=`C+W1]He_2fwm<Pxm|]' );
define( 'SECURE_AUTH_KEY',  '^6w#Kfo@mtTjBH]exLRI+Sox@?l@?29>[U=@C+nUl$R3?{r#PeDD{=W6{az(Ahq)' );
define( 'LOGGED_IN_KEY',    'AD}K4K73YQMtrC,&G7QY^3wb->X> 2`/+-qw{8d7`5C5k#md|]j$H3VTfel~r6i,' );
define( 'NONCE_KEY',        'kVqyI-^#QTGg e|,h{t_wey@ope}FIzCk0a^y`ltO2C { xYo}9=Aa|NH%h{OI o' );
define( 'AUTH_SALT',        'hmlZ+(e*|$2sNk[_j9Esla>Pt(?MWmQ=lD[C4 :vO/<&Oe3oU-8.hjLb<.tbf=]$' );
define( 'SECURE_AUTH_SALT', '0.N|(cm@aZd?=ZMftfZ,HAX)FA^Tf{dXH2 nQ aAJQ,0bNCq~VQF|zh=[ak 3:3_' );
define( 'LOGGED_IN_SALT',   '.=cQNtnOd9Y-NAK<W@;#D*^G@?.H2bhCRlSDe/nNLqmfC1P>y%`B`FOj,2oh]* w' );
define( 'NONCE_SALT',       'lPR5TA#AEiA9o#kByOJ(VpCa^Lp1K3b^CZm_6oN?jUeH/FU0uon!%SzE@ABTDX]1' );

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
