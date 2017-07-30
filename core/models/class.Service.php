<?php

class Service{

  private $db;
  private $idservice;
  private $titulo;
  private $price;
  private $horas;
  private $lugar;
  private $descripcion;
  private $detalles;
  private $imagen;
  private $situacion;
  private $cantidad_alumnos;
  private $id_usuario;
  private $id_curso;
  private $fecha_pub;


  public function __construct() {
    $this->db = new Conexion();
  }

  private function Errors($url) {
    try {

          if(empty($_POST['titulo'] ) || empty($_POST['price'] )  || empty($_POST['cantidad_alumnos']) || empty($_POST['curso']) ) {
            throw new Exception(1);
          } else {
            $this->id_usuario=$this->db->real_escape_string($_SESSION['app_id']);
            $this->titulo=$this->db->real_escape_string($_POST['titulo']);
            $this->lugar=$this->db->real_escape_string($_POST['lugar']);
            $this->price=$this->db->real_escape_string($_POST['price']);
            $this->horas=$this->db->real_escape_string($_POST['horas']);
            $this->descripcion=$this->db->real_escape_string($_POST['descripcion']);
            $this->detalles=$this->db->real_escape_string($_POST['detalles']);
            $this->imagen=$this->db->real_escape_string($_FILES['imagen']['name']);
            $this->situacion=$this->db->real_escape_string('A');
            $this->cantidad_alumnos=$this->db->real_escape_string($_POST['cantidad_alumnos']);
            $this->id_curso=$this->db->real_escape_string($_POST['curso']);
            $this->fecha_pub=$this->db->real_escape_string(date("Y/m/d H:i:s"));
          }
        } catch(Exception $error) {
          header('location: '.$url .$error->getMessage());
          exit;
        }

  }


  public function Add() {
    $this->Errors('?view=servicios&mode=add&error=');
    if(!empty($this->imagen))
    {
      include('core/bin/functions/subir_img.php');
      subir_img(CARP_IMG_SERV);
    }else{
      $this->imagen='default.jpg';
    }
    $this->db->query("INSERT INTO service(titulo,price,horas,lugar,descripcion,detalles,imagen,situacion,cantidad_alumnos,id_usuario,id_curso,fecha_pub)
     VALUES ('$this->titulo','$this->price','$this->horas','$this->lugar','$this->descripcion','$this->detalles','$this->imagen','$this->situacion','$this->cantidad_alumnos','$this->id_usuario','$this->id_curso','$this->fecha_pub');");
    header('location: ?view=servicios&mode=add&success=true');


  }

  public function Edit() {
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
