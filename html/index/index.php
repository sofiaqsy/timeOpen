<html>
<!-- encabezado, llama a html index/overall/header.php-->
<?php include(HTML_DIR . 'overall/header.php'); ?>
<!-- comienzo del cuerpo-->
<body>
   <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>
   <!-- cuerpo, llama a html index/overall/topnav.php-->
<?php include(HTML_DIR . '/overall/topnav.php'); ?>
  <section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
    if(isset($_GET['success'])) {
      echo '<div class="alert alert-dismissible alert-success">
        <strong>Activado!</strong> tu usuario ha sido activado correctamente.
      </div>';
    }

    if(isset($_GET['error'])) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> no se ha podido activar tu usuario.
      </div>';
    }
    ?>
  <div class="row container">
      <?php
          if(isset($_SESSION['app_id']) && $_users[$_SESSION['app_id']]['idtype_user']>1) {
            echo '
            <div class="pull-right">
              <div class="mbr-navbar__column">
                <a class="btn btn-primary" href="?view=servicios">GESTIONAR SERVICIOS</a>
              </div>

            </div>
            ';  }
      ?>
      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
      </ol>

  </div>
  <div class="fluid-list lead-bloque lead-cursos margin35">
                     <div class="container" >
                       <div class="row" >
                           <div class="col-md-3" >
 <div class="catalogue-list bordertop" >
   <div class="registroContenedor2" >
     <h3 class="category-name marginLeftRegister2">Filtrar cursos por:</h3>
   </div>
   <form action="/cursos" method="get">
       <div class="registroContenedor search-right">
         <ul>
           <li class="has-children">
             <input type="text" class="form-control" name="buscar" placeholder="Buscar cursos" maxlength="50" value="">
             <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
           </li>
         </ul>
   </div>
   </form>
  <div class="registroContenedor" >
         <h3 class="category-name marginLeftRegister">AREAS</h3>
       <ul style="padding:5px;padding-top:0px;" >
                   <li class="has-children ">
             <samp class="datBorde" > <a href="/cursos/cursos-certificado">Ingenieria </a></samp>
           </li>
                   <li class="has-children ">
             <samp class="datBorde" > <a href="/cursos/cursos-programas-de-tv">gestion </a></samp>
           </li>
                   <li class="has-children ">
             <samp class="datBorde" > <a href="/cursos/cursos-por-docente">humanidades </a></samp>
           </li>
                   <li class="has-children ">
             <samp class="datBorde" > <a href="/cursos/cursos-transmitido-en-vivo">arquitectura</a></samp>
           </li>
        </ul>
   </div>
    <div class="registroContenedor" >
     <h3 class="category-name marginLeftRegister">Especializacion</h3>
         <ul style="padding:5px;padding-top:0px;" >
                     <li class="has-children ">
               <samp class="datBorde" > <a href="/cursos/cursos-certificado">numero</a></samp>
             </li>
                     <li class="has-children ">
               <samp class="datBorde" > <a href="/cursos/cursos-programas-de-tv">gestion </a></samp>
             </li>
                     <li class="has-children ">
               <samp class="datBorde" > <a href="/cursos/cursos-por-docente">humanidades </a></samp>
             </li>
                     <li class="has-children ">
               <samp class="datBorde" > <a href="/cursos/cursos-transmitido-en-vivo">arquitectura</a></samp>
             </li>
          </ul>
    </div>
 </div>
</div>
 <div class="col-md-9" >
        <div class="fluid-list cnt-curso-m">
          <div class="fluid-list list-num-c custom-biialab">
            <div class="row">
                 <div class="col-md-4 cntContador" style="margin-top: 7px;">
                   <article class="fluid-list lead-nota">
                       <a href="/curso/como-hacer-una-conferencia-exitosa-storyteller" title="">
                         <span class="spany">Ingenieria</span>
                         <br>
                           <div class="fluid-list cnt-nota-slider">
                               <h2>Como Hacer Una Conferencia Exitosa Storyteller</h2>
                                  <p>El contar historias que atrapen la atención, que lleven a la reflexión y nos lleven a la transformación son sumamente necesarios para poder ser un orador que trascienda.</p>
                           </div>
                           <figure>
                            <center><img src="views/app/images/productos/img2.jpg" style="max-height:150px; max-width:300px;"></center>
                          </figure>
                          <div class="fluid-list rated-s">
                              <div class="star-ratings-sprite">
                                  <span style="width:90%" class="star-ratings-sprite-rating"></span>
                              </div>
                              <span>Costo : S/ 30.00<em>(188)</em></span>
                          </div>
                       </a>
                   </article>
                </div>

            </div>
     </div>

   </div>
 </div></section>
 </div>

<!-- fin de la  seccion cabeceza 2-->
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
<!--fin de cuerpo-->
</html>
