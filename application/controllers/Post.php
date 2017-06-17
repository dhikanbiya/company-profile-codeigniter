<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('post_model');		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));			
		$this->data['csrf'] = array(
	        'name' => $this->security->get_csrf_token_name(),
	        'hash' => $this->security->get_csrf_hash()
			);
	}

	public function page($page){
		if($this->ion_auth->logged_in()){		
			$data['view'] = $this->post_model->show($page);				
			$this->load->view('layouts/backend/header');
			$this->load->view('post/index',$data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}

		

	public function edit($page){
		if($this->ion_auth->logged_in()){			
			$this->data['show'] = $this->post_model->edit($page);
			$this->load->view('layouts/backend/header');
			$this->load->view('post/edit',$this->data);
			$this->load->view('layouts/backend/footer');
		}else{
			redirect('/','refresh');
		}
	}


	public function update(){
		if($this->ion_auth->logged_in()){

			$user = $this->ion_auth->user()->row();			
			$this->form_validation->set_rules('section_one', 'Section One', 'required');
			$this->form_validation->set_rules('section_two', 'Section Two', 'required');
			$this->form_validation->set_rules('userfile', 'Image', 'file_allowed_type[image]|file_image_mindim[1024,768]');
			
			$page = $this->input->post('page');
			$uri = 'post/page/'.$page;			
			 if ($this->form_validation->run() == FALSE){
		    	$this->data['show'] = $this->post_model->edit($page);
					$this->load->view('layouts/backend/header');
					$this->load->view('post/edit',$this->data);
					$this->load->view('layouts/backend/footer');
		    }else{
		    	if($_FILES['userfile']['name']){
		    		$this->load->library('upload');
		    		$config['upload_path'] = './assets/images/pages/';
		    		$config['allowed_types']        = 'gif|jpg|png';      		    	
		    		$config['remove_spaces']        = TRUE;
		    		$config['overwrite']         		= TRUE;

		    		$this->upload->initialize($config);

		    		if($this->upload->do_upload('userfile')){	
    	     			$info = $this->upload->data();
	    		    	$data = array(
	    						'user_id' => $user->id,	    						
	    						'section_one' => $this->input->post('section_one'),
	    						'section_two' => $this->input->post('section_two'),
	    						'image' => $info['file_name'],	    							    						
	    						'updated_at' => date('Y-m-d H:i:s')
	    					 );

			    		$q = $this->post_model->update($data,$page);
			    		if($q){
			    			$this->session->set_flashdata('message', 'insert data success');
			    			redirect($uri);			    			
			    		}else{
			    			$this->session->set_flashdata('message', 'oops something is wrong');
			    			redirect($uri);			    			
			    		}
		    		}
		    	}else{
  		    	$data = array(
  						'user_id' => $user->id,  						
  						'section_one' => $this->input->post('section_one'),
  						'section_two' => $this->input->post('section_two'),  						  						  						
  						'updated_at' => date('Y-m-d H:i:s'),
  					 );

	    			$q = $this->post_model->update($data,$page);
	    			if($q){
	    				$this->session->set_flashdata('message', 'update data success');
	    				redirect($uri);			    			
	    			}else{
	    				$this->session->set_flashdata('message', 'oops something is wrong');
	    				redirect($uri);			    			
	    			}
		    	}


		    }

		}else{
			redirect('/','refresh');
		}
	}

		
}
