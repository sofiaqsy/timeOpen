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
                      <th>Situacion</th>
                      <th>Fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>
                          <a class="teal-text" style="padding:10px 15px;"><i class="glyphicon glyphicon-pencil"></i></a>
                          <a class="teal-text"><i class="glyphicon glyphicon-remove"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Larrsssy</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
       </div>
    </div>
  </div>

</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
