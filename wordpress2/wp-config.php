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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[v:r}z;xogpxFowQa$YiA, ? +Edm%RVF.CgY]9.o.6fIedyB80V(0mVc;A(:<,B' );
define( 'SECURE_AUTH_KEY',  '^}Q]Zvqwv|6^,I;o*.%~-;0qMBq [C7Q`p`/cJ[< S!t-%v^c}RmAylIYl)MgA)I' );
define( 'LOGGED_IN_KEY',    'T:zlL$(1z4T5_h5hl9|IZU:MhP+dd}v2]dzy^U)?rqKt,&XTK1~,%U.GrNA?i/yF' );
define( 'NONCE_KEY',        '[EeQ7!:RZ)J;ZDu|;i:52-,=;lyr%A>7XJ~2QsD)$]Ct$hqjBL`RnetXdhlX,I?%' );
define( 'AUTH_SALT',        'B !|`[)zNIiQ9e* PVt;2Fp;eb=|;_$mDo(R~^Q3-j_Ql1RUJ?8 CMPz5fti4z|&' );
define( 'SECURE_AUTH_SALT', 'Z|eb]#>=FIh>-pULUEt[)&psI/hO#[%CglH)|3{(r0AYO_ `g_|FE3[E<B?D(KB*' );
define( 'LOGGED_IN_SALT',   'Tgb[|D6G3}-lV!C`WCRr8BB#L(p@(Q?FW4jHS.-z#}t[Duh,Rr5NT#mNX;7tlTR?' );
define( 'NONCE_SALT',       ']^QPX:~q:g*W1`^ gEHg@MhF3LQzm7Dlzb+LwUAae![-MxC@vl##4!:E&_P!S^mj' );

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
