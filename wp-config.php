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
define('DB_NAME', 'theoryofnoise');

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
define('AUTH_KEY',         '36>isc&,)I=>`[/loUq.kxjt$tV{pGh)WQ+[ <kyjv<.b<9*&R[~bu35paXg*RM&');
define('SECURE_AUTH_KEY',  'WfHArh>0j+L=#ts]*7}]4A`f)wc<vp @*y3T1?6o<RFUd4Z9X6^5~Ifc^lMo6OVW');
define('LOGGED_IN_KEY',    'Qb_|vNKl{?r=z^:Isym ZX}ZCdvS*}F?_fO6>eW`CWKZHM`@`Q2XW$_[|IU%oS]J');
define('NONCE_KEY',        'H.#]$#e6tsT%aZ:H<,Zy)q3A/<nlv%CgS]7sMCT9V Nt~v,]H-XkpQh!*OY4Y$)t');
define('AUTH_SALT',        'X,yT,!L1m*W4N(FU;}e$zEf-F%(ud<#-z~Me9j22&5ewcjF73SAr2$q4.#W-m_&)');
define('SECURE_AUTH_SALT', '3?@poWO01;ViDB: N,=b6Rbt:=j M SiwLUPux/tpvSdI|qOk-OOE%:i*6Rqwwdn');
define('LOGGED_IN_SALT',   'qL*j<l!FY&B<$-4vF}tdfy75U<z$|7qx.PeM10s|calLQCp}p6Ic[Cd]U.0mB)s ');
define('NONCE_SALT',       'fgzWccV}W>,?}Onw+3*Rmh;rxqPhfat(K%MR~R,|)LRHt3jr#U?7dKH7@Ums[x8j');

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
