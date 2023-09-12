<div class="right_col" role="main">
    <!-- Inicio Div Right Col Role Main -->
    <div class="container md-3">
        <!-- Inicio Div container md-3 -->
        <div class="row">
            <!-- Inicio Div row -->
            <div class="col-md-12 col-sm-12 ">
                <!-- Inicio Div col-md-12 col-sm-12  -->
                <div class="x_panel bg-dark text-white">
                    <!-- Inicio Div x_panel -->
                    <div class="x_title">
                        <h2>Agredar nuevo Proveedor.</h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <!-- Inicio Div x_content -->
                        <?php
                        echo form_open_multipart('proveedor/index');
                        ?>
                        <button type="submit" name="buttonInhabilitados" class="btn btn-outline-success">
                            <i class="fa fa-arrow-circle-left"></i> Volver a Proveedores
                        </button>
                        <?php
                        echo form_close();
                        ?>
                        <br>
                        <p class="text-muted font-13 m-b-30">
                            Usted agregara a un nuevo proveedor, por favor llene los siguiente campo:
                        </p>
                        <?php
                        echo form_open_multipart('proveedor/agregarbd');
                        ?>
                        <div class="item form-group has-feedback">

                            <label class="col-form-label col-md-1 label-align" for="razonsocial">Razon Social:</label>
                            <div class="col-md-3">
                                <input type="text" name="razonsocial" class="form-control has-feedback-left" value="<?php echo set_value('nombre'); ?>">
                                <span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('razonsocial'); ?>
                            </div>

                            <label class="col-form-label col-md-1 label-align" for="departamento">Departamento:</label>
                            <div class="col-md-3">
                                <input type="text" name="departamento" class="form-control has-feedback-left" value="<?php echo set_value('primerapellido'); ?>">
                                <span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('departamento'); ?>
                            </div>

                            <label class="col-form-label col-md-1 label-align" for="ubicasion">Ubicasion:</label>
                            <div class="col-md-3">
                                <input type="text" name="ubicasion" class="form-control has-feedback-left" value="<?php echo set_value('segundoapellido'); ?>">
                                <span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('ubicasion'); ?>
                            </div>

                        </div>

                        <div class="item form-group has-feedback">
                            <label class="col-form-label col-md-1 label-align" for="numerocuenta">N° de cuenta bancaria:</label>
                            <div class="col-md-3">
                                <input type="text" name="numerocuenta" class="form-control has-feedback-left" value="<?php echo set_value('numerocelular'); ?>">
                                <span class="fa fa-mobile-phone form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('numerocuenta'); ?>
                            </div>
                            <label class="col-form-label col-md-1 label-align" for="celular">N° de celular:</label>
                            <div class="col-md-3">
                                <input type="text" name="celular" class="form-control has-feedback-left" value="<?php echo set_value('numeroci'); ?>">
                                <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('celular'); ?>
                            </div>
                            <label class="col-form-label col-md-1 label-align" for="descripcion">Descripcion:</label>
                            <div class="col-md-3">
                                <input type="text" name="descripcion" class="form-control has-feedback-left" value="<?php echo set_value('numeroci'); ?>">
                                <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('descripcion'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus-circle"></i> Insertar
                        </button>
                        <?php
                        echo form_close();
                        ?>
                    </div><!-- Fin Div x_content -->
                </div><!-- Fin Div x_panel -->
            </div><!-- Fin Div col-md-12 col-sm-12  -->
        </div><!-- Fin Div row -->
    </div><!-- Fin Div container md-3 -->
</div><!-- Fin Right Col Role Main -->