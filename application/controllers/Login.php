<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		// Load form validation library
		$this->load->library('form_validation');
		
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
				'pssd' => md5($post['pssd']),
				'account' => $post['account'],
				'orgLevel' =>$post['level'],
				'artificialPersonName' => $post['faren'],
				'city' => $post['city'],
				'state' => $post['province'],
				'appliedDate' =>$post['applied_date'],
				'runDuration' => $post['run_duration'],
				'respPerson' =>$post['resp'],
				'respTitle' =>$post['resp_title'],
				'respEmail' => $post['resp_email'],
				'contPersonName' => $post['cont'],
				'cont_title' => $post['cont_title'],
				'contPhone' => $post['cont_tele'],
				'type'=>$post['type'],
				'created_at'=>time()
			);

					break;

				case '1':
				$u_arr['orgName'] = $post['_name'];
				$u_arr['account'] = $post['_account'];
				$u_arr['pssd'] = md5($post['_pssd']);
				$u_arr['type'] = $post['type'];
				// 个人邮箱email存入user表负责人邮箱
				$u_arr['respEmail'] = $post['_email'];
				$u_arr['created_at'] = time();

				break;

			}		

			// $u2_arr = array(

			// 	'account'=> $post['_account'],
			// 	'pssd'=>$post['_input-password'],
			// 	'orgName'=>$post['_name']

			// 	);

			

			$re_id = $this->user_model->add($u_arr,TRUE);
			if(!empty($re_id)){
				$_SESSION['uac'] = $u_arr['account'];
				$_SESSION['uid'] = $re_id;
				die("<script>alert('您已经注册成功，并自动登录！');window.location.href='/'</script>");
				
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

					if( $_user['pssd'] === md5($pssd) ){
						$this->login($_user['account'],$_user['id']);
						redirect(base_url('/'));
						/*die('<script>alert("登录成功！");window.location.href="/"</script>');*/
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

