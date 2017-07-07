<?php
class UserCategoria {

  private $db;
  private $fecha;
  private $iduser;
  private $idcategoria_cursos;

  public function __construct() {
    $this->db = new Conexion();
    $this->fecha = $fecha_reg = date('d/m/Y', time());
  }

  private function Errors($url) {

    try {
          if(empty($_POST['categoria'])) {
            throw new Exception(1);
          } else {
            $this->iduser=$this->db->real_escape_string($_SESSION['app_id']);
            $this->idcategoria_cursos=$this->db->real_escape_string($_POST['categoria']);
          }
        } catch(Exception $error) {

          header('location: '.$url .$error->getMessage());
          exit;
        }
  }

  public function Add() {
    $this->Errors('?view=perfil&error=');
    $this->db->query("INSERT INTO user_categoria_cursos(fecha,iduser,idcategoria_cursos) VALUES ('$this->fecha','$this->iduser','$this->idcategoria_cursos');");
    header('location: ?view=perfil&id='.$this->iduser.'&success=true');

  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
