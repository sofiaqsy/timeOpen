<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> el producto ha sido editado.
    </div>';
  }

  if(isset($_GET['error'])) {
    if($_GET['error'] == 1) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> todos los campos deben estar llenos.
      </div>';
    } else {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> debe existir una categoría para asociar al foro.
      </div>';
    }
  }

  ?>



<div class="row container">
  <div class="pull-right">
    <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger " href="?view=productos">Gestionar Productos</a>
     </li></ul></div>
     <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger " href="?view=productos&mode=add">Subir Producto</a>
     </li></ul></div>

    </div>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-comments"></i> Productos</a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Editar un producto</div>

      <div class="row cajas">
        <div class="col-md-12">
          <form class="form-horizontal" action="?view=productos&mode=edit&id=<?php echo $_GET['id'] ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <fieldset>


              <script>
              $(document).ready(function(){
                $('#marca').change(function() {
                  var id=$('#marca').val();
                  $('#modelo').load('?view=datos&mode=combo&id='+id);


                });



                    });
              </script>



              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Tipo de celular</label>
                <div class="col-lg-10">
                  <select class="form-control" name='marca' id='marca'>
                      <?php

                        foreach($_tipos as $id_tipo => $array_tipo) {
                          if($id_tipo== $_tipos[$_modelos[$_productos[$_GET['id']]['COD_MOD']]['COD_MAR']]['COD_TIPO']){
                              echo '<option value="'.$id_tipo.'" selected>'.$_tipos[$id_tipo]['DES_TIPO'].'</option>';
                          }else{
                            echo '<option value="'.$id_tipo.'" selected>'.$_tipos[$id_tipo]['DES_TIPO'].'</option>';
                          }


                        }

                      ?>
                  </select>



                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Modelo</label>
                <div class="col-lg-10">
                  <select class='form-control' name='modelo' id='modelo'>
                      <option value="OpModeloTodos">Elige el nuevo modelo</option>
                    </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Precio</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" maxlength="250" name="precio" placeholder="Precio del celular" value="<?php echo $_productos_usuarios[$_GET['id']]['PRE_PROD'] ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Condicion</label>
                <div class="col-lg-10">
                  <select name="estado" class="form-control">
                    <option <?php if($_productos_usuarios[$_GET['id']]['EST_PROD']=='N'){echo 'selected ';}?>value="N" >Nuevo</option>';
                    <option <?php if($_productos_usuarios[$_GET['id']]['EST_PROD']=='U'){echo 'selected ';}?>value="U">Usado</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Descripcion</label>
                <div class="col-lg-10">
                 <textarea class="form-control" name="descripcion"   maxlength="100"><?php echo $_productos_usuarios[$_GET['id']]['DES_PROD']?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label"> Imagen</label>
                <div class="col-lg-10">
                  <input id="campofotografia" name="campofotografia" type="file" />
                </div>
                <br><br>

                <center><div >
                    <img src="<?php echo CARP_IMG ?>img3.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap Responsive Web Template Mobile website template Free">
                </div></center>
              </div>






              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </fieldset>
          </form>

        </div>
      </div>
  </div>
</div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
