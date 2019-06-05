<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'jipi' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'aFGpfe-M2&(KwIv|um%$AF Cpq*Jq10mXg:[DD#5!3(AH^Nq!XgytBQ`K%VCA,P>' );
define( 'SECURE_AUTH_KEY', 'Z{slgLkV*94m4[,U~FO0feVVmmJD5?WHO0jeH=u<<Kv:}1AL{ej&)r~<U1-0Qd${' );
define( 'LOGGED_IN_KEY', '1HQ]W$u+f@*A*ETl#A%V1?Q6&(n.>cU)o>Tu4.SqalXa@]M*T}yw< N>a  S;#wQ' );
define( 'NONCE_KEY', '6_YN3TkxYTCg;1=t!/3vWf6RRC?>]6A|EcG~ WUCH~*gB,3N` Gr=^<1A;(hGXol' );
define( 'AUTH_SALT', 'Ki|Z:XJtg4vE)w3,-T(]h*aNVhF#yAOlx#7NWQ8RS!f:o-|6p4>swV];HeBY,-.Z' );
define( 'SECURE_AUTH_SALT', '):`VdacS%A><aTmea3?T_hybuv<&%}FB!+=$R7B(tqx9QAC5A!7H<+F[f9CN}5W<' );
define( 'LOGGED_IN_SALT', 'UXlmG1mb8IXW^Wau;C(6dY:VJ8|lGWK{abf][!=Ai Zm]NzZ%=C!jCFixJ`[57[X' );
define( 'NONCE_SALT', '9&i<B^ &1U_,&yMETHB?Sj]^L[;exDYy&IC Yj4Is997ao>ESM|o+uwfYr~i9T#:' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

