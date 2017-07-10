<?php

function serviciosPorUsuarios($id) {
      $db = new Conexion();
      $sql = $db->query("SELECT * from service where  id_usuario='$id'");
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
