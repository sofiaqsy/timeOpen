<?php
function subir_img($directorio,$name){
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],"$directorio/$name");
}
?>
