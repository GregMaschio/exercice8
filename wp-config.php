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
define( 'DB_NAME', '2020-veille' );

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
define( 'AUTH_KEY',         'V3:aSv[KroS36SK-YTM4q[{S,VHvLEw<^eiqd-*W48=1[q;C,I}[Q{}]w!$OrJ6L' );
define( 'SECURE_AUTH_KEY',  '4_}h}5cE7IPF>:+<W*gu[]-^R}8$Ap[m0tY7hw%cyxg@vYRdILmeqG(NspJS //V' );
define( 'LOGGED_IN_KEY',    '/v+#cr6F2&PuQ&R1.SBYdvPWvP2I|B)Gl^?zlk]{d#jG>Xm migiIG037GSOtz2/' );
define( 'NONCE_KEY',        '&O-tzH_B}CN2a_|DwP}QR3w0ewwNxmdzW=3*JObxLwCrtkt{boT@5e;SNNm`_p`,' );
define( 'AUTH_SALT',        '#}cRo9eQjq6:o@.XQV<l;*R:dT2[[_*JOxp,0K]hWgzR1.|1nS8w3w>:/bpvEEF-' );
define( 'SECURE_AUTH_SALT', '+Q#fw~+CGVOO?I?+,zsh}-zpYdkEhu7@%}E@<T]$T.5z+Af4 Z`*xg2tO=`Tz#}V' );
define( 'LOGGED_IN_SALT',   'L:5n!LMBv*uzu/j-,awDGD6JSh,cBpBxOJozJxS-=M`</jgYD!p#6n0(}D@:7OeM' );
define( 'NONCE_SALT',       'ceaO^G;S@AOOrVgf,JO|c<ug 5Mh&QRejGxK;zwI FBoz:]+?;9<(2^iMc8(m/{{' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
