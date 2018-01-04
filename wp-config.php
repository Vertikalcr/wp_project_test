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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY', 'IY[v4FG6<IPUiMiRq6O<>Qx,93gR=,~;;:ajKlHhnboP^d(,/o3aa~Ow>Kb)yCJr');
define('SECURE_AUTH_KEY', ')Ao%<+/p*T0&}Sx*k!U^;uj:Nhi!CH6[^]?5Qvq+4XINt! _|H{`F?A1*Z5i@H [');
define('LOGGED_IN_KEY', '4^3N|)tDkB8[Q|)(yz|S5N<B7>5Di|Yp)`nZcPOfSRZodQ5I$b;OVA1F[VTw-p*,');
define('NONCE_KEY', 'CAR.VVxxTT4IKL.rSDDv-Vf?|}Y(][mLU,ILGNn(HF8LP+vZ:r$: |fikdkkE0oX');
define('AUTH_SALT', ']VasBRWHAo*wvCJ`/?=>i)LoVSv2_%mc#okWg^lN}uOqqSD`dRlET}Qy<^0U{f+t');
define('SECURE_AUTH_SALT', 'kis1Q@ne%Ynk~B|L!R/j&F>/a2Nwp3A<Y}BOMDD*Jw?kT(9roh7S#+v2t$AOxZHk');
define('LOGGED_IN_SALT', 'yy|vu,cxdY9<k{lo`wz/P.i1^/&=Wq:}V[w=+e ]l0jr8_jz^9GYOnCkeP#u+}Kn');
define('NONCE_SALT', '+^Rv&:H4^b@er6YW1o|hr8_X=UF8.bf7Xw-[U{2CtzPHhdF3q^ro)09ByQYiFUD{');

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

