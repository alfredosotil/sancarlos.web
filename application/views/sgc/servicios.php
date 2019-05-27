   <?php
  $texto = array(
    'name' => 'texto',
    'class' => 'form-control round-form',
    'required' => 'required',
    'autocomplete' => 'off"',
    'id' =>'input',
    //'name' => 'input',
    'value' => $servicio->textoServicio
    );
  $idServicio = array(
    'name' => 'idServicio',
    'type' => 'hidden',
    'id' => 'idServicio',
    'value' => $servicio->idServicio
    );
    ?>
 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> 
              <?php
              switch ($serv) {
                case '1':
                  echo 'Diseño';
                  break;
                case '2':
                  echo 'Ingeniería';
                  break;
                  case '3':
                  echo 'Construccion';
                  break;
                  case '4':
                  echo 'Asesoria';
                  break;
                default:
                  # code...
                  break;
              }
              ?>
            </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	
                        <form enctype="multipart/form-data" action="<?php echo site_url('sgc/ModificarServicio');?>" class="form-horizontal style-form"  id="ModificarServicio_form" name="ModificarServicio_form" method="POST">
                        
                          
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Descripción</label>
                              <div class="col-sm-10">
                                <?php echo form_textarea($texto); ?>
                                <?php echo form_input($idServicio); ?>
                              </div>
                          </div>
                    
                          <button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
         
          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->