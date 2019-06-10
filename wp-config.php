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
define( 'DB_NAME', 'curso_jipi_db' );

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
define( 'AUTH_KEY', 'tJYyRsw=,NFS4ck#d3ZU6aln>{Fs[Nd|cyP Y ;R4b`Dp}a/9{i`_KSEb3#.yN)h' );
define( 'SECURE_AUTH_KEY', 'p;H6P2BF~^7_](C}Y>X9<VINXiK?l.I(s*LE8o<al3KZ}YBGS[k(ZsZp$o(NepxH' );
define( 'LOGGED_IN_KEY', '5>vgnjL/K3{SLryIijGa]s/.sxi(DcRbceW(_k%1Fz2$O7NaOnYV4A[q`@dan}me' );
define( 'NONCE_KEY', 'c%~2B/4=75-y^C^F!9~^|qAw 1]9m8.G&dc%e]4pp?uE!xG@q~JU_Lo}!/C);@QW' );
define( 'AUTH_SALT', 'G@0 wk{<&rIiE~BzQAnaa:{E>`{:9K7*OC-}GX@T0:F%f&@&L;i-Tar$Uj;s}Bab' );
define( 'SECURE_AUTH_SALT', 'bPFIB8-YZF%D~:6yAMR_@Lv:`D`#&7J!q+5<gg.ar [nzmPxZ:F3{uAoP&*.Qj}1' );
define( 'LOGGED_IN_SALT', 'f!:e^N-2nX y59zl>w$:<O+[5H.yRm:?1%IMrC6eDoWUO<;@iOg2eX1j>K9v!JFY' );
define( 'NONCE_SALT', 'qK[2*`gL,,V(#paI]Z?&9Utt*g!`IwS#rRcG}mF9in:vtpZYK|l-r??YbiCeIOp%' );

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

