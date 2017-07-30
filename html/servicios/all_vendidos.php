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
          <li class="list-group-item text-muted "><a href="?view=servicios" class="active" style="padding:0px 0px;" >Publicados</a></li>
          <li class="list-group-item text-muted active "><a href="?view=servicios&mode=vendidos" class="active" style="padding:0px 0px;" >Pendientes</a></li>
          <li class="list-group-item text-muted "><a href="?view=servicios&mode=completados" class="active" style="padding:0px 0px;" >Completados</a></li>
        </ul>
    </div>

  <div class="col-md-9">
    <div class="row categorias_con_foros">
      <div class="col-sm-12">
            <div class="row cajas table-striped">
              <div class="col-md-12">
                <table class="table">
                  <?php if(false!=$_vendidosporusuarios):?>
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Curso</th>
                      <th>Titulo</th>
                      <th>Nombres de Comprador</th>
                      <th>Monto Acordado</th>
                      <th>Fecha de venta</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <?php $cnt=0;
                  foreach ($_vendidosporusuarios as $id_vendidosporusuarios => $value):
                  $cnt++;
                  ?>
                  <tbody>
                  <tr>
                  <th scope="row" id="idservice" value="<?php echo $id_vendidosporusuarios ?>"><?php echo $cnt; ?></th>
                  <td><?php echo $_cursosporusuarios[$_serviciosporusuario[$_vendidosporusuarios[$id_vendidosporusuarios]['id_service']]['id_curso']]['nombre_corto']; ?></td>
                  <td><?php echo Cortar($_serviciosporusuario[$_vendidosporusuarios[$id_vendidosporusuarios]['id_service']]['titulo'],20) ?></td>
                  <td><?php echo $_users[$_vendidosporusuarios[$id_vendidosporusuarios]['id_user_comprador']]['name']." ".$_users[$_vendidosporusuarios[$id_vendidosporusuarios]['id_user_comprador']]['last_name'] ?></td>
                  <td><?php echo $_vendidosporusuarios[$id_vendidosporusuarios]['precio_total'] ?></td>
                  <td><?php echo Cortar($_vendidosporusuarios[$id_vendidosporusuarios]['fecha'],10) ?></td>
                  <td>
                  <a class="teal-text" style="padding:5px 5px;" href="?view=servicios&mode=edit&id=<?php echo $id_serviciosporusuario ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="teal-text" onclick="DeleteItem('¿Está seguro de eliminar este servicio?','?view=servicios&mode=delete&id=<?php echo $id_serviciosporusuario ?>')" ><i class="glyphicon glyphicon-remove"></i></a>
                  </td>
                  </tr>
                <?php endforeach;else: ?>
                  <div class="alert alert-dismissible alert-success">
                    <strong>Vacio</strong> Aun no se ha realizado ninguna
                  </div>
                <?php endif; ?>

                  </tbody>
                </table>
              </div>
            </div>
       </div>
    </div>
  </div>
</section>

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
