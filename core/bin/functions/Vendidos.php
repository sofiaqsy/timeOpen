<?php
  function VendidosPorUsuario($id) {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM user_service where id_user_vendedor='$id'");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $servicios[$data['iduser_service']] = $data;
    }
    }else{
      $servicios = false;
    }
      $db->liberar($sql);
      $db->close();
    return $servicios;
   }

?>
