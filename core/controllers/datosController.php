
<?php
switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
  case 'combo':
  if(isset($_GET['idarea']) && isset($_SESSION['app_id'])){
  include('core/bin/indexcomplemento/categorias.php');
  }
  break;
}

?>
