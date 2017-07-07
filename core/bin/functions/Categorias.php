<?php

function Categorias($id) {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM cateogoria_cursos WHERE idarea=$id");
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
