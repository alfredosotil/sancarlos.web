<div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title"><a href="#">EQUIPOS</a></h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><a href="<?php echo base_url();?>">Inicio</a></li>
                            <li><a href="#"> Equipos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->

        <section class="flat-services style4 pd-top-80 pd-bottom-10">
            <div class="container">
                <div class="row">
                    <div class="flat-imagebox clearfix">
                        
                        <?php
                        if ($equipos) {
                            foreach ($equipos as $equipo) {
                                echo '<div class="imagebox imagebox-service style4">';
                                echo '<div class="imagebox-border"> ';
                                echo '<div class="imagebox-image">';
                                echo '<a href="#"><img src="'.base_url('assets/img/equipos/'.$equipo->fotoEquipo).'" alt="standell"></a>';
                                echo '</div>';
                                echo '<div class="imagebox-content">';
                                echo '<h4 class="heading"><a href="#">'.$equipo->nombreEquipo.'</a></h4>';
                                echo '<p><a target="_BLANK" href="'.base_url('assets/img/equipos/'.$equipo->fichaEquipo).'" target="_blank"><u>Ver Ficha Técnica</u></a></p>';
                                echo '</div>';
                                echo '</div> ';
                                echo '</div> <!-- /.imagebox -->';
                            }
                        }
                        ?>
                    </div> <!-- /.flat-imagebox -->
                </div> <!-- /.row --> 
            </div> <!-- /.container -->
        </section> <!-- /.flat-services -->

       
