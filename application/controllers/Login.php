		<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		
	}


	public function index(){
		$this->load->view('front/login');

	}


	public function reg(){

		$post = $this->input->post();

		
		// 关键点进行验证
		if(empty($post)){

			$this->load->view('front/reg');
		}else{


			switch ($post['type']){

				case '0':
					# code...


				$u_arr = array(

				//机构注册
				'orgName' => $post['orgName'],
				'pssd' => md5($post['input-password']),
				'account' => $post['account'],
				'artificialPersonName' => $post['artificialPersonName'],
				'city' => $post['city'],
				'state' => $post['province'],
				'appliedDate' =>$post['appliedDate'],
				'runDuration' => $post['runDuration'],
				'respPerson' =>$post['respPerson'],
				'respTitle' =>$post['respTitle'],
				'respEmail' => $post['respEmail'],
				'contPersonName' => $post['contPersonName'],
				'contPhone' => $post['contPersonName'],
				'type'=>$post['type']	
			);

					break;
				case '1':

				$u_arr['account']=$post['_account'];
				$u_arr['pssd'] =md5($post['_input-password']);
				$u_arr['type']=$post['type'];

				break;

			}		

			// $u2_arr = array(

			// 	'account'=> $post['_account'],
			// 	'pssd'=>$post['_input-password'],
			// 	'orgName'=>$post['_name']

			// 	);

			

			$re_id = $this->user_model->add($u_arr,TRUE);
			if(!empty($re_id)){
				die("<script>alert('您已经注册成功！');</script>");
				$
			}
			else {

				die("<script>alert('注册失败！');</script>");
			}

		}

		

	}

	public function login_check(){

		$post = $this->input->post();

		if (!empty($post)) {
			
			$user = $post['account'];
			$pssd = $post['password'];
			
			$_user = $this->user_model->get(array('account'=>$user));

			if(!empty($_user)){

				if($_user['pssd'] === md5($pssd) ){

					die('<script>alert("登陆成功！");history.back(-1);</script>');

				}else{
					die('<script>alert("账户名或密码错误！");history.back(-1);</script>');
				}

			}else{
				die('<script>alert("用户名或密码错误！"; histroy.back(-1););</script>');
			}
			
			
		}
	}
	
	// public function ajax_login(){
	// 	$data = array();
	// 	$data['code'] = 0;
	// 	$data['msg'] = '';

	// 	$post = $this->input->post();
	// 	if (!empty($post)) {
			
	// 		$user = $post['uname'];
	// 		$pssd = $post['passwd'];
			
	// 		$_user = $this->user_model->get(array('account'=>$user));

	// 		if(!empty($_user)){	

	// 			if($_user['pssd'] === md5($pssd) ){
	// 				$data['code'] = 1;

	// 				$_SESSION['username'] = $user;
	// 				$data['msg'] = '登陆成功！';
	// 			}else{
	// 				$data['msg'] = '密码输入错误！';
	// 			}

	// 		}else{
	// 			$data['msg'] = '没有这个用户！';
	// 		}			
	// 	}
	// 	echo json_encode($data);exit;
	// }
}

