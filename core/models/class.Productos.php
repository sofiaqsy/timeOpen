<?php

class Productos {

  private $db;
  private $iduser;
  private $EST_PROD;
  private $IMA_PROD;
  private $PRE_PROD;
  private $SIT_PROD;
  private $COD_MOD;
  private $DES_PROD;


  public function __construct() {
    $this->db = new Conexion();
  }

  private function Errors($url) {

    try {
          if(empty($_POST['estado'] ) || empty($_POST['precio']) || empty($_POST['descripcion']) || empty($_POST['marca']) || empty($_FILES['imagen']['name']) ) {
            throw new Exception(1);
          } else {
            $this->iduser=$this->db->real_escape_string($_SESSION['app_id']);
            $this->COD_MOD=$this->db->real_escape_string($_POST['modelo']);
            $this->EST_PROD=$this->db->real_escape_string($_POST['estado']);
            $this->IMA_PROD=$this->db->real_escape_string($_FILES['imagen']['name']);
            $this->PRE_PROD=$this->db->real_escape_string($_POST['precio']);
            $this->DES_PROD=$this->db->real_escape_string($_POST['descripcion']);
            $this->SIT_PROD=$this->db->real_escape_string('A');

          }
        } catch(Exception $error) {

          header('location: '.$url .$error->getMessage());
          exit;
        }

  }


  public function Add() {
    $this->Errors('?view=productos&mode=add&error=');
    $this->db->query("INSERT INTO producto(iduser,EST_PROD,IMA_PROD,PRE_PROD,SIT_PROD,COD_MOD,DES_PROD) VALUES ('$this->iduser','$this->EST_PROD','$this->IMA_PROD','$this->PRE_PROD','$this->SIT_PROD','$this->COD_MOD','$this->DES_PROD');");
    include('core/bin/functions/subir_img.php');
    header('location: ?view=productos&mode=add&success=true');


  }

  public function Edit() {
    $this->id = $_GET['id'];
    $this->Errors('?view=productos&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE producto SET EST_PROD='$this->EST_PROD',IMA_PROD='$this->IMA_PROD',PRE_PROD='$this->PRE_PROD',COD_MOD='$this->COD_MOD' ,DES_PROD='$this->DES_PROD'  WHERE COD_PROD='$this->id';");
    header('location: ?view=productos&mode=edit&id='.$this->id.'&success=true');
  }

  public function Delete() {
    $this->id = $_GET['id'];
    $this->db->query("DELETE FROM producto WHERE COD_PROD='$this->id';");

    header('location: ?view=productos');
  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
