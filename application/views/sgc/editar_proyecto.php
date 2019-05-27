  <?php
  $titulo = array(
    'name' => 'titulo',
    'id' => 'titulo',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $proyecto->tituloProyecto
    );
  $obra = array(
    'name' => 'obra',
    'id' => 'obra',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $proyecto->obraProyecto
    );
  $area = array(
    'name' => 'area',
    'id' => 'area',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $proyecto->areaProyecto
    );
  $ciudad = array(
    'name' => 'ciudad',
    'id' => 'ciudad',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $proyecto->ciudadProyecto
    );
  $cliente = array(
    'name' => 'cliente',
    'id' => 'cliente',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $proyecto->clienteProyecto
    );
  $idProyecto = array(
    'name' => 'idProyecto',
    'type' => 'hidden',
    'id' => 'idProyecto',
    'value' => $proyecto->idProyecto
    );
    ?>
 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> Editar Proyecto</h3>

         <!-- BASIC FORM ELELEMNTS -->
         <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">                  	
              <form enctype="multipart/form-data" action="<?php echo site_url('sgc/ModificarProyecto');?>" class="form-horizontal style-form"  id="modificarProyecto_form" name="modificarProyecto_form" method="POST">
                <?php echo form_input($idProyecto); ?>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Título de proyecto</label>
                  <div class="col-sm-10">
                    <?php echo form_input($titulo); ?>
                  </div>
                </div>                          
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Obra</label>
                  <div class="col-sm-10">
                    <?php echo form_input($obra); ?>
                  </div>
                </div>                          
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Área construida</label>
                  <div class="col-sm-10">
                    <?php echo form_input($area); ?>
                  </div>
                </div>                          
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ciudad</label>
                  <div class="col-sm-10">
                    <?php echo form_input($ciudad); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cliente</label>
                  <div class="col-sm-10">
                    <?php echo form_input($cliente); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Foto Portada (700x523 px)</label>
                  <div class="col-sm-10">
                    <img src="<?php echo base_url().'assets/img/projects/'.$proyecto->portadaProyecto;?>">
                    <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" id="imagen0">
                    <input type="hidden" name="imagen0x" id="imagen0x" value="<?php echo $proyecto->portadaProyecto?>">
                    <input type="hidden" name="imagen0y" id="imagen0y" value="<?php echo $proyecto->portadaProyecto?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Foto 1 (1920x828 px)</label>
                  <div class="col-sm-10">
                    <img src="<?php echo base_url().'assets/img/projects/'.$proyecto->foto1Proyecto;?>">
                    <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen1" id="imagen1">
                    <input type="hidden" name="imagen1x" id="imagen1x" value="<?php echo $proyecto->foto1Proyecto?>">
                    <input type="hidden" name="imagen1y" id="imagen1y" value="<?php echo $proyecto->foto1Proyecto?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Foto 2 (1920x828 px)</label>
                  <div class="col-sm-10">
                    <img src="<?php echo base_url().'assets/img/projects/'.$proyecto->foto2Proyecto;?>">
                    <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen2" id="imagen2">
                    <input type="hidden" name="imagen2x" id="imagen2x" value="<?php echo $proyecto->foto2Proyecto?>">
                    <input type="hidden" name="imagen2y" id="imagen2y" value="<?php echo $proyecto->foto2Proyecto?>">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Foto 3 (1920x828 px)</label>
                  <div class="col-sm-10">
                    <img src="<?php echo base_url().'assets/img/projects/'.$proyecto->foto3Proyecto;?>">
                    <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen3" id="imagen3">
                    <input type="hidden" name="imagen3x" id="imagen3x" value="<?php echo $proyecto->foto3Proyecto?>">
                    <input type="hidden" name="imagen3y" id="imagen3y" value="<?php echo $proyecto->foto3Proyecto?>">
                  </div>
                </div>





                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Sub categoría</label>
                  <div class="col-sm-10">


                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="1" <?php echo (($proyecto->categoriaProyecto=='Publicos')&&($proyecto->subcategoriaProyecto=='Educativas'))?'checked':'';?>>
                        Educativas (público)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="2" <?php echo (($proyecto->categoriaProyecto=='Publicos')&&($proyecto->subcategoriaProyecto=='Salud'))?'checked':'';?>>
                        Salud 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="3" <?php echo (($proyecto->categoriaProyecto=='Publicos')&&($proyecto->subcategoriaProyecto=='Saneamiento'))?'checked':'';?>>
                        Saneamiento
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="4"  <?php echo (($proyecto->categoriaProyecto=='Publicos')&&($proyecto->subcategoriaProyecto=='Viales'))?'checked':'';?>>
                        Viales
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="5"  <?php echo (($proyecto->categoriaProyecto=='Publicos')&&($proyecto->subcategoriaProyecto=='Institucionales'))?'checked':'';?>>
                        Institucionales
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="6" <?php echo (($proyecto->categoriaProyecto=='Publicos')&&($proyecto->subcategoriaProyecto=='Descolmatacion'))?'checked':'';?>>
                        Descolmatación
                      </label>
                    </div>


                    <hr>

                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="7" <?php echo (($proyecto->categoriaProyecto=='Privados')&&($proyecto->subcategoriaProyecto=='Educativas'))?'checked':'';?>>
                        Educativas (privado)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="8" <?php echo (($proyecto->categoriaProyecto=='Privados')&&($proyecto->subcategoriaProyecto=='Comerciales'))?'checked':'';?>>
                        Comerciales
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="9" <?php echo (($proyecto->categoriaProyecto=='Privados')&&($proyecto->subcategoriaProyecto=='Residentales'))?'checked':'';?>>
                        Residenciales
                      </label>
                    </div>



                    <hr>

                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" value="10" <?php echo (($proyecto->categoriaProyecto=='Ejecucion')&&($proyecto->subcategoriaProyecto=='Ejecucion'))?'checked':'';?>>
                        En ejecución
                      </label>
                    </div>

                    <br>

                  </div>
                </div>

                <button type="submit" class="btn btn-theme">Guardar</button>
                <?=validation_errors();?>
              </form>
            </div>
          </div><!-- col-lg-12-->      	
        </div><!-- /row -->





      </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
