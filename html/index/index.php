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
                                <div class="btn-ground" >
                                  <button class="btn btn-primary col-md-12" type="button"  <?php if (!isset($_SESSION['app_id'])) {
                                    echo'data-toggle="modal" data-target="#Login"';
                                  } else {
                                    echo'onclick="goNot();"';
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
<script src="views/app/js/notificacion.js"></script>
<?php include(HTML_DIR . 'overall/footer.php'); ?>
<!--fin de cuerpo-->
