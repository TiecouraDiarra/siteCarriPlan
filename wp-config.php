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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carriplantest' );

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
define( 'AUTH_KEY',         '@ftG`.P NHt$]]xfeE5|k.nQ4~LKktrBHy%|2DL9~w%pe~mKL3o>qjV+^mKg_icB' );
define( 'SECURE_AUTH_KEY',  'WrLKEd;1el<ReB55f)`#4 }AJTQTTGxz9(.t.=0U406~$*7OTBf|A%D&7VdSeO-{' );
define( 'LOGGED_IN_KEY',    ']C0ll+bu}%(T-FJ$.Yo!|::qyo9-VGJQLI[zKB2NPE`QM+MT`NHa|^>:Q@G^0*E7' );
define( 'NONCE_KEY',        '3Jr805eH2CjAIif=iGm-B +)T.gl=bC@?e<(4t/uGfX(j{[H7Mhr^L>41jrT`Hg,' );
define( 'AUTH_SALT',        '9T,2tSnv<r;JH<bYz!+pPNjdk8+fNy@yX)G!Wmq+V$58=I}X(#9q<FB0tW)Tjev[' );
define( 'SECURE_AUTH_SALT', 'zWI[6#-[ru$6%r_(D?EYWdR8|m@f]XNlP4xp9J[O>$.1RPBSeX5EXG@:8k$OOs<&' );
define( 'LOGGED_IN_SALT',   'v=JWan_`!#T5S6@ga;B$cP@ [Q4G.y<:B&l~c)I9%`4w0*-uH06q0J~)FvaG258=' );
define( 'NONCE_SALT',       'SyE:8#3Yde>j9dp~ann:Amn7|m34NiyjkT+D6f[eOv)u)s^ER-.,]hZlq|9<H-a9' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
