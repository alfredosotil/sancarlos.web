<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Sistema gestor de contenido desarrollado por TCQ">
    <meta name="author" content="tcq.pe">
    <meta name="keyword" content="tcq.pe">

    <title>Bienvenido al sistema gestor de contenido</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php
        include ('include/header.html');
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
                  	
                      <form class="form-horizontal style-form" method="get">
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Título de proyecto</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Obra</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Área construida</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ciudad</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Cliente</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto Portada (700x523 px)</label>
                              <div class="col-sm-10">
                                  	<button type="button" class="btn btn-theme"><i class="fa fa-upload"></i> Subir</button>
						           
						             <p class="form-control-static">Ningún archivo seleccionado</p>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto 1 (1920x828 px)</label>
                              <div class="col-sm-10">
                                  	<button type="button" class="btn btn-theme"><i class="fa fa-upload"></i> Subir</button>
						           
						             <p class="form-control-static">Ningún archivo seleccionado</p>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto 2 (1920x828 px)</label>
                              <div class="col-sm-10">
                                  	<button type="button" class="btn btn-theme"><i class="fa fa-upload"></i> Subir</button>
						           
						             <p class="form-control-static">Ningún archivo seleccionado</p>
                              </div>
                          </div>
                          
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto 3 (1920x828 px)</label>
                              <div class="col-sm-10">
                                  	<button type="button" class="btn btn-theme"><i class="fa fa-upload"></i> Subir</button>
						           
						             <p class="form-control-static">Ningún archivo seleccionado</p>
                              </div>
                          </div>
                          
                          
                          
                         
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sub categoría</label>
                              <div class="col-sm-10">
                                  
						
						            <div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            						   Educativas (público)
            						  </label>
						            </div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						    Salud 
            						  </label>
            						</div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						   Saneamiento
            						  </label>
            						</div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						   Viales
            						  </label>
            						</div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						   Institucionales
            						  </label>
            						</div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						   Descolmatación
            						  </label>
            						</div>
            						
						
            						<hr>
            						
            					<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            						   Educativas (privado)
            						  </label>
						            </div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						   Comerciales
            						  </label>
            						</div>
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						  Residentales
            						  </label>
            						</div>
            						
            						
            						
            						<hr>
            						
            						<div class="radio">
            						  <label>
            						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            						   En ejecución
            						  </label>
            						</div>
            						
						            <br>
						 
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
         
          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
        <?php
        include ('include/footer.html');
        ?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
