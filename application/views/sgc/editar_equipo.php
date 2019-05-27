  <?php
  $nombre = array(
    'name' => 'nombre',
    'id' => 'nombre',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $equipo->nombreEquipo
    );
  $idEquipo = array(
    'name' => 'idEquipo',
    'type' => 'hidden',
    'id' => 'idEquipo',
    'value' => $equipo->idEquipo
    );
?>
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Nuevo Equipo</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	
                      <form enctype="multipart/form-data" action="<?php echo site_url('sgc/ModificarEquipo');?>" class="form-horizontal style-form"  id="ModificarEquipo_form" name="ModificarEquipo_form" method="POST">
                        <?php echo form_input($idEquipo); ?>
                          
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre de Equipo</label>
                              <div class="col-sm-10">
                                  <?php echo form_input($nombre); ?>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto (370x370x)</label>
                              <div class="col-sm-10">
                                     <img src="<?php echo base_url().'assets/img/equipos/'.$equipo->fotoEquipo;?>">
                                <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" id="imagen0">
                                <input type="hidden" name="imagen0x" id="imagen0x" value="<?php echo $equipo->fotoEquipo?>">
                                <input type="hidden" name="imagen0y" id="imagen0y" value="<?php echo $equipo->fotoEquipo?>">
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ficha técnica - PDF</label>
                              <div class="col-sm-10">
                                  <a href="<?php echo base_url('assets/img/equipos/'.$equipo->fichaEquipo)?>" target="_BLANK">DESCARGAR FICHA</a>
                                  	 <input type="file" class="btn btn-theme" accept="application/pdf" name="file0" id="file0">
                                <input type="hidden" name="file0x" id="file0x" value="<?php echo $equipo->fichaEquipo?>">
                                <input type="hidden" name="file0y" id="file0y" value="<?php echo $equipo->fichaEquipo?>">
                              </div>
                          </div>
                          
                        
                         
                       
                          
                          <button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
         
          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->