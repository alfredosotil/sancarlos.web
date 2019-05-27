<div class="page-title parallax parallax1 ">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-title-content text-center">
            <div class="page-title-heading ">
                <h3 class="title"><a href="#">CONTACTO</a></h3>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li class="home"><a href="<?php echo base_url();?>">Inicio</a></li>
                    <li><a href="#">Postulantes</a></li>

                </ul>
            </div>
        </div>
    </div>
</div> <!-- /.page-title -->

<div class="content-wrap main-contact-page pd-top-80 pd-bottom-80">
    <div class="container">

        <div class="wrap-contact-page pd-top-80 ">
            <div class="container">
             <div class="row">

              <div class="col-md-12">
                <div class="flat-textbox textbox-about-us">
                    <div class="flat-title">
                        <h2 class="title"> Postulantes </h2> 
                    </div>
                    <div class="textbox-content">
                        <p>Estamos en constante búsqueda de nuevos talentos que puedar ser parte de nuestra familia, que sueñen en hacer cosas grandes que trasciendan en toda lo que hagan, si crees que cumples con este perfil, eres uno de los que estamos buscando. </p> 


                    </div>
                </div><br><br><br>
            </div> <!-- /.col-md-7 -->




            <div class="col-md-9 col-sm-12">
                <div class=" flat-form-contact-us"> 
                    <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Gracias, tu mensaje ha sido enviado</div>
                    <div id="enviando_msg" class="success-msg"> <i class="fa fa-paper-plane-o"></i><img src="<?php echo base_url('assets/img/enviando2.gif')?>"></div>
                    <form role="form" id="postulante_enviar_form" class="form-contact-us page-contact" method="post" onSubmit="return false" enctype="multipart/form-data">
                        <div class="row-input-wrap">
                            <div class="input-wrap-name">
                                <input autocomplete="off" type="text" class="name" name="name" id="name" required="" placeholder="Nombre">
                            </div>
                            <div class="input-wrap-mail">
                                <input autocomplete="off" type="text" name="mail" id="mail" class="mail" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="input-wrap-message">
                            <textarea nautocomplete="off" name="message" class="message" id="message" required="" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="input-wrap-message">
                            Adjuntar CV(.pdf): <input accept="application/pdf" type="file" name="cv" id="cv" required="">
                        </div>
                        <div class="">
                         <div class="g-recaptcha" data-sitekey="6Lchj5kUAAAAAMQg__m4wHhbGI4fKZTc4-KGN6ry"></div>
                         <div id="ver_message" class="success-msg">falto la verificacion.</div>
                         <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed1();">Enviar</button>
                     </div>
                 </form>  
             </div>
         </div>

         <div class="col-md-3 col-sm-12">
            <div class="sidebar-right">
                <div class="widget widget-logo-info widget-text sidebar-right">
                    <div class="flat-title">
                        <h3 class="title">Contacto</h3>
                    </div>
                    <ul class="info">
                        <li class="phone"><a href="#" class="data-hover"><font size="1" color="">+51</font> 01 715 1333 -  <font size="1" color="">+51</font> 01 437 1902 </a></li>
                        <li class="mail"><a href="#" class="data-hover">postulantes@sancarlos.com.pe</a></li>
                        <li class="address"><a href="#" class="data-hover">Calle Los Gladiolos 204 Urb. Salamanca - Ate - Lima-Perú</a></li>   
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</div>
</div>
</div>
        </div> <!-- /.content-wrap -->