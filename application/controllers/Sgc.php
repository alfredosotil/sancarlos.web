<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sgc extends CI_Controller {


	public function index(){
		$this->form_validation->set_rules('txtUsuario', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('txtPassword', 'Password', 'trim|required|xss_clean');
		
		if ($this->input->post('txtPassword')) {
			$data = array(
				'username' => $this->input->post('txtUsuario'),
				'password' => crypt($this->input->post('txtPassword'), '$6$rounds=5000$usesomesillystringforsalt$')
				);
			if ($this->usuario_model->login($data)) {
				$this->session->set_userdata('username',$this->input->post('txtUsuario'));
				$this->session->set_userdata('password',$this->input->post('txtPassword'));
				$this->load->view('sgc/head');
				$this->load->view('sgc/menu');
				$this->load->view('sgc/inicio');
				$this->load->view('sgc/footer');
			}else{
				$data['error_message'] = 'Datos Equivocados';
				$this->load->view('sgc/login',$data);
			}
			
		}else{
			if ($this->session->userdata('username')) {
				$this->load->view('sgc/head');
				$this->load->view('sgc/menu');
				$this->load->view('sgc/inicio');
				$this->load->view('sgc/footer');
			}else{
				$this->load->view('sgc/login');
			}
		}
	}	
	public function logout(){
		$this->session->sess_destroy();
		redirect('sgc');
	}
	public function password(){
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/password');
		$this->load->view('sgc/footer');
	}
	public function mpassword(){
		$this->form_validation->set_rules('txtNpassword', 'NPassword', 'trim|required|xss_clean');
		if (($this->input->post('txtVpassword'))==($this->session->userdata('password'))) {
			$id='1';
			$data = array(
				'passwordUsuario' => crypt($this->input->post('txtNpassword'), '$6$rounds=5000$usesomesillystringforsalt$')
				);
			if($this->usuario_model->update($id,$data)){
				$this->logout();
			};			
		}else{
			$data['error_message'] = 'contraseña incorrecta';			
			$this->load->view('sgc/head');
			$this->load->view('sgc/menu');
			$this->load->view('sgc/password',$data);
			$this->load->view('sgc/footer');
		}
	}
	public function Proyectos($tipo){
		switch ($tipo) {
			case 'Publicos':
			$datos['t'] = "1";
			$datos['tipo'] = "Publicos";
			break;			
			case 'Privados':
			$datos['t'] = "2";
			$datos['tipo'] = "Privados";
			break;
			case 'Ejecucion':
			$datos['t'] = "3";
			$datos['tipo'] = "Ejecucion";
			break;
			default:
			redirect('sgc/');
			break;
		}
		$Listar_Categoria = $this->proyecto_model->listar_proyecto_categoria($tipo);
		$datos['listar_categoria'] = $Listar_Categoria;
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/proyectos',$datos);
		$this->load->view('sgc/footer');
	}
	public function NuevoProyecto(){
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/nuevo_proyecto');
		$this->load->view('sgc/footer');
	}
	public function InsertarProyecto(){
		$this->form_validation->set_rules('titulo','Titulo','trim|required');
		$this->form_validation->set_rules('obra','Obra','trim|required');
		$this->form_validation->set_rules('area','Area','trim|required');
		$this->form_validation->set_rules('ciudad','Ciudad','trim|required');
		$this->form_validation->set_rules('cliente','Cliente','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			$this->NuevoProyecto();
		}else{
			$config['upload_path'] = 'assets/img/projects';
			$config['allowed_types'] = 'gif|jpg|png';
			if (!empty($_FILES['imagen0']['name'])) {
				$Archivo1 = $_FILES['imagen0']['name'];
				$Tipo1 = explode('.',$Archivo1);
				$NombreArchivo1 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo1[1];
				$config['file_name'] = $NombreArchivo1;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen0')){
					$data = $this->upload->data();
					$Archivo01 = $NombreArchivo1;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo01 = "0";
			}
			if (!empty($_FILES['imagen1']['name'])) {
				$Archivo2 = $_FILES['imagen1']['name'];
				$Tipo2 = explode('.',$Archivo2);
				$NombreArchivo2 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo2[1];
				$config['file_name'] = $NombreArchivo2;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen1')){
					$data = $this->upload->data();
					$Archivo02 = $NombreArchivo2;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo02 = "0";
			}
			if (!empty($_FILES['imagen2']['name'])) {
				$Archivo3 = $_FILES['imagen2']['name'];
				$Tipo3 = explode('.',$Archivo3);
				$NombreArchivo3 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo3[1];
				$config['file_name'] = $NombreArchivo3;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen2')){
					$data = $this->upload->data();
					$Archivo03 = $NombreArchivo3;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo03 = "0";
			}
			if (!empty($_FILES['imagen3']['name'])) {
				$Archivo4 = $_FILES['imagen3']['name'];
				$Tipo4 = explode('.',$Archivo3);
				$NombreArchivo4 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo4[1];
				$config['file_name'] = $NombreArchivo4;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen3')){
					$data = $this->upload->data();
					$Archivo04 = $NombreArchivo4;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo04 = "0";
			}
			$ordenProducto = $this->proyecto_model->listar_ultimo_orden();
			if ($ordenProducto==false) {
				$ordenProyecto = 1;	
			}else{
				$ordenProyecto = $ordenProducto->idProyecto+1;
			}
			$cate = $this->input->post('optionsRadios');
			if (($cate>=1)&&($cate<=6)) {
				$Categoria = 'Publicos';
				switch ($cate) {
					case '1':
					$SubCategoria = "Educativas";
					break;					
					case '2':
					$SubCategoria = "Salud";
					break;
					case '3':
					$SubCategoria = "Saneamiento";
					break;
					case '4':
					$SubCategoria = "Viales";
					break;
					case '5':
					$SubCategoria = "Institucionales";
					break;
					case '6':
					$SubCategoria = "Descolmatacion";
					break;
					default:
					break;
				}
			}elseif (($cate>=7)&&($cate<=9)) {
				$Categoria = 'Privados';
				switch ($cate) {
					case '7':
					$SubCategoria = "Educativas";
					break;					
					case '8':
					$SubCategoria = "Comerciales";
					break;
					case '9':
					$SubCategoria = "Residentales";
					break;
					default:
					break;
				}
			}elseif ($cate==10) {
				$Categoria = 'Ejecucion';
				$SubCategoria = 'Ejecucion';
			}
			$data = array(
				'tituloProyecto' => $this->input->post('titulo'),
				'obraProyecto' => $this->input->post('obra'),
				'areaProyecto' => $this->input->post('area'),
				'ciudadProyecto' => $this->input->post('ciudad'),
				'clienteProyecto' => $this->input->post('cliente'),
				'portadaProyecto' => $Archivo01,
				'foto1Proyecto' => $Archivo02,
				'foto2Proyecto' => $Archivo03,
				'foto3Proyecto' => $Archivo04,
				'categoriaProyecto' => $Categoria,
				'subcategoriaProyecto' => $SubCategoria,
				'estadoProyecto' => '1',
				'ordenProyecto' => $ordenProyecto
				);
			$idProyecto = $this->proyecto_model->ingresar_proyecto($data);
			
			redirect('sgc/Proyectos/'.$Categoria);
		}
	}
	public function OrdenarProyecto($tipo,$id,$opt){
		$be = $this->proyecto_model->listar_proyecto_todos();
		$break = 0;
		foreach ($be as $entity) {
			if ($entity->idProyecto==$id) {
				$obj = $entity;
				$break = 1;
			}else{
				if ($break==0) {
					$temp1 = $entity;
				}else{
					$temp2 = $entity;
					break;
				}
			}
		}
		if ($opt==1) {
			$temp11 = array(
				'ordenProyecto' => $temp1->ordenProyecto-1
				);
			$idTemp1 = $temp1->idProyecto;

			$obj1 = array(
				'ordenProyecto' => $obj->ordenProyecto+1
				);
			$idObj = $obj->idProyecto;
			
			$this->proyecto_model->actualizar($temp11,$idTemp1);
			$this->proyecto_model->actualizar($obj1,$idObj);
		}elseif ($opt==0) {
			$temp22 = array(
				'ordenProyecto' => $temp2->ordenProyecto+1
				);
			$idTemp2 = $temp2->idProyecto;

			$obj2 = array(
				'ordenProyecto' => $obj->ordenProyecto-1
				);
			$idObj = $obj->idProyecto;
			
			$this->proyecto_model->actualizar($temp22,$idTemp2);
			$this->proyecto_model->actualizar($obj2,$idObj);
		}
		//$this->Proyectos($tipo);
		redirect('sgc/Proyectos/'.$tipo);
	}
	public function ActivarProyecto($tipo,$id,$opt){
		$estado = array(
			'estadoProyecto' => $opt
			);
		$this->proyecto_model->actualizar($estado,$id);
		//$this->Proyectos($tipo);	
		redirect('sgc/Proyectos/'.$tipo);
	}
	public function EditarProyecto($tipo,$id){
		$proyecto = $this->proyecto_model->listar_proyecto($id);
		if ($proyecto){
			$data['proyecto'] = $proyecto;
			$this->load->view('sgc/head');		
			$this->load->view('sgc/menu');
			$this->load->view('sgc/editar_proyecto',$data);
			$this->load->view('sgc/footer');
		}else{
			redirect('sgc/Proyectos/'.$tipo);
		}	
	}
	public function ModificarProyecto(){
		$this->form_validation->set_rules('titulo','Titulo','trim|required');
		$this->form_validation->set_rules('obra','Obra','trim|required');
		$this->form_validation->set_rules('area','Area','trim|required');
		$this->form_validation->set_rules('ciudad','Ciudad','trim|required');
		$this->form_validation->set_rules('cliente','Cliente','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			redirect('sgc');
		}else{
			$config['upload_path'] = 'assets/img/projects';
			$config['allowed_types'] = 'gif|jpg|png';
			if ($this->input->post('imagen0x')=='0') {
				if ($this->input->post('imagen0y')!='0') {
					$file_de = 'assets/img/projects/'.$this->input->post('imagen0y');
					unlink($file_de);
				}
				if (!empty($_FILES['imagen0']['name'])) {
					$Archivo1 = $_FILES['imagen0']['name'];
					$Tipo1 = explode('.',$Archivo1);
					$NombreArchivo1 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo1[1];
					$config['file_name'] = $NombreArchivo1;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen0')){
						$data = $this->upload->data();
						$Archivo01 = $NombreArchivo1;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo01 = "0";
				}
			}else{
				$Archivo01 = $this->input->post('imagen0x');
			}
			if ($this->input->post('imagen1x')=='0') {
				if ($this->input->post('imagen1y')!='0') {
					$file_de = 'assets/img/projects/'.$this->input->post('imagen1y');
					unlink($file_de);
				}
				if (!empty($_FILES['imagen1']['name'])) {
					$Archivo2 = $_FILES['imagen1']['name'];
					$Tipo2 = explode('.',$Archivo2);
					$NombreArchivo2 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo2[1];
					$config['file_name'] = $NombreArchivo2;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen1')){
						$data = $this->upload->data();
						$Archivo02 = $NombreArchivo2;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo02 = "0";
				}
			}else{
				$Archivo02 = $this->input->post('imagen1x');
			}
			if ($this->input->post('imagen2x')=='0') {
				if ($this->input->post('imagen2y')!='0') {
					$file_de = 'assets/img/projects/'.$this->input->post('imagen2y');
					unlink($file_de);
				}
				if (!empty($_FILES['imagen2']['name'])) {
					$Archivo3 = $_FILES['imagen2']['name'];
					$Tipo3 = explode('.',$Archivo3);
					$NombreArchivo3 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo3[1];
					$config['file_name'] = $NombreArchivo3;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen2')){
						$data = $this->upload->data();
						$Archivo03 = $NombreArchivo3;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo03 = "0";
				}
			}else{
				$Archivo03 = $this->input->post('imagen2x');
			}
			if ($this->input->post('imagen3x')=='0') {
				if ($this->input->post('imagen3y')!='0') {
					$file_de = 'assets/img/projects/'.$this->input->post('imagen3y');
					unlink($file_de);
				}
				if (!empty($_FILES['imagen3']['name'])) {
					$Archivo4 = $_FILES['imagen3']['name'];
					$Tipo4 = explode('.',$Archivo4);
					$NombreArchivo4 = 'Proyecto'.round(rand(0,999999)).'.'.$Tipo4[1];
					$config['file_name'] = $NombreArchivo4;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen3')){
						$data = $this->upload->data();
						$Archivo04 = $NombreArchivo4;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo04 = "0";
				}
			}else{
				$Archivo04 = $this->input->post('imagen3x');
			}
			$idProyecto = $this->input->post('idProyecto');
			$cate = $this->input->post('optionsRadios');
			if (($cate>=1)&&($cate<=6)) {
				$Categoria = 'Publicos';
				switch ($cate) {
					case '1':
					$SubCategoria = "Educativas";
					break;					
					case '2':
					$SubCategoria = "Salud";
					break;
					case '3':
					$SubCategoria = "Saneamiento";
					break;
					case '4':
					$SubCategoria = "Viales";
					break;
					case '5':
					$SubCategoria = "Institucionales";
					break;
					case '6':
					$SubCategoria = "Descolmatacion";
					break;
					default:
					break;
				}
			}elseif (($cate>=7)&&($cate<=9)) {
				$Categoria = 'Privados';
				switch ($cate) {
					case '7':
					$SubCategoria = "Educativas";
					break;					
					case '8':
					$SubCategoria = "Comerciales";
					break;
					case '9':
					$SubCategoria = "Residentales";
					break;
					default:
					break;
				}
			}elseif ($cate==10) {
				$Categoria = 'Ejecucion';
				$SubCategoria = 'Ejecucion';
			}
			$data = array(
				'tituloProyecto' => $this->input->post('titulo'),
				'obraProyecto' => $this->input->post('obra'),
				'areaProyecto' => $this->input->post('area'),
				'ciudadProyecto' => $this->input->post('ciudad'),
				'clienteProyecto' => $this->input->post('cliente'),
				'portadaProyecto' => $Archivo01,
				'foto1Proyecto' => $Archivo02,
				'foto2Proyecto' => $Archivo03,
				'foto3Proyecto' => $Archivo04,
				'categoriaProyecto' => $Categoria,
				'subcategoriaProyecto' => $SubCategoria
				);
			$idProyecto = $this->proyecto_model->actualizar($data,$idProyecto);
			$this->Proyectos($Categoria);
		}
	}
	public function EliminarProyecto($tipo,$id){
		$proyecto = $this->proyecto_model->listar_proyecto($id);
		if ($proyecto){
			if ($proyecto->portadaProyecto!='0') {
				$file_de = 'assets/img/projects/'.$proyecto->portadaProyecto;
				unlink($file_de);
			}
			if ($proyecto->foto1Proyecto!='0') {
				$file_de = 'assets/img/projects/'.$proyecto->foto1Proyecto;
				unlink($file_de);
			}
			if ($proyecto->foto2Proyecto!='0') {
				$file_de = 'assets/img/projects/'.$proyecto->foto2Proyecto;
				unlink($file_de);
			}
			if ($proyecto->foto3Proyecto!='0') {
				$file_de = 'assets/img/projects/'.$proyecto->foto3Proyecto;
				unlink($file_de);
			}
			$data = array(
				'idProyecto' => $id
				);			
			$this->proyecto_model->eliminar_proyecto($data);
			redirect('sgc/Proyectos/'.$tipo);
		}else{
			redirect('sgc/Proyectos/'.$tipo);
		}
	}
	public function Equipos(){
		$Listar_Equipo = $this->equipo_model->listar_equipo_todos();
		$datos['listar_equipo'] = $Listar_Equipo;
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/equipos',$datos);
		$this->load->view('sgc/footer');
	}
	public function NuevoEquipo(){
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/nuevo_equipo');
		$this->load->view('sgc/footer');
	}
	public function InsertarEquipo(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			$this->NuevoEquipo();
		}else{
			$config['upload_path'] = 'assets/img/equipos';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			if (!empty($_FILES['imagen0']['name'])) {
				$Archivo1 = $_FILES['imagen0']['name'];
				$Tipo1 = explode('.',$Archivo1);
				$NombreArchivo1 = 'Equipos'.round(rand(0,999999)).'.'.$Tipo1[1];
				$config['file_name'] = $NombreArchivo1;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen0')){
					$data = $this->upload->data();
					$Archivo01 = $NombreArchivo1;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo01 = "0";
			}
			if (!empty($_FILES['file0']['name'])) {
				$Archivo2 = $_FILES['file0']['name'];
				$Tipo2 = explode('.',$Archivo2);
				$NombreArchivo2 = 'Equipos'.round(rand(0,999999)).'.'.$Tipo2[1];
				$config['file_name'] = $NombreArchivo2;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file0')){
					$data = $this->upload->data();
					$Archivo02 = $NombreArchivo2;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo02 = "0";
			}
			$ordenEquipo = $this->equipo_model->listar_ultimo_orden();
			if ($ordenEquipo==false) {
				$oEquipo = 1;	
			}else{
				$oEquipo = $ordenEquipo->idEquipo+1;
			}
			$data = array(
				'nombreEquipo' => $this->input->post('nombre'),
				'fotoEquipo' => $Archivo01,
				'fichaEquipo' => $Archivo02,
				'estadoEquipo' => '1',
				'ordenEquipo' => $oEquipo
				);
			$idEquipo = $this->equipo_model->ingresar_equipo($data);
			redirect('sgc/Equipos');
		}
	}
	public function OrdenarEquipo($id,$opt){
		$be = $this->equipo_model->listar_equipo_todos();
		$break = 0;
		foreach ($be as $entity) {
			if ($entity->idEquipo==$id) {
				$obj = $entity;
				$break = 1;
			}else{
				if ($break==0) {
					$temp1 = $entity;
				}else{
					$temp2 = $entity;
					break;
				}
			}
		}
		if ($opt==1) {
			$temp11 = array(
				'ordenEquipo' => $temp1->ordenEquipo-1
				);
			$idTemp1 = $temp1->idEquipo;

			$obj1 = array(
				'ordenEquipo' => $obj->ordenEquipo+1
				);
			$idObj = $obj->idEquipo;
			
			$this->equipo_model->actualizar($temp11,$idTemp1);
			$this->equipo_model->actualizar($obj1,$idObj);
		}elseif ($opt==0) {
			$temp22 = array(
				'ordenEquipo' => $temp2->ordenEquipo+1
				);
			$idTemp2 = $temp2->idEquipo;

			$obj2 = array(
				'ordenEquipo' => $obj->ordenEquipo-1
				);
			$idObj = $obj->idEquipo;
			
			$this->equipo_model->actualizar($temp22,$idTemp2);
			$this->equipo_model->actualizar($obj2,$idObj);
		}
		//$this->Equipos($tipo);
		redirect('sgc/Equipos');
	}
	public function ActivarEquipo($id,$opt){
		$estado = array(
			'estadoEquipo' => $opt
			);
		$this->equipo_model->actualizar($estado,$id);
		//$this->Proyectos($tipo);	
		redirect('sgc/Equipos');
	}
	public function EditarEquipo($id){
		$equipo = $this->equipo_model->listar_equipo($id);
		if ($equipo){
			$data['equipo'] = $equipo;
			$this->load->view('sgc/head');		
			$this->load->view('sgc/menu');
			$this->load->view('sgc/editar_equipo',$data);
			$this->load->view('sgc/footer');
		}else{
			redirect('sgc/Equipos');
		}	
	}
	public function ModificarEquipo(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			redirect('sgc');
		}else{
			$config['upload_path'] = 'assets/img/equipos';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			if ($this->input->post('imagen0x')=='0') {
				$file_de = 'assets/img/equipos/'.$this->input->post('imagen0y');
				unlink($file_de);
				if (!empty($_FILES['imagen0']['name'])) {
					$Archivo1 = $_FILES['imagen0']['name'];
					$Tipo1 = explode('.',$Archivo1);
					$NombreArchivo1 = 'Equipos'.round(rand(0,999999)).'.'.$Tipo1[1];
					$config['file_name'] = $NombreArchivo1;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen0')){
						$data = $this->upload->data();
						$Archivo01 = $NombreArchivo1;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo01 = "0";
				}
			}else{
				$Archivo01 = $this->input->post('imagen0x');
			}
			if ($this->input->post('file0x')=='0') {
				$file_de = 'assets/img/equipos/'.$this->input->post('file0y');
				unlink($file_de);
				if (!empty($_FILES['file0']['name'])) {
					$Archivo2 = $_FILES['file0']['name'];
					$Tipo2 = explode('.',$Archivo2);
					$NombreArchivo2 = 'Equipos'.round(rand(0,999999)).'.'.$Tipo2[1];
					$config['file_name'] = $NombreArchivo2;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('file0')){
						$data = $this->upload->data();
						$Archivo02 = $NombreArchivo2;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo02 = "0";
				}
			}else{
				$Archivo02 = $this->input->post('file0x');
			}
		}
		$data = array(
			'nombreEquipo' => $this->input->post('nombre'),
			'fotoEquipo' => $Archivo01,
			'fichaEquipo' => $Archivo02
			);
		$idEquipo = $this->input->post('idEquipo');
		$idEquipo = $this->equipo_model->actualizar($data,$idEquipo);
		redirect('sgc/equipos');
	}
	public function EliminarEquipo($id){
		$equipo = $this->equipo_model->listar_equipo($id);
		if ($equipo){
			if ($equipo->fotoEquipo!='0') {
				$file_de = 'assets/img/equipos/'.$equipo->fotoEquipo;
				unlink($file_de);
			}
			if ($equipo->fichaEquipo!='0') {
				$file_de = 'assets/img/equipos/'.$equipo->fichaEquipo;
				unlink($file_de);
			}
			$data = array(
				'idEquipo' => $id
				);			
			$this->equipo_model->eliminar_equipo($data);
			redirect('sgc/Equipos');
		}else{
			redirect('sgc/Equipos');
		}
	}
	public function Servicios($serv){
		switch ($serv) {
			case 'diseno':
			$s = "1";
			break;			
			case 'ingenieria':
			$s = "2";
			break;
			case 'construccion':
			$s = "3";
			break;
			case 'asesoria':
			$s = "4";
			break;
			default:
			redirect('sgc/');
			break;
		}
		$Listar_Servicio = $this->servicio_model->listar_servicio($s);
		$datos['servicio'] = $Listar_Servicio;
		$datos['serv'] = $s;
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/servicios',$datos);
		$this->load->view('sgc/footer');
	}
	public function ModificarServicio(){
		$this->form_validation->set_rules('texto','Texto','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			redirect('sgc');
		}else{
			$data = array(
				'textoServicio' => $this->input->post('texto')
				);
			$idServicio = $this->input->post('idServicio');
			$idServicio = $this->servicio_model->actualizar($data,$idServicio);
			redirect('sgc');
		}
	}
	public function Clientes(){
		$Listar_Cliente = $this->cliente_model->listar_cliente_todos();
		$datos['listar_cliente'] = $Listar_Cliente;
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/clientes',$datos);
		$this->load->view('sgc/footer');
	}
	public function NuevoCliente(){
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/nuevo_cliente');
		$this->load->view('sgc/footer');
	}
	public function InsertarCliente(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			$this->NuevoCliente();
		}else{
			$config['upload_path'] = 'assets/img/clientes';
			$config['allowed_types'] = 'gif|jpg|png';
			if (!empty($_FILES['imagen0']['name'])) {
				$Archivo1 = $_FILES['imagen0']['name'];
				$Tipo1 = explode('.',$Archivo1);
				$NombreArchivo1 = 'Clientes'.round(rand(0,999999)).'.'.$Tipo1[1];
				$config['file_name'] = $NombreArchivo1;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen0')){
					$data = $this->upload->data();
					$Archivo01 = $NombreArchivo1;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo01 = "0";
			}
			if (!empty($_FILES['imagen1']['name'])) {
				$Archivo2 = $_FILES['imagen1']['name'];
				$Tipo2 = explode('.',$Archivo2);
				$NombreArchivo2 = 'Clientes'.round(rand(0,999999)).'.'.$Tipo2[1];
				$config['file_name'] = $NombreArchivo2;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen1')){
					$data = $this->upload->data();
					$Archivo02 = $NombreArchivo2;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo02 = "0";
			}
			$orden = $this->cliente_model->listar_ultimo_orden();
			if ($orden==false) {
				$oCliente = 1;	
			}else{
				$oCliente = $orden->idCliente+1;
			}
			$data = array(
				'tituloCliente' => $this->input->post('nombre'),
				'foto1Cliente' => $Archivo01,
				'foto2Cliente' => $Archivo02,
				'estadoCliente' => '1',
				'ordenCliente' => $oCliente
				);
			$idCliente = $this->cliente_model->ingresar_cliente($data);
			redirect('sgc/Clientes');
		}
	}
	public function OrdenarCliente($id,$opt){
		$be = $this->cliente_model->listar_cliente_todos();
		$break = 0;
		foreach ($be as $entity) {
			if ($entity->idCliente==$id) {
				$obj = $entity;
				$break = 1;
			}else{
				if ($break==0) {
					$temp1 = $entity;
				}else{
					$temp2 = $entity;
					break;
				}
			}
		}
		if ($opt==1) {
			$temp11 = array(
				'ordenCliente' => $temp1->ordenCliente-1
				);
			$idTemp1 = $temp1->idCliente;

			$obj1 = array(
				'ordenCliente' => $obj->ordenCliente+1
				);
			$idObj = $obj->idCliente;
			
			$this->cliente_model->actualizar($temp11,$idTemp1);
			$this->cliente_model->actualizar($obj1,$idObj);
		}elseif ($opt==0) {
			$temp22 = array(
				'ordenCliente' => $temp2->ordenCliente+1
				);
			$idTemp2 = $temp2->idCliente;

			$obj2 = array(
				'ordenCliente' => $obj->ordenCliente-1
				);
			$idObj = $obj->idCliente;
			
			$this->cliente_model->actualizar($temp22,$idTemp2);
			$this->cliente_model->actualizar($obj2,$idObj);
		}
		//$this->Clientes($tipo);
		redirect('sgc/Clientes');
	}
	public function ActivarCliente($id,$opt){
		$estado = array(
			'estadoCliente' => $opt
			);
		$this->cliente_model->actualizar($estado,$id);
		//$this->Proyectos($tipo);	
		redirect('sgc/Clientes');
	}
	public function EditarCliente($id){
		$equipo = $this->cliente_model->listar_cliente($id);
		if ($equipo){
			$data['cliente'] = $equipo;
			$this->load->view('sgc/head');		
			$this->load->view('sgc/menu');
			$this->load->view('sgc/editar_cliente',$data);
			$this->load->view('sgc/footer');
		}else{
			redirect('sgc/Clientes');
		}	
	}
	public function ModificarCliente(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			redirect('sgc');
		}else{
			$config['upload_path'] = 'assets/img/clientes';
			$config['allowed_types'] = 'gif|jpg|png';
			if ($this->input->post('imagen0x')=='0') {
				$file_de = 'assets/img/clientes/'.$this->input->post('imagen0y');
				unlink($file_de);
				if (!empty($_FILES['imagen0']['name'])) {
					$Archivo1 = $_FILES['imagen0']['name'];
					$Tipo1 = explode('.',$Archivo1);
					$NombreArchivo1 = 'Clientes'.round(rand(0,999999)).'.'.$Tipo1[1];
					$config['file_name'] = $NombreArchivo1;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen0')){
						$data = $this->upload->data();
						$Archivo01 = $NombreArchivo1;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo01 = "0";
				}
			}else{
				$Archivo01 = $this->input->post('imagen0x');
			}
			if ($this->input->post('imagen1x')=='0') {
				$file_de = 'assets/img/clientes/'.$this->input->post('imagen1y');
				unlink($file_de);
				if (!empty($_FILES['imagen1']['name'])) {
					$Archivo2 = $_FILES['imagen1']['name'];
					$Tipo2 = explode('.',$Archivo2);
					$NombreArchivo2 = 'Clientes'.round(rand(0,999999)).'.'.$Tipo2[1];
					$config['file_name'] = $NombreArchivo2;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen1')){
						$data = $this->upload->data();
						$Archivo02 = $NombreArchivo2;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo02 = "0";
				}
			}else{
				$Archivo02 = $this->input->post('imagen1x');
			}
		}
		$data = array(
			'tituloCliente' => $this->input->post('nombre'),
			'foto1Cliente' => $Archivo01,
			'foto2Cliente' => $Archivo02
			);
		$idCliente = $this->input->post('idCliente');
		$idEquipo = $this->cliente_model->actualizar($data,$idCliente);
		redirect('sgc/Clientes');
	}
	public function EliminarCliente($id){
		$cliente = $this->cliente_model->listar_cliente($id);
		if ($cliente){
			if ($cliente->foto1Cliente!='0') {
				$file_de = 'assets/img/clientes/'.$cliente->foto1Cliente;
				unlink($file_de);
			}
			if ($cliente->foto2Cliente!='0') {
				$file_de = 'assets/img/clientes/'.$cliente->foto2Cliente;
				unlink($file_de);
			}
			$data = array(
				'idCliente' => $id
				);			
			$this->cliente_model->eliminar_cliente($data);
			redirect('sgc/Clientes');
		}else{
			redirect('sgc/Clientes');
		}
	}
	public function Blog(){
		$Listar_Equipo = $this->blog_model->listar_blog_todos();
		$datos['listar_blog'] = $Listar_Equipo;
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/blog',$datos);
		$this->load->view('sgc/footer');
	}
	public function NuevoBlog(){
		$this->load->view('sgc/head');
		$this->load->view('sgc/menu');
		$this->load->view('sgc/nuevo_blog');
		$this->load->view('sgc/footer');
	}
	public function InsertarBlog(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required');
		$this->form_validation->set_rules('fecha','Fecha','trim|required');
		$this->form_validation->set_rules('texto','Texto','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			$this->NuevoBlog();
		}else{
			$config['upload_path'] = 'assets/img/blog';
			$config['allowed_types'] = 'gif|jpg|png';
			if (!empty($_FILES['imagen0']['name'])) {
				$Archivo1 = $_FILES['imagen0']['name'];
				$Tipo1 = explode('.',$Archivo1);
				$NombreArchivo1 = 'Blog'.round(rand(0,999999)).'.'.$Tipo1[1];
				$config['file_name'] = $NombreArchivo1;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('imagen0')){
					$data = $this->upload->data();
					$Archivo01 = $NombreArchivo1;
				}else{
					echo $this->upload->display_errors();
				}
			}else{
				$Archivo01 = "0";
			}
			$f = explode('/', $this->input->post('fecha'));
			$nf = $f[2].'/'.$f[1].'/'.$f[0];
			$data = array(
				'tituloBlog' => $this->input->post('nombre'),
				'fechaBlog' => $nf,
				'textoBlog' => $this->input->post('texto'),
				'fotoBlog' => $Archivo01,
				'estadoBlog' => '1'
				);
			$idCliente = $this->blog_model->ingresar_blog($data);
			redirect('sgc/Blog');
		}
	}
	public function ActivarBlog($id,$opt){
		$estado = array(
			'estadoBlog' => $opt
			);
		$this->blog_model->actualizar($estado,$id);
		//$this->Proyectos($tipo);	
		redirect('sgc/Blog');
	}
	public function EditarBlog($id){
		$equipo = $this->blog_model->listar_blog($id);
		if ($equipo){
			$data['blog'] = $equipo;
			$this->load->view('sgc/head');		
			$this->load->view('sgc/menu');
			$this->load->view('sgc/editar_blog',$data);
			$this->load->view('sgc/footer');
		}else{
			redirect('sgc/Blog');
		}	
	}
	public function ModificarBlog(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required');
		$this->form_validation->set_rules('fecha','Fecha','trim|required');
		$this->form_validation->set_rules('texto','Texto','trim|required');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
		if (!$this->form_validation->run()){
 			//si no pasamos la validación volvemos al formulario mostrando los errores
			$this->NuevoBlog();
		}else{
			$config['upload_path'] = 'assets/img/blog';
			$config['allowed_types'] = 'gif|jpg|png';
			if ($this->input->post('imagen0x')=='0') {
				$file_de = 'assets/img/blog/'.$this->input->post('imagen0y');
				unlink($file_de);
				if (!empty($_FILES['imagen0']['name'])) {
					$Archivo1 = $_FILES['imagen0']['name'];
					$Tipo1 = explode('.',$Archivo1);
					$NombreArchivo1 = 'Blog'.round(rand(0,999999)).'.'.$Tipo1[1];
					$config['file_name'] = $NombreArchivo1;
					$this->upload->initialize($config);
					if ($this->upload->do_upload('imagen0')){
						$data = $this->upload->data();
						$Archivo01 = $NombreArchivo1;
					}else{
						echo $this->upload->display_errors();
					}
				}else{
					$Archivo01 = "0";
				}
			}else{
				$Archivo01 = $this->input->post('imagen0x');
			}
			$f = explode('/', $this->input->post('fecha'));
			$nf = $f[2].'/'.$f[1].'/'.$f[0];
			$data = array(
				'tituloBlog' => $this->input->post('nombre'),
				'fechaBlog' => $nf,
				'textoBlog' => $this->input->post('texto'),
				'fotoBlog' => $Archivo01,
				'estadoBlog' => '1'
				);
			$id = $this->input->post('idBlog');
			$idCliente = $this->blog_model->actualizar($data,$id);
			redirect('sgc/Blog');
		}
	}
	public function EliminarBlog($id){
		$Blog = $this->blog_model->listar_blog($id);
		if ($Blog){
			if ($Blog->fotoBlog!='0') {
				$file_de = 'assets/img/blog/'.$Blog->fotoBlog;
				unlink($file_de);
			}
			$data = array(
				'idBlog' => $id
				);			
			$this->blog_model->eliminar_blog($data);
			redirect('sgc/Blog');
		}else{
			redirect('sgc/Blog');
		}
	}
}
