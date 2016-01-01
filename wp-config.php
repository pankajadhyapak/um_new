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
define('DB_NAME', 'um5');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '4h2hC-&OI#=}U:9`yR<{7vc6;dVLZy+^-LDg$!qJu1RHqQYt!HPt3RDT>A 6ab*W');
define('SECURE_AUTH_KEY',  'DCrqS<Rs(iC}A|XLw=K2mrx(Z; -Tc4PP?U<m*e)2O]5zat</o+7MUA0dF#&40We');
define('LOGGED_IN_KEY',    '6|/-&?w0( =- hN)6%)&zsN|;+4}7zy|-IU2k~IYn|*UfDr+=]SK3uDY>09}K(it');
define('NONCE_KEY',        ';6f6.%|M247?YZ3o!OjNnUE]YTA@jhj4*B$]WD3wE3mwXn^]-NC]j5KJs%rqy1Ea');
define('AUTH_SALT',        '1X-8|lqr &8JcPM9:#61WIj9AD5|D~>}@*19`AIR5)W]M}}XM<UPCUF2XP)!N/+;');
define('SECURE_AUTH_SALT', 'u WgF^vZcVA^lT2EV`;k32ZF/ZTZX #%PmzdRiMN6$|8y,$(Z4;0<BE8x}ElogLx');
define('LOGGED_IN_SALT',   'U&c2ZJ)nsv=tk7L$n!Z41JA-(EX|4+|{n;lis0uv1&,yYnl8);r5D?[b:cr(|2yZ');
define('NONCE_SALT',       '~yrOH8*5=+gFx&Y?cR]mjUq<<&r^NGuA^4.mY|yu#Tc|%gXo1V[y^9Mb40tc-cV0');

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
