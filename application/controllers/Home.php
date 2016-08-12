	<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('ly_model');
		$this->load->model('article_model');
		$this->load->model('renzheng_model');
		
			
	}

	

	public function renzheng(){

		$post = $this->input->post();
		if(!empty($post)){

			$ret = $this->renzheng_model->add($post,TRUE);
			if($ret){
				die('<script>alert("认证要点添加成功！");history.back(-1);</script>');
			}else{
				die('<script>alert("添加失败！刷新重试");history.back(-1);</script>');
			}

		}else{

		}
		//测试遍历认证内容

		$rz = $this->renzheng_model->gets();


		$rz_arr = array();

		foreach ($rz as $k => $v) {
			# code...
			$tmp = array();

			$tmp = array(

			'title'=>$v['title'],
			'title_id'=>$v['title_id'],
			'content'=>$v['content'],
			'step' =>$v['step'],
			'is_ok'=>$v['is_ok']

			);
			array_push($rz_arr, $tmp);
		}


		$this->load->view('front/renzheng', array('rz_arr'=>$rz_arr));


	}


	public function index(){

		// 最新通知
		$_where = array(
			// 实际排序已发布时间倒序publish_time
			'b'=>'update_time',
			'o'=>'desc',
			'l'=>'5',
			// 未删除的文章
			'is_del'=>'0'
		);

		// 最新通知
		$_where['type'] = 0;
		$zx_article = $this->article_model->gets($_where);
		$zx = $this->art_arr($zx_article);
		// 大事记
		$_where['type'] = 1;
		$ds_article = $this->article_model->gets($_where);
		$ds = $this->art_arr($ds_article);

		// 会议新闻
		$_where['type'] = 2;
		$hy_article = $this->article_model->gets($_where);
		$hy = $this->art_arr($hy_article);

		// 经验交流
		$_where['type'] = 3;
		$jy_article = $this->article_model->gets($_where);
		$jy = $this->art_arr($jy_article);

		$data = array(
			'zx'=>$zx,
			'ds'=>$ds,
			'hy'=>$hy,
			'jy'=>$jy
			);
		$this->load->view('front/home',$data);

	}

	private function art_arr($article = array()){

		$a_arr = array();

		foreach ($article as $k => $v) {

			$tmp = array();
			$tmp['id'] = $v['id'];
			$tmp['title'] = $v['title'];

			array_push($a_arr, $tmp);
		}

		return $a_arr;

	}

	// 文章详情页
	public function aview($aid = ''){

		$art = $this->article_model->get(array('id'=>$aid));

		$a_front = array(
			'id'=>$art['id'],
			'title'=>$art['title'],
			'content'=>$art['content'],
			'publish_user'=>$art['publish_user'],
			// publish_time还没在后台实现，记得做，暂时用update_time
			'update_time'=>date('Y年m月d日',$art['update_time'])
		);

		$this->load->view('front/aview',array('art'=>$a_front));

		// 要删除不需要的数据


	}


	public function about(){

		$post = $this->input->post();
		if(empty($post)){
			$this->load->view('front/about');
		}else{

			// 新增留言信息

			$data = array();

			$data['code'] = 0;
			$data['msg'] = '';

			// 这里对post过来的数据进行验证


			$ly = array(
				'name'=>$post['ly_name'],
				'mail'=>$post['ly_mail'],
				'content'=>$post['ly_text'],
				'time'=>time()
			);




			$re_id = $this->ly_model->add($ly,TRUE);

			if($re_id){

				$data['code'] = 1;
				$data['msg'] = '留言成功，请等待管理员回复！';
			}else{

				$data['msg'] = '网络繁忙，请稍后尝试！';
			}

			echo json_encode($data);exit;

		}
	}

	// 认证须知

	public function rzxz(){

		$this->load->view('front/verify');
	}


//自我评估
	public function zwpg(){


		$this->load->view('front/selfEvaluation');

	}

	//认证申请
public function rzsq(){

	$this->load->view('front/application');
}

//进度查询

public function jdcx(){

	$this->load->view('front/Phase_query');
}
//资质查询
public function zzcx(){

	$this->load->view('front/Qualification_inquiry');
}
//最新进程
public function zxrc(){
	$this->load->view('front/train/zxrc');
}
//培训包括：
//培训动态
public function pxdt(){
	$this->load->view('front/train/pxdt');
}
//课程一览
public function kcyl(){
	$this->load->view('front/train/kcyl');
}
//讲师申请
public function jssq(){
	$this->load->view('front/train/TTT');
}

