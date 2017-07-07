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
          <li><a href="?view=index"><i class="glyphicon glyphicon-home"></i> Perfil</a></li>
        </ol>
        <div class="col-md-4">
        	 <div class="well profile">
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
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                         <span class="fa fa-star-o"></span>
                                    </a>
                                    </p>
                                </figcaption></center>
                            </figure>
                        <p><strong>Usuario: </strong> <?php echo $_users[$id_usuario]['name'].' '.$_users[$id_usuario]['last_name']; ?> </p>
                        <p><strong>Email: </strong> <?php echo $_users[$id_usuario]['email']?> </p>
                        <p><strong>Universidad: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                        <p><strong>Tipo de Usuario</strong> Read, out with friends, listen to music, draw and learn new things. </p>
                        <p><strong>Area: </strong>  </p>
                        <p><strong>Categorias: </strong>
                            <span >Quimica</span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-6 emphasis">
                        <button class="btn btn-block btn-color-azul" data-toggle="modal" data-target="#Configurar"><span class="glyphicon glyphicon-wrench"></span>Configurar</button>
                    </div>
                    <div class="col-xs-12 col-sm-6 emphasis">

                        <a href="?view=perfil&mode=edit&id=<?php echo $_users[$id_usuario]['iduser']; ?>"><button class="btn btn-color-azul btn-block"><span class="fa fa-plus-circle"></span> Editar Perfil </button></a>
                    </div>
                </div>
        	 </div>
    		</div>
        <div class=" col-md-8">
          <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="views/app/images/users/default.jpg" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                    <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                                    <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </span>
                    <hr>
                    <div class="post-content">
                        <p>Simple post content example.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                    </div>
                    <hr>
                    <div>
                        <div class="pull-right btn-group-xs">
                            <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
                        </div>
                        <div class="pull-left">
                            <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
                        </div>
                        <br>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="views/app/images/users/default.jpg" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                        </div>
                    </div>
                </div>

        </div>
    	</div>

</div>
  </div>
</section>
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'public/configurar.php'); ?>
<script>

$(document).ready(function(){
  $('#divarea').hide();
  $('#divcategoria').hide();
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

          });
        });


</script>
<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
