<?php
function ServiciosInactivos() {
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM service where estado=0");
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
