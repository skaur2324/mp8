<?php
/**
 * La configuració base del WordPress
 *
 * L'script de creació wp-config.php usarà aquest fitxer durant la instal·lació. 
 * No heu d'utilitzar la web, podeu copiar aquest fitxer al fitxer "wp-config.php" 
 * i emplenar els valors.
 *
 * Aquest fitxer contè els següents paràmetres:
 *
 * * La configuració de la base de dades
 * * Les claus secretes
 * * El prefix de les taules de la base de dades
 * * L'ABSPATH
 *
 * @link  https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configuració de la base de dades - Podeu obtenir aquesta informació de l'amfitrió de la web ** //
/** El nom de la base de dades del WordPress */
define( 'DB_NAME', 'wordpress' );

/** El nom d'usuari de la base de dades */
define( 'DB_USER', 'root' );

/** La contrasenya de la base de dades */
define( 'DB_PASSWORD', 'root' );

/** Nom de l'amfitrió de la base de dades */
define( 'DB_HOST', 'localhost' );

/** Joc de caràcters usat en crear taules a la base de dades. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Tipus d'ordenació en la base de dades. No ho canvieu si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvieu-les per frases úniques diferents! 
 * Les podeu generar usant el {@link http://api.wordpress.org/secret-key/1.1/salt/ servei de claus secretes de WordPress.org}
 * Podeu canviar-les en qualsevol moment per invalidar totes les galetes existents. Això forçarà tots els usuaris a iniciar sessió de nou.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qdVQJnjR&{aEFHiq5OHJ<smNLb1>qv0:z6)y+$n?o>^ABGWKX]FWw? v<LFp~<BT' );
define( 'SECURE_AUTH_KEY',  '&mk_=NL~^?l_Im8vI)Uq3R~>G,Q6(i]ZM+n|wg@vzTX}A:g>yB2S@_VUwbvx`inG' );
define( 'LOGGED_IN_KEY',    'po^d:*;emY<xZq]]8 t(s[>9zE^0PemiYf5soR9$G>I>f4>gNCe:YWW.,Avim6._' );
define( 'NONCE_KEY',        'g%B6iv[,eg-0.1tj@OhI~QAQNy[AN$NIQFovIt3PypGQ4@9xCKO1LX8wHvN51>z)' );
define( 'AUTH_SALT',        'r;gHzat*TVX8jS7y}aii3-lD93n qOm;j/O][6@Uach8>^dB[WwLUv^cxCkrp2c6' );
define( 'SECURE_AUTH_SALT', 'O/b~S;3>EaD,aHTjNg0@4kaNPtmCw2E]v6f2NF;U_3@!)EMmaX6:_&R~IBW9Hd(k' );
define( 'LOGGED_IN_SALT',   '=q4T7 #7v1)x@f`b_HynK$J)vMJnA2XbP>C{?0.tn~tt{H|~ 57!xv(R._ZDSh=K' );
define( 'NONCE_SALT',       'N`^vu4/BN)As3)i_c=p/n/qz|=Ib4BCn<i,hU`;?KP(ps3>x.v?`lRILgNRe*vT2' );

/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Podeu tenir múltiples instaŀlacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix = 'wp_';

/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 *
 * Per informació sobre altres constants que es poden utilitzar per depurar,
 * visiteu el còdex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Podeu afegir valors personalitzats entre aquesta línia i la de "prou d'editar". */

/* Això és tot, prou d'editar - que publiqueu de gust! */

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');
