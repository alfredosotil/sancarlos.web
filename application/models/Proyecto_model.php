<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

	public $variable;
	public function __construct(){
		parent::__construct();
	}

		public function listar_ultimo_orden(){
		$this->db->select('Proyecto.idProyecto');
		$this->db->from('Proyecto');
		$this->db->order_by("idProyecto", "DESC");
		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function ingresar_proyecto($data){
		$this->db->insert('Proyecto', $data);				
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}
	public function listar_proyecto_categoria($cat){
		$this->db->select('Proyecto.*');
		$this->db->from('Proyecto');
		$this->db->where('Proyecto.categoriaProyecto', $cat);
		$this->db->order_by("Proyecto.ordenProyecto", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function listar_proyecto_todos(){
		$this->db->select('Proyecto.*');
		$this->db->from('Proyecto');
		$this->db->order_by("Proyecto.ordenProyecto", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function actualizar($data,$id){
		$this->db->where('idProyecto', $id);
        return $this->db->update('Proyecto', $data);
	}
	public function listar_proyecto($id){
		$this->db->select('Proyecto.*');
		$this->db->from('Proyecto');
		$this->db->where('Proyecto.idProyecto', $id);
				
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function eliminar_proyecto($data){
		$this->db->delete('Proyecto', $data);
				
	}
	public function listar_grupo_proyecto($proy){
		$this->db->select('*');
		$this->db->from('Proyecto');
		$this->db->where('categoriaProyecto',$proy);
		$this->db->where('estadoProyecto','1');
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}	
	}
}
