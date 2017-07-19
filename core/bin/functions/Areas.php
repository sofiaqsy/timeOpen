<?php

function Areas() {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM area");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $areas[$data['idarea']] = $data;
    }
    }else{
      $areas = false;
    }
      $db->liberar($sql);
      $db->close();
    return $areas;
   }

?>
