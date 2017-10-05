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
define('DB_NAME', 'firstWordpressApp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Z?[ 3t* sAR<m5DT>uUhm3uvXQRcP4I:NJ6^N$mO{NT$S_y$S68-}k:yaR%3BMEo');
define('SECURE_AUTH_KEY',  '@i&As}4j8F$M{sv!g&CXq(zU:Wj;v3@}U3t_Lxwd9/`J5~L9U4jzY>-.xE5LGu3y');
define('LOGGED_IN_KEY',    '*OLP_2fC2I}Y8+}:<IPQ[ PS%%DO3r>T6 J^0M$g2!CCx8tIf^x{e*H=+1[07^g*');
define('NONCE_KEY',        'V04I1c?LP^s G3U1S8m_)($s`>JMn3Y)zk-Yt(pYCmbU(?y`2+r*x}V)W@pHCW5*');
define('AUTH_SALT',        '$znR`ke:^<~Un8rp+8/gZTl8Kb~X!ibvUWAhd<-Gt:klk4m`92pq.g;mH?CK}v5m');
define('SECURE_AUTH_SALT', '0l;Jd,jyX:t)zoH_o)rr,fCNcwrE-wffZ%GT]SujD#AMIKhD1->U%0S%CC,D<>l0');
define('LOGGED_IN_SALT',   'N @[wM?4fwOAx3t7Y9_k;$4`w4o7M?[*F/aJA7#.[,)`Br^84ZfI)*zG};s<~[22');
define('NONCE_SALT',       'l+B)uB6w pcb.(1aJN/fz)yZ]*jvP;Bf47uVl~XZ~DFB!O[|74V]2DY=UTB2;f.)');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_firstWordpressApp';

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