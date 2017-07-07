<?php

class Movimiento {

  public function __construct() {
    $this->db = new Conexion();
  }


  public function ConfirmarVentaCompra() {
   $this->id= $_GET['id'];
    $this->id_prod=$_GET['idprod'];

  $this->db->query("UPDATE producto SET SIT_PROD='V' WHERE COD_PROD='$this->id_prod';");
  $this->db->query("UPDATE movimiento SET TIP_MOV='Venta' WHERE COD_MOV='$this->id';");
    header('location: ?view=productos');
  }


  public function Delete() {
    $this->id = $_GET['id'];
    $this->id_prod=$_GET['idprod'];
    $this->db->query("UPDATE producto SET SIT_PROD='A' WHERE COD_PROD='$this->id_prod';");
    $this->db->query("DELETE FROM detalle_movimiento WHERE COD_MOV='$this->id';");
    $this->db->query("DELETE FROM movimiento WHERE COD_MOV='$this->id';");


    header('location: ?view=productos');
  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
