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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HO=/8E$+tlY|Yd%:uzh<exK)P*n~:j-6tp$nj!=1%5aCX)g^QX;wFGrtGFyq]W&:' );
define( 'SECURE_AUTH_KEY',  'i%HSr7o;i+|F.7|E{y3BWJLt|:q#E<5:yxCC*Bt[upu]#iGHC3lRq7{:x~aKnZwr' );
define( 'LOGGED_IN_KEY',    'xAh*z@x6(UOgEk|QHh0:*LV&z(p)h7WO+vfzHb=)cZcc:4pGocBKRM-Kv5zqccFY' );
define( 'NONCE_KEY',        'Kz6R&8L<_8Hr^b!Uo 3Sk5p8|vG^TD9P!-I8^><<7?U]L~D-1c,d!T.3C FrmBl0' );
define( 'AUTH_SALT',        '$T>| SD[HmHcI<:V5FK!ejM&4Q~%[m*ROu4L]?N*{GWt+$69[3RqioP_5+_!j:,8' );
define( 'SECURE_AUTH_SALT', '-LP=ixh+;Y#ZNUB)[:r-`)3KQ8xbC3(VD%,{VtqIyL*n.3:YFX{>$`:2.FtH><0~' );
define( 'LOGGED_IN_SALT',   'xHXW$.0K,QV/,|&-32BiQajsZ2%ahSE3NZ4,dy4ThoG-@:m9YacCdi%cqTly.&*:' );
define( 'NONCE_SALT',       ',6Rkhp79|/BrN:u UH-LfYgW$m2zYW;ShyujsLn^}~!t.+/(+_LX-L!xRs3)o4q+' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
