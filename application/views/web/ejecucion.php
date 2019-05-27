 <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title"><a href="#">PROYECTOS</a></h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><a href="<?php echo base_url();?>">Inicio</a></li>
                            <li><a href="#">En ejecución</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->

        <div class="wrap-content main-project project-v2">
            <section class="flat-projects style3 pd-top-80 clearfix">
                <div class="container-fluid">   
                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="flat-portfolio portfolio-project">
                                <ul class="portfolio-filter clearfix">
                                    <li class="active"><a href="#" data-filter="*">Todos</a></li>
                                    <li><a href="#" data-filter=".infraestructura">Infraestructura</a></li>
                                    <li><a href="#" data-filter=".prevencion">Prevención</a></li>
                                    <li><a href="#" data-filter=".industriales">Industriales</a></li>
                                    <li><a href="#" data-filter=".saneamiento">Saneamiento</a></li>
                                    <li><a href="#" data-filter=".viales">Viales</a></li>
                                 </ul> <!-- /.portfolio-filter -->                      
                            </div> <!-- /flat-portfolio -->  
                        </div> <!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="portfolio-wrap">
                        <div class="flat-imagebox isotope-project">
                                <?php
                                if ($ejecucion) {
                                    # code...
                                
                    foreach ($ejecucion as $ejec) {
                        echo '<div class="imagebox style3 '.$ejec->subcategoriaProyecto.'">';
                        echo '<div class="imagebox-image ">';
                        echo '    <img src="'.base_url('assets/img/projects/'.$ejec->portadaProyecto).'" alt="standell">';
                        echo '    <div class="overlay"></div>';
                        echo '</div>';
                        echo '<div class="imagebox-content">';
                        echo '    <h3 class="heading"><a href="'.base_url('Proyectos/Proyecto/'.$ejec->idProyecto.'_'.str_replace(" ", "_", $ejec->tituloProyecto)).'">'.$ejec->tituloProyecto.'</a></h3>';
                        echo '    <div class="meta-project">';
                        echo '        <a href="#">'.$ejec->categoriaProyecto.'</a>';
                        echo '        <a href="#">'.$ejec->subcategoriaProyecto.'</a>';
                        echo '    </div>';
                        echo '</div>';
                        echo '</div>    ';
                    }
                    }
                    ?>

                        </div>

                        </div>
                    </div>  <!-- /.portfolio-wrap -->
                </div> <!-- /.container-fluid -->
            </section>  <!-- /.flat-projects -->

            
        </div> <!-- /.wrap-content -->