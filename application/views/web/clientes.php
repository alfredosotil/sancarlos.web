 <div class="page-title parallax parallax1 ">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-title-content text-center">
            <div class="page-title-heading ">
                <h3 class="title"><a href="#">NOSOTROS</a></h3>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li class="home"><a href="<?php echo base_url();?>">Inicio</a></li>
                    <li><a href="#"> Clientes</a></li>
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

                if ($clientes) {
                        # code...
                    $i = 0;
                    foreach ($clientes as $publi) {
                echo '<div class="imagebox imagebox-service style4">';
                echo '<div class="imagebox-border"> ';
                echo '<div class="imagebox-image">';
                ?>
                <a href="#"><img onmouseout="this.src='<?php echo base_url('assets/img/clientes/'.$publi->foto1Cliente);?>';" onmouseover="this.src='<?php echo base_url('assets/img/clientes/'.$publi->foto2Cliente);?>';"  src="<?php echo base_url('assets/img/clientes/'.$publi->foto1Cliente);?>"></a>
                <?php
                //echo '<a href="#"><img onmouseout="this.src="'.base_url('assets/img/clientes/'.$publi->foto1Cliente).'";" onmouseover="this.src='.base_url('assets/img/clientes/'.$publi->foto2Cliente).';"  src="'.base_url('assets/img/clientes/'.$publi->foto1Cliente).'"></a>';
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