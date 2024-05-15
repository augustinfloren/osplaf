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
define( 'DB_NAME', 'osplaf' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'osplaf_admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Hz10`2v(Hitl' );

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
define( 'AUTH_KEY',         '[ +5%E%XuQm!5b5`Bm:HbBwxrK)u}W5u&(5 fqyCIFODO&c PgGR-u!HCLk&5g(L' );
define( 'SECURE_AUTH_KEY',  '/K7}9 e6IW$9B-t28P]v*Sy=y]D;M+y( phw+qG;04%mhZB&IY)p1yt5N+b+2{!M' );
define( 'LOGGED_IN_KEY',    'DzH|GWJXM]ugp?/#_7`zS^#St`K$-Um TDal7tgim>}*/xHV#$U.+qL*d0?0n$A6' );
define( 'NONCE_KEY',        'O_!}B~mU4FKSKmU+>MDkP_*g-.~np{;q%RKj.I(Ox-1.~PRtlsKD7vbr^:[v,:XI' );
define( 'AUTH_SALT',        '>0gCZCW0]xTW)dkDh =$|];k2|i]o{gVfu$E5ZtN(Vsr#}L>m2t6FS.0!tMz7($h' );
define( 'SECURE_AUTH_SALT', 'DQZs#0|5Zj4o@X[D$ ?.I2RGCb=Ne/llW6fNc(<Q#8xG,b,~:z&YsfF^%0sLr,|E' );
define( 'LOGGED_IN_SALT',   '=XpPOglmZp<(^@GN13l>2.Mn?Q#.x{<DE[^P9OAjjT/gKbcH2fZeW8xio!RA=8B<' );
define( 'NONCE_SALT',       'BZvOBkJBT6Dhfs~kz<9)HIN*u/5`r{+j4-&lt0=bxMGKg;@>c|PsD$jzs%H+0Ej%' );
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
