<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

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
	public function historia(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/historia');		
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function mision_vision(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/mision_vision');		
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function valores(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/valores');			
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function staff(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/staff');			
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function social(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/social');			
		$this->load->view('web/slide_clientes');		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function clientes(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$clientes = $this->cliente_model->listar_cliente_activos();
		$data['clientes'] = $clientes;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/clientes',$data);			
				
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
}
