<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public $variable;
	public function __construct(){
		parent::__construct();
	}

		public function listar_ultimo_orden(){
		$this->db->select('Blog.idBlog');
		$this->db->from('Blog');
		$this->db->order_by("idBlog", "DESC");
		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function ingresar_blog($data){
		$this->db->insert('Blog', $data);				
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}
	
	public function listar_blog_todos(){
		$this->db->select('Blog.*');
		$this->db->from('Blog');
		$this->db->order_by("Blog.fechaBlog", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function listar_blog_activos(){
		$this->db->select('Blog.*');
		$this->db->from('Blog');
		$this->db->where('Blog.estadoBlog','1');
		$this->db->order_by("Blog.fechaBlog", "ASC");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function listar_grupo_pagina($i,$t){
		$this->db->select('Blog.*');
		$this->db->from('Blog');
		$this->db->where('Blog.estadoBlog','1');
		$this->db->order_by("Blog.fechaBlog", "ASC");
		if ($i=='0') {
			$this->db->limit($t);
		}else{
			$this->db->limit($t,$i);
		}
		
				
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function actualizar($data,$id){
		$this->db->where('idBlog', $id);
        return $this->db->update('Blog', $data);
	}
	public function listar_blog($id){
		$this->db->select('Blog.*');
		$this->db->from('Blog');
		$this->db->where('Blog.idBlog', $id);
				
		$query = $this->db->get();
		
		if($query->row()){
			return $query->row();
		}
		else{
			return false;
		}
	}
	public function eliminar_blog($data){
		$this->db->delete('Blog', $data);
				
	}
}
