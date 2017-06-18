<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Category_model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		return $this->db->insert('categories', $data);
	}

	public function show_all(){
		return $query = $this->db->get('categories')->result();
	}

	public function destroy($slug){
		return $this->db->delete('categories', array('slug' => $slug));
	}

	public function edit($slug){
		return $query = $this->db->get_where('categories', array('slug' => $slug))->result();
	}

	public function update($data,$slug){
		return  $this->db->update('categories', $data, array('slug' => $slug));
	}
}
