<html>
<!-- encabezado, llama a html index/overall/header.php-->
<?php include(HTML_DIR . 'overall/header.php'); ?>
<!-- comienzo del cuerpo-->

<?php include(HTML_DIR . '/overall/topnav.php'); ?>
<link rel="stylesheet" href="views/style/static.css" type="text/css" />

<div class="row affix-row " style="padding-top: 99px;" >
    <div class="col-sm-3 col-md-2 affix-sidebar">
		<div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        <li >
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4>
          Control Administrador
          </h4>
          </a>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Normalmenu</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge pull-right">42</span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>

      <div class="col-sm-9 col-md-10 affix-content" >
             <div class="fluid-list cnt-curso-m">
               <div class="fluid-list list-num-c custom-biialab">
                 <div class="row">
                      <div class="col-md-4 cntContador" style="margin-top: 7px;">
                        <article class="fluid-list lead-nota">
                            <a href="?view=detalles&id=<?php echo $id_services ?>">
                              <span class="spany">MATE</span>
                              <br>
                                <div class="fluid-list cnt-nota-slider">

                                    <h4>Mi corto titulo</h4>
                                       <p>es ta es mi descripcion corta okey?</p>
                                </div>
                                  <figure>
                                   <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                 </figure>
                               <div class="fluid-list rated-s">
                                   <div class="star-ratings-sprite">
                                       <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                   </div>
                                   <span>S/40?><em>(188)</em></span>
                               </div>
                            </a>
                            <div class="space-ten"></div>
                              <div class="btn-ground" >
                                <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                              </div>
                            <div class="space-ten"></div>

                        </article>
                     </div>
                     <div class="col-md-4 cntContador" style="margin-top: 7px;">
                       <article class="fluid-list lead-nota">
                           <a href="?view=detalles&id=<?php echo $id_services ?>">
                             <span class="spany">MATE</span>
                             <br>
                               <div class="fluid-list cnt-nota-slider">

                                   <h4>Mi corto titulo</h4>
                                      <p>es ta es mi descripcion corta okey?</p>
                               </div>
                                 <figure>
                                  <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                </figure>
                              <div class="fluid-list rated-s">
                                  <div class="star-ratings-sprite">
                                      <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                  </div>
                                  <span>S/40?><em>(188)</em></span>
                              </div>
                           </a>
                           <div class="space-ten"></div>
                             <div class="btn-ground" >
                               <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                             </div>
                           <div class="space-ten"></div>

                       </article>
                    </div>  <div class="col-md-4 cntContador" style="margin-top: 7px;">
                        <article class="fluid-list lead-nota">
                            <a href="?view=detalles&id=<?php echo $id_services ?>">
                              <span class="spany">MATE</span>
                              <br>
                                <div class="fluid-list cnt-nota-slider">

                                    <h4>Mi corto titulo</h4>
                                       <p>es ta es mi descripcion corta okey?</p>
                                </div>
                                  <figure>
                                   <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                 </figure>
                               <div class="fluid-list rated-s">
                                   <div class="star-ratings-sprite">
                                       <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                   </div>
                                   <span>S/40?><em>(188)</em></span>
                               </div>
                            </a>
                            <div class="space-ten"></div>
                              <div class="btn-ground" >
                                <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                              </div>
                            <div class="space-ten"></div>

                        </article>
                     </div>  <div class="col-md-4 cntContador" style="margin-top: 7px;">
                         <article class="fluid-list lead-nota">
                             <a href="?view=detalles&id=<?php echo $id_services ?>">
                               <span class="spany">MATE</span>
                               <br>
                                 <div class="fluid-list cnt-nota-slider">

                                     <h4>Mi corto titulo</h4>
                                        <p>es ta es mi descripcion corta okey?</p>
                                 </div>
                                   <figure>
                                    <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                  </figure>
                                <div class="fluid-list rated-s">
                                    <div class="star-ratings-sprite">
                                        <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                    </div>
                                    <span>S/40?><em>(188)</em></span>
                                </div>
                             </a>
                             <div class="space-ten"></div>
                               <div class="btn-ground" >
                                 <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                               </div>
                             <div class="space-ten"></div>

                         </article>
                      </div>  <div class="col-md-4 cntContador" style="margin-top: 7px;">
                          <article class="fluid-list lead-nota">
                              <a href="?view=detalles&id=<?php echo $id_services ?>">
                                <span class="spany">MATE</span>
                                <br>
                                  <div class="fluid-list cnt-nota-slider">

                                      <h4>Mi corto titulo</h4>
                                         <p>es ta es mi descripcion corta okey?</p>
                                  </div>
                                    <figure>
                                     <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                   </figure>
                                 <div class="fluid-list rated-s">
                                     <div class="star-ratings-sprite">
                                         <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                     </div>
                                     <span>S/40?><em>(188)</em></span>
                                 </div>
                              </a>
                              <div class="space-ten"></div>
                                <div class="btn-ground" >
                                  <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                                </div>
                              <div class="space-ten"></div>

                          </article>
                       </div>  <div class="col-md-4 cntContador" style="margin-top: 7px;">
                           <article class="fluid-list lead-nota">
                               <a href="?view=detalles&id=<?php echo $id_services ?>">
                                 <span class="spany">MATE</span>
                                 <br>
                                   <div class="fluid-list cnt-nota-slider">

                                       <h4>Mi corto titulo</h4>
                                          <p>es ta es mi descripcion corta okey?</p>
                                   </div>
                                     <figure>
                                      <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                    </figure>
                                  <div class="fluid-list rated-s">
                                      <div class="star-ratings-sprite">
                                          <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                      </div>
                                      <span>S/40?><em>(188)</em></span>
                                  </div>
                               </a>
                               <div class="space-ten"></div>
                                 <div class="btn-ground" >
                                   <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                                 </div>
                               <div class="space-ten"></div>

                           </article>
                        </div>  <div class="col-md-4 cntContador" style="margin-top: 7px;">
                            <article class="fluid-list lead-nota">
                                <a href="?view=detalles&id=<?php echo $id_services ?>">
                                  <span class="spany">MATE</span>
                                  <br>
                                    <div class="fluid-list cnt-nota-slider">

                                        <h4>Mi corto titulo</h4>
                                           <p>es ta es mi descripcion corta okey?</p>
                                    </div>
                                      <figure>
                                       <center><img src="<?php echo CARP_IMG_SERV.'defaul.jpg' ?>" style="max-height:150px; max-width:300px;"></center>
                                     </figure>
                                   <div class="fluid-list rated-s">
                                       <div class="star-ratings-sprite">
                                           <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                       </div>
                                       <span>S/40?><em>(188)</em></span>
                                   </div>
                                </a>
                                <div class="space-ten"></div>
                                  <div class="btn-ground" >
                                    <button class="btn btn-primary col-md-12" type="button"  <?php if(!isset($_SESSION['app_id'])){echo'data-toggle="modal" data-target="#Login"';}else{echo'onclick="goNot();"';}?> >Obtener</button>

                                  </div>
                                <div class="space-ten"></div>

                            </article>
                         </div>
                 </div>
          </div>

		</div>
	</div>
</div

<!-- fin de la  seccion cabeceza 2-->
<!-- footer, llama a html index/overall/footer.php-->
<script src="views/app/js/notificacion.js"></script>
<?php include(HTML_DIR . 'overall/footer.php'); ?>
<!--fin de cuerpo-->
