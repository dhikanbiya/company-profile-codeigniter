<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('category_model');		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));			
		$this->data['csrf'] = array(
	        'name' => $this->security->get_csrf_token_name(),
	        'hash' => $this->security->get_csrf_hash()
			);
	}

	public function index(){
		if($this->ion_auth->logged_in()){		
			$this->data['view'] = $this->category_model->show_all();				
			$this->load->view('layouts/backend/header');
			$this->load->view('categories/index',$this->data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}

	public function add(){
		if($this->ion_auth->logged_in()){
			$this->load->view('layouts/backend/header');
			$this->load->view('categories/create',$this->data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}


	public function create(){
	if($this->ion_auth->logged_in()){
		$user = $this->ion_auth->user()->row();
		$this->form_validation->set_rules('name', 'Category name', 'required');		
		
		

		 if ($this->form_validation->run() == FALSE){
	    	$this->load->view('layouts/backend/header');
				$this->load->view('categories/create',$this->data);
				$this->load->view('layouts/backend/footer');
	    }else{
	    	$data = array(
	    		'user_id' => $user->id,
	    		'name' => $this->input->post('name'),
	    		'slug' => url_title($this->input->post('name')),
	    		'description' => $this->input->post('desc'),
	    		'created_at' => date('Y-m-d H:i:s')
	    		);
	    	$q = $this->category_model->insert($data);
	    	if($q){
	    		$this->session->set_flashdata('message', 'insert data success');
	    		redirect('category');		
	    	}else{
	    		$this->session->set_flashdata('message', 'oops something is wrong');
	    		redirect('category');		
	    	}

	    }
		}else{
			redirect('/','refresh');
		}
	}

	public function edit($slug){
		if($this->ion_auth->logged_in()){			
			$this->data['show'] = $this->category_model->edit($slug);
			$this->load->view('layouts/backend/header');
			$this->load->view('categories/edit',$this->data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}


	public function update(){
		if($this->ion_auth->logged_in()){

			$user = $this->ion_auth->user()->row();
			$this->form_validation->set_rules('name', 'Name', 'required');			
			
			$slug = $this->input->post('slug');
			
			 if ($this->form_validation->run() == FALSE){
		    	$this->data['show'] = $this->category_model->edit($slug);
					$this->load->view('layouts/backend/header');
					$this->load->view('slides/edit',$this->data);
					$this->load->view('layouts/backend/footer');
		    }else{	    	
		    	$data = array(
		    		'user_id' => $user->id,
		    		'name' => $this->input->post('name'),
		    		'slug' => url_title($this->input->post('name')),
		    		'description' => $this->input->post('desc'),
		    		'updated_at' => date('Y-m-d H:i:s')
		    		);
		    	$q = $this->category_model->update($data,$slug);
		    	if($q){
		    		$this->session->set_flashdata('message', 'update data success');
		    		redirect('category');		
		    	}else{
		    		$this->session->set_flashdata('message', 'oops something is wrong');
		    		redirect('category');		
		    	}
				}		   
		}else{
			redirect('/','refresh');
		}

	}

	public function destroy($slug){
		
		$res = $this->category_model->destroy($slug);
		if($res){						
			$this->session->set_flashdata('message', 'deleted successfully');
			redirect('category');
		}else{
			$this->session->set_flashdata('message', 'oops something is wrong');
			redirect('category');			    			
		}
	}




	
}
