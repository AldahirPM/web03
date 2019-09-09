<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             <!--  <div class="title_left">
                <h3>Crear Usuario</h3>
              </div>

             <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear Perfil</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if($this->session->flashdata("add_perfil")):?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong><?php echo $this->session->flashdata("add_perfil");?></strong>
                      </div>  
                    <?php endif; ?>
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url();?>index.php/menu/guardarperfil" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre de Perfil <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"   class="form-control col-md-7 col-xs-12" name="nombre_perfil">
                          <?php echo form_error("nombre_perfil","<span class='help-block'>","</span>"); ?>

                        </div>
                      </div>
        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Seleccionar Visibilidad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="cbtipo_perfil">
                            <option>Tipo de Perfil</option>
                            <option value="1">Habilitado</option>
                            <option value="0">Desabilitado</option>
                          </select>
                        </div>
                        <?php echo form_error("cbtipo_perfil","<span class='help-block'>","</span>"); ?>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
