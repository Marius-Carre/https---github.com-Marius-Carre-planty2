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
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^R75+McL+/3gxsS[AQLdHfh2&}=z-rh9K!12^6$mhvU%J`/r*Mo}fR:%.<B;mnmI' );
define( 'SECURE_AUTH_KEY',  '/}B5:OMHw>O a$,5SZSrTESJ[UCbxIsy)AOjC7Ewg29^l5nWZ,L7|Ysgr>!Rg&+d' );
define( 'LOGGED_IN_KEY',    '$ML=w-H8g_vm,#*rzRZun4`>H#OTV(*AZ%af]Q?.@Zk:;1$8ZFmD?tdX*F<u2>Yn' );
define( 'NONCE_KEY',        'L?RI;ga~xn)cG<e,<CB4XvFC)~^O*Ssg~5v83&|8*XMi]+R&NR*3?lX3 EVCy[nP' );
define( 'AUTH_SALT',        'kjt0%~hjf77p+7dtzPuc$Kv&IeAi/Omq}8@P?ofbk|s|sTV-yW?W(cSNd[G?Nm,j' );
define( 'SECURE_AUTH_SALT', '@VT}j>Do,yB2+oS}}6As@)^Q=tH4LMA!?y.q3^]]PL]ijqn$kp|/pY3R`TB}]0&G' );
define( 'LOGGED_IN_SALT',   '^qS #J(2wzRa4iu4g}~k GhjBzVX;KYmz&aN_J=*|$||7PE7s.Mg;E-=`9x]d1uO' );
define( 'NONCE_SALT',       '27U;p6?,knU0vW[{eH0.F6G{0LD1/5UP~5:zZV`Tcez7eHMPEebdjcW#Ylf%6=R3' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
