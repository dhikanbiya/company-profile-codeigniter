<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('slide_model');		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));			
		$this->data['csrf'] = array(
	        'name' => $this->security->get_csrf_token_name(),
	        'hash' => $this->security->get_csrf_hash()
			);
	}

	public function index(){
		if($this->ion_auth->logged_in()){		
			$data['view'] = $this->slide_model->show_all();				
			$this->load->view('layouts/backend/header');
			$this->load->view('slides/index',$data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}

	public function add(){
		if($this->ion_auth->logged_in()){
			$this->load->view('layouts/backend/header');
			$this->load->view('slides/create',$this->data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}

	public function create(){
	if($this->ion_auth->logged_in()){
		$user = $this->ion_auth->user()->row();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('userfile', 'Image', 'file_required|file_allowed_type[image]|file_image_mindim[1024,768]');
		

		 if ($this->form_validation->run() == FALSE){
	    	$this->load->view('layouts/backend/header');
				$this->load->view('slides/create');
				$this->load->view('layouts/backend/footer');
	    }
	    else{	
    		if($_FILES['userfile']['name']){
    	     	$this->load->library('upload');
    	     	if($this->upload->do_upload('userfile')){		     		     		
    	     			$info = $this->upload->data();
	    		    	$data = array(
	    						'user_id' => $user->id,
	    						'title' => $this->input->post('title'),
	    						'link' => $this->input->post('link'),
	    						'description' => $this->input->post('desc'),
	    						'image' => $info['file_name'],
	    						'slug' => hash('sha256', $this->input->post('title')),
	    						'created_at' => date('Y-m-d H:i:s')
	    					 );

			    		$q = $this->slide_model->insert($data);	
			    		if($q){
			    			$this->session->set_flashdata('message', 'insert data success');
			    			redirect('slides');			    			
			    		}else{
			    			$this->session->set_flashdata('message', 'oops something is wrong');
			    			redirect('slides');			    			
			    		}
			    		
    	    	}	else{    	    		    	    		
    	    		$this->session->set_flashdata('message', $this->upload->display_errors());
    	    	}
    		}
	    }		
		}
	}

	public function edit($slug){
		if($this->ion_auth->logged_in()){			
			$this->data['show'] = $this->slide_model->edit($slug);
			$this->load->view('layouts/backend/header');
			$this->load->view('slides/edit',$this->data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}


	public function update(){
		if($this->ion_auth->logged_in()){

			$user = $this->ion_auth->user()->row();
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('link', 'Link', 'required');
			$this->form_validation->set_rules('desc', 'Description', 'required');
			$this->form_validation->set_rules('userfile', 'Image', 'file_allowed_type[image]|file_image_mindim[1024,768]');
			
			$slug = $this->input->post('slug');

			 if ($this->form_validation->run() == FALSE){
		    	$this->load->view('layouts/backend/header');
					$this->load->view('slides/create');
					$this->load->view('layouts/backend/footer');
		    }else{
		    	if($_FILES['userfile']['name']){
		    		$this->load->library('upload');
		    		if($this->upload->do_upload('userfile')){	
    	     			$info = $this->upload->data();
	    		    	$data = array(
	    						'user_id' => $user->id,
	    						'title' => $this->input->post('title'),
	    						'link' => $this->input->post('link'),
	    						'description' => $this->input->post('desc'),
	    						'image' => $info['file_name'],
	    						'slug' => hash('sha256', $this->input->post('title')),
	    						'created_at' => date('Y-m-d H:i:s')
	    					 );

			    		$q = $this->slide_model->update($data,$slug);
			    		if($q){
			    			$this->session->set_flashdata('message', 'insert data success');
			    			redirect('slides');			    			
			    		}else{
			    			$this->session->set_flashdata('message', 'oops something is wrong');
			    			redirect('slides');			    			
			    		}
		    		}
		    	}else{
  		    	$data = array(
  						'user_id' => $user->id,
  						'title' => $this->input->post('title'),
  						'link' => $this->input->post('link'),
  						'description' => $this->input->post('desc'),  						
  						'slug' => hash('sha256', $this->input->post('title')),
  						'created_at' => date('Y-m-d H:i:s')
  					 );

	    			$q = $this->slide_model->update($data,$slug);
	    			if($q){
	    				$this->session->set_flashdata('message', 'insert data success');
	    				redirect('slides');			    			
	    			}else{
	    				$this->session->set_flashdata('message', 'oops something is wrong');
	    				redirect('slides');			    			
	    			}
		    	}


		    }

		}else{
			redirect('/','refresh');
		}
	}

	public function destroy($slug){
		$res = $this->slide_model->destroy($slug);
		if($res){			
			$this->session->set_flashdata('message', 'deleted successfully');
			redirect('slides');
		}else{
			$this->session->set_flashdata('message', 'oops something is wrong');
			redirect('slides');			    			
		}
	}




	
}
