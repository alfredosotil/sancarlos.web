<div class="flat-slider style1">
            <!-- SLIDER -->
            <div class="rev_slider_wrapper fullwidthbanner-container" >
                <div id="rev-slider1" class="rev_slider fullwidthabanner">
                    <ul>
                        <!-- Slide 1 -->
                        <?php
                        if ($proyecto->foto1Proyecto!='0') {
                            echo '<li data-transition="random">';
                            echo '<!-- Main Image -->';
                            echo '<img src="'.base_url('assets/img/projects/'.$proyecto->foto1Proyecto).'" alt="" data-bgposition="center center" data-no-retina>';
                            echo '<div class="overlay"></div>';
                            echo '</li><!-- /End Slide 1 -->';
                        }
                        if ($proyecto->foto2Proyecto!='0') {
                            echo '<li data-transition="random">';
                            echo '<!-- Main Image -->';
                            echo '<img src="'.base_url('assets/img/projects/'.$proyecto->foto2Proyecto).'" alt="" data-bgposition="center center" data-no-retina>';
                            echo '<div class="overlay"></div>';
                            echo '</li><!-- /End Slide 1 -->';
                        }
                        if ($proyecto->foto3Proyecto!='0') {
                            echo '<li data-transition="random">';
                            echo '<!-- Main Image -->';
                            echo '<img src="'.base_url('assets/img/projects/'.$proyecto->foto3Proyecto).'" alt="" data-bgposition="center center" data-no-retina>';
                            echo '<div class="overlay"></div>';
                            echo '</li><!-- /End Slide 1 -->';
                        }
                        ?>
                        
                    </ul>
                </div>
            </div> 
        </div> <!-- /.flat-slider -->
<br><br>
            <div class="wrap-project-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sidebar-left">
                                <div class="widget-list-info" style="align:center">
                                    <h5 class="widget-title" style="text-align: center;"><?php echo $proyecto->tituloProyecto;?></h5>                                
                                    <ul class="list-info" style="text-align: center;">
                                          <li style="align:center"><span class="text">Obra:</span> <span class="right"><?php echo $proyecto->obraProyecto;?></span></li>
                                          <li><span class="text">Área Construida: </span><span class="right"><?php echo $proyecto->areaProyecto;?> </span></li>
                                        <li><span class="text">Ciudad:</span> <span class="right"><?php echo $proyecto->ciudadProyecto;?></span></li>
                                        <li><span class="text">Cliente:</span> <span class="right"><?php echo $proyecto->clienteProyecto;?></span></li>
                                      
                                        
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-8">
                            <div class="project-content">
                                <div class="textbox textbox-project-detail">
                                    <h5 class="textbox-heading"><a href="#">Detalle de obra</a></h5>
                                    <div class="textbox-content">
                                        <p>
                                            In dignissim lorem metus, a cursus quam pulvinar id. In hac habitasse platea dictumst. Nullam faucibus, dui ut cursus auctor, odio ante maximus urna, vitae accumsan dui diam vel orci. Pellentesque dignissim molestie dolor at placerat. Donec eu cursus diam. Sed nec augue quis lorem congue maximus. Cras vehicula et lacus sit amet convallis. 
                                            Vestibulum varius sapien eget ullamcorper volutpat. Mauris accumsan nunc sit amet turpis semper, at porta augue varius. In volutpat erat sapien, sed porta odio dignissim nec. Praesent et lorem est. Pellentesque eget neque nec 
                                            turpis fringilla fringilla. Sed euismod consequat leo, at auctor dui vulputate id. Suspendisse eget ultricies urna. 
                                        </p>
                                    </div>                                
                                </div>
                            <br><br>
                                <div class="textbox textbox-project-detail">
                                   

                            </div>
                        </div>-->
                    </div>
                </div>
            </div> <!-- /.wrap-project-detail -->

          
        </div> <!-- /.content-wrap -->