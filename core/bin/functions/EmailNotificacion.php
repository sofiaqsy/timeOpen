<?php

function EmailNotificacion($nombre,$apellido,$nombrePublicador) {
  $HTML = '
  <html>
  <body style="background: #FFFFFF;font-family: Verdana; font-size: 14px;color:#1c1b1b;">
  <div style="">
      <h2>Hola '.$nombrePublicador.'</h2>
      <p style="font-size:17px;">Gracias por publicar tu producto en '. APP_TITLE .'.</p>
  	<p>El usuario '.$nombre.' '.$apellido. ' ha adiquirido tu servicio titulado '.$titulo.' puedes comunicarte con el
    a traves de su correo electronico de nuestra pagina </p>
  	<p style="padding:15px;background-color:#ECF8FF;">
  	</p>
      <p style="font-size: 9px;">&copy; '. date('Y',time()) .' '.APP_TITLE.'. Todos los derechos reservados.</p>
  </div>
  </body>
  </html>
  ';

      return $HTML;
}

?>
