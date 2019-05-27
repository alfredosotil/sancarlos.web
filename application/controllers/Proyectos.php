<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

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
	public function publicos(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$publicos = $this->proyecto_model->listar_grupo_proyecto('Publicos');
		$data['publicos'] = $publicos;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/publicos',$data);		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function privados(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$privados = $this->proyecto_model->listar_grupo_proyecto('Privados');
		$data['privados'] = $privados;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/privados',$data);		
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function ejecucion(){
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		$ejecucion = $this->proyecto_model->listar_grupo_proyecto('Ejecucion');
		$data['ejecucion'] = $ejecucion;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/ejecucion',$data);			
		$this->load->view('web/footer');
		$this->load->view('web/foot');
	}	
	public function Proyecto($id){
		$id2 = explode('_', $id);
		$cod = $id2[0];
		$proyecto = $this->proyecto_model->listar_proyecto($cod);
		if ($proyecto) {
			$data['proyecto'] = $proyecto;
		$this->load->view('web/head');		
		$this->load->view('web/header');
		$this->load->view('web/proyecto',$data);			
		$this->load->view('web/footer');
		$this->load->view('web/foot');
		}else{
			redirect('/');
		}
		
	}
	
}
