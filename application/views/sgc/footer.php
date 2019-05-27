      <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
          2019 - Sistema Desarrollado por <a href="https://www.tcq.pe" target="_blank" style="color:#fff">TCQ.</a>
          <a href="<?php echo site_url('sgc');?>" class="go-top">
            <i class="fa fa-angle-up"></i>
          </a>
        </div>
      </footer>
      <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/sgc/js/jquery.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/sgc/js/jquery-1.8.3.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/sgc/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/sgc/js/jquery.dcjqaccordion.2.7.js')?>"></script>
    <script src="<?php echo base_url('assets/sgc/js/jquery.scrollTo.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/sgc/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/sgc/js/jquery.sparkline.js');?>" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('assets/sgc/js/common-scripts.js');?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/sgc/js/gritter/js/jquery.gritter.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/sgc/js/gritter-conf.js');?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url('assets/sgc/js/sparkline-chart.js');?>"></script>    
    <script src="<?php echo base_url('assets/sgc/js/zabuto_calendar.js');?>"></script>  
    <script src="<?php echo base_url('assets/sgc/CLE/jquery.cleditor.js');?>"></script>  
    <script src="<?php echo base_url('assets/sgc/CLE/jquery.cleditor.min.js');?>"></script>  

  <!--<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: '¡Bienvenido!',
            // (string | mandatory) the text inside the notification
            text: 'Sistema desarrollado por <a href="https://www.tcq.pe" target="_blank" style="color:#f1cf00">TCQ.</a>',
            // (string | optional) the image to display on the left
            image: 'assets/img/logo.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
      </script>-->
<script>
        $(document).ready(function () { $("#input").cleditor(); });
    </script>
      <script type="application/javascript">
      $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
          $(this).hide();
        });
        
        $("#my-calendar").zabuto_calendar({
          action: function () {
            return myDateFunction(this.id, false);
          },
          action_nav: function () {
            return myNavFunction(this.id);
          },
          ajax: {
            url: "show_data.php?action=1",
            modal: true
          },
          legend: [
          {type: "text", label: "Special event", badge: "00"},
          {type: "block", label: "Regular event", }
          ]
        });
      });


      function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }
      $("#imagen0").change(function() {
        $("#imagen0x").val("0");    
      });

      $("#imagen1").change(function() {
        $("#imagen1x").val("0");    
      });

      $("#imagen2").change(function() {
        $("#imagen2x").val("0");    
      });
      $("#imagen3").change(function() {
        $("#imagen3x").val("0");    
      });
      $("#file0").change(function() {
        $("#file0x").val("0");    
      });
      $('.btnEliminar').click(function(){
  var valor = $(this).attr('id').split('-');
var categoria = valor[0];
  var id = valor[1];
  if(confirm("Eliminar registro?")){
  url = "<?php echo base_url(); ?>sgc/EliminarProyecto/"+categoria+"/"+id;
  window.location.href = url;
}
});
      $('.btnEliminar2').click(function(){
  var valor = $(this).attr('id');
//var categoria = valor[0];
  //var id = valor[1];
  if(confirm("Eliminar registro?")){
  url = "<?php echo base_url(); ?>sgc/EliminarEquipo/"+valor;
  window.location.href = url;
}
});
      $('.btnEliminar3').click(function(){
  var valor = $(this).attr('id');
//var categoria = valor[0];
  //var id = valor[1];
  if(confirm("Eliminar registro?")){
  url = "<?php echo base_url(); ?>sgc/EliminarCliente/"+valor;
  window.location.href = url;
}
});
            $('.btnEliminar4').click(function(){
  var valor = $(this).attr('id');
//var categoria = valor[0];
  //var id = valor[1];
  if(confirm("Eliminar registro?")){
  url = "<?php echo base_url(); ?>sgc/EliminarBlog/"+valor;
  window.location.href = url;
}
});
      </script>


    </body>
    </html>
