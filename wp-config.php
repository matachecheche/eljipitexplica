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
define( 'DB_NAME', 'jipi2_db' );

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
define( 'AUTH_KEY', 'P<mKu1]oX 0-[i>UE*NuKnF3:|}`D$B>NB6&(tDb4#~Y6cIQyMX^$ut6eHI*n7.?' );
define( 'SECURE_AUTH_KEY', '[I]vp1k7M&iErj9AOat*lS*Qn4VY(074`aIZsjAD&S^^@5p,ZqB[zbXh1cb=/ zI' );
define( 'LOGGED_IN_KEY', '$Dg=0}xu.$UR!G/QS^-aN:[/^8F7@;hTu;|b!I;02DspFqC3;1SS]|Jz0FD4O`A.' );
define( 'NONCE_KEY', 'sz/Rh{t;K!2V4]/<&Qx2th=<$7^5.qOv5dMZ%JfgB+o~X3i*G<1LM7IMVz*0u/D-' );
define( 'AUTH_SALT', '}WJAC_zc(R6/NK&NA7`w_WSQC23lQ=7N,K$*_korgPTar^XV<Bc&k;j3Sa=,M<g!' );
define( 'SECURE_AUTH_SALT', '4?Yvzw)Kzq%$0|Lko@OQw,?iH|OE3:uv](=>]4rN1ovS8.3rJa,aKg;39~EE;Oc%' );
define( 'LOGGED_IN_SALT', 'S@U=k9nRADiLI}u5<]A7e%XFehdi.u.I+[l#S{lqP5y>GF[Ilf_YqplIP4%qAU{C' );
define( 'NONCE_SALT', 'Q)^.vdM}kRS[5}n@>_21-0i^+iRF<#5 qe7LC)I-Fu4xc*6_cuw-%>@M=tbQY_[q' );

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

