<?php
$_categorias=Categorias($_GET["idarea"]);
$_cat_user=Categorias_users($_SESSION['app_id']);
if(false!=$_categorias){
   echo '<option >Elige la categoria</option>';
   foreach ($_categorias as $id_categoria => $value)
   {
     if(false!=$_cat_users=Categorias_users($_SESSION['app_id']) && $_categorias[$id_categoria]["idcategoria_cursos"]==$_cat_user[$_SESSION['app_id']]['idcategoria_cursos'])
     {
     echo '<option value="'. $_categorias[$id_categoria]["idcategoria_cursos"] .'" selected> '.$_categorias[$id_categoria]["nombre"].'</option>';
     }
     else
     {
       echo '<option value="'. $_categorias[$id_categoria]["idcategoria_cursos"] .'"> '.$_categorias[$id_categoria]["nombre"].'</option>';

     }
   }
}else{
  echo '<option> No hay categorias en esta area</option>';
}






?>
