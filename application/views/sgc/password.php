<!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> Configurar contraseña</h3>

         <!-- BASIC FORM ELELEMNTS -->
         <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">

              <form class="form-horizontal style-form" method="POST" action="<?php echo site_url('sgc/mpassword');?>">

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Contraseña Actual</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control round-form" id="txtVpassword" name="txtVpassword">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nueva Contraseña</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control round-form" id="txtNpassword" name="txtNpassword">
                  </div>
                </div>
                <?php 
                if(isset($error_message)) {
                  ?>
                  <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    <?php
                    echo $error_message;
                    ?>
                  </div>
                  <?php
                }?>
                <button type="submit" class="btn btn-theme">Guardar</button>
              </form>
            </div>
          </div><!-- col-lg-12-->      	
        </div><!-- /row -->
      </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->