   <?php
  $nombre = array(
    'name' => 'nombre',
    'id' => 'nombre',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('nombre')
    );
  $fecha = array(
    'name' => 'fecha',
    'id' => 'fecha',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'placeholder' => 'DD/MM/AAAA',
    'value' => set_value('fecha')
    );
  $texto = array(
    'name' => 'texto',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'id' =>'input',
    //'name' => 'input',
    'value' => set_value('texto')
    );
?>
 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Nuevo Artículo</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	<form enctype="multipart/form-data" action="<?php echo site_url('sgc/InsertarBlog');?>" class="form-horizontal style-form"  id="insertarBlog_form" name="insertarBlog_form" method="POST">
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Titúlo del artículo</label>
                              <div class="col-sm-10">
                                  <?php echo form_input($nombre); ?>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto (1107x664px)</label>
                              <div class="col-sm-10">
                                  	<input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" required="required">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">fecha</label>
                              <div class="col-sm-10">
                                  <?php echo form_input($fecha); ?>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Redacción</label>
                              <div class="col-sm-10">
                                  <?php echo form_textarea($texto); ?>

                              </div>
                          </div>
                          
                         
                       
                          
                          <button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
         
          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->