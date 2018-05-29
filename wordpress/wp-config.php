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
define('DB_NAME', 'limogesfc');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cSHfmt%7X$g]dngh=L]Vd)n*v.[=Y{m@^gHw%*s~6;6k%~Z/dwBL&z}l#e,:!Ecn');
define('SECURE_AUTH_KEY',  'hDNF_OPJXH[Z,Gkd2{Ie}WrIj!Ir]C[Bn4dGCrL,j^ g{kFq+&sskpPXAb5Coi ~');
define('LOGGED_IN_KEY',    'en:`n._95={[PbkEg<vK;m<!UV1qWr8.y(%snyg@JlLnv4cj7f(fn22%}#X.n]0e');
define('NONCE_KEY',        'HA(`mX:#9a|oR?{jBC&@%_J7D{cI|n{GR|i~+h]-kL[ig:w|u`feviRUcEba5Z@C');
define('AUTH_SALT',        'hgeLTc(dBMe114$c5O@hC?^cqC4PVBbJ#!P}cgYZ.?)gyypi<,]G=mX3R~+Ym9_f');
define('SECURE_AUTH_SALT', '`YR#p,$:3v7{@Pb)BXY/~>uV]kUe#g~+e1aW7Q63uQBFXzv8}s@K7 P:3`VI %S;');
define('LOGGED_IN_SALT',   'kZ6KrrpouM{`m%%l?@Jh+F,HZCC,sAKOZ`1-~As&3T&u!Rm7K4/1BQs (BF$jc7Y');
define('NONCE_SALT',       '.sFZ{]G$$>&Y`*4}r-r-X$Z^(-rIGfYWhVL[5}igG.P3/l[2n8Mux wx%HsXEY]o');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'limogesfc_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
