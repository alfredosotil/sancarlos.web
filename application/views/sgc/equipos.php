<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> Equipos</h3>
         <div class="row">


         </div><!-- row -->

         <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
               <h4><i class="fa fa-angle-right"></i> Nuevo Equipo:  &nbsp;&nbsp;<a href="<?php echo base_url('sgc/NuevoEquipo');?>"><button type="button" class="btn btn-theme">+ Agregar</button></a></h4>
               <hr>
             </table>
           </div><!-- /content-panel -->
         </div><!-- /col-md-12 -->



         <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
             <h4><i class="fa fa-angle-right"></i> Equipos actuales:</h4>
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
             <?php
             $i = 0;
             if ($listar_equipo) {
              foreach ($listar_equipo as $listar) {
                echo '<tr>';
                echo '<td>'.$listar->nombreEquipo.'</td>';
                echo '<td>';
                echo '<div class="tooltip2"><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i><span class="tooltiptext2"><img src="'.base_url('assets/img/equipos/'.$listar->fotoEquipo).'" width="400px"/></span></button></div>';
                echo '</td>';
                if ($listar->estadoEquipo==1) {
                  echo '<td><span class="label label-success label-mini">Activo</span></td>';
                }else{
                  echo '<td><span class="label label-danger label-mini">Inactivo</span></td>';
                }
                echo '<td>';

                if ($i != 0) {
                  echo '<a href="'.base_url('sgc/OrdenarEquipo/'.$listar->idEquipo.'/1').'"><button class="btn btn-primary btn-xs"><i class="fa fa-arrow-up"></i></button></a>';
                }else{

                }
                if ($i != count($listar_equipo)-1) {
                  echo '<a href="'.base_url('sgc/OrdenarEquipo/'.$listar->idEquipo.'/0').'"><button class="btn btn-primary btn-xs"><i class="fa fa-arrow-down"></i></button></a>';
                }else{

                }
                if ($listar->estadoEquipo==1) {
                  echo '<a href="'.base_url('sgc/ActivarEquipo/'.$listar->idEquipo.'/0').'"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>';
                }else{
                  echo '<a href="'.base_url('sgc/ActivarEquipo/'.$listar->idEquipo.'/1').'"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>';
                }
                echo '<a href="'.base_url('sgc/EditarEquipo/'.$listar->idEquipo).'"><button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>';
                echo '<button class="btn btn-danger btn-xs btnEliminar2" id="'.$listar->idEquipo.'"><i class="fa fa-trash-o "></i></button>';
                echo '</td>';
                echo '</tr>';
                $i++;
              }
            }
            ?>
          </tbody>
        </table>
      </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
  </div><!-- /row -->

</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->