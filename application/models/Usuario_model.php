<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public $variable;
	public function __construct(){
		parent::__construct();
	}

	public function login($data){
		$condition = "nombreUsuario =" . "'" . $data['username'] . "' AND " . "passwordUsuario =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function update($id,$data){
		$this->db->where('idUsuario',$id);
		$this->db->update('usuario',$data);
		if($this->db->affected_rows() >=0){
			return true;
		}else{
			return false;
		}
	}

}
