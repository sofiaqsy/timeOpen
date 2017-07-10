<?php
if($_SESSION['app_id']!="" && $_POST['id_prod']!=""){
  if($_SESSION['app_id']!=$_servicios[$_POST['id_prod']]['iduser']){
$db = new Conexion();
$usuarioNotificadornombre=$_users[$_SESSION['app_id']]['NOM_USU'];
$usuarioNotificadorapellido=$_users[$_SESSION['app_id']]['APE_USU'];
$usuarioNotificadorcorreo=$_users[$_SESSION['app_id']]['COR_USU'];
$usuarioNotificadorid=$_SESSION['app_id'];

$correoPublicador=$_users[$_POST['id']]['COR_USU'];
$nombrePublicador=$_users[$_POST['id']]['NOM_USU'];
$marcaPublicador=$_POST['marca'];
$modeloPublicador=$_POST['modelo'];

$codProd=$_POST['id_prod'];
$preProd=$_servicios[$_POST['id_prod']]['PRE_PROD'];


$id_prod=$_POST['id_prod'];
  $link = APP_URL .'?view=perfil&id=' .$_POST['id'];

  $mail = new PHPMailer;
  $mail->CharSet = "UTF-8";
  $mail->Encoding = "quoted-printable";
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = PHPMAILER_HOST;  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = PHPMAILER_USER;                 // SMTP username
  $mail->Password = PHPMAILER_PASS;                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );
  $mail->Port = PHPMAILER_PORT;                                    // TCP port to connect to

  $mail->setFrom(PHPMAILER_USER, APP_TITLE); //Quien manda el correo?

  $mail->addAddress($correoPublicador, $nombrePublicador);     // A quien le llega

  $mail->isHTML(true);    // Set email format to HTML

  $mail->Subject = 'Notificacion de Interes de producto';
  $mail->Body    = EmailNotificacion($usuarioNotificadornombre,$usuarioNotificadorapellido,$usuarioNotificadorcorreo,$link,$nombrePublicador,$marcaPublicador,$modeloPublicador);
  $mail->AltBody = 'Hola ' . $nombrePublicador . ' para ver el perfil del interesado sigue el siguiente enlace: ' . $link;

  if(!$mail->send()) {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> ' . $mail->ErrorInfo . ' </div>';
  } else {
    $fecha = date('Y/m/d', time());
    $db->query("UPDATE producto SET SIT_PROD='R' WHERE COD_PROD='$id_prod';");
    $db->query("INSERT INTO movimiento(TIP_MOV,FEC_MOV,iduser) VALUES ('Reserva','$fecha','$usuarioNotificadorid')");
    $id="";
    $sql = $db->query("SELECT COD_MOV from movimiento where iduser='$usuarioNotificadorid';");
    while($fila=$db->recorrer($sql)){
      $id=$fila[0];}
    $db->query("INSERT INTO detalle_movimiento(COD_MOV,COD_PROD,PRE_PROD) VALUES ('$id','$codProd','$preProd')");

    $HTML = '<div class="alert alert-dismissible alert-success">
      <strong>Enviado!!</strong> El producto ha sido reservado, espere la respuesta del vendedor </div>' ;
  }


  $db->close();
}else{  $HTML = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR : </strong>No puedes reservar tu propio producto<br> Daaa
</div>';}
}else{
  $HTML = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR:</strong> Inicie sesion
</div>';
}
echo $HTML;



?>
