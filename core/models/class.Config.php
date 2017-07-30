<?php
class Config {

  private $db;
  private $fecha;
  private $iduser;
  private $idcategoria_cursos;
  private $institucion;
  private $area;
  private $tipo_usuario;


  public function __construct() {
    $this->db = new Conexion();
    $this->fecha = $fecha_reg = date("Y/m/d H:i:s");
  }

  private function Errors($url) {
    try {
          if(empty($_POST['categoria']) || empty($_POST['tipe_user']) || empty($_POST['area']) ) {
            throw new Exception(1);
          } else {
            $this->iduser=$this->db->real_escape_string($_SESSION['app_id']);
            $this->institucion=$this->db->real_escape_string($_POST['institucion']);
            $this->area=$this->db->real_escape_string($_POST['area']);
            $this->tipo_usuario=$this->db->real_escape_string($_POST['tipe_user']);
            $this->idcategoria_cursos=$this->db->real_escape_string($_POST['categoria']);
          }
        } catch(Exception $error) {

          header('location: '.$url .$error->getMessage());
          exit;
        }
  }

  public function AddConfig() {
    $this->Errors('?view=perfil&error=');
    $this->db->query("INSERT INTO user_categoria_cursos(fecha,iduser,idcategoria_cursos) VALUES ('$this->fecha','$this->iduser','$this->idcategoria_cursos');");
    $this->db->query("UPDATE user SET institucion='$this->institucion' WHERE iduser= '$this->iduser';");
    $this->db->query("UPDATE user SET id_area='$this->area' WHERE iduser= '$this->iduser';");
    $this->db->query("UPDATE user SET idtype_user='$this->tipo_usuario' WHERE iduser= '$this->iduser';");
    header('location: ?view=perfil&id='.$this->iduser.'&success=true');

  }

  public function EditConfig() {
    $this->Errors('?view=perfil&error=');
    $this->db->query("INSERT INTO user_categoria_cursos(fecha,iduser,idcategoria_cursos) VALUES ('$this->fecha','$this->iduser','$this->idcategoria_cursos');");
    header('location: ?view=perfil&id='.$this->iduser.'&success=true');

  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
