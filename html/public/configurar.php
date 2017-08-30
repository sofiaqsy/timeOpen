<div class="modal fade" id="Configurar" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-wrench"></span> Configurar</h4>
       </div>
<div class="modal-body">
 <form class="form-horizontal" method="post" action="?view=perfil&mode=config&id=<?php echo $id_usuario; ?>">
   <div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label" >Institución</label>
     <div class="col-sm-10">
       <input class="form-control" id="institucion"  name="institucion" placeholder="Universidad a la que perteneces" value="<?php  if(!empty($_users[$id_usuario]['institucion'])){echo $_users[$id_usuario]['institucion']; }    ?>">
     </div>
   </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tipo de usuario</label>
    <div class="col-sm-10">
      <select id="tipe_user" class="form-control" name="tipe_user" >
        <option value="1" >Normal</option>
        <option value="2" <?php if ($_users[$id_usuario]['idtype_user']==2 || $_users[$id_usuario]['idtype_user']==3): ?>selected <?php endif; ?>>Experto</option>
      </select>
    </div>
  </div>
  <div class="form-group" id="divarea">
    <label  class="col-sm-2 control-label">Area</label>
    <div class="col-sm-10">

      <select id="area" class="form-control " >
        <option >Elige el area</option>
        <?php foreach ($_areas as $id_area => $value):
          if( $id_area==$_users[$id_usuario]['id_area']): ?>
          <option value="<?php echo $id_area?>" selected><?php echo $_areas[$id_area]["nombre"] ?></option>
          <?php else :?>
            <option value="<?php echo $id_area ?>"><?php echo $_areas[$id_area]["nombre"] ?></option>
          <?php endif;?>
        <?php endforeach; ?>
      </select>
  </div>
</div>
  <div class="form-group" id="divcategoria">
    <label for="inputPassword3" class="col-sm-2 control-label">Categoria de cursos</label>
    <div class="col-sm-10" id="categoria" name="categoria">
    </div>
  </div>
  <div id=anuncio></div>

  <button type="submit" class="btn btn-primary " style="width:100%"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar cambios</button>
  </form>
  </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
</div>
