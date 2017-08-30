<?php
class User {

  private $db;
  private $idusuario;
  private $nombres;
  private $apellidos;
  private $telefono;
  private $codigoUTP;
  private $imagen;

  public function __construct() {
    $this->db = new Conexion();
  }

  private function Errors($url) {

    try {
      if(empty($_POST['name'] ) || empty($_POST['last_name'])) {
        throw new Exception(1);
      } else {
        $this->nombres=$this->db->real_escape_string($_POST['name']);
        $this->apellidos=$this->db->real_escape_string($_POST['last_name']);
        $this->telefono=$this->db->real_escape_string($_POST['cellphone']);
        $this->codigoUTP=$this->db->real_escape_string($_POST['code_utp']);
      }
      if(empty($_FILES['imagen']['name'])){
        $this->imagen='';
      } else {
        if(($_FILES["imagen"]["type"] == "image/gif") ||
        ($_FILES["imagen"]["type"] == "image/jpeg") ||
        ($_FILES["imagen"]["type"] == "image/jpg") ||
        ($_FILES["imagen"]["type"] == "image/png") ){
          if(($_FILES['imagen']['size'] <= 200000)){
            $ext = str_replace('image/','.',$this->db->real_escape_string($_FILES['imagen']['type']));
            $this->imagen='User_'.$_GET['id'].$ext;
          } else {
            throw new Exception(3);
          }
        } else {
          throw new Exception(2);
        }
      }

    } catch (Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }

  public function Edit(){
    $this->id = $_GET['id'];
    $this->Errors('?view=perfil&mode=edit&id='.$this->id.'&error=');
    if(!empty($this->imagen)){
      include('core/bin/functions/subir_img.php');
      subir_img(CARP_IMG_PERF,$this->imagen);
      $this->db->query("UPDATE user SET name='$this->nombres',last_name='$this->apellidos',code_UTP='$this->codigoUTP',cellphone='$this->telefono', photo='$this->imagen' WHERE iduser='$this->id';");
    } else {
      $this->db->query("UPDATE user SET name='$this->nombres',last_name='$this->apellidos',code_UTP='$this->codigoUTP',cellphone='$this->telefono' WHERE iduser='$this->id';");
    }
    header('location: ?view=perfil&mode=edit&id='.$this->id.'&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
