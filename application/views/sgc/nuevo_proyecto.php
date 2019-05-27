  <?php
  $titulo = array(
    'name' => 'titulo',
    'id' => 'titulo',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('titulo')
    );
  $obra = array(
    'name' => 'obra',
    'id' => 'obra',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('obra')
    );
  $area = array(
    'name' => 'area',
    'id' => 'area',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('area')
    );
  $ciudad = array(
    'name' => 'ciudad',
    'id' => 'ciudad',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('ciudad')
    );
  $cliente = array(
    'name' => 'cliente',
    'id' => 'cliente',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => set_value('cliente')
    );
    ?>
 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> Nuevo Proyecto</h3>

         <!-- BASIC FORM ELELEMNTS -->
         <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">                  	
                <form enctype="multipart/form-data" action="<?php echo site_url('sgc/InsertarProyecto');?>" class="form-horizontal style-form"  id="insertarProyecto_form" name="insertarProyecto_form" method="POST">

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
                     <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" required="required">
                   </div>
                 </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Foto 1 (1920x828 px)</label>
                  <div class="col-sm-10">
                   <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen1">
                 </div>
               </div>

               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Foto 2 (1920x828 px)</label>
                <div class="col-sm-10">
                 <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen2">
               </div>
             </div>


             <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Foto 3 (1920x828 px)</label>
              <div class="col-sm-10">
               <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen3">
             </div>
           </div>





           <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Sub categoría</label>
            <div class="col-sm-10">


              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="1" required>
                  Educativas (público)
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="2">
                  Salud 
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="3">
                  Saneamiento
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="4">
                  Viales
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="5">
                  Institucionales
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="6">
                  Descolmatación
                </label>
              </div>


              <hr>

              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="7">
                  Educativas (privado)
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="8">
                  Comerciales
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="9">
                  Residentales
                </label>
              </div>



              <hr>

              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" value="10">
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
