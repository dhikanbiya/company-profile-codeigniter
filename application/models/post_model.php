<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Post_model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		return $this->db->insert('posts', $data);
	}

	public function show($page){
		return $query = $this->db->get_where('posts', array('page' => $page))->result();
	}

	public function destroy($slug){
		return $this->db->delete('posts', array('slug' => $slug));
	}

	public function edit($page){
		return $query = $this->db->get_where('posts', array('page' => $page))->result();
	}

	public function update($data,$page){
		return  $this->db->update('posts', $data, array('page' => $page));
	}
}
