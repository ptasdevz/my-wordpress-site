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
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'ptasdevz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test1234' );

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
define( 'AUTH_KEY',         'fIZ1UnL[A1?}Cjjw)kiEqf!+fnc<P$V}bz-gn/}66.LA9m2Rr1$k%=9- 2nW!~&O' );
define( 'SECURE_AUTH_KEY',  'HDX21R&P#lf?Ry^g)?ak8j=ZLR[]n[0HIV$j-du=M0W,hQW2XxAz<f{F<9Av@CDi' );
define( 'LOGGED_IN_KEY',    'Qfv)[RNXB=@ks0q*jR%_Y^Qy[akV9/AjXz)&C!-a :]XN5KnT2FSh=c>3L9gF8 Z' );
define( 'NONCE_KEY',        '<nM+<f.+f+(s&zx6w5ymD`[:e{`T]dcI.>(c[rs|{p4.M6Ftk}BAYlH_D?c_aQYn' );
define( 'AUTH_SALT',        '&#zW+|(hhxutO1!XI:$jp04%,imvee5eF1h$@hoF_O:9p{3_k b;P&@[fDmT-hv]' );
define( 'SECURE_AUTH_SALT', '3sUN/oq-Vd ktL5y5Kv:bHO)t8n@-:iE(aVDd|Z]rC%k@5Po/TWP>prt/9DxdTw8' );
define( 'LOGGED_IN_SALT',   '[LPFm41QbU!L:j$:5o1smrN_:ce|f4PE3,6+o-%qYi1B>*-840mG_bu.AkP%_9[6' );
define( 'NONCE_SALT',       'QKs3SDp)|XIpIc7[&sWaCA6<n9mbn9;yTe)Q%?EI a>6<Lhx%0i%a-C`{Dqxw~,1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pd_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
