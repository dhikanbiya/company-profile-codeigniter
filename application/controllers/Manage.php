<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');		
		$this->load->model('manage');
		$this->data['csrf'] = array(
	        'name' => $this->security->get_csrf_token_name(),
	        'hash' => $this->security->get_csrf_hash()
			);
	}

	public function update(){
		if($this->ion_auth->logged_in()){
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('passwordconf', 'Password confirmation','required');
				
				

				 if ($this->form_validation->run() == FALSE){
				 		$this->data['category'] = $this->product_model->get_category();
			    	$this->load->view('layouts/backend/header');
						$this->load->view('dashboard',$this->data);
						$this->load->view('layouts/backend/footer');
			    }
		}else{
			redirect('/','refresh');
		}
	}

	
}
