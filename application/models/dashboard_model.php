<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard_model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
	}


	public function get_users(){		
		return $this->db->get('users', 0, 5)->result();
	}

	
}
