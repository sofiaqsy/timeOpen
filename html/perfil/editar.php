<!-- encabezado, llama a html index/overall/header.php-->
<?php include(HTML_DIR . 'overall/header.php'); ?>
<!-- comienzo del cuerpo-->
<body>
  <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>
 <!-- cuerpo, llama a html index/overall/topnav.php-->
<?php include(HTML_DIR . '/overall/topnav.php'); ?>


<section class="mbr-section mbr-after-navbar">
  <div class="mbr-section__container container mbr-section__container--isolated">
    <div class="container">
    	<div class="row">
        <ol class="breadcrumb">
          <li><a href="?view=index"><i class="fa fa-user"></i> Editar perfil</a></li>
        </ol>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="text-center">
                <img src="<?php echo CARP_IMG_PERF.$_users[$id_usuario]['photo']?>" style="max-width: 200px;" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block well well-sm">
              </div>
            </div>
            <!-- edit form column -->
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
              <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
              </div>
              <h3>Datos personales</h3>
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-lg-3 control-label">Nombres :</label>
                  <div class="col-lg-8">
                    <input class="form-control" value="<?php if(!empty($_users[$id_usuario]['name'])){echo $_users[$id_usuario]['name']; }   ?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Apellidos :</label>
                  <div class="col-lg-8">
                    <input class="form-control" value="<?php if(!empty($_users[$id_usuario]['last_name'])){echo $_users[$id_usuario]['last_name']; }  ?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Email :</label>
                  <div class="col-lg-8">
                    <input class="form-control" value="<?php if(!empty($_users[$id_usuario]['email'])){echo $_users[$id_usuario]['email']; }  ?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Celular:</label>
                  <div class="col-lg-8">
                    <input class="form-control" value="<?php if(!empty($_users[$id_usuario]['cellphone'])){echo $_users[$id_usuario]['cellphone']; }  ?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Codigo UTP</label>
                  <div class="col-lg-8">
                    <input class="form-control" value="<?php if(!empty($_users[$id_usuario]['code_UTP'])){echo $_users[$id_usuario]['code_UTP']; }  ?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-8">
                    <input class="btn btn-primary" value="Guardar cambios" type="button">
                    <span></span>
                    <input class="btn btn-default" value="Cancel" type="reset">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

</div>
  </div>
</section>
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
<!--fin de cuerpo-->
</html>
