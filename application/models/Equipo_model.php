<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo_model extends CI_Model {

	public $variable;
	public function __construct(){
		parent::__construct();
	}

		public function listar_ultimo_orden(){
		$this->db->select('Equipo.idEquipo');
		$this->db->from('Equipo');
		$this->db->order_by("idEquipo", "DESC");
		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function ingresar_equipo($data){
		$this->db->insert('Equipo', $data);				
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}
	
	public function listar_equipo_todos(){
		$this->db->select('Equipo.*');
		$this->db->from('Equipo');
		$this->db->order_by("Equipo.ordenEquipo", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function listar_equipo_activos(){
		$this->db->select('Equipo.*');
		$this->db->from('Equipo');
		$this->db->where('Equipo.estadoEquipo','1');
		$this->db->order_by("Equipo.ordenEquipo", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function actualizar($data,$id){
		$this->db->where('idEquipo', $id);
        return $this->db->update('Equipo', $data);
	}
	public function listar_Equipo($id){
		$this->db->select('Equipo.*');
		$this->db->from('Equipo');
		$this->db->where('Equipo.idEquipo', $id);
				
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function eliminar_equipo($data){
		$this->db->delete('Equipo', $data);
				
	}
}
