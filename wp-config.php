<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm;6KcC{TB+#gdAf>MK),x*wmv,dtfeL5itiw1SvGE0ZMGmEb2]PAx0eu0Xdh),!5' );
define( 'SECURE_AUTH_KEY',  'VF?9zv5ZNR7=B-OH>O/|[&K&g_dL{bAE2nVS1x63Y`_B[+W&F>Fg=@iz{ni1TlD&' );
define( 'LOGGED_IN_KEY',    'V][hYZ6KV?3swJoj}A7<]x?.Zhv}MQ>0 0Jl,P)3iru3?kZ*NH52Sn>AMw+,s@~0' );
define( 'NONCE_KEY',        'ik3uf@E[HuS#.i)&2e]^R0qfxK15o[kT{nobV*Dd*1nP0n.<=<eYGq<uE3#oLZ18' );
define( 'AUTH_SALT',        'FKCvqNZ6QMyx:B/Bh&Uo+VI@sAP#1dmKc~.WSAl5 :#hsy;O*#2L{k[O`~P$Yldt' );
define( 'SECURE_AUTH_SALT', '%.7G:!y3fUjOU(fqM?RQ ;WRzXxtLn+,E#qzzW=IS.KkDE/V52T8dy[.;KX`@UFz' );
define( 'LOGGED_IN_SALT',   'O(sE DNAuo&Oo6_^5]so+%p%RiP*4m^0u<kUw2|P{u~8g;XZN,[Lj*Q]fi?Y=9~n' );
define( 'NONCE_SALT',       'f!ufhHhk-$S4)vqrD<#ox5{kj]pVc+y4#bT&-IIt?D1?>LB(w?EUK7+4ei;:0)oD' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
