<?php

function Areas() {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM area");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $tipos[$data['idarea']] = $data;
    }
    }else{
      $tipos = false;
    }
      $db->liberar($sql);
      $db->close();
    return $tipos;
   }

?>
