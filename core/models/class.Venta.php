<?php

class Venta{
//db user_service
  private $db;
  private $iduser_service;
  private $idservicio;
  private $id;
  private $estado;


  public function __construct()
  {
    $this->db = new Conexion();
  }


  public function Confirm() {
    $this->idservice = $_GET['id'];
    $this->db->query("UPDATE service SET titulo='$this->titulo',price='$this->price',horas='$this->horas',lugar='$this->lugar' ,descripcion='$this->descripcion',detalles='$this->detalles',imagen='$this->imagen' ,cantidad_alumnos='$this->cantidad_alumnos'  WHERE idservice ='$this->idservice';");

    header('location: ?view=servicios&mode=edit&id='.$this->id.'&success=true');
  }

  public function Complete() {
    $this->id=$_GET['id'];
    $this->iduser_service=$_GET['idv'];
    $this->idservicio=$_GET['ids'];
    $this->db->query("UPDATE user_service SET estado='TERMINADO' WHERE iduser_service='$this->iduser_service';");
    header('location: ?view=index');

  }

  public function Cancel() {
    $this->id=$_GET['id'];
    $this->iduser_service=$_GET['idv'];
    $this->idservicio=$_GET['ids'];
    $cantidad_alumnos = $this->db->query("SELECT cantidad_alumnos FROM service where idservice='$this->idservicio'");
    while($fila=$this->db->recorrer($cantidad_alumnos)){
      $cantidad_alumnos=$fila[0];}
      $cantidad_alumnos++;
    $this->db->query("UPDATE service SET situacion='A',estado=1,cantidad_alumnos=$cantidad+1 WHERE idservice='$this->idservicio';");
    $this->db->query("DELETE FROM user_service WHERE iduser_service='$this->iduser_service';");
    header("location: ?view=index");

  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
