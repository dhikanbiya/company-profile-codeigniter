<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');		
			$this->data['csrf'] = array(
	        'name' => $this->security->get_csrf_token_name(),
	        'hash' => $this->security->get_csrf_hash()
			);
			$this->load->model('home_model');
			$this->data['user'] = $this->ion_auth->user()->row();
	}

	public function index(){
			
			$this->load->view('layouts/frontend/header');
			$this->load->view('home/index',$this->data);
			$this->load->view('layouts/frontend/footer');
	
	}

	public function update(){
		if($this->ion_auth->logged_in()){
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
				$this->form_validation->set_rules('passwordconf', 'Password confirmation','required|matches[password]');
							

				 if ($this->form_validation->run() == FALSE){				 		
			    	$this->load->view('layouts/backend/header');
						$this->load->view('dashboard/index',$this->data);
						$this->load->view('layouts/backend/footer');
			    }else{
			    	$user = $this->ion_auth->user()->row();
			    	$data = array(
			    		'password' => $this->input->post('password')
			    	);			    	
			    	$q = $this->ion_auth->update($user->id,$data);
			    	if($q){
			    		$this->session->set_flashdata('message', 'update password success');
				    	redirect('dashboard');		
			    	}else{
			    		$this->session->set_flashdata('message', 'oops something is wrong');
				    	redirect('dashboard');	
			    	}
			    }
		}else{
			redirect('/','refresh');
		}
	}

	public function info(){
		if($this->ion_auth->logged_in()){
				$this->form_validation->set_rules('fname', 'First name', 'required');
				$this->form_validation->set_rules('lname', 'Last name','required');
				$this->form_validation->set_rules('email', 'Email','required|valid_email');
							

				 if ($this->form_validation->run() == FALSE){				 		
			    	$this->load->view('layouts/backend/header');
						$this->load->view('dashboard/index',$this->data);
						$this->load->view('layouts/backend/footer');
			    }else{
			    	$user = $this->ion_auth->user()->row();
			    	$data = array(
			    		'first_name' => $this->input->post('fname'),
			    		'last_name' => $this->input->post('lname'),
			    		'email' => $this->input->post('email'),
			    	);			    	
			    	$q = $this->ion_auth->update($user->id,$data);
			    	if($q){
			    		$this->session->set_flashdata('message', 'update basic info success');
				    	redirect('dashboard');		
			    	}else{
			    		$this->session->set_flashdata('message', 'oops something is wrong');
				    	redirect('dashboard');	
			    	}
			    }
		}else{
			redirect('/','refresh');
		}
	}

	public function destroy($id){
		if($this->ion_auth->logged_in()){
			$user = $this->ion_auth->user()->row();
			if($id != $user->id){
				$q = $this->ion_auth->delete($id);
				if($q){
					$this->session->set_flashdata('message', 'user deleted succesfully');
				  redirect('dashboard');
				}else{
					$this->session->set_flashdata('message', 'oops something is wrong');
				  redirect('dashboard');
				}
			}
		}else{
			redirect('/','refresh');
		}
	}

	
}
