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
define('DB_NAME', 'modificacion_theme');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', '5N:T<*GaK*v?3}2y-[mwvq3bL5UDC0?E!1; R@=ce%l=3)Wrac_sl(TmtP4X~hg_');
define('SECURE_AUTH_KEY', '_~fxs6Wr>a7fD uhlYmGE5F|&|3F&O%}1)uMxaUXuE)Z4.xL4t@{y[k54r?/8s$Z');
define('LOGGED_IN_KEY', 'FxfCTBYAzn}r!qK/-Y)SZ{+`?lrZL^G6nP[@re6{4FB>6EDK*_gw~R%M+UsS~6}{');
define('NONCE_KEY', ')7XiA,MPO:sQ8c[C2hjFQ{&yJ{~t%YEVy1u)012BH;Dpk=GG?gqhul>bu#qq^5]C');
define('AUTH_SALT', '1f#Oic[v3<7b3.MiZPv4N` }O}0C9rz]_|{Ge6^.2R/4l$a1pM?p@0++v6daTx`i');
define('SECURE_AUTH_SALT', 'lk RfkHajv`mQ!?5@/_OlsaZMDI,Q`$vwOMJ5m4z7;5/2rmQ~tNh%E0@{UW_x_To');
define('LOGGED_IN_SALT', '#:**D5i5uUm!CVMpEVXh)[dDt(Y r9wh}%7;^U&0Zqo!q,l!/,=VBj/H) ><P=PB');
define('NONCE_SALT', 'EseR>A Ub]_<L:DK|0L;U]XJV;:hXoG~^#5x$uI9,;4Oy)5*oM+B,%X,GS`&(GGu');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dl_';


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