//讲师风采
public function jsfc(){
	$this->load->view('front/train/train_style');
}
//质控四个部分
//质控指标
public function zkzb(){
	$this->load->view('front/QC/zkzb');
}
public function tjfx(){
	$this->load->view('front/QC/tjfx');
}
public function wdzk(){
	$this->load->view('front/QC/wdzk');
}
public function kykt(){
	$this->load->view('front/QC/kykt');
}

//认证机构介绍
public function orgIntro(){
	$this->load->view('front/qualityControl/orgIntro');
}

//认证流程介绍
public function aims(){
	$this->load->view('front/qualityControl/aims');
}


public function standards(){
	$this->load->view('front/qualityControl/standards');
}

public function flowIntro(){
	$this->load->view('front/qualityControl/flowIntro');
}


public function jiCengBan(){
	$this->load->view('front/qualityControl/jiCengBan');
}

public function liuChengTu(){
	$this->load->view('front/qualityControl/liuChengTu');
}


public function guanLiZhiDu(){
	$this->load->view('front/qualityControl/guanLiZhiDu');
}

public function registration(){
	$this->load->view('front/qualityControl/registration');
}


// 机构信息
public function jigou_info(){
	$this->load->view('front/qualityControl/jg_register');
}

// 认证条件评估
public function tiaoJianPingGu(){
	$this->load->view('front/qualityControl/tiaoJianPingGu');
}

//中国胸痛中心认证评分细则
public function verify_xize(){
	$this->load->view('front/qualityControl/self_assess');
}


//中国胸痛中心认证数据管理云平台
public function cloud(){
	$this->load->view('front/qualityControl/jginfo');
}


//弹出框
public function submit_form(){
	$this->load->view('front/qualityControl/submit_form');
}
public function xiZe(){
	$this->load->view('front/qualityControl/xiZe');
}

//发展动态三个部分
//发展动态
public function xwsj(){
	$this->load->view('front/development/news');
}


//认证地图
public function map(){
	$this->load->view('front/development/map');
}


//阶段目标
public function jdmb(){
	$this->load->view('front/development/development_jdmb');
}

//区域认证未完；；

//示范中心三个专栏
//认证标准
public function renzbz(){
	$this->load->view('front/sf_center/renzbz');
}

//成果展示
public function cgzs(){
	$this->load->view('front/sf_center/cgzs');
}
//信息化专栏
public function xxhzl(){
	$this->load->view('front/sf_center/xxhzl');
}


//基础胸痛
//认证标准
public function rzbz(){
	$this->load->view('front/primary_cp/rzbz');
}
//基层风采
public function jcfc(){
	$this->load->view('front/primary_cp/jcfc');
}


//星火计划三部分
//计划简介
public function jhjj(){
	$this->load->view('front/Spark_plan/jhjj');
}
//最新进展
public function zxjz(){
	$this->load->view('front/Spark_plan/zxjz');
}
//成员一览
public function cyyl(){
	$this->load->view('front/Spark_plan/cyyl');
}

//胸痛学院三部分
//指南共识
public function zngs(){
	$this->load->view('front/study/zngs');
}
//在线学习
public function zxxx(){
	$this->load->view('front/study/zxxx');
}
//下载区
public function xzq(){
	$this->load->view('front/study/xzq');
}


public function notices1(){
	$this->load->view('front/notice/notice_1');
}
public function notices2(){
	$this->load->view('front/notice/notice_2');
}

public function notices3(){
	$this->load->view('front/notice/notice_3');
}

public function notices4(){
	$this->load->view('front/notice/notice_4');
}

public function notices5(){
	$this->load->view('front/notice/notice_5');
}


public function event1(){
	$this->load->view('front/event/event_1');
}
public function event2(){
	$this->load->view('front/event/event_2');
}

public function event3(){
	$this->load->view('front/event/event_3');
}


public function jiaoliu1(){
	$this->load->view('front/ideaExchange/first_exchangement');
}

public function jiaoliu2(){
	$this->load->view('front/ideaExchange/second_exchangement');
}

public function jiaoliu3(){
	$this->load->view('front/ideaExchange/third_exchangement');
}


public function meetingNews5(){
	$this->load->view('front/meetingNews/fifth_mettingNews');
}


public function meetingNews4(){
	$this->load->view('front/meetingNews/forth_mettingNews');
}

public function meetingNews3(){
	$this->load->view('front/meetingNews/third_mettingNews');
}

public function meetingNews2(){
	$this->load->view('front/meetingNews/second_mettingNews');
}

public function meetingNews1(){
	$this->load->view('front/meetingNews/first_mettingNews');
}







//胸痛学院包括三部分：
//指南共识
public function guide(){
	$this->load->view('front/study/guide');
}

}
