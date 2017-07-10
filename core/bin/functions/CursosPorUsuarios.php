<?php

function CursosPorUsuarios($id) {
      $db = new Conexion();
      $sql = $db->query("SELECT * from curso where idcategoria_cursos in (select idcategoria_cursos from user_categoria_cursos where iduser='$id')");
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
