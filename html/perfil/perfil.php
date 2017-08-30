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

        <div class="row container" style="margin-right:10px;">
          <?php if(isset($_SESSION['app_id']) && $_users[$_SESSION['app_id']]['idtype_user']>1) : ?>
          <div class="pull-right">
            <div class="mbr-navbar__column">
              <a class="btn btn-primary" href="?view=servicios">Gestionar servicios</a>
            </div>
          </div>
        <?php endif; ?>

          <ol class="breadcrumb">
              <li><a href="?view=index"><i class="glyphicon glyphicon-home"></i> Home</a>
              </li>
          </ol>
       </div>


        <div class="col-md-4" style="padding-left:0px;">
        	 <div class="well profile" style="width :100%;">
             <?php if(isset($_GET['success'])) :?>
             <div class="alert alert-info alert-dismissable">
               <a class="panel-close close" data-dismiss="alert">×</a>
               <i class="fa fa-coffee"></i>
               <strong>Configuraciones</strong>Tus configuraciones han sido guardadas
             </div>
           <?php endif ?>
           <?php if(isset($_GET['error'])) :?>
           <div class="alert alert-danger alert-dismissable">
             <a class="panel-close close" data-dismiss="alert">×</a>
             <i class="fa fa-coffee"></i>
             <strong>Error</strong>Tus configuraciones no han sido guardadas
           </div>
         <?php endif ?>
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-12">
                        <center><h2><?php echo $_users[$id_usuario]['name'].' '.$_users[$id_usuario]['last_name']; ?></h2></center>
                            <figure>
                                <center><img src="<?php echo CARP_IMG_PERF.$_users[$id_usuario]['photo']?>" style="width:150px; " class="img-circle img-responsive">
                                <figcaption class="ratings">
                                    <p>Ratings
                                    <a href="#">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </a>
                                    <a href="#">
                                         <span class="glyphicon glyphicon-star"></span>
                                    </a>
                                    </p>
                                </figcaption></center>
                            </figure>
                            <table class="table table-user-information">
                              <tbody>
                                <tr>
                                  <td>Usuario:</td>
                                  <td><?php echo $_users[$id_usuario]['name'].' '.$_users[$id_usuario]['last_name']; ?></td>
                                </tr>
                                <tr>
                                  <td>Email:</td>
                                  <td> <?php echo $_users[$id_usuario]['email']?></td>
                                </tr>
                                <tr>
                                  <td>Universidad</td>
                                  <td><?php echo $_users[$id_usuario]['institucion']?></td>
                                </tr>
                                <tr>
                                  <td>Tipo de Usuario</td>
                                  <td><?php echo $_users[$id_usuario]['idtype_user']?></td>
                                </tr>
                                <tr>
                                  <td>Area</td>
                                  <td><?php echo $_users[$id_usuario]['id_area']?></td>
                                </tr>
                              </tbody>
                            </table>
                    </div>
                </div>
                <?php if($id_usuario==$this_user) :?>
                <div class="col-xs-12  text-center">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#Configurar"><span class="glyphicon glyphicon-wrench"></span>Configurar</button>
                        <a href="?view=perfil&mode=edit&id=<?php echo $id_usuario; ?>"><button class="btn btn-primary"><span class="fa fa-plus-circle"></span> Editar Perfil </button></a>
                </div>
                <?php endif;?>
        	 </div>
    		</div>
        <div class=" col-md-8">
        <?php if(false!=$_adquiridosporusuarios):
          foreach ($_adquiridosporusuarios as $id_adquiridosporusuarios => $value):?>
        <div class="panel panel-default" style="margin-bottom:8px;">
              <div class="panel-body">
                <h4><a href="#" style="text-decoration:none;">Nueva compra</a> <small><p ><i><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_adquiridosporusuarios[$id_adquiridosporusuarios]['fecha'] ?></i></p></small></h4>
                  <div class="navbar-right" style="margin-right :10px;">
                    <span class="glyphicon glyphicon-lock"></span>
                  </div>
                  <hr>
                  <div class="post-content">
                      <p><?php echo $_allserviciosinactivos[$_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']]['titulo'];?></p>
                      <p><?php echo $_allserviciosinactivos[$_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']]['descripcion'].". Monto total : S/".$_allserviciosinactivos[$_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']]['price'].".00 ";?></p>
                      <p><?php echo $_allserviciosinactivos[$_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']]['lugar']." ". $_allserviciosinactivos[$_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']]['detalles'];?></p>
                  </div>
                  <span>
                      <div class="navbar-right" style="margin-right :10px;">
                          <div class="dropdown">
                            <?php if($_adquiridosporusuarios[$id_adquiridosporusuarios]['estado']!="TERMINADO") :?>
                                <a onclick="DeleteItem('¿Está seguro de que marcar como terminado?','?view=perfil&mode=terminado&id=<?php echo $id_usuario?>&idv=<?php echo $id_adquiridosporusuarios?>&ids=<?php echo $_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']?>')"><button class="btn btn-primary" >Marcar como terminado</button></a>
                                <a onclick="DeleteItem('¿Está seguro de cancelar este servicio?','?view=perfil&mode=cancel&id=<?php echo $id_usuario?>&idv=<?php echo $id_adquiridosporusuarios?>&ids=<?php echo $_adquiridosporusuarios[$id_adquiridosporusuarios]['id_service']?>')"><button class="btn btn-primary" >Cancelar</button></a>
                            <?php else: ?>
                                  <p>Completado con éxito</p>
                            <?php endif; ?>
                          </div>
                      </div>
                  </span>
                  <hr>
              </div>
      </div>
    <?php  endforeach;endif;?>
    <div class="panel panel-default" style="margin-bottom:8px;">
          <div class="panel-body">
              <h4><a href="#" style="text-decoration:none;">BIENVENIDO</a></h4>
              <div class="navbar-right" style="margin-right :10px;">
                <span class="glyphicon glyphicon-lock"></span>
              </div>
              <hr>
              <div class="post-content">
                  <p>Hola <?php echo $_users[$id_usuario]['name'];?></p>
                  <p>En esta seccion podras ver tus movimientos, tambien podras cancelar o terminar algunar servicio que contrataste, no te preocupes
                  solo tu puedes ver  esta seccion</p>
              </div>
              <hr>
          </div>
  </div>

</section>
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'public/configurar.php'); ?>
<script>

$(document).ready(function(){
  $('#divarea').hide();
  $('#divcategoria').hide();

  var id=$('#tipe_user').val();

  if(id==2){
    $('#divarea').show();
    $('#divcategoria').show();
  }else if(id==1){
         $('#divarea').hide();
         $('#divcategoria').hide();
  }

  var id=$('#area').val();
  $('#categoria').load('?view=datos&mode=combo&idarea='+id);

        $('#tipe_user').change(function() {
          var id=$('#tipe_user').val();
           if(id==2){
             $('#divarea').show();
             $('#divcategoria').show();
           }else if(id==1){
             			$('#divarea').hide();
                  $('#divcategoria').hide();
           }
          });

          $('#area').change(function() {
            var id=$('#area').val();
            $('#categoria').load('?view=datos&mode=combo&idarea='+id);
            $('.tokenize-demo').tokenize2();

          });
        });


</script>
<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
