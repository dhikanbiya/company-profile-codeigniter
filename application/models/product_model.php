<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Product_model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		return $this->db->insert('products', $data);
	}

	public function show_all(){
		return $query = $this->db->get('products')->result();
	}

	public function destroy($slug){
		return $this->db->delete('products', array('slug' => $slug));
	}

	public function edit($slug){
		return $query = $this->db->get_where('products', array('slug' => $slug))->result();
	}

	public function update($data,$slug){
		return  $this->db->update('products', $data, array('slug' => $slug));
	}

	public function get_category(){
		return $this->db->get('categories')->result();
	}
}
