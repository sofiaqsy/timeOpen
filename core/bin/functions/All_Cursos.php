<?php

function All_Cursos() {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM curso");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $cursos[$data['idcurso']] = $data;
    }
    }else{
      $cursos = false;
    }
    $db->liberar($sql);
    $db->close();
    return $cursos;
   }

?>
