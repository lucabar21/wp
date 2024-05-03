<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'ifoa_bw4' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J6qTg%K*a0;QEt535<U>2&GlX*7 5IcUu!vFnS5Ut ej=V4Cw/7H>9uCq+?K:P)[' );
define( 'SECURE_AUTH_KEY',  'j+SC*HG.;TGe(/<SI0od)mEHBG[g.#/+M%Lj9}5PW~G]X{8qk2Zw}ZGKnu-|u~Ag' );
define( 'LOGGED_IN_KEY',    '=d_IUs$/J!`b~XNamQMfno:*1D(o{R#cA-jcq)A!s.mbHM5|_z*YVfX:JbTKh>C#' );
define( 'NONCE_KEY',        '{Bf(repRf&z{i!b]m37:JX RT7|yscD$z>B]Y|.r4H`PQHx}[K57fb-UQJ.>0T0!' );
define( 'AUTH_SALT',        '<y)I8^:Cy`*::;bws-*2sGYEm[WLOl)GekQPH$(}4,;(vq^,T-/2VO7?G(w.&5aP' );
define( 'SECURE_AUTH_SALT', '5.RCd-XmN$ZTp07UU!A!!b~ze~h&,5rT_IMqhYr/`LbNY?ITC`f+vo@:2$E+;r0?' );
define( 'LOGGED_IN_SALT',   '@}}~Frr$qBj*/hbVN04X^voEN2B%>K*ZEa{sVopt`:5i)$XZDX_h&K8hiu!K<f0c' );
define( 'NONCE_SALT',       '})^~A?P)y8AE}?kc7qX#.iwVusFMuvDRS#Dp{FF6uL?Qdj2+;ZiQPk$|<77~O*f+' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli sviluppatori di temi e plugin di utilizzare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungi qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
