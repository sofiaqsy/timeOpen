<?php

if(isset($_GET['id']) and array_key_exists($_GET['id'],$_users)) {
  $db = new Conexion();
  require('core/models/class.UserCategoria.php');//llamar al modelo
  $userCategoria =new UserCategoria();
  $id_usuario=$_SESSION['app_id'];
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'config':
      if($_POST) {
        $userCategoria->Add();
      }
    break;

    case 'edit':
    include(HTML_DIR . 'perfil/editar.php');
      break;

    default:
    include(HTML_DIR . 'perfil/perfil.php');
    break;
  }
  $db->close();
} else {
  header('location: ?view=index');
}

?>
