<?php

if(isset($_SESSION['app_id'])) {

  $isset_id = isset($_GET['id']);
  require('core/models/class.Movimiento.php');
  $movimiento=new Movimiento();

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'confirmar':

      if($isset_id) {
        $movimiento->ConfirmarVentaCompra();
      }else {
        header('location: ?view=productos');
  }
    break;

    case 'delete':
      if($isset_id) {
        $movimiento->Delete();
      } else {
        header('location: ?view=productos');
      }
    break;

  }
} else {
  header('location: ?view=index');
}

?>
