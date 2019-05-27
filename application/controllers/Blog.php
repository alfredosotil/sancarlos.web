<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		redirect('/');
	}
	public function Articulos($pagina=0){
		$tam_pag = 6;
		if ($pagina==0) {
			$inicio = 0;
			$pagina = 1;
		}else{
			$inicio = ($pagina-1)*$tam_pag;
		}
		$registros = $this->blog_model->listar_blog_activos();
		$num_total_reguistros = count($registros);
		$total_paginas = ceil($num_total_reguistros/$tam_pag);

		$listar_grupo = $this->blog_model->listar_grupo_pagina($inicio,$tam_pag);
		//$this->output->enable_profiler(TRUE);
		//print_r($this->session->all_userdata());
		if ($listar_grupo) {
			$datos['listar_grupo'] = $listar_grupo;
			$datos['total_registros'] = $num_total_reguistros;
			$datos['total_pagina'] = $total_paginas;
			$datos['inicio'] = $inicio;
			$datos['pagina'] = $pagina;
			$datos['cantidad'] = $tam_pag;
			$this->load->view('web/head');		
			$this->load->view('web/header');
			$this->load->view('web/blog',$datos);
			$this->load->view('web/footer');
			$this->load->view('web/foot');
		}else{
			redirect('/');
		}
	}	
	public function Articulo($id){
		$id2 = explode('_', $id);
		$cod = $id2[0];
		$blog = $this->blog_model->listar_blog($cod);
		if ($blog) {
			$data['blog'] = $blog;
			$this->load->view('web/head');		
			$this->load->view('web/header');
			$this->load->view('web/articulo',$data);			
			$this->load->view('web/footer');
			$this->load->view('web/foot');
		}else{
			redirect('/');
		}
	}
}
