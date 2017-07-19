<?php
/*
  EL NÚCLEO DE LA APLICACIÓN!
*/

session_start();
date_default_timezone_set('America/Caracas');

#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dbsistutorias');


#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Opentime');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','http://timeopen.com/'); //Adaptado a mi nuevo entorno con Ubuntu
define('CARP_IMG_SERV','views/app/images/servicios/');
define('CARP_IMG_PERF','views/app/images/users/');


#Constantes de PHPMailer
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocrend.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT',465);



#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/Categorias.php');
require('core/bin/functions/Categorias_users.php');
require('core/bin/functions/CursosPorUsuarios.php');
require('core/bin/functions/Servicios_Usuarios.php');
require('core/bin/functions/Service.php');
require('core/bin/functions/All_Categorias.php');
require('core/bin/functions/All_Cursos.php');



require('core/bin/functions/UrlAmigable.php');

require('core/bin/functions/Areas.php');
require('core/bin/functions/Subir_fichero.php');
require('core/bin/functions/EmailNotificacion.php');
require('core/bin/functions/Cortar.php');



$_users = Users();
$_areas = Areas();
$_services = Service();
$_allcategorias = All_Categorias();
$_allcursos = All_Cursos();



?>
