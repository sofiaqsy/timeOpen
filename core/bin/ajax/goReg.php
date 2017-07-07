<?php

$db = new Conexion();

$pass = Encrypt($_POST['pass']);
$user_nom = $db->real_escape_string($_POST['user_nom']);
$user_ape = $db->real_escape_string($_POST['user_ape']);
$email = $db->real_escape_string($_POST['email']);

$sql = $db->query("SELECT email FROM user WHERE  email='$email' LIMIT 1;");
if($db->rows($sql) == 0) {
  $keyreg = md5(time());
  $link = APP_URL . '?view=activar&key=' . $keyreg;

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

  $mail->addAddress($email, $user_nom);     // A quien le llega

  $mail->isHTML(true);    // Set email format to HTML

  $mail->Subject = 'Activación de tu cuenta';
  $mail->Body    = EmailTemplate($user_nom,$link);
  $mail->AltBody = 'Hola ' . $user_nom . ' para activar tu cuenta accede al siguiente elance: ' . $link;

  if($mail->send()) {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> ' . $mail->ErrorInfo . ' </div>';
  } else {
    $fecha_reg = date('d/m/Y', time());
    $db->query("INSERT INTO user (name,last_name,email,password,fecha_registro,key_reg,idtype_user) VALUES ('$user_nom','$user_ape','$email','$pass','$fecha_reg','$keyreg',1);");
    $sql_2 = $db->query("SELECT MAX(iduser) AS iduser FROM user;");
    $_SESSION['app_id'] = $db->recorrer($sql_2)[0];
    $db->liberar($sql_2);
    $HTML = 1;
  }
} else {
  $usuario = $db->recorrer($sql)[0];
  if(strtolower($user_nom) == strtolower($usuario)){
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El usuario ingresado ya existe.
  </div>';
  } else {
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El email ingresado ya existe.
  </div>';
  }
}

$db->liberar($sql);
$db->close();

echo $HTML;

?>
