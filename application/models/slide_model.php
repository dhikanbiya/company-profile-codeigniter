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
		return $this->db->get('slides')->result();
	}
}
