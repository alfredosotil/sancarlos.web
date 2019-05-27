<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Sistema gestor de contenido desarrollado por TCQ">
    <meta name="author" content="tcq.pe">
    <meta name="keyword" content="tcq.pe">

    <title>Bienvenido al sistema gestor de contenido</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
          	<h3><i class="fa fa-angle-right"></i> Clientes</h3>
				<div class="row">
				
	                  
				</div><!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Nuevo cliente:  &nbsp;&nbsp;<a href="new_cliente.php"><button type="button" class="btn btn-theme">+ Agregar</button></a></h4>
	                  	  	  <hr>
                        </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  
                  
                  
                 <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Clientes actuales:</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                 
                                  <th><i class="fa fa-bookmark"></i> Vista Previa</th>
                                  <th><i class=" fa fa-edit"></i> Estado</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">Company Ltd</a></td>
                                 
                                  <td>
                                       <button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
                                       </td>
                                  <td><span class="label label-danger label-mini">Inactivo</span></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-down"></i></button>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="basic_table.html#">
                                          Dashgum co
                                      </a>
                                  </td>
                              
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
                                      </td>
                                  <td><span class="label label-success label-mini">Activo</span></td>
                                  <td>
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-up"></i></button>
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-down"></i></button>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="basic_table.html#">
                                          Another Co
                                      </a>
                                  </td>
                                 
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
                                  </td>
                                  <td><span class="label label-success label-mini">Activo</span></td>
                                  <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-up"></i></button>
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-down"></i></button>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="basic_table.html#">
                                          Dashgum ext
                                      </a>
                                  </td>
                               
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
                                  </td>
                                  <td><span class="label label-success label-mini">Activo</span></td>
                                  <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-up"></i></button>
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-down"></i></button>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="basic_table.html#">Total Ltd</a></td>
                               
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
                                  </td>
                                  <td><span class="label label-danger label-mini">Inactivo</span></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-arrow-up"></i></button>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
