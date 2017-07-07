<?php
function Users() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM user;");

  $usuarios_actuales = $db->rows($sql);
  if(!isset($_SESSION['cantidad_usuarios'])) {
    $_SESSION['cantidad_usuarios'] = $usuarios_actuales;
  }

  if($_SESSION['cantidad_usuarios'] != $db->rows($sql)) {
    while($d = $db->recorrer($sql)) {
      $users[$d['iduser']] = $d;
    }
  } else {
    if(!isset($_SESSION['users'])) {
      while($d = $db->recorrer($sql)) {
        $users[$d['iduser']] = $d;
      }
    } else {
      $users = $_SESSION['users'];
    }
  }
  $_SESSION['users'] = $users;
  $db->liberar($sql);
  $db->close();
  return $_SESSION['users'];
}
?>
