  <?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php'); ?>
<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Realizado!</strong> el producto se ha borrado correctamente.
    </div>';
  }

  ?>

<div class="row container">
   <div class="pull-right">
     <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger active" href="?view=configforos">GESTIONAR SERVICIOS</a>
      </li></ul></div>
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger" href="?view=servicios&mode=add">Subir Producto</a>
      </li></ul></div>

     </div>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-comments"></i> Productos</a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Productos publicados</div>

      <div class="row cajas">
        <div class="col-md-12">


        <?php  if(false != $_productos_usuarios):  ?>
          <table class="table"><thead><tr>
           <th style="width: 10%">Codigo</th>
           <th>Marca</th>
           <th>Modelo</th>
           <th>Estado</th>
           <th>Precio</th>
           <th>Situacion</th>
           <th>Publicado</th>
           <th style="width: 20%">Acciones</th>
           </tr></thead>
           <tbody>

          <?php  foreach($_productos_usuarios as $id_producto => $content_array) :?>
                  <tr>
                  <td><?php echo $_productos_usuarios[$id_producto]['COD_PROD'];?></td>
                  <td><?php  echo $_tipos[$_modelos[$_productos_usuarios[$id_producto]['COD_MOD']]['COD_MAR']]['DES_TIPO'];?></td>
                  <td><?php  echo $_modelos[$_productos[$id_producto]['COD_MOD']]['DES_MOD'];?></td>
                  <td><?php echo $_productos[$id_producto]['EST_PROD'];?></td>
                  <td> <?php echo $_productos[$id_producto]['PRE_PROD'];?></td>
                  <td><?php if( $_productos[$id_producto]['SIT_PROD']=='A'){echo 'Activo';}else if($_productos[$id_producto]['SIT_PROD']=='R'){echo 'Reservado';}else{echo 'Vendido';}?></td>
                  <td><?php echo $_productos[$id_producto]['FEC_PROD'];?></td>

                  <td>
                    <?php if($_productos[$id_producto]['SIT_PROD']!='V'):?>
                    <div class="btn-group">
                     <a  class="btn btn-primary">Acciones</a>
                     <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                     <ul class="dropdown-menu">
                      <?php if( $_productos[$id_producto]['SIT_PROD']=='A'):?>
                       <li><a href="?view=servicios&mode=edit&id=<?php echo$_productos[$id_producto]['COD_PROD']?>">Editar</a></li>
                       <li><a onclick="DeleteItem('¿Está seguro de eliminar este producto?','?view=servicios&mode=delete&id=<?php echo $_productos[$id_producto]['COD_PROD']?>')">Eliminar</a></li>
                     <?php else :?>
                       <li><a onclick="DeleteItem('¿Está seguro de cancelar la reserva?','?view=movimiento&mode=delete&id=<?php echo $_movimientousuario[$id_producto]['COD_MOV']?>&idprod=<?php echo $_productos[$id_producto]['COD_PROD']?>')">Cancelar la reserva</a></li>
                       <li><a onclick="DeleteItem('FELICITACIONES POR SU VENTA!','?view=movimiento&mode=confirmar&id=<?php echo $_movimientousuario[$id_producto]['COD_PROD']?>&idprod=<?php echo $_productos[$id_producto]['COD_PROD']?>')">REPORTAR COMO VENTA COMPLETADA</a></li>
                     <?php endif;?>
                     </ul>
                   </div>
                 <?php else: echo 'VENDIDO'; endif ?>
                  </td>
                </tr>


            <?php
                endforeach; ?>
            </tbody></table>

        <?php
              else:?>

            <div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no se ha publicado un producto.</div>
<?php endif;?>

        </div>
      </div>
  </div>
</div>



