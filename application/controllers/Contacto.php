<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * 		http://example.com/index.php/welcome
 *	- or -
 * 		http://example.com/index.php/welcome/index
 *	- or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see https://codeigniter.com/user_guide/general/urls.html
 */

public function index(){
	//$this->output->enable_profiler(TRUE);
	//print_r($this->session->all_userdata());
	redirect('/');
}
public function postulantes(){
	//$this->output->enable_profiler(TRUE);
	//print_r($this->session->all_userdata());
	$this->load->view('web/head');		
	$this->load->view('web/header');
	$this->load->view('web/postulantes');
	$this->load->view('web/footer');
	$this->load->view('web/foot');
}
public function proveedores(){
	//$this->output->enable_profiler(TRUE);
	//print_r($this->session->all_userdata());
	$this->load->view('web/head');		
	$this->load->view('web/header');
	$this->load->view('web/proveedores');
	$this->load->view('web/footer');
	$this->load->view('web/foot');
}
public function clientes(){
	//$this->output->enable_profiler(TRUE);
	//print_r($this->session->all_userdata());
	$this->load->view('web/head');		
	$this->load->view('web/header');
	$this->load->view('web/cliente');
	$this->load->view('web/footer');
	$this->load->view('web/foot');
}
public function enviarP(){
	$recap = trim($this->input->post('g-recaptcha-response'));
	$nombre = $this->input->post('name');
	$mail = $this->input->post('mail');
	$message = $this->input->post('message');

	$config['upload_path'] = 'assets/cv/';
	$config['allowed_types'] = 'pdf';
	if (!empty($_FILES['cv']['name'])) {
		$Archivo1 = $_FILES['cv']['name'];
		$Tipo1 = explode('.',$Archivo1);
		$NombreArchivo1 = 'cv-'.round(rand(0,999999)).'.'.$Tipo1[1];
		$config['file_name'] = $NombreArchivo1;
		$this->upload->initialize($config);
		if ($this->upload->do_upload('cv')){
			$data = $this->upload->data();
			$Archivo01 = $NombreArchivo1;
		}else{
			echo $this->upload->display_errors();
		}
	}else{
		$Archivo01 = "0";
	}

	$e_body = "Has sido contactado por $nombre desde tu pagina web y dejo escrito lo siguiente."."\r\n"."\r\n";
	$e_content = "\"$message\""."\r\n"."\r\n";
	$e_reply = "Puedes contactar a $nombre via email, $mail";
	$mens = wordwrap($e_body.$e_content.$e_reply,70);

	$this->email->from($mail, $nombre);
	$this->email->to('leecheva@gmail.com');
	$this->email->subject("contacto de Postulante");
	$this->email->message($mens);
	$c = base_url('/assets/cv/'.$NombreArchivo1);
	$this->email->attach($c);
	echo $c;
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	//Dada la afinacion
	//Antes del tiempo
	//Tarde o temprano
	//Aparecen los restos
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
			if ($this->email->send()){
        		echo true;
			}else{
				echo false;
			}
		} else {
			echo false;
		}

}
}
