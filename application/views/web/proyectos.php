<br><br><br>
<?php
$n = shuffle($proyectos); 

?>
        
        

        <section class="flat-projects clearfix">
            <div class="flat-title">
                <h2 class="title center-title">PROYECTOS</h2>
            </div>
            <div class="flat-imagebox isotope-project">
                 <?php
                    if ($proyectos) {
                        # code...
                    $i = 0;
                    foreach ($proyectos as $publi) {
                        echo '<div class="imagebox style3 '.$publi->subcategoriaProyecto.'">';
                        echo '<div class="imagebox-image ">';
                        echo '    <img src="'.base_url('assets/img/projects/'.$publi->portadaProyecto).'" alt="standell">';
                        echo '    <div class="overlay"></div>';
                        echo '</div>';
                        echo '<div class="imagebox-content">';
                        echo '    <h3 class="heading"><a href="'.base_url('Proyectos/Proyecto/'.$publi->idProyecto.'_'.str_replace(" ", "_", $publi->tituloProyecto)).'">'.$publi->tituloProyecto.'</a></h3>';
                        echo '    <div class="meta-project">';
                        echo '        <a href="#">'.$publi->categoriaProyecto.'</a>';
                        echo '        <a href="#">'.$publi->subcategoriaProyecto.'</a>';
                        echo '    </div>';
                        echo '</div>';
                        echo '</div>    ';
                        if (++$i == 6) break;
                    }
                    }
                    ?>
            </div>
        </section> <!-- /.flat-projects -->