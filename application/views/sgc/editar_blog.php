   <?php
  $nombre = array(
    'name' => 'nombre',
    'id' => 'nombre',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'value' => $blog->tituloBlog
    );
  $f = explode("-", $blog->fechaBlog);
  $nf = $f[2].'/'.$f[1].'/'.$f[0];
  $fecha = array(
    'name' => 'fecha',
    'id' => 'fecha',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'placeholder' => 'DD/MM/AAAA',
    'value' => $nf
    );
  $texto = array(
    'name' => 'texto',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'id' =>'input',
    //'name' => 'input',
    'value' => $blog->textoBlog
    );
   $idBlog = array(
    'name' => 'idBlog',
    'type' => 'hidden',
    'id' => 'idBlog',
    'value' => $blog->idBlog
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
                  	<form enctype="multipart/form-data" action="<?php echo site_url('sgc/ModificarBlog');?>" class="form-horizontal style-form"  id="insertarBlog_form" name="insertarBlog_form" method="POST">
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Titúlo del artículo</label>
                              <div class="col-sm-10">
                                  <?php echo form_input($nombre); ?>
                                  <?php echo form_input($idBlog); ?>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto (1107x664px)</label>
                              <div class="col-sm-10">
                                  	<img src="<?php echo base_url().'assets/img/blog/'.$blog->fotoBlog;?>">
                                <input type="file" class="btn btn-theme" accept="image/x-png,image/gif,image/jpeg" name="imagen0" id="imagen0">
                                <input type="hidden" name="imagen0x" id="imagen0x" value="<?php echo $blog->fotoBlog?>">
                                <input type="hidden" name="imagen0y" id="imagen0y" value="<?php echo $blog->fotoBlog?>">
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