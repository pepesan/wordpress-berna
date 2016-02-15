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
define('DB_NAME', 'wp_berna');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '7OO*Yfn@+j Z9?*M2](`,(|QB$l<:[29SO5m5>NZf%Kos I^K-8x<kO$|;O}2=zJ');
define('SECURE_AUTH_KEY', 'L7bZJuDoNQH:};!WOW7$!1n]oi3qmo4E~]H#P/qy@C_q%gv69lEpzetjOlmsu)~7');
define('LOGGED_IN_KEY', 'eLOj92Y-Qvb*C~~QFn]+m2G+/LZU;$d|nx3NOit?/#n_@aCBX^nChL6+ZFowf5Gb');
define('NONCE_KEY', 'V]-eQF!}<2Wvm<{lGI}E7PrS1-n%fx]|mh8`c^3af}9>|!.SaQ Z%G~i||Ql}7[@');
define('AUTH_SALT', '[&UkG,3>p4b3lg}-&h-G:qs`Iny/ZNz!6!!;`h ^}zNR.2I`!js+(CR@BxK<6=mT');
define('SECURE_AUTH_SALT', 'qnuZ(ibGMvA@@6|{Q#g~Z`L+I>;RR<|uDD6->LZj<]hyciBo^ivz&511smH~+c~a');
define('LOGGED_IN_SALT', '5@FVUxnJ_QScNo%/FCRv5@tDcwEeLKFo(5qey^e vPFf%fwjZ]|H7fnD##lEf92x');
define('NONCE_SALT', ',ONm33#1}ReSxR))7SiH05gE PcbeD3A-=~{<{=fE!Ej)OuI4zT!IPfw^X *AExE');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

