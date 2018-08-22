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
define('DB_NAME', 'bullsga1_ss_dbnamee92');

/** MySQL database username */
define('DB_USER', 'bullsga1_ss_de92');

/** MySQL database password */
define('DB_PASSWORD', 'nSNbi0C6DLOW');

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
define('AUTH_KEY', 'PIFPh?jTQ-]/i%hFRlAXuGrjjdt(hs&QouB_WyrnJkLEL(p<epC&UEAA@y{FX;dK/F%FA!G&%ghy^Gm%x)PLr[&SuNFX)pL{)aqMzkO%QA%V?glZfEO?RAZq_%=vfX%y');
define('SECURE_AUTH_KEY', 'f;QR|x(<CcQUBgB]/(NuQvzXJQm@plLrtoEeTKwgv(f!FH=+Y%*w)da^Ck-sg^Jc[uzd*__t+zEbiqj/lZvmA*IQVU}BmBQ^zxYv>y=zXME+o>qZe)Q$>iZcR=eM}_yv');
define('LOGGED_IN_KEY', 'AfSusw{_GxnWOs}jgp@BQd+W)OrpmgjLCI}Z_RyF$vpRzNT_h?JlNd{uvX)@x@ep=E;_KAbK%!oMV$WS_pgXCI>Z+o+E(o[Q+ndd;JE@s?DBph|xUFGCq?%w_vqOA;xl');
define('NONCE_KEY', 'hlOtL|qiI&@o=-[pGWo/+O}}jcLDU%>)iXB&gTkv+&)wI&iwTkiOKrTsi/Zr+I<Q-Uq@tG%C]MuE_enChY>s[H^p?/{h|hUFS|Z__=jpzc};Wd%-}luDIKzgI)PyzQ|L');
define('AUTH_SALT', ';]C+o*}mx{klfocleFwzznv<Ak/;pwy|R|cGVBa[}/JzvtFoj?ZSwv>P%-%)!%$AIih!PTMUgd<_n(FruBWmL@JE}rHRqnD]zUO=D^}DrLo&]lcsUO*xp>oI[l(iOGm^');
define('SECURE_AUTH_SALT', 'Udjaam]uthxfURbey*nr>=VXTe>UqM>Me}bl@QH/SXUj$$=BS_)jFe;|CEj*^EGwAzuj;L{o)BH}oWR^rNaePjGo-_!Mfvwe@eBfEOqCqY|[zww!I{xOwX&iN;gXpV+B');
define('LOGGED_IN_SALT', 'tit*!iu?okhqICGr{MoJJrJkkIHi$Xb$I(VI/&{Nj+G$V;t@uM$*%_uPs}UV}yJ)i|{oG_rOcJHB]sNJu*Sq)+z[J!P-QPJAJ;?;xzZemsVu!i{zRBoDJ-UOm?|hXszj');
define('NONCE_SALT', 'MLD@vs)x_NVXUCGu]adGWxWM{BbjjF^lZn=r/*>llUcqD(w$eacJM}!ye|ZD%PwjtqG*!d$)+ZTjDCZY@!k_lg<FTqCdKZ%G<j<G=Prf&iLu%mfOI|)eJZs$SivBFigX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pijl_';

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
