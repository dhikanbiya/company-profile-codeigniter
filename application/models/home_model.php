<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home_model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
	}


	public function slides(){		
		return $this->db->get('slides')->result();
	}

	public function page($page){
		return $this->db->get_where('posts',array('page'=>$page))->result();
	}

	public function cat(){
		return $this->db->get('categories')->result();
	}

	public function products(){
			return $this->db->get('products')->result();
		}

	
}
