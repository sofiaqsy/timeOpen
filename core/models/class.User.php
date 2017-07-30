<?php
class UserCategoria {

  private $db;
  private $iduser;
  private $idarea;
  private $idtype_user;

  public function __construct() {
    $this->db = new Conexion();
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
    $this->fecha = $fecha_reg = date("Y/m/d H:i:s");
    $this->Errors('?view=perfil&error=');
    $this->db->query("INSERT INTO user_categoria_cursos(fecha,iduser,idcategoria_cursos) VALUES ('$this->fecha','$this->iduser','$this->idcategoria_cursos');");
    header('location: ?view=perfil&id='.$this->iduser.'&success=true');

  }
  public function Config() {
    $this->Errors('?view=perfil&error=');
    $this->db->query("INSERT INTO user_categoria_cursos(fecha,iduser,idcategoria_cursos) VALUES ('$this->fecha','$this->iduser','$this->idcategoria_cursos');");
    header('location: ?view=perfil&id='.$this->iduser.'&success=true');

  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
