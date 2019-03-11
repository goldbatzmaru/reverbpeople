<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'uniqufn3_uniquely');

/** MySQL database username */
define('DB_USER', 'uniqufn3_word8df');

/** MySQL database password */
define('DB_PASSWORD', 'TGfXTLeUvTlO');

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
define('AUTH_KEY', 't=QHdAbL)|IfV?|BkYDYErom%?tmoXY-(WcNp;KW_ejm*!pKQvIVQ^lwejTwH}-A=Bzc_ZV]|NpfD?mcZ)To?CY?aS})@(qv&Ee&k+]U{^$mjz][M+g/gINjA&<)r@]l');
define('SECURE_AUTH_KEY', ')_z!w/qN%t/(H(RK}Gf?veLuswOB}C^eB!maL+E&W?[D$jlB*a}-Z!NyxSQVMjtnsj=_sR/FtXT}Ky{e_+V=Nrj@ObpFj@[{y_Rm)?dQtOFo!X>lbzASug*t><{X}TZ{');
define('LOGGED_IN_KEY', '[iiie>Kr(EeLI+N=pufDiP=Fiqm}*sZ}=&DfJN<?>&K*NK[VZJxLv?=]$zw$vtl(euiMHQo|j}NM[pIk(<&vgM+p<X>c[^cfm)U%[DulPZ(^d|{Wjkp<$i!+Xp{kK{Fl');
define('NONCE_KEY', 'Hggpu@CRC[CO}|^XQ?RV?JTP[UHUnSctTHw;VS;f;b{YoFD*gmTIA?]]>o!Au<;$dV?pu$lsXo?mFrtx=qrXOG@G-aq-zf]ldDoqDenvS?=r)Qp_{$qzIRA&yA()x]ko');
define('AUTH_SALT', '|TZNBE)duC_Qdod+hbjN^hUWp&OIzR-ab}![cq%ITaPnB;rn-QR]C+*{GFggbacZcprH--TvsGVa=zzmLbcNTt%Yk{D)Xd^L]!$rBIrnbV[tJ!^_=l<@ifB@{SrbStau');
define('SECURE_AUTH_SALT', '%aq-y|f{{KM@&(sS{M*ch&mhC?+Sv{vGLYCL;gNsQu;U*H-nk+HWz</m+F|;ZPgQ_O&iNxcuQsSaxL;G$H=moMoZe}f@)l?sNY{sfeIA[e/|<q(sfv)WAzl&^VBOZjt|');
define('LOGGED_IN_SALT', 'apLKKTHaQqXMIxnknLgpAtsON)tC[BlB&}{%zgymWl/r%fttXfsG?[Ma!!uMAhPQMjdMJWd)CNfp_XwH$h|VBprr;;c?;VPDp)PE}%>)AZcSjp-uYQKSj]UXss@=&Q*[');
define('NONCE_SALT', '<h>aZg-y=Hdfrg|!fuSb!S{K+%]_xM?)pRD@}ny>]{noSw$(-p^YI|{<$Pooh|I=s|T@HhRFQaD{>C[=WI/YyT)rnGqHC+iyYh!@TwCZovJeu^uV-]tCVI*PkXgUg&wP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mbgg_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
