<?php
  function Service() {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM service where estado=1 ORDER BY fecha_pub");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $servicios[$data['idservice']] = $data;
    }
    }else{
      $servicios = false;
    }
      $db->liberar($sql);
      $db->close();
    return $servicios;
   }

?>
