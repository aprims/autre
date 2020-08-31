<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
$db = parse_url('mysql://u0b1afubh7pi50iz:PUhoZ3P1JRQ7xE3qpc9z@bmluhg4qlwzxyyadcyfy-mysql.services.clever-cloud.com:3306/bmluhg4qlwzxyyadcyfy');
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));
/** MySQL database username */
define('DB_USER', $db["user"]);
/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);
/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'vO]iadf/dJj8Y4__]@uCfOeyI[d+90#EyfI[=CeB*x>ASl]f?KrH_+%9>Vs;ggh@' );
define( 'SECURE_AUTH_KEY',  'M2ES2}Pb5:nLq:~*]4TkswTaeLrQQ99hCV4so%]Z,W^q$/.9u-V);ZZHfrW& S{2' );
define( 'LOGGED_IN_KEY',    'Mf)=XIQx8?cvqq(x[w$Oja!biJC-VGGr(M%XNB:|=:M!Pc[`4_&*#F$JN${*Tl&n' );
define( 'NONCE_KEY',        '~oD<OSsoS#2+f}BSt+N@o_ZtfqiA7$lfB#q0}vH#-m*|G|6Xd)Wx@GLCYTO-th$1' );
define( 'AUTH_SALT',        '!C2O^bx >p[-zv4g!UHW,1nXonp?jkr4k7V?:r.<nE*~!{B,56uGEDOkQQ^de&eH' );
define( 'SECURE_AUTH_SALT', 'BAq6Z1h&#`pT=7U}Ca!X;)SslPJe~zGbQX$AuDhc8ZiJF^77_S*M.H#bXMN*9*/i' );
define( 'LOGGED_IN_SALT',   'zz7`Z/W3|6TZ8~b|0g9q:kB%Re[0*:h6`!/ZAt]KErs5Ax^k3-bU:|5#PQ+k5IaL' );
define( 'NONCE_SALT',       'u.J4Fyp!zct!F5ivc:+4rc+rWg%pt~u-y8gNIq.x-2!m] irMwg`[+F8:8a48}3{' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
