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
define( 'DB_NAME', 'openClass' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'pascal' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'pascal' );

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
define( 'AUTH_KEY',         'hHa}Cf-v{Wp+Ius)}!%eUiP?F>4~x <RZD(V]I~bX#lrR46_H,(#+kAun$## 1|!' );
define( 'SECURE_AUTH_KEY',  'c.9#o4fjx-jGt}w8|mhk0|;d`O_=H8XGuDCs;q=r*8uLeyxgqB4xi&#)bI3Zf+1+' );
define( 'LOGGED_IN_KEY',    '})nEr;^,qG9L(Q1Zl5TOQV%cu^|oNe6D%:C0[L:EEgwbZ/Aj]@Kg?i@Zf@VDvoER' );
define( 'NONCE_KEY',        ' &8db^f/Aoi$z1zu>Wcj;{$m}4.pb.>tYm@S~>TR>>HTk<eZ8LB<=:C/mZT4PNKq' );
define( 'AUTH_SALT',        '.J}6(/W~!df^0b@t^w(@49Zu9ADb->R@Jjnp$}@Kv#i#z%%=Zs+R?/:IzUT}x;3O' );
define( 'SECURE_AUTH_SALT', '5!E`>*ro)+QypA{%4llyp3Hv)6X^9PMN6*khPj)56,XTnGj));B5[Y~nk(H2 Eav' );
define( 'LOGGED_IN_SALT',   '4Iclv`Lp:2GKVKuDjQ}T/~jTj;K.8@0x*lY2IKZ(-jMD%^#l}?Bfz!*+W(<h !GD' );
define( 'NONCE_SALT',       ':=<LHuCF-oi<s3O<Qq~Az(!0nl {fHZqG1fg*TQ2$=+$9g~9Oz,| N/okmR`L}~W' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
