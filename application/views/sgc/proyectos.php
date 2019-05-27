<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> Proyectos <?php echo $tipo;?></h3>
         <div class="row">
         </div><!-- row -->
         <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
               <h4><i class="fa fa-angle-right"></i> Nuevo Proyecto:  &nbsp;&nbsp;<a href="<?php echo site_url('sgc/NuevoProyecto');?>"><button type="button" class="btn btn-theme">+ Agregar</button></a></h4>
               <hr>
             </table>
           </div><!-- /content-panel -->
         </div><!-- /col-md-12 -->
         <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
             <h4><i class="fa fa-angle-right"></i> Proyectos actuales:</h4>
             <hr>
             <thead>
              <tr>
                <th><i class="fa fa-bullhorn"></i> Nombre</th>
                <?php
                if ($t!=3) {
                  echo '<th class="hidden-phone"><i class="fa fa-question-circle"></i> Categoría</th>';
                }                
                ?>                
                <th><i class="fa fa-bookmark"></i> Vista Previa</th>
                <th><i class=" fa fa-edit"></i> Estado</th>
                <th></th>
              </tr>
            </thead>
            <style type="text/css">
            
            </style>
            <tbody>
              <?php
              $i = 0;
              if ($listar_categoria) {
                foreach ($listar_categoria as $listar) {
                  echo '<tr>';
                //echo '<td><a href="#">'.$listar->tituloProyecto.'</a></td>';
                  echo '<td>'.$listar->tituloProyecto.'</td>';
                  if ($t!=3) {
                    echo '<td class="hidden-phone">'.$listar->subcategoriaProyecto.'</td>';
                  }                

                  echo '<td>';
                  echo '<div class="tooltip2"><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i><span class="tooltiptext2"><img src="'.base_url('assets/img/projects/'.$listar->portadaProyecto).'" width="400px"/></span></button></div>';
                  echo '</td>';
                  if ($listar->estadoProyecto==1) {
                    echo '<td><span class="label label-success label-mini">Activo</span></td>';
                  }else{
                    echo '<td><span class="label label-danger label-mini">Inactivo</span></td>';
                  }
                  echo '<td>';

                  if ($i != 0) {
                    echo '<a href="'.base_url('sgc/OrdenarProyecto/'.$tipo.'/'.$listar->idProyecto.'/1').'"><button class="btn btn-primary btn-xs"><i class="fa fa-arrow-up"></i></button></a>';
                  }else{

                  }
                  if ($i != count($listar_categoria)-1) {
                    echo '<a href="'.base_url('sgc/OrdenarProyecto/'.$tipo.'/'.$listar->idProyecto.'/0').'"><button class="btn btn-primary btn-xs"><i class="fa fa-arrow-down"></i></button></a>';
                  }else{

                  }
                  if ($listar->estadoProyecto==1) {
                    echo '<a href="'.base_url('sgc/ActivarProyecto/'.$tipo.'/'.$listar->idProyecto.'/0').'"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>';
                  }else{
                    echo '<a href="'.base_url('sgc/ActivarProyecto/'.$tipo.'/'.$listar->idProyecto.'/1').'"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>';
                  }
                  echo '<a href="'.base_url('sgc/EditarProyecto/'.$tipo.'/'.$listar->idProyecto).'"><button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>';
                  echo '<button class="btn btn-danger btn-xs btnEliminar" id="'.$tipo.'-'.$listar->idProyecto.'"><i class="fa fa-trash-o "></i></button>';
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