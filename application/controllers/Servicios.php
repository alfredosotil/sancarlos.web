<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

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
	public function diseno(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$Listar_Servicio = $this->servicio_model->listar_servicio('1');
		$datos['servicio'] = $Listar_Servicio;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/diseno',$datos);		
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function ingenieria(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$Listar_Servicio = $this->servicio_model->listar_servicio('2');
		$datos['servicio'] = $Listar_Servicio;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/ingenieria',$datos);		
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function construccion(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$Listar_Servicio = $this->servicio_model->listar_servicio('3');
		$datos['servicio'] = $Listar_Servicio;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/construccion',$datos);			
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function asesoria(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$Listar_Servicio = $this->servicio_model->listar_servicio('4');
		$datos['servicio'] = $Listar_Servicio;		
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/asesoria',$datos);			
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	
}
