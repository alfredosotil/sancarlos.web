  <?php
  $nombre = array(
    'name' => 'nombre',
    'id' => 'nombre',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $cliente->tituloCliente
    );
  $idCliente = array(
    'name' => 'idCliente',
    'type' => 'hidden',
    'id' => 'idCliente',
    'value' => $cliente->idCliente
    );
?>
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Modificar Cliente</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	
                      <form enctype="multipart/form-data" action="<?php echo site_url('sgc/ModificarCliente');?>" class="form-horizontal style-form"  id="ModificarCliente_form" name="ModificarCliente_form" method="POST">
                        <?php echo form_input($idCliente); ?>
                          
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre de Equipo</label>
                              <div class="col-sm-10">
                                  <?php echo form_input($nombre); ?>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto gris (370x308px)</label>
                              <div class="col-sm-10">
                                     <img src="<?php echo base_url().'assets/img/clientes/'.$cliente->foto1Cliente;?>">
                                <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" id="imagen0">
                                <input type="hidden" name="imagen0x" id="imagen0x" value="<?php echo $cliente->foto1Cliente?>">
                                <input type="hidden" name="imagen0y" id="imagen0y" value="<?php echo $cliente->foto1Cliente?>">
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto Color (370x308px)</label>
                              <div class="col-sm-10">
                                  <img src="<?php echo base_url().'assets/img/clientes/'.$cliente->foto2Cliente;?>">
                                  	 <input type="file" class="btn btn-theme" accept="application/pdf" name="imagen1" id="imagen1">
                                <input type="hidden" name="imagen1x" id="imagen1x" value="<?php echo $cliente->foto2Cliente?>">
                                <input type="hidden" name="imagen1y" id="imagen1y" value="<?php echo $cliente->foto2Cliente?>">
                              </div>
                          </div>
                          
                        
                         
                       
                          
                          <button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
         
          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->