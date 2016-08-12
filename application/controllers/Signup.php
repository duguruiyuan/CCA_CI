	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');



	class Signup extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			
		}


		public function index(){
	        die('eee');
			$this->load->view('front/signup');

		}

		public function signup_check(){

			// $this->input->get();
			$post = $this->input->post();


			if (!empty($post)) {
				
				$account = $post['account'];
				$pssd = $post['password'];
	            
				
				// get one array,,gets 就是二维数组
				$_user = $this->user_model->get(array('account'=>$user));

				if(!empty($_user)){
	                
	            $this->user_mode
	                ->add(array('account'=>$user, 'pssd'=>$pssd));
					die('success');
	                
					}else{
						die('empty user');
					}

				}else{
					die('empty post');
				}
				
				
		}

		
		
		public function ajax_login(){


			$data = array();
			$data['code'] = 0;
			$data['msg'] = '';


			echo json_encode($data);exit;


		}


	}
