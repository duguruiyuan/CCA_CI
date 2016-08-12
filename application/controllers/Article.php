<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Article
 *
 * @copyright       2015 © OpenHW. ALL Rights Reserved
 * @author          Eefocus
 */
class Article extends ADM_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('category_model');
    }

    public function index(){
        redirect("admin/article/all");
    }

    public function edit($id = 0,$draft_id = null){
        $id = intval($id);
        $data = $this->prepare_data('article');
        
        // $history = $this->article_model->get_history($id);
        // foreach($history as $k=>$v){
        //     $v['update_time'] = date('Y-m-d H:i',$v['update_time']);
        //     $v['link'] = "/admin/article/edit/{$id}/{$v['id']}";
        //     $history[$k] = $v;
        // }
        // $data['m_history'] = $history;

        // if(empty($draft_id)){
        //     if(empty($history)){
        //         show_404();
        //     }
        //     $draft_id = $history[0]['id'];
        // }
        $article = $this->article_model->get_article($id,$draft_id);
        if(empty($article)){
            show_404();
        }

        $article['publish_time'] =  date('Y-m-d H:i',$article['publish_time']);

        $data['draft_id'] = $draft_id;
        $data['id'] = $id;
        $data['m_categories'] = $this->category_model->gets();

        if ($this->input->post("submit_form") !== NULL){
            $post = $this->input->post();
            if ($this->form_validation->run('admin-article-edit') != FALSE)
            {
                $post['creator_uid'] = $this->_admin['user_id'];
                $post['username'] = $this->_admin['user_name'];
                $new_draft_id = $this->article_model->upd_article($post,$id);
                redirect("admin/article/edit/{$id}/{$new_draft_id}");
            }else{
                $data = array_merge($data,$post);
                $data['publish_time'] = $data['publish_time_s'];
            }
        }else{
            $data = array_merge($data,$article);
        }
        $data['old_alias_name'] = $article['alias_name'];
        $this->parser->parse('admin/article_edit',$data);
    }

    public function add(){
        $data = $this->prepare_data('article');

        $data['m_categories'] = $this->category_model->gets();
        $data['m_history'] = array();
        $data['default_pts'] = date('Y-m-d H:i');
        $data['default_author'] = "佚名";
        
        if ($this->input->post("submit_form") !== NULL){
            if ($this->form_validation->run('admin-article-add') != FALSE)
            {
                $data = $this->input->post();
                $data['creator_uid'] = $this->_admin['user_id'];
                $data['username'] = $this->_admin['user_name'];
                $aid = $this->article_model->add_article($data);
                if ($aid <0 ){
                    die("重复提交/数据库错误");
                }
                redirect("admin/article/edit/".$aid);
            }
        }
        $this->parser->parse('admin/article_add',$data); 
    }

    public function all() {
        $settings = $this->parse_uri(4);
        $settings['l'] = 20;

        $no_where = array();
        $no_where['status'] = array(Article_model::ATC_DELETE);
        $data = $this->prepare_data('article');

        $submit = $this->input->post("submit_form");
        if ($submit !== NULL){
            if ($submit == 'operate'){
                 $aids = $this->input->post('art_id');
                 $status = $this->input->post('status');
                 if (!empty($aids)){
                    $this->article_model->upd(array('status'=>$status),array("id"=>$aids));
                 }

            }else{
                $searchtext = $this->input->post("searchtext");
                if (!empty($searchtext)){
                    $settings['ss'] = 'keywords';
                    $settings['v'] = $searchtext;
                }
                $category = $this->input->post("category");
                $category = intval($category);
                if ($category > 0) {
                    $settings['category'] = $category;
                }
                $status = $this->input->post("status");
                $status = intval($status);
                if ($status >= 0) {
                    $settings['status'] = $status;
                    $no_where = array();
                }
            }  
        }

        $records = $this->article_model->gets($settings,array(),$no_where);
        foreach ($records as $k=>$row){   
            $row['update_time_s'] = date("Y-m-d",$row['update_time']);
            $row['link'] = '/admin/article/edit/'.$row['id'];  
            $row['status_name'] = Article_model::$ATC_STATUS[$row['status']];

            if ($row['status'] ==  Article_model::ATC_DELETE){
                $row['status_name'] = '<span style="color:#f00">'. $row['status_name'].'</span>';
            }     
            if ($row['status'] ==  Article_model::ATC_PUBLISH){
                $row['status_name'] = '<span style="color:#0f0">'. $row['status_name'].'</span>';
            }   
            if ($row['status'] ==  Article_model::ATC_DRAFT){
                $row['status_name'] = '<span style="color:#ccc">'. $row['status_name'].'</span>';
            }   
            $records[$k] = $row;
        }
        $data['m_list'] = $records;
        $data['m_count'] = $ct = $this->article_model->ct($settings,$no_where);
  
        //paging...
        $config = array();
        $config['base_url'] = $this->config->item('base_url').'admin/article/all';
        $config['settings'] = $settings;
        $config['total_rows'] = $ct;
        $config['num_links'] = 3;
        $this->pagination_cst->initialize($config);
        $data['m_paging'] = $this->pagination_cst->create_links();
        $data['m_categories'] = $this->category_model->gets();

        $this->parser->parse('admin/article_list',$data);
    }

    // public function callback_alias_name_check($value){
    //     var_dump($value);
    //     $ret = preg_match("/^[a-zA-Z][a-zA-Z0-9_\-]+/",$value);
    //     if ($ret === FALSE)
    //     {
    //             $this->form_validation->set_message('alias_name_check', '{field}应该字母开头');
    //             return FALSE;
    //     }
    //     else
    //     {
    //             return TRUE;
    //     }
    // }

}
