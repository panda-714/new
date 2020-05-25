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
define( 'DB_NAME', 'new_db' );

/** MySQL database username */
define( 'DB_USER', 'Dhananjay' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'c%I=ne&s}}T~g6N+D`.JbpWOxkF}*Hp6F2(qXJ/:Lx.UGG7@,D05UF{1[boP,Nq6' );
define( 'SECURE_AUTH_KEY',  'Ua5,;u8sxJ+TA|{.46P6J1BV=]81A~9=F*1)r-AG5`8N9ilcQ;Z%;7p)n?(@ .}/' );
define( 'LOGGED_IN_KEY',    '+s};t}=Nu^`zJ?tqjN@p%xR*q{`P+5/tpD%/<8| KH+Ui`&))+7yQ&m`*1<imxz4' );
define( 'NONCE_KEY',        '7PYL&QjvvE<o;b8C,=~zoS;P)ezUoE`%L]EmC;mb.9fTdEQ#hSgC>:F`NnSPu7>:' );
define( 'AUTH_SALT',        'l{ypAV>>gV@u-9Y?+Cj!Bl&$e5XZN%xz~CC.=AYLW:[bNTEC_iby*%C>~[C@39`_' );
define( 'SECURE_AUTH_SALT', 'yc5gturBH#gG.P?m*EI>C1FJ0JK-w>2;3&@)/?T|Ga?v.a*7^RT?x}=h8$!nObx_' );
define( 'LOGGED_IN_SALT',   '~3{50%6;<N1D]ixTIh~aS]d~AO;`gFHD,hiE.)d7fdTfARf+(t;e/|RXH`?HDuu]' );
define( 'NONCE_SALT',       'oPCm6|3XNOic;x$ex)Vyp,ERoWD~m{Ef{VlN4SP9!(;M1lhK0{OBVb6g;7#QHlaX' );

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
