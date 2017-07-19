<?php

function All_Categorias() {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM cateogoria_cursos");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $categorias[$data['idcategoria_cursos']] = $data;
    }
    }else{
      $categorias = false;
    }
    $db->liberar($sql);
    $db->close();
    return $categorias;
   }

?>
