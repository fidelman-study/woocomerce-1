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
define('DB_NAME', 'woocomerce-1');

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
define('AUTH_KEY',         'sUcKde~573F.e8ckz_q(X^Th[y8#9$F!sQRcu)x`~p;*DCa#FeNMB)tPvq d},iv');
define('SECURE_AUTH_KEY',  '~I}qy[7iIvtUdxQ>o4Y?Fc5juCCDS0&0b@H8 HQ{isa$)H*Ga<jqqs_8~:wzuKnX');
define('LOGGED_IN_KEY',    'r%}Cd|QZ}dyN<&h({%);@sF#y!-7T}{O6/]A=y&[?u:;?+o{-BAH;YC@:I Isa7T');
define('NONCE_KEY',        '`Ee%|.@~iD7oqr*EJ31(W:[CZpX1x:2PxhgA0>^mL8=9fitfxMfx2Xi]}WutSn!b');
define('AUTH_SALT',        'z<@Ryh.:bVR+)y$-2svC1cUXN}1&aISc5S&#@2(p:Uh[@URaO(6a!-r@>S0pBe_I');
define('SECURE_AUTH_SALT', '?OKfJl-P@3vKT|d;xAkijZ?G?zcJ|xg@gt_Vd7$pu4{q)go;}r* 4V)X{m%C.(Yp');
define('LOGGED_IN_SALT',   '$3^-$L;^8Y=]9Bz(j9De!`tW^_)WYp-{T202nsYrk7JI Rp&i};%jh)oIJUH/A-W');
define('NONCE_SALT',       '=6`/CFAJx:rp{}$aov-<!cJjW8H hSc=F0)#G@n`tF/5|DAzdG#)[tS=~5.iP{X;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wc1_';

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
