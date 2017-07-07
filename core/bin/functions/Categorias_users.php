<?php

function Categorias_users($iduser) {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM user_categoria_cursos WHERE iduser=$iduser");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $categorias[$data['iduser']] = $data;
    }
    }else{
      $categorias = false;
    }
      $db->liberar($sql);
      $db->close();
    return $categorias;
   }

?>
