 <a id="scroll-top"></a> <!-- /#scroll-top -->

 <!-- Javascript -->
 <script src="<?php echo base_url('assets/javascript/jquery.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/plugins.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/bootstrap.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/flex-slider.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/jquery-countTo.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/equalize.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/owl.carousel.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/jquery-isotope.js');?>"></script>
 <script src="<?php echo base_url('assets/javascript/main.js');?>"></script> 

 <!-- Slider -->
 <script src="<?php echo base_url('assets/rev-slider/js/jquery.themepunch.tools.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/jquery.themepunch.revolution.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/javascript/rev-slider.js');?>"></script> 

 <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.actions.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.carousel.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.kenburn.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.layeranimation.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.migration.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.navigation.min.js');?>"></script>
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.parallax.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.slideanims.min.js');?>"></script> 
 <script src="<?php echo base_url('assets/rev-slider/js/extensions/revolution.extension.video.min.js');?>"></script> 
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script type="text/javascript">
 function checkmail(input){
  var pattern1=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if(pattern1.test(input)){ 
    return true; 
}else{ 
    return false; 
}
}  
function proceed1(){
    var name = document.getElementById("name");
    var mail = document.getElementById("mail");
    var message = document.getElementById("message");
    var cv = document.getElementById("cv");
    var errors = "";
    if (name.value == "") {
        name.className = 'error';
        return false;
    }else if(mail.value == ""){
        mail.className = 'error';
        return false;
    }else if(checkmail(mail.value)==false){
        alert('Direccion de correo invalida');
        return false;
    }else if(message.value == ""){
        message.className = 'error';
        return false;
    }else if(cv.value == ""){
        cv.className = 'error';
        return false;
    }else{
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Contacto/enviarP');?>",
            //data: $('#postulante_enviar_form').serialize(),
            data: new FormData($('#postulante_enviar_form')[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
                $('#enviando_msg').fadeIn(1000);
            },
            success: function(msg){
                console.log(msg);
                if (msg) {
                    $('#enviando_msg').fadeOut(1000);
                    $('#postulante_enviar_form').fadeOut(1000);
                    $('#contact_message').fadeIn(1000);
                }else{
                    $('#ver_message').fadeIn(1000);
                    alert(msg);
                };
            }
        });
    }
};
</script>
</body>  
</html>
