  <?php
  $nombre = array(
    'name' => 'nombre',
    'id' => 'nombre',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('nombre')
    );
?>
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Nuevo Cliente</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	
                      <form enctype="multipart/form-data" action="<?php echo site_url('sgc/InsertarCliente');?>" class="form-horizontal style-form"  id="insertarCliente_form" name="insertarCliente_form" method="POST">
                                             
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre del cliente</label>
                              <div class="col-sm-10">
                                  <?php echo form_input($nombre); ?>
                              </div>
                          </div>
                        
                        
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto gris (370x308px)</label>
                              <div class="col-sm-10">
                                  	<input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" required="required">
                              </div>
                          </div>
                          
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto Color (370x308px)</label>
                              <div class="col-sm-10">
                                  	<input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen1" required="required">
                              </div>
                          </div>
                         
                       
                          
                          <button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->