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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[HC+i&xUr,([XI}ks$?g`MtGlb$=k$bqCohN(NFSnDe[;k4wP0ny?=eoO{Zh)[p|' );
define( 'SECURE_AUTH_KEY',  'v=%zKxbbgi>j3_Pr7#qo^p}7Sm7jwn&:}!;t@bsT&Rq47VT>2M}f A:J4q9Xp*v&' );
define( 'LOGGED_IN_KEY',    'n<!30:AE-`]g*O.-g0qstG9PWOM3o0)srZMkJUxI|OT@hjL4Fzgx4}Nwk{2=m56k' );
define( 'NONCE_KEY',        '^lZI@Cgf4]Tej`w#Drv{#%YXoBO<(&.$-I9Izjafj]fPI{Jb+^nzA]=prkKB8%D{' );
define( 'AUTH_SALT',        'FC:FomV*>RSU<1E|0A~qIu}SWk4Xm/M ?G6,E?g1N]1^8{+7=V*{b8$x/+f<&2AF' );
define( 'SECURE_AUTH_SALT', 'HXD:Ut^CNd?OwY~=?_C{9Qb}9rt +#9/)gQWEv!`bQcu6/no{6=aDs80t+0^QKX7' );
define( 'LOGGED_IN_SALT',   '9*~NnprB, dq5_8XuSH1{|uk5O<Y~?ljsWbf#e:K=W&6g5Y`^59$Rw<XjR?B76p%' );
define( 'NONCE_SALT',       'gUn7cbNffp0DFQ`BDR6+p6>|;{Rn#|nfnp%Nml;a8;%^QA&2wOl>EvAb$-(s<u.-' );

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
