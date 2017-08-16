<link rel="stylesheet" href="views/style/static.css" type="text/css" />

<div class="row affix-row " style="padding-top: 99px;  margin-left: 0px;margin-right:0px;" >
<div class="col-sm-3 col-md-2 affix-sidebar">
  <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation" style=" margin-left: -15px;margin-right:-15px; margin-bottom:8px">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
      <div class="navbar-collapse collapse sidebar-navbar-collapse" style="margin-top:15px;">
          <ul class="nav navbar-nav" id="sidenav01">
            <ul class="nav navbar-nav">
            <li >
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
          </li>
          <?php if (isset($_SESSION['app_id']) && $_users[$_SESSION['app_id']]['idtype_user']>1) :?>
          <li>
            <div class="registroContenedor" >
              <h3 class="category-name marginLeftRegister" > Control Administrador</h3>
              <ul style="padding:5px;padding-top:0px;" >
                <li class="has-children ">
                  <samp class="datBorde" > <h5 style="font-size:14px; color: #505050;"><a style="color: #505050;" href="?view=servicios">Gestionar servicios</a></h5></samp>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>
          <li>
            <div class="registroContenedor" >
              <h3 class="category-name marginLeftRegister">AREAS</h3>
              <ul style="padding:5px;padding-top:0px;"  >
                <?php foreach ($_areas as $id_areas => $value):?>
                <li class="has-children " >
                  <samp class="datBorde" > <h5 style="font-size:14px;"><a  style="color: #505050;" href="?view=index&area=<?php echo $id_areas?>"><?php echo $_areas[$id_areas]['nombre'] ?></a></h5></samp>
                </li>
                <?php endforeach;?>
                </ul>
            </div>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
   </div>
  </div>
