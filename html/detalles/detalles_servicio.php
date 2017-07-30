<html>
<!-- encabezado, llama a html index/overall/header.php-->
<?php include(HTML_DIR . 'overall/header.php'); ?>
<!-- comienzo del cuerpo-->
<body>
   <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>
   <!-- cuerpo, llama a html index/overall/topnav.php-->
<?php include(HTML_DIR . '/overall/topnav.php'); ?>
  <section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
    if(isset($_GET['success'])) {
      echo '<div class="alert alert-dismissible alert-success">
        <strong>Activado!</strong> tu usuario ha sido activado correctamente.
      </div>';
    }

    if(isset($_GET['error'])) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> no se ha podido activar tu usuario.
      </div>';
    }
    ?>
  <div class="row container">
      <?php
          if(isset($_SESSION['app_id']) && $_users[$_SESSION['app_id']]['idtype_user']>1) :
            echo '
            <div class="pull-right">
              <div class="mbr-navbar__column">
                <a class="btn btn-primary" href="?view=servicios">Gestionar servicios</a>
              </div>
            </div>
            ';
          endif;
      ?>
      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
      </ol>
  </div>
	<div class="container" style="padding-left:0px">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
              <center><img src="<?php echo CARP_IMG_SERV.$_services[$id_services]['imagen'] ?>" style=""></center>
						</div>

					</div>
					<div class="details col-md-6">
            <div id="_AJAX_NOT_"></div>
						<h3 class="product-title" id="titulo"><?php echo $_services[$id_services]['titulo'] ?></h3>
						<div class="rating">
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><?php echo $_services[$id_services]['descripcion'] ?></p>
						<h4 class="price">Precio: <span>S/ <?php echo $_services[$id_services]['price'] ?></span></h4>
						<p class="vote"><strong>Detalles de lugar de asesoria</strong> <?php echo $_services[$id_services]['lugar'] ?></p>
            <p class="vote"><?php echo $_services[$id_services]['detalles'] ?></p>
            <div style="visibility: hidden" id="id_ser"><?php echo $_services[$id_services]['idservice'] ?></div>
            <div class="action">
							<button class="btn btn-primary" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- fin de la  seccion cabeceza 2-->
<!-- footer, llama a html index/overall/footer.php-->
<script src="views/app/js/notificacion.js"></script>
<?php include(HTML_DIR . 'overall/footer.php'); ?>
<!--fin de cuerpo-->
