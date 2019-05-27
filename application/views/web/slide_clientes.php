   

        <div class="partner-clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slide-client owl-carousel" data-auto="true" data-item="5" data-nav="false" data-dots="false">
                            <?php
                            for ($i=1; $i < 16; $i++) { 
                                echo '<div class="client ">';
                                echo '<a href="#" target="_blank">';
                                echo '<img src="'.base_url('assets/img/clientes/cliente'.$i.'-hover.jpg').'" alt="">';
                                echo '<img src="'.base_url('assets/img/clientes/cliente'.$i.'.jpg').'" alt="">';
                                echo '</a>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.partner-clients -->