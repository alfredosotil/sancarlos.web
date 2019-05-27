<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
		$proyectos = $this->proyecto_model->listar_proyecto_todos();
		$data['proyectos'] = $proyectos;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/slider');
		$this->load->view('web/proyectos',$data);
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}		
}
