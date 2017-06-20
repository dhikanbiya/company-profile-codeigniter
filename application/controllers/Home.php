<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				
			$this->load->model('home_model');
			$this->data['slides'] = $this->home_model->slides();
			$this->data['about'] = $this->home_model->page('about');
			$this->data['vision'] = $this->home_model->page('vision');
			$this->data['categories'] = $this->home_model->cat();
			$this->data['products'] = $this->home_model->products();
	}

	public function index(){
			
			$this->load->view('layouts/frontend/header');
			$this->load->view('home/index',$this->data);
			$this->load->view('layouts/frontend/footer');
	
	}	

	
}