<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Productos interesados/notificados </div>

      <div class="row cajas">
        <div class="col-md-12">


        <?php  if(false != $_movimientousuario) :
          $cntmovv=0;
          foreach($_movimientousuario as $id_movimientousuario => $content_array){
            if($_movimientousuario[$id_movimientousuario]['TIP_MOV']!='Venta'){
              $cntmovv++;
            }
          }
            if($cntmovv!=0):?>
          <table class="table"><thead><tr>
           <th style="width: 10%">Id de movimiento</th>
           <th>Producto</th>
           <th>Usuario</th>
           <th>Monto total</th>
           <th>Fecha</th>
           <th style="width: 20%">Acciones</th>
           </tr></thead>
           <tbody>

          <?php  foreach($_movimientousuario as $id_movimientousuario=> $content_array) :
            if($_movimientousuario[$id_movimientousuario]['TIP_MOV']!='Venta'):?>


                  <tr>
                  <td><?php echo $_movimientousuario[$id_movimientousuario]['COD_MOV'];?></td>
                  <td><?php   echo $_tipos[$_modelos[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['COD_MOD']]['COD_MAR']]['DES_TIPO'];?>
                     <span> </span><?php   echo $_modelos[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['COD_MOD']]['DES_MOD'];?> </td>
                  <td><?php  echo $_users[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['iduser']]['NOM_USU'];?>
                      <span> </span><?php  echo $_users[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['iduser']]['APE_USU'];?></td>
                  <td><?php echo $_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['PRE_PROD'];?></td>
                  <td> <?php echo $_movimientousuario[$id_movimientousuario]['FEC_MOV'];?></td>

                  <td>
                    <div class="btn-group">
                     <a  class="btn btn-primary">Acciones</a>
                     <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                     <ul class="dropdown-menu">

                       <li><a onclick="DeleteItem('¿Está seguro de cancelar tu reserva?','?view=movimiento&mode=delete&id=<?php echo $_movimientousuario[$id_movimientousuario]['COD_MOV']?>&idprod=<?php echo $_movimientousuario[$id_movimientousuario]['COD_PROD']?>')">Cancelar</a></li>
                       <li><a onclick="DeleteItem('¿Está seguro de CONFIRMAR LA COMPRA DE ESTE PRODUCTO?','?view=movimiento&mode=confirmar&id=<?php echo $_movimientousuario[$id_movimientousuario]['COD_MOV']?>&idprod=<?php echo $_movimientousuario[$id_movimientousuario]['COD_PROD']?>')">Confirmar Compra exitosa</a></li>


                     </ul>
                   </div>
                  </td>
                </tr>
            <?php endif; endforeach; ?>
            </tbody></table>
            <?php
          else:
            ?>
            <div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no se ha adquirido un producto.</div>

          <?php  endif;?>
        <?php
              else:?>

            <div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no se ha notificado a un producto.</div>
<?php endif;?>

        </div>
      </div>
  </div>
</div>




<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Productos adquiridos </div>

      <div class="row cajas">
        <div class="col-md-12">



        <?php  if(false != $_movimientousuario) :
          $cntmovv=0;
          foreach($_movimientousuario as $id_movimientousuario => $content_array){
            if($_movimientousuario[$id_movimientousuario]['TIP_MOV']=='Venta'){
              $cntmovv++;
            }
          }
            if($cntmovv!=0):
           ?>
          <table class="table"><thead><tr>
            <th style="width: 10%">Id de movimiento</th>
            <th>Producto</th>
            <th>Usuario</th>
            <th>Monto total</th>
            <th>Fecha venta</th>
           </tr></thead>
           <tbody>

          <?php  foreach($_movimientousuario as $id_movimientousuario => $content_array) :
                  if($_movimientousuario[$id_movimientousuario]['TIP_MOV']=='Venta'):?>
                  <tr>
                    <td><?php echo $_movimientousuario[$id_movimientousuario]['COD_MOV'];?></td>
                    <td><?php   echo $_tipos[$_modelos[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['COD_MOD']]['COD_MAR']]['DES_TIPO'];?>
                       <span> </span><?php   echo $_modelos[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['COD_MOD']]['DES_MOD'];?> </td>
                    <td><?php  echo $_users[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['iduser']]['NOM_USU'];?>
                        <span> </span><?php  echo $_users[$_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['iduser']]['APE_USU'];?></td>
                    <td><?php echo $_productos[$_movimientousuario[$id_movimientousuario]['COD_PROD']]['PRE_PROD'];?></td>
                    <td> <?php echo $_movimientousuario[$id_movimientousuario]['FEC_MOV'];?></td>


                </tr>

            <?php
            endif;
          endforeach; ?>
            </tbody></table>
            <?php
          else:
            ?>
            <div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no se ha adquirido un producto.</div>

          <?php  endif;?>
        <?php
              else:?>

            <div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no se ha adquirido un producto.</div>
<?php endif;?>

        </div>
      </div>
  </div>
</div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
