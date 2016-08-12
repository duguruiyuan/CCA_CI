<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ADM_Controller extends MY_Controller {
	
	protected $_admin = array();

	protected $_profiler = TRUE;

	protected $_menu = '';
	
	public function __construct(){ 

		parent::__construct();

        $this->load->helper('language');
        $this->load->helper('form');
        $this->lang->load('common');
        $this->load->library('pagination_cst');
        $this->load->library('form_validation');
        
		$user = $this->auth->is_admin_logged_in($this->_current_user);

		if ($user === FALSE){
			// redirect("admin/login");
		}
		$this->_admin = $user;
		//profiling check
		$this->output->enable_profiler($this->_profiler);

	}

	protected function prepare_data($menu =''){
		if (empty($menu)){
			$menu = 'user';
		}
		$data = array();
		$data['m_admin'] = $this->_admin;
		$data['m_menu'] = $menu;
		return $data;
	}

}