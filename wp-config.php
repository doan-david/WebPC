<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbanhang' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nqB]p6xe!FSlVA$8z$gYeSdf6_5!n`#jNq6A8+h+)G34~Q!qsfuRBF;NoreO*+vJ' );
define( 'SECURE_AUTH_KEY',  ':eL/+`$wZSd8hyTh~Hl&Kl|_V$=k>;{Oh.cUHph|K_0;yAt$L:<Fjs,_yN8|sZ_5' );
define( 'LOGGED_IN_KEY',    'J=Q9/qo;5p($ 7)7No&6)tl(o|rZsr6h})Vo7!yL*u,~<[uyOaes`W7!W-K{EpFH' );
define( 'NONCE_KEY',        'o^/n$dZ8vyf(N`1)nb+*H7zW?SX%.0#..SbJwbzgLqjnds].oSl~o%DXP(!O;s8/' );
define( 'AUTH_SALT',        'Lhi%MiXd-.wHN6>qSruOj]RJjha!{YfzBUMFUGDhW^*V~N+5!*gUnyz`$No+^yJ}' );
define( 'SECURE_AUTH_SALT', 'Ug(Q@43 s|Iy8Fsu(rS,uTxx?xWcN%O_@w}f,*y#Xob[ (k[zosDi7aj.,0/@1~n' );
define( 'LOGGED_IN_SALT',   '[g8|c&8c!nI1UTXq[! Nh+[%h#7!>u[;ij$.Ku0`YQ~~y1=0D]nBNxc78#jC%GzS' );
define( 'NONCE_SALT',       'XiGu:nW0w[?n~2S<=A2-bw&Z/Mte9Vg;k1@l;8i0RKr~JUFP}=?ciHs_Zr[3SVz7' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
