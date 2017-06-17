<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Slide_model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		return $this->db->insert('slides', $data);
	}

	public function show_all(){
		$this->db->order_by('id', 'DESC');
		return $this->db->get('slides')->result();
	}

	public function destroy($slug){
		return $this->db->delete('slides', array('slug' => $slug));
	}

	public function edit($slug){
		return $query = $this->db->get_where('slides', array('slug' => $slug))->result();
	}

	public function update($data,$slug){
		return  $this->db->update('slides', $data, array('slug' => $slug));
	}
}
