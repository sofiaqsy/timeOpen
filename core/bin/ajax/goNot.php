<?php
if(!empty($_SESSION['app_id']) && $_POST['id_ser']!=""){
  if($_SESSION['app_id']!=$_services[$_POST['id_ser']]["id_usuario"]){
    $db = new Conexion();

    $idusuarioVendedor=$_services[$_POST['id_ser']]["id_usuario"];

    $idservicio=$_POST['id_ser'];
    $precioservicio=$_services[$_POST['id_ser']]['price'];

    $idusuarioComprador=$_SESSION['app_id'];

    $fecha = date("Y/m/d H:i:s");
    $db->query("INSERT INTO user_service(tipo,fecha,precio_total,id_user_vendedor,id_user_comprador,id_service) VALUES ('Venta','$fecha','$precioservicio','$idusuarioVendedor','$idusuarioComprador','$idservicio')");
    $cantidad_alumnos="";
    $sql = $db->query("SELECT cantidad_alumnos from service where idservice='$idservicio';");
    while($fila=$db->recorrer($sql)){
      $cantidad_alumnos=$fila[0];}
      $cantidad_alumnos--;
    if($cantidad_alumnos>0){
      $db->query("UPDATE service SET cantidad_alumnos='$cantidad_alumnos' WHERE idservice='$idservicio';");
    }else{
      $db->query("UPDATE service SET cantidad_alumnos='$cantidad_alumnos' WHERE idservice='$idservicio';");
      $db->query("UPDATE service SET situacion='VE',estado=0 WHERE idservice='$idservicio';");
    }



    $HTML = '<div class="alert alert-dismissible alert-success">
      <strong>Enviado!!</strong> El producto ha sido reservado, espere la respuesta del vendedor </div>' ;

  $db->close();
}else{  $HTML = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR : </strong>No puedes reservar tu propio producto<br> Daaa
</div>';}
}else{
  $HTML = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR:</strong> Inicie sesion
</div>';
}
echo $HTML;



?>
