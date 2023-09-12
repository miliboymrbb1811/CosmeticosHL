<div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
      <div class="navbar nav_title">
        <a href="/a1" class="site_title"><i class="fa fa-desktop"></i> <span>COSMETICOS</span></a>
      </div>
      <div class="clearfix"></div>
      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <?php
          if ($this->session->userdata('foto')=='') {
          ?>
            <img src="<?php echo  base_url(); ?>uploads/user_images/sinImagen.jpg" width="50px " class="img-circle profile_img" height="70px"  width="70px" > <?php
          } else {
            ?>
            <img src="<?php echo base_url(); ?>/uploads/user_images/<?php echo $this->session->userdata('foto'); ?>"  class="img-circle profile_img" height="60px"  width="60px">
          <?php
          }
          ?>
        </div><!-- end div profile_pic -->
        <div class="profile_info">
          <span>Bienvenido </span>
          <h2><?php echo $this->session->userdata('login') ?></h2>
        </div><!-- end div profile_info -->
      </div><!-- end div profile clearfix -->
      <!-- /menu profile quick info -->
      <br />
      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <?php
            //muestra los paneles del admin
            if ($this->session->userdata('tipo') == 'admin') {
            ?>

              <li>
              <A>
                  <i class="fa fa-truck"></i> Proveedores
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('Proveedor/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                    Proveedores
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('Proveedor/deshabilitados');  ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                    <span class="glyphicon glyphicon-eye-close"></span>   Proveedores Deshabilitados
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>
              <li>

               <A>
                  <i class="fa fa-male"></i> Empleados
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('empleado/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      Empleados
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('empleado/deshabilitados');  ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                      Empleados Deshabilitados
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('sucursal/index');  ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      Sucursal
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>

              <li>
                <a>


                  <i class="fa fa-user"></i>usuario
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('usuarios/inicio'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      usuarios
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-cubes"></i>producto
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('producto/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      producto
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('categoria/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      Categorías
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('marca/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      marca
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-users"></i>Clientes
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('cliente/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      <!----------icono del boton----------->
                      <!--<i class="fa fa-group"></i> <br>-->
                      Clientes

                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('cliente/deshabilitados'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                      <!--<i class="fa fa-eye"></i><br>-->
                      Clientes Deshabilitados

                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-folder-open"></i>reportes
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('reporte/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                      Reportes
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-shopping-cart"></i>Ventas x
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('venta/index'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                      Venta
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>

              </li>
            <?php
            } else if ($this->session->userdata('tipo') == 'vendedor') { ?>
              <li>
                <a>
                  <i class="fa fa-users"></i>Clientes
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('cliente/index2'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      <!----------icono del boton----------->
                      <!--<i class="fa fa-group"></i> <br>-->
                      Clientes

                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('cliente/deshabilitados'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                      <!--<i class="fa fa-eye"></i><br>-->
                      Clientes Deshabilitados

                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-cubes"></i>producto
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('producto/index2'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      producto
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                  <li>
                    <?php echo form_open_multipart('producto/deshabilitados'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark">
                      productos deshabilitados
                    </button>
                    <?php echo form_close(); ?>
                  </li>

                </ul>
              </li>
            

              <li>
                <a>
                  <i class="fa fa-shopping-cart"></i>Ventas x
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <?php echo form_open_multipart('venta/index2'); ?>
                    <button type="submit" class="col-md-11 btn btn-dark" style="background-color: transparent; border: none;">
                      Venta
                    </button>
                    <?php echo form_close(); ?>
                  </li>
                </ul>

              </li>





            <?php } ?>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div id="identified0" class="sidebar-footer hidden-small">
        <div class="pull-right">
          Bootstrap Admin Template by sismrbb.-
        </div>