<?php include(HTML_DIR . 'overall/header.php'); ?>
<?php include(HTML_DIR . '/overall/topnav.php'); ?>
<?php include(HTML_DIR . '/overall/nav-vertical.php'); ?>

           <div class="col-sm-9  affix-content" >
               <div class="fluid-list cnt-curso-m">
                 <div class="fluid-list list-num-c custom-biialab">
                   <div class="row">
                     <?php if (false!=$_services): foreach ($_services as $id_services => $value):?>
                        <div class="col-md-4 cntContador" style="margin-top: 7px;">
                          <article class="fluid-list lead-nota">
                              <a href="?view=detalles&id=<?php echo $id_services ?>">
                                <span class="spany"><?php echo $_areas[$_allcategorias[$_allcursos[$_services[$id_services]['id_curso']]['idcategoria_cursos']]['idarea']]['nombre'] ?></span>
                                <br>
                                  <div class="fluid-list cnt-nota-slider">
                                      <h4><?php echo Cortar($_services[$id_services]['titulo'], 50)?></h4>
                                         <p><?php echo Cortar($_services[$id_services]['descripcion'], 66)?></p>
                                  </div>
                                  <?php if (!empty($_services[$id_services]['imagen'])):?>
                                    <figure>
                                     <center><img src="<?php echo CARP_IMG_SERV.$_services[$id_services]['imagen'] ?>" style="max-height:150px; max-width:300px;"></center>
                                   </figure>
                                 <?php endif;?>
                                 <div class="fluid-list rated-s">
                                     <div class="star-ratings-sprite">
                                         <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                     </div>
                                     <span>S/<?php echo $_services[$id_services]['price']?><em>(188)</em></span>
                                 </div>
                              </a>
                              <div class="space-ten"></div>
                                <div class="btn-ground" id="boton<?php echo $id_services ?>">
                                  <button class="btn btn-primary col-md-12 obtener" type="button" data-titulo="<?php echo $_services[$id_services]['titulo']; ?>" data-id="<?php echo $id_services ?>" <?php if (!isset($_SESSION['app_id'])) {
                                    echo'data-toggle="modal" data-target="#Login"';
                                  }?> >Obtener</button>
                                </div>
                              <div class="space-ten"></div>
                          </article>
                       </div>
                     <?php endforeach;endif; ?>
                   </div>
                 </div>
              </div>
        </div>
</div>

<!-- fin de la  seccion cabeceza 2-->
<!-- footer, llama a html index/overall/footer.php-->
<script type="text/javascript">
$(document).ready(function(){

  $('.obtener').on('click',function () {
    var id_ser=$(this).data("id");
    var titulo=$(this).data("titulo");
     form = '&titulo=' + titulo + '&id_ser=' + id_ser;
     connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
               connect.onreadystatechange = function() {
         if(connect.readyState == 4 && connect.status == 200) {
           if(connect.responseText == 1) {
               result = '<div class="alert alert-dismissible alert-success">';
               result += '<h4>Registro completado!</h4>';
               result += '<p><strong>Estamos enviando tu notificacion...</strong></p>';
               result += '</div>';
             document.getElementById('_AJAX_NOT_').innerHTML = result;
             location.reload();
           }else{
             document.getElementById('_AJAX_NOT_').innerHTML = connect.responseText;
           }
         }else if(connect.readyState != 4){
             result = '<div class="alert alert-dismissible alert-warning">';
             result += '<button type="button" class="close" data-dismiss="alert">x</button>';
             result += '<h4>Procesando...</h4>';
             result += '<p><strong>Estamos procesando tu notificacion...</strong></p>';
             result += '</div>';
           document.getElementById('_AJAX_NOT_').innerHTML = result;
         }
             }
         connect.open('POST','ajax.php?mode=not',true);
       connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
       connect.send(form);
       $(this).text("Adquirido");
       $(this).attr("disabled", true);
      });


});

</script>
<script src="views/app/js/notificacion.js"></script>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

<!--fin de cuerpo-->
