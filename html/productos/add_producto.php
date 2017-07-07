<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> el producto ha sido subido</div>';
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
         <a class="mbr-buttons__btn btn btn-danger active" href="?view=productos&mode=add">Subir Producto</a>
     </li></ul></div>

    </div>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-comments"></i> Productos</a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Subir un producto</div>

      <div class="row cajas">
        <div class="col-md-12">
          <form class="form-horizontal" action="?view=productos&mode=add" method="POST" enctype="multipart/form-data">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Tipo de celular</label>
                <div class="col-lg-10">

                  <script>
                  $(document).ready(function(){
                    $('#marca').change(function() {
                      var id=$('#marca').val();
                      $('#modelo').load('?view=datos&mode=combo&id='+id);
                    });
                        });
                  </script>

                  <select class="form-control" name='marca' id='marca'>
                      <?php
                      if(false != $_tipos) {
                        foreach($_tipos as $id_tipo => $array_tipo) {
                          echo '<option value="'.$id_tipo.'">'.$_tipos[$id_tipo]['DES_TIPO'].'</option>';
                        }
                      }else{
                          echo '<option value="0">No existen marcas</option>';
                      }
                      ?>
                  </select>

                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Modelo</label>
                <div class="col-lg-10">


                      <select class='form-control' name='modelo' id='modelo'>
                          <option value="OpModeloTodos">TODOS</option>
                        </select>


                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Precio</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" maxlength="250" name="precio" placeholder="Precio del celular">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Condicion</label>
                <div class="col-lg-10">
                  <select name="estado" class="form-control">
                    <option value="N">nuevo</option>';
                    <option value="U">usado</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Descripcion</label>
                <div class="col-lg-10">
                 <textarea class="form-control" name="descripcion"  maxlength="100"></textarea>
                </div>
              </div>


              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label"> Imagen</label>
                <div class="col-lg-10">
                  <input id="imagen" name="imagen" type="file" />

                </div>
              </div>



              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Crear</button>
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
