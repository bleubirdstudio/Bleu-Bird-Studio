<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bleu-bird');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<Vl%rd!|>FK1j{cMa/#bgI-%8gXGko+ukRTC%lA.a-5v6fK1C%KV Y8Jjq3=/W;p');
define('SECURE_AUTH_KEY',  'v7_.TO~=08s1zEwoTDA|p~b@avv*Odd<^#ze*J6j||efH)bdEs_4q[DoSI~RmH^7');
define('LOGGED_IN_KEY',    'eX`ano]WR7Mw&=KU*i&Lz=wH&Z/&hS?YZbdldw#JsXB1:7_}TG9|$e&0om%65dqp');
define('NONCE_KEY',        'U::.|OzlB$ssq0!upMv^,A:I2taII ,(w62NsO[2s9F|0mh1C&^88c-3gT VJ/Q>');
define('AUTH_SALT',        'ZQCEnwy)f:]j]-_+^(MBrqZ=-16bz8</..28QDtoMe2aB}x):> %=ufPtU?U{-s9');
define('SECURE_AUTH_SALT', 'fs6|O#b2Bwxq{gyV[#+l]=5&+62qnK+dX~Qc~|!&_#T@}+8+~E^ _Igz!TtiDRC+');
define('LOGGED_IN_SALT',   'D$h`aI$OeNjh0urVVx(OOOo{DHIh2zD;{a&oh.%eq]`psoKIg|~k9~a<z40-j@s)');
define('NONCE_SALT',       '=ljW-YD`>k#*,|00G@6+-!>dzNMS=?+392dtmFOE`<O;k8w^p~l2s4#(P<<@y/0&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bleu_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
