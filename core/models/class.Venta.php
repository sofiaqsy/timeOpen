<?php

class Venta{
//db user_service
  private $db;
  private $iduser_service;
  private $estado;


  public function __construct() {
    $this->db = new Conexion();
  }

  public function Confirm() {
    $this->idservice = $_GET['id'];
    $this->Errors('?view=servicios&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE service SET titulo='$this->titulo',price='$this->price',horas='$this->horas',lugar='$this->lugar' ,descripcion='$this->descripcion',detalles='$this->detalles',imagen='$this->imagen' ,cantidad_alumnos='$this->cantidad_alumnos'  WHERE idservice ='$this->idservice';");
    if(empty($this->imagen))
    {
      $this->db->query("UPDATE service SET imagen='default.jpg'  WHERE idservice ='$this->idservice';");
    }
    header('location: ?view=servicios&mode=edit&id='.$this->id.'&success=true');
  }

  public function Complete() {
    $this->idservice = $_GET['id'];
    $this->Errors('?view=servicios&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE service SET titulo='$this->titulo',price='$this->price',horas='$this->horas',lugar='$this->lugar' ,descripcion='$this->descripcion',detalles='$this->detalles',imagen='$this->imagen' ,cantidad_alumnos='$this->cantidad_alumnos'  WHERE idservice ='$this->idservice';");
    if(empty($this->imagen))
    {
      $this->db->query("UPDATE service SET imagen='default.jpg'  WHERE idservice ='$this->idservice';");
    }
    header('location: ?view=servicios&mode=edit&id='.$this->id.'&success=true');
  }

  public function Delete() {
    $this->id = $_GET['id'];
    $this->db->query("DELETE FROM service WHERE idservice='$this->id';");

    header('location: ?view=servicios');
  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
