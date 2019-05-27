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
    <link href="<?php echo base_url('assets/sgc/css/bootstrap.css');?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/sgc/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sgc/css/zabuto_calendar.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sgc/js/gritter/css/jquery.gritter.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sgc/lineicons/style.css');?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/sgc/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/sgc/css/style-responsive.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/sgc/CLE/jquery.cleditor.css');?>" rel="stylesheet">


    <script src="<?php echo base_url('assets/sgc/js/chart-master/Chart.js');?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>  
    <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Herramientas"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url('sgc');?>" class="logo"><b>Bienvenido</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url('sgc/logout');?>">Cerrar Sesión</a></li>
                </ul>
            </div>
        </header>
      <!--header end-->
      <?php
if (!$this->session->userdata('username')) {
  redirect('sgc');
}
?>