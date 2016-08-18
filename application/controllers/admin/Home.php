<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('ly_model');
		$this->load->model('recycle_model');
		$this->load->model('article_model');
		$this->load->model('admin_model');
			
	}


	public function index(){
		
		if(!isset( $_SESSION['admin'])){
			$this->load->view('admin/login');
		}else{
			$this->load->view('admin/index');
		}

	}

	//    ================================================================================
	//    =====================================我的工作===================================
	//    ================================================================================


	public function login(){

		$post = $this->input->post();

		if(empty($post)){
			$this->load->view('admin/login');
		}else{

			$username = $post['user'];
			$passwd = md5($post['pwd']);

			$admin_user = $this->admin_model->get(array('username'=>$username,'passwd'=>$passwd));

			if(!empty($admin_user)){

				$_SESSION['admin'] = $admin_user['username'];

				redirect(base_url('/admin/home'));
				
			}else{

				die('<script>alert("用户名或密码错误！");history.back(-1);</script>');

			}

		}

		
	}


	public function logout(){

		unset($_SESSION['admin']);

		redirect(base_url('/admin/home/'));

	}

	// 网站首页系统信息	
	public function main(){

		$this->load->view('admin/main');
	}

	// 基本设置
	public function site(){

		$this->load->view('admin/site');
	}


	// 栏目管理
	public function category(){


		$this->load->view('admin/category');

	}

	// 界面风格

	public function theme(){

		$this->load->view('admin/theme');

	}


	//    ================================================================================
	//    =====================================栏目编辑===================================
	//    ================================================================================


	// 内容管理
	public function content(){

		$this->load->view('admin/content');

	}

	// 内容管理 -> 文章模块

	public function news(){

		// 仿照留言，写删除

		$where = array(
			// 实际排序已发布时间倒序publish_time
			'b'=>'create_time',
			'o'=>'desc',
			// 未删除的文章
			'is_del'=>'0'
		);

		$news_list = $this->article_model->gets($where);

		$front_arr = array();

		foreach ($news_list as $k => $v) {

			$tmp = array();

			$tmp = array(
				'title'=>$v['title'],
				'id'=>$v['id'],
				'tj'=>$v['tj'],
				'zd'=>$v['zd'],
				'sh'=>$v['sh'],
				'update_time'=>date('Y-m-d H:i:s',$v['update_time']),
				'click_ct'=>$v['click_ct']
			);
			//push前端
			array_push($front_arr, $tmp);

		}

		$this->load->view('admin/content/news',array('front_arr'=>$front_arr));

	}

	public function news_add(){

		$post=$this->input->post();

		

		if(!empty($post)){

			// ============================================================
			// ===========================验证使用=========================
			// ============================================================

			$type = $post['cid'];

			$zd = $post['istop'];
			$tj = $post['isnice'];
			$sh = $post['status'];

			$title = $post['title'];
			// 图片上传
			$imgurl = $post['pic'];


			$publish_user = $post['author'];
			$order = $post['ordnum'];

			$from = $post['comefrom'];
			$publish_time = $post['addtime'];

			$content = $post['info'];

			$page_title = $post['seotitle'];

			$keywords = $post['seokey'];

			$description = $post['seodesc'];

			// ============================================================
			// 

			$art_arr = array(
				'type'=>$post['cid'],
				'title'=>$post['title'],
				'publish_user' => $post['author'],
				'order' => $post['ordnum'],

				'from' => $post['comefrom'],
				'publish_time' => $post['addtime'],

				'content' => $post['info'],

				'page_title' => $post['seotitle'],

				'keywords' => $post['seokey'],
				'description' => $post['seodesc'],
				'zd' => empty($post['istop'])?0:1,
				'tj' => empty($post['isnice'])?0:1,
				'sh' => empty($post['status'])?0:1,
				'create_time'=>time(),
				'update_time'=>time(),
				'is_del'=>0
			);



			// PDO
			// 存入数据库前进行验证

			$ret = $this->article_model->add($art_arr,TRUE);

			if(!empty($ret)){

				die('<script>alert("文章添加成功！");history.back(-1);</script>');

			}else{
				die('<script>alert("文章添加失败！请稍后重试！");history.back(-1);</script>');
			}


		}

		$this->load->view('admin/content/news_add');
	}

	public function news_edit($news_id = '') {

		$data = array();

		if (!empty($news_id)) {

			$news_detail = $this->article_model->get(array('id' => $news_id));

			$news_detail['update_time'] = date('Y-m-d H:i', $news_detail['update_time']); 

			$data['news'] = $news_detail;


		} else {

			die('失败！');
		}
		//
		
		$this->load->view('admin/content/news_edit', $data);

	
	}
	//
	public function news_update() {

		$post = $this->input->post();
		$post['content'] = $post['info'];
		$t_id = $post['news_id'];
		unset($post['info'],$post['style'],$post['pic'], $post['news_id']);
		
		$post['update_time'] = time();

		$upd_status = $this->article_model->upd($post, array('id'=>$t_id));

		if($upd_status){
			die('<script>alert("更新成功！");history.back(-1);</script>');
		}else{
			die('<script>alert("更新失败，请稍后重试！");history.back(-1);</script>');
		}
	}

	public function news_del($news_id = '') {

		if(empty($news_id)){

			die('<script>alert("删除失败，此新闻已经删除！");history.back(-1);</script>');

		}else{

			// $ret_id = $this->ly_model->del(array('id'=>$book_id));
			$ret_id = $this->article_model->upd(array('is_del'=>'1'), array('id'=>$news_id));

			$rec_arr = array(
				'type' => '1',
				'del_time'=>time(),
				'rec_id' => $news_id
			);

			$rets = $this->recycle_model->add($rec_arr,TRUE);

			if($ret_id && $rets){
				// 成功删除
				die('<script>alert("删除成功");history.back(-1);</script>');

			}else{

				if($ret_id){

					$this->article_model->upd(array('is_del'=>'0'),array('id'=>$news_id));

				}elseif($rets){

					$this->recycle_model->del(array('id'=>$rets));

				}

				die('<script>alert("删除失败");history.back(-1);</script>');
				// 删除失败
			}

		}

	}

	
	//内容管理->产品模块
	public function prod() {
		$this->load->view('admin/content/prod');

	}
	public function prod_add() {
		$this->load->view('admin/content/prod_add');
	}

	public function expand_book() {

		$ly_list = $this->ly_model->gets(array('is_del'=>'0'));

		foreach ($ly_list as $k => &$v) {
			$v['time'] = date('Y-m-d H:i',$v['time']);
		}


		$this->load->view('admin/content/expand_book',array('ly_list'=>$ly_list));
	}

	// 留言的回复

	public function expand_book_reply(){

		$post = $this->input->post();

		$data = array();

		// code = 0 error return ,code=1 is success retrun
		$data['code'] = 0;
		$data['msg'] = '';

		if(empty($post)){
			$data['msg'] = 'Error Call !';
		}else{

			//1.判断回复内容是否符合标准
			//2.将回复内容插入数据库
			//3.向前台返回消息

			$upd_status = $this->ly_model->upd(array('reply'=>$post['reply'],'reply_time'=>time()),array('id'=>$post['ly_id']));
			$_ly = $this->ly_model->get(array('id'=>$post['ly_id']));

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
			$this->email->from('webmaster@chinacpc.org', '中国胸透中心总部');
			$this->email->to($_ly['mail']);

			$this->email->subject('中国胸透中心回复');
			$this->email->message($post['reply']);
			$this->email->send();

			// PDO

			// 调用SMTP服务，向用户留下的邮箱，进行回复，回复内容就是$post['reply_txt']
			

			if($upd_status){
				$data['code'] = 1;
				$data['msg'] = '回复成功！';
			}else{
				$data['msg'] = '回复失败！';
			}

		}

		echo json_encode($data);exit;

	}


	public function expand_book_edit($book_id ='') {

		$data = array();

		if(!empty($book_id)){

			// 根据booke的id 获取留言的详情
			$ly_detail = $this->ly_model->get(array('id'=>$book_id));

			$ly_detail['time'] = date('Y-m-d H:i',$ly_detail['time']);

			$data['ly'] = $ly_detail;

		}else{
			die('失败！');
		}

		$this->load->view('admin/content/expand_book_edit',$data);
		
	}


	public function expand_book_del($book_id = '') {

		if(empty($book_id)){

			die('<script>alert("删除了失败，此新闻已经删除！");history.back(-1);</script>');

		}else{

			// $ret_id = $this->ly_model->del(array('id'=>$book_id));
			$ret_id = $this->ly_model->upd(array('is_del'=>'1'),array('id'=>$book_id));

			$rec_arr = array(
				'type' => '2',
				'del_time'=>time(),
				'rec_id' => $book_id
			);

			$rets = $this->recycle_model->add($rec_arr,TRUE);

			if($ret_id && $rets){
				// 成功删除
				die('<script>alert("删除成功");history.back(-1);</script>');

			}else{

				if($ret_id){
					$this->ly_model->upd(array('is_del'=>'0'),array('id'=>$book_id));
				}elseif($rets){
					$this->recycle_model->del(array('id'=>$rets));
				}

				die('<script>alert("删除失败");history.back(-1);</script>');
				// 删除失败
			}

		}

	}
	

	// 内容回收站
	public function recycle(){

		$rec = $this->recycle_model->gets();

		$rec_front = array();

		foreach ($rec as $k => &$v) {

			$content = '';
			$type_desc = '';



			switch ($v['type']) {
				case '1':
					// 类型为新闻
					$content = $this->article_model->get(array('id' => $v['rec_id']));
					$type_desc = "新闻";
					break;
				
				case '2':
					// 类型为留言
					// 根据回收前id ，找到回收前的文章
					$content = $this->ly_model->get(array('id'=>$v['rec_id']));
					$type_desc = '留言';
					break;
			}
			// 这里的id 是回收站里的id
			// 这里的rec_id是，文章或者留言删除前，在各自数据库里的id
			$data = array(
				'content'=> ($content['content'] > 10)?substr($content['content'],0,10):$content['content'],
				'id'=>$v['id'],
				'type_desc'=>$type_desc,
				'type'=>$v['type'],
				'rec_id'=>$v['rec_id']
			);

			array_push($rec_front,$data);

		}


		$this->load->view('admin/recycle',array('rec'=>$rec_front));

	}

	public function recycle_del($type='',$del_id,$rec_id){
		// type 是文章还是留言的type
		// del_id 是文章删除前，在各自表里的id
		// rec_id 是回收站表里的id

		// PDO 
		// 删除的一些验证

		switch ($type) {
			case '1':
				$this->article_model->del(array('id'=>$del_id));
				$this->recycle_model->del(array('id'=>$rec_id));
				break;
			case '2':
				$this->ly_model->del(array('id'=>$del_id));
				$this->recycle_model->del(array('id'=>$rec_id));
				break;
				
		}

		die('<script>alert("删除成功");history.back(-1);</script>');

	}

	public function recycle_hy($type='',$hy_id,$rec_id){

		switch ($type) {
			case '1':
				$this->article_model->upd(array('is_del'=>0), array('id'=>$hy_id));
				$this->recycle_model->del(array('id'=>$rec_id));
				break;
			case '2':
				$this->ly_model->upd(array('is_del'=>'0'),array('id'=>$hy_id));
				$this->recycle_model->del(array('id'=>$rec_id));
				break;
				
		}

		die('<script>alert("还原成功");history.back(-1);</script>');

	}


	//    ================================================================================
	//    =====================================发布管理===================================
	//    ================================================================================


	// 友情链接
	public function expand_link(){

		$this->load->view('admin/expand_link');

	}
	public function expand_link_add(){

		$this->load->view('admin/expand_link/expand_link_add');

	}
	

	// 站内广告
	public function expand_ad(){

		$this->load->view('admin/expand_ad');
		
	}
	public function expand_ad_add(){

		$this->load->view('admin/expand_ad/expand_ad_add');
		
	}
	public function expand_adcat(){

		$this->load->view('admin/expand_ad/expand_adcat');
		
	}
	public function expand_adcat_add(){

		$this->load->view('admin/expand_ad/expand_adcat_add');
		
	}


	//    ================================================================================
	//    =====================================用户管理===================================
	//    ================================================================================

	// 我的应用

	public function app(){

		$this->load->view('admin/app');

	}
	public function user() {

		$where = array(
			// 实际排序已发布时间倒序publish_time
			'b'=>'created_at',
			'o'=>'last_time',
			// 未删除的文章
			'is_del'=>'0'
		);


		$user = $this->user_model->gets($where);



		$this->load->view('admin/app/user',array('user'=>$user));
	}
	public function user_add() {

		


		$this->load->view('admin/app/user_add');
	}
	// 会员组设置
	public function user_group(){
		$this->load->view('admin/app/user_group');
	}
	//会员编辑
	public function user_edit($user_id = '') {

		$user = $this->user_model->get(array('id'=>$user_id));

		$this->load->view('admin/app/user_edit', array('user'=>$user));

	}
	public function user_del($user_id = '') {

		if(empty($user_id)){

			die('<script>alert("删除失败，此用户已经删除！");history.back(-1);</script>');

		} else {


			$this->user_model->upd(array('is_del'=>1), array('id'=>$user_id));

			die('<script>alert("删除成功");history.back(-1);</script>');


		}


	}
	//审核认证
	public function shenhe() {

		$where = array(
					// 实际排序已发布时间倒序publish_time
					'b'=>'created_at',
					'o'=>'last_time',
					// 未删除的文章
					'is_del'=>'0'
				);


		$user = $this->user_model->gets($where);



		$this->load->view('admin/app/shenhe',array('user'=>$user));

	}
	//审核材料具体详情

	public function shenhe_details($user_id ='') {


		$this->load->view('admin/app/shenhe_details');
	}
	//会员状态重置
	public function doset($user_id = '') {

		if(empty($user_id)){

			die('<script>alert("重置失败，此用户不可更改！");history.back(-1);</script>');

		} else {


			$this->user_model->upd(array('status'=>1), array('id'=>$user_id));
			die('<script>alert("重置成功！");history.back(-1);</script>');
		}

	}
	// 会员功能设置
	public function user_config(){
		$this->load->view('admin/app/user_config');
	}
	public function upfile() {

		$this->load->view('admin/app/upfile');
	}
	public function online() {

		$this->load->view('admin/app/online');
	}
	// 应用市场
	public function app_lists(){

		$this->load->view('admin/app_lists');
	}
	public function robots(){

		$this->load->view('admin/app_lists/robots');
	}
	public function replace(){

		$this->load->view('admin/app_lists/replace');
	}

	//    ================================================================================
	//    =====================================网站设置===================================
	//    ================================================================================

	//栏目管理

	public function category_add(){

		$this->load->view('admin/category/category_add');

	}

	// 水印缩图
	public function jpeg(){

		$this->load->view('admin/jpeg');

	}
	public function resize(){

		$this->load->view('admin/water_mark/resize');

	}	

	// 网站安全
	public function safe(){

		$this->load->view('admin/safe');
	}

	// 管理员管理
	public function admin_user(){

		$this->load->view('admin/admin_user');

	}
	public function admin_add(){

		$this->load->view('admin/admin_user/admin_add');

	}
	public function role(){

		$this->load->view('admin/admin_user/role');

	}

	// 数据备份
	public function expand_backup(){

		$this->load->view('admin/expand_backup');

	}
	public function expand_backup_recovery(){

		$this->load->view('admin/expand_backup/expand_backup_recovery');

	}


}

