  <?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php'); ?>
<section class="mbr-section mbr-after-navbar" style="min-height:563px;">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Realizado!</strong> el producto se ha borrado correctamente.
    </div>';
  }

  ?>

  <div class="row container">
      <div class="pull-right">
          <div class="mbr-navbar__column">
                <a class="btn btn-primary active" href="?view=servicios">Gestionar servicios</a>
            </div>
            <div class="mbr-navbar__column">
                  <a class="btn btn-primary" href="?view=servicios&mode=add">Crear servicio</a>
              </div>
        </div>
      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
      </ol>
  </div>
    <div class="col-sm-3" style="padding-left: 0px;"><!--left col-->
        <ul class="nav nav-pills nav-stacked">
          <li class="list-group-item text-muted active"><a href="#" class="active" style="padding:0px 0px;" >Publicados</a></li>
          <li class="list-group-item text-muted "><a href="#" class="active" style="padding:0px 0px;" >Reservados</a></li>
          <li class="list-group-item text-muted "><a href="#" class="active" style="padding:0px 0px;" >Vendidos</a></li>
        </ul>
    </div>

  <div class="col-md-9">
    <div class="row categorias_con_foros">
      <div class="col-sm-12">
            <div class="row cajas table-striped">
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Curso</th>
                      <th>Titulo</th>
                      <th>Precio</th>
                      <th>Estado</th>
                      <th>nro. alumnos</th>
                      <th>Fecha Caducidad</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(false!=$_serviciosporusuario):$cnt=0;
                  foreach ($_serviciosporusuario as $id_serviciosporusuario => $value):
                  $cnt++;
                  ?>
                  <tr>
                  <th scope="row" id="idservice" value="<?php echo $id_serviciosporusuario ?>"><?php echo $cnt; ?></th>
                  <td><?php echo Cortar($_cursosporusuarios[$_serviciosporusuario[$id_serviciosporusuario]['id_curso']]['nombre'],20); ?></td>
                  <td><?php echo Cortar($_serviciosporusuario[$id_serviciosporusuario]['titulo'],20) ?></td>
                  <td><?php echo $_serviciosporusuario[$id_serviciosporusuario]['price'] ?></td>
                  <td><?php if($_serviciosporusuario[$id_serviciosporusuario]['estado']=1): ?>Activo<?php else: ?>Inactivo <?php endif;?></td>
                  <td><?php echo $_serviciosporusuario[$id_serviciosporusuario]['cantidad_alumnos'] ?></td>
                  <td><?php echo $_serviciosporusuario[$id_serviciosporusuario]['fecha_cad'] ?></td>
                  <td>
                  <a class="teal-text" style="padding:5px 5px;" href="?view=servicios&mode=edit&id=<?php echo $id_serviciosporusuario ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="teal-text" onclick="DeleteItem('¿Está seguro de eliminar este servicio?','?view=servicios&mode=delete&id=<?php echo $id_serviciosporusuario ?>')" ><i class="glyphicon glyphicon-remove"></i></a>
                  </td>
                  </tr>
                  <?php endforeach;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
       </div>
    </div>
  </div>
</section>

<?php include(HTML_DIR . 'servicios/edit_servicio.php'); ?>
<?php include(HTML_DIR . 'overall/footer.php'); ?>
<script>
$( document ).ready(function() {
 	$("#editar").click(function(){
   alert($("#idservice").text());

    	});
});
</script>
</body>
</html>