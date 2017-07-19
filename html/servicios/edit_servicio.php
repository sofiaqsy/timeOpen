<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php'); ?>
<section class="mbr-section mbr-after-navbar" style="min-height:563px;">
<div class="mbr-section__container container mbr-section__container--isolated">
  <div class="row container">
      <div class="pull-right">
          <div class="mbr-navbar__column">
                <a class="btn btn-primary" href="?view=servicios">Gestionar servicios</a>
            </div>
            <div class="mbr-navbar__column">
                  <a class="btn btn-primary " href="?view=servicios">Crear servicio</a>
              </div>
        </div>
      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
      </ol>
  </div>
  <form class="form-horizontal" action="?view=servicios&mode=edit&id=<?php echo $idservice?>" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>Editar servicio</legend>
      <?php
          if(isset($_GET['success'])) {
            echo '<div class="alert alert-dismissible alert-success">
              <strong>Completado!</strong> el producto ha sido editado</div>';
          }

          if(isset($_GET['error'])) {
            if($_GET['error'] == 1) {
              echo '<div class="alert alert-dismissible alert-danger">
                <strong>Error!</strong></strong> todos los campos deben estar llenos.
              </div>';
            } else {
              echo '<div class="alert alert-dismissible alert-danger">
                <strong>Error!</strong></strong> debe existir un curso asociado
              </div>';
            }
          }
          ?>
      <div class="form-group">
        <label class="col-md-4 control-label" for="_categoria_lista">Curso</label>
        <div class="col-md-4">
          <select class="form-control" name="curso" required>
            <option>Seleccionar</option>

            <?php  if(false!=$_cursosporusuarios): foreach ($_cursosporusuarios as $id_cursosporusuarios => $value):
              if( $id_cursosporusuarios==$_serviciosporusuario[$idservice]['id_curso']): ?>
              <option value="<?php echo $id_cursosporusuarios ?>" selected><?php echo $_cursosporusuarios[$id_cursosporusuarios]["nombre"] ?></option>
              <?php else :?>
                <option value="<?php echo $id_cursosporusuarios ?>"><?php echo $_cursosporusuarios[$id_cursosporusuarios]["nombre"] ?></option>
              <?php endif;?>
            <?php endforeach; endif?>
          </select>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="_lugar">Titulo</label>
        <div class="col-md-4">
          <input id="titulo" name="titulo" placeholder="Asesoria principios de Algoritmos" class="form-control input-md" required="" type="text" value="<?php if(!empty($_serviciosporusuario[$idservice]['titulo'])){echo $_serviciosporusuario[$idservice]['titulo']; }?>">
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="descripcion_completa">Descripción Completa</label>
        <div class="col-md-4">
          <textarea class="form-control" id="descripcion"  required="" name="descripcion" placeholder="Se guia en para el tercer examen de algotirmos, con ejercicios de examenes pasados"
            ><?php if(!empty($_serviciosporusuario[$idservice]['descripcion'])){echo $_serviciosporusuario[$idservice]['descripcion']; }?></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="horas">Horas totales</label>
        <div class="col-md-4">
          <input id="horas" name="horas" placeholder="2" class="form-control input-md" required="" type="text" value="<?php if(!empty($_serviciosporusuario[$idservice]['horas'])){echo $_serviciosporusuario[$idservice]['horas']; }?>">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="cantidad_alumnos">Cantidad de usuarios</label>
        <div class="col-md-4">
          <select class="form-control" name="cantidad_alumnos" required>
            <option value="1" >1</option>
          </select>
        </div>
      </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="price" >Precio personal</label>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon">S/ </span>
            <input id="price" name="price" class="form-control" placeholder="0,00" required="" type="text" value="<?php if(!empty($_serviciosporusuario[$idservice]['price'])){echo $_serviciosporusuario[$idservice]['price']; }?>">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="lugar">Lugar de tutoria</label>
        <div class="col-md-4">
          <input id="lugar" name="lugar" placeholder="UTP, en la biblioteca de la sede central" class="form-control input-md" required="" type="text" value="<?php if(!empty($_serviciosporusuario[$idservice]['lugar'])){echo $_serviciosporusuario[$idservice]['lugar']; }?>">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="detalles">Detalles</label>
        <div class="col-md-4">
          <textarea class="form-control" id="detalles" name="detalles" placeholder=" A las 5pm estare en la entrada de la biblioteca con una casaca negra" ><?php if(!empty($_serviciosporusuario[$idservice]['detalles'])){echo $_serviciosporusuario[$idservice]['detalles']; }?></textarea>
        </div>
      </div>

      <!-- File Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="imagen">Buscar imagens</label>
        <div class="col-md-4">
          <input id="imagen" name="imagen" class="input-file" type="file">
          <span class="help-block">Elige una imagen horizontal</span>
        </div>
      </div>


      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="cancelar"></label>
        <div class="col-md-4">
          <div class="col-xs-12 divider text-center">
            <br>
            <div class="col-xs-12 col-sm-6 ">
                <button class="btn btn-primary" type="submit">
                  Guardar cambios
                </button>
                </div>
                <div class="col-xs-12 col-sm-6 ">
                <a href="?view=servicios"><button class="btn btn-default" >
                  Cancelar
                </button></a>
              </div>
            </div>
        </div>
      </div>
    </fieldset>
  </form>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
