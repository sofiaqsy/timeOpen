<?php

if(isset($_SESSION['app_id'])) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  $_cursosporusuarios=CursosPorUsuarios($_SESSION['app_id']);
  $_serviciosporusuario=serviciosPorUsuarios($_SESSION['app_id']);
  require('core/models/class.Service.php');
  $servicios= new Service();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if($_POST) {
        $servicios->Add();
      } else {
        include(HTML_DIR . 'servicios/add_servicio.php');
      }
    break;
    case 'edit':
      if($isset_id and array_key_exists($_GET['id'],$_services)) {
        if($_POST) { 
          $servicios->Edit();
        } else {
          $idservice=$_GET['id'];
          include(HTML_DIR . 'servicios/edit_servicio.php');
        }
      } else {
        header('location: ?view=servicios');
      }
    break;
    case 'delete':
      if($isset_id) {
        $servicios->Delete();
      } else {
        header('location: ?view=servicios');
      }
    break;
    default:

      include(HTML_DIR . 'servicios/all_servicios.php');
    break;
  }
} else {
  header('location: ?view=index');
}

?>
