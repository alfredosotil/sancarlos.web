<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema gestor de contenido desarrollado por TCQ">
    <meta name="author" content="tcq.pe">
    <meta name="keyword" content="tcq.pe">

    <title>Bienvenido al sistema gestor de contenido</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/sgc/css/bootstrap.css');?>" rel="stylesheet" type="text/css">
    <!--external css-->
    <link href="<?php echo base_url('assets/sgc/font-awesome/css/font-awesome.css');?>" rel="stylesheet" type="text/css">
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/sgc/css/style.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/sgc/css/style-responsive.css');?>" rel="stylesheet" type="text/css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		     <form class="form-login" method="POST" action="">
      			<h2 class="form-login-heading">Bienvenido</h2>
      			<div class="login-wrap">
      				<input type="text" class="form-control" placeholder="Usuario" name="txtUsuario" id="txtUsuario" autofocus>
      				<br>
      				<input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="txtPassword" id="txtPassword" >
      				<hr>		            
      				<button class="btn btn-theme btn-block" href="#" type="submit"><i class="fa fa-lock"></i> Acceder</button>		
      				<br>
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
      			</div>		

      		</form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/sgc/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/sgc/js/bootstrap.min.js');?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url('assets/sgc/js/jquery.backstretch.min.js');?>"></script>
    <script>
        $.backstretch("<?php echo base_url('assets/sgc/img/login-bg.jpg');?>", {speed: 500});
    </script>


  </body>
</html>
