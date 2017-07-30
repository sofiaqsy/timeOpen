<?php

if(isset($_GET['id']) and array_key_exists($_GET['id'],$_users)) {
  $db = new Conexion();
  require('core/models/class.Config.php');//llamar al modelo
  $config =new Config();
  $this_user = isset($_SESSION['app_id']) ? $_SESSION['app_id'] : null;
  $id_usuario = intval($_GET['id']);

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'config':
      if($_POST) {
        $config->AddConfig();
      }
    break;

    case 'edit':
    include(HTML_DIR . 'perfil/editar.php');
      break;

    default:
    $_adquiridosporusuarios=AdquiridosPorUsuario($_SESSION['app_id']);
    include(HTML_DIR . 'perfil/perfil.php');
    break;
  }
  $db->close();
} else {
  header('location: ?view=index');
}

?>
