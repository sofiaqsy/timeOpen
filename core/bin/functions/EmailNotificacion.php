<?php

function EmailNotificacion($nombre,$apellido,$email,$link,$nombrePublicador,$marcaPublicador,$modeloPublicador) {
  $HTML = '
  <html>
  <body style="background: #FFFFFF;font-family: Verdana; font-size: 14px;color:#1c1b1b;">
  <div style="">
      <h2>Hola '.$nombrePublicador.'</h2>
      <p style="font-size:17px;">Gracias por publicar tu producto en '. APP_TITLE .'.</p>
  	<p>El usuario '.$nombre.' '.$apellido. ' esta interesado en tu '.$marcaPublicador.' '.$modeloPublicador.' puedes comunicarte con el
    a traves de su correo electronico '.$email.'</p>
  	<p style="padding:15px;background-color:#ECF8FF;">
  			Para ver el perfil de usuario haz click en el <a style="font-weight:bold;color: #2BA6CB;" href="'.$link.'" target="_blank">clic aquí &raquo;</a>
  	</p>
      <p style="font-size: 9px;">&copy; '. date('Y',time()) .' '.APP_TITLE.'. Todos los derechos reservados.</p>
  </div>
  </body>
  </html>
  ';

      return $HTML;
}

?>
