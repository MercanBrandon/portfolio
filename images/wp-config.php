<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bdcybercom');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aZ ^=>1bTKC&}907$gE)8B3Pz=fv*AH],/BKB?s?G4$Y)Zxf1{[,WZzQFD^!;to1');
define('SECURE_AUTH_KEY',  'yc:*;wPfy}Op%i=u,$)RLDi5E/T]Wy|?01VV1R4|%rjcS2@gfaFAE n/-/oNns#V');
define('LOGGED_IN_KEY',    'w=n[Sl+1W:x!!gxNUUlzljhh62^7[.I:=r H.=I}PS5K VD00^&J.ewxdL%NgQ1g');
define('NONCE_KEY',        'bE/J5-:X-x*VlTG_swkYuD@X^a(rB!;rt/uoz^vE)J+?D~,8o|]:1E2Pz4UPDj<i');
define('AUTH_SALT',        'L0M~yk#A,7o-)aU5_QuLw,-_GQnY<T@~w:f6_7MTh=Loe$;zEytnrb{B=df9?OWT');
define('SECURE_AUTH_SALT', '+ub9QB@h8`Jnf1;Oz!O73z)^sb(9l;-bZ;M4U2P$lQp~z~JoXj6J L?i]L+.%X)}');
define('LOGGED_IN_SALT',   'El`vGvX(K[@R{ESnrRXC86M%m~fx7qexd%]LgiTWley#ys||l7`{{JHQwG)SbEWS');
define('NONCE_SALT',       '7mAs!FxOqf$2WdAn=]JzSATS2,2ayFIe&{t24A08WoHoXGE?mzVl^S0^ZeYP7BwF');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');