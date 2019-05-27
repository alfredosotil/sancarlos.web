<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

	public $variable;
	public function __construct(){
		parent::__construct();
	}

		public function listar_ultimo_orden(){
		$this->db->select('Cliente.idCliente');
		$this->db->from('Cliente');
		$this->db->order_by("idCliente", "DESC");
		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function ingresar_cliente($data){
		$this->db->insert('Cliente', $data);				
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}
	
	public function listar_cliente_todos(){
		$this->db->select('Cliente.*');
		$this->db->from('Cliente');
		$this->db->order_by("Cliente.ordenCliente", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function listar_cliente_activos(){
		$this->db->select('Cliente.*');
		$this->db->from('Cliente');
		$this->db->where('Cliente.estadoCliente','1');
		$this->db->order_by("Cliente.ordenCliente", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function actualizar($data,$id){
		$this->db->where('idCliente', $id);
        return $this->db->update('Cliente', $data);
	}
	public function listar_Cliente($id){
		$this->db->select('Cliente.*');
		$this->db->from('Cliente');
		$this->db->where('Cliente.idCliente', $id);
				
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function eliminar_cliente($data){
		$this->db->delete('Cliente', $data);
				
	}
}
