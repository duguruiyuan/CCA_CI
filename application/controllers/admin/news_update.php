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
		var_dump($post);die();
		$data = array();
		$data['code'] = 0;
		$data['msg'] = '';

		if (empty($post)) {
			$data['msg'] = 'Error Call!';
		} else {
			$upd_status = $this->article_model->
						upd(array('title'=>$post['news_title'],
								 //   'publish_user'=>$news_pub_user,
									// 'order' =>$news_order,
									// 'click_ct'=>$news_clk_ct,
									// 'from'=>$news_from,
									// 'update_time'=>$news_upd_time,
									// 'content'=>$news_content,
									// 'page_title'=>$post['news_page_title'],
									// 'keywords'=>$news_keywords,
									// 'description'=>$news_desc
									//zd
									//tj
									//sh
									//is_del


						), array('id'=> $post['news_id']));
				if($upd_status){

				$data['code'] = 1;
				$data['msg'] = '编辑成功！';

				}else{
				$data['msg'] = '编辑失败！';
				}


		}
		echo json_encode($data);exit;
	}