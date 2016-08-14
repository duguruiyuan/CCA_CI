<?php defined('BASEPATH') OR exit('No direct script access allowed'); 



class MY_Controller extends CI_Controller {

	protected $_current_user = '';

	public function __construct()
	{
		parent::__construct();
	}


	public function parse_uri($idx = 3){
		$validkeys = array('o','l','p','b','v','s','ss');
		$settings = $this->uri->uri_to_assoc($idx);
		foreach ($settings as $k=>$v){
			if (!in_array($k, $validkeys)){
				unset($settings[$k]);
			}
		}
		return $settings;
	}

	public function is_login(){
		 
		 $account = $this->session->userdata('account');

		 if(empty($account)){
		 	return FALSE;
		 }else{
		 	return TRUE;
		 }
	}

	public function login($account){
		$this->session->set_userdata('uac',$account);

		return TRUE;
	}

	public function logout(){
		$this->session->unset_userdata('uac');
		redirect(base_url('/'));
	}
	
}



