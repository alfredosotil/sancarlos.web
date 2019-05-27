<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {

	public $variable;
	public function __construct(){
		parent::__construct();
	}

		
	public function actualizar($data,$id){
		$this->db->where('idServicio', $id);
        return $this->db->update('Servicio', $data);
	}
	public function listar_servicio($id){
		$this->db->select('Servicio.*');
		$this->db->from('Servicio');
		$this->db->where('Servicio.idServicio', $id);
				
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
}
