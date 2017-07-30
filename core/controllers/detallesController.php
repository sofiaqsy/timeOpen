<?php
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1 ;
  $id_services=$_GET['id'];
  if($isset_id && array_key_exists($_GET['id'],$_services)){
    include(HTML_DIR . 'detalles/detalles_servicio.php');
  }else{
  header('location: ?view=index');
  }
?>
