 <?php
function Subir_fichero($directorio, $nombre_img,$tipo,$tamano)
{


//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000))
{
 //indicamos los formatos que permitimos subir a nuestro servidor
 if (($_FILES["imagen"]["type"] == "image/gif")
 || ($_FILES["imagen"]["type"] == "image/jpeg")
 || ($_FILES["imagen"]["type"] == "image/jpg")
 || ($_FILES["imagen"]["type"] == "image/png"))
 {
    // Ruta donde se guardarán las imágenes que subamos

    // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
  }
  else
  {
     //si no cumple con el formato
     echo "No se puede subir una imagen con ese formato ";
  }
}
else
{
 //si existe la variable pero se pasa del tamaño permitido
 if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
}


}
?>
