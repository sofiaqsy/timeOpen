<?php

if(isset($_GET['id']) and array_key_exists($_GET['id'],$_users)) {
  $db = new Conexion();
  require('core/models/class.Config.php');//llamar al modelo config
  require('core/models/class.Venta.php');//llamar al modelo
  require('core/models/class.User.php');
  $config =new Config();
  $venta = new Venta();
  $this_user = isset($_SESSION['app_id']) ? $_SESSION['app_id'] : null;
  $id_usuario = intval($_GET['id']);
  $_adquiridosporusuarios=AdquiridosPorUsuario($_SESSION['app_id']);
  $user = new User();

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {

    case 'config':
      if($_POST) {
        $config->AddConfig();
      }
    break;

    case 'edit':
      if($_POST){
        $user->Edit();
      } else {
        include (HTML_DIR.'perfil/editar.php');
      }
      break;

    case 'cancel':
    if(isset($_GET['idv']) && isset($_GET['ids']) and array_key_exists($_GET['idv'],$_adquiridosporusuarios)) {
        $venta->Cancel();
    }else {
      header("location: ?view=perfil&id='.$this_user.'");
    }
      break;

    case 'terminado':
      if(isset($_GET['idv']) && isset($_GET['ids']) and array_key_exists($_GET['idv'],$_adquiridosporusuarios)) {

          $venta->Complete();

      } else {
        header("location: ?view=index");
      }
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
