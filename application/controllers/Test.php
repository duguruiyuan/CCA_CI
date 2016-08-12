<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.chengmail.cn';
		$config['smtp_user'] = 'webmaster@chinacpc.org';
		$config['smtp_pass'] = 'zgxtzxzb2016';//去QQ邮箱设置开启smtp
		$config['smtp_port'] = 25;
		$config['smtp_timeout'] = 30;
		$config['mailtype'] = 'text';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$config['crlf'] = "\r\n";
		$this->email->from('webmaster@chinacpc.org', 'Vic');
		$this->email->to('xu.yan11@student.xjtlu.edu.cn');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();
		echo $this->email->print_debugger();
	}
}
