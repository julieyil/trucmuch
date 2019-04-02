<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tdwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H(~~RM<~2I<9rD[EL6^%TF`[[R_[&Bq9Mh9a;GlpDo#NdiVSX1Q0v.0s]./ @O^O' );
define( 'SECURE_AUTH_KEY',  'MP*j!a_&!At}p~iVo-BR36^sRWu-7]mgqeX>bX`{.ldmfVzx~rHfBu+E-Zy xj%#' );
define( 'LOGGED_IN_KEY',    '>R.M?Yrozl%zPwE=.#oN-FjlYeeZ&FCG9!l7iLC:(MpmSwOQ*JzHCr8fG~=K@d}F' );
define( 'NONCE_KEY',        'r`e. nY^dKaoYNslW+;xhy<#Le(>k?Y[IGt]@msHQx4so;<QWzI;j,OFE!qIA>*-' );
define( 'AUTH_SALT',        '1LN{%*#@${`E:=-C_ZZaLc%Qff.p:U1|^H8p+dr#sX[.bh9q0DNF Fl57OqJYk)f' );
define( 'SECURE_AUTH_SALT', '&k{}#C5Qv:9F7BKNch{D`#I9~C#(>+AlZ}MbN&rcXE!`%0:djWr[3+_~$)hQmidw' );
define( 'LOGGED_IN_SALT',   '4#?`b$ $b!DlX&AE}?6jZe84%0y3BaL-HV+KO,.miOoxo]R-Y!i`y^w/FD0e%(Y^' );
define( 'NONCE_SALT',       'E}{D>0&v!g+_.w*Jr_iRw}!~}0A#6F~5ek6]luGKHZJ/t(+_J8^W3~hj/]H@tJ<[' );
/**#@-*/

// ** Permettre a Wordpress de traverser le proxy ** //
define('WP_PROXY_HOST', 'http://proxy-cdb.ad.campus-eni.fr');
define('WP_PROXY_PORT', '8080');
define('WP_PROXY_BYPASS_HOSTS', 'localhost, 172.16.0.0/16, 127.0.0.0/8');

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
