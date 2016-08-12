<?php defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Model extends CI_Model {

    protected $TBL_NAME;

    protected $CI;

    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
        $this->CI = &get_instance();
    }
    
    public function add(array $data, $return_id = FALSE){
        $this->db->insert($this->TBL_NAME,$data);
        $this->error_handling();
        if ($return_id){
            return $this->db->insert_id();
        }
        return $this->db->affected_rows();
    }
    
    protected function error_handling(){
        // $error = $this->db->_error_message();
        
        // if ($error) {
        //     throw new Exception($error);
        // }
        // else {
        //     //do nothing;
        // }
    }
    
    public function upd(array $data,array $condition){

        foreach($condition as $k=>$v){
            if (is_array($v)){
                $this->db->where_in($k,$v);
            }else{
                $this->db->where($k,$v);
            }
        }
        $code = $this->db->update($this->TBL_NAME,$data);

        $this->error_handling();

        return $code;
    }
    
    public function del(array $data){
        if (empty($data)){
            return NULL;
        }

        foreach($data as $k=>$v){
            if (is_array($v)){
                $this->db->where_in($k,$v);
            }else{
                $this->db->where($k,$v);
            }
        }
        $this->db->delete($this->TBL_NAME);
        $this->error_handling();
        return $this->db->affected_rows();
    }

    protected function _prepare_where($where,$no_where = array()){
        // if(empty($where)) return;

        $plimit = 0;
        $page = 0;
        $asc = '';
        $fd = '';
        $filter = '';
        $search = '';
        $sv = '';
        if (!empty($where)){
            
            foreach ($where as $key => $val){
                switch ($key){
                    case 'f':
                        $offset = intval($val);
                        break;
                    case 'l':
                        $plimit = intval($val);
                        break;
                    case 'p':
                        $page = intval($val);
                        $page--;
                        if ($page < 0){
                            $page = 0;
                        }
                        break;
                    case 'b':
                        $fd = $val;
                        break;
                    case 'o':
                        $asc = $val;
                        break;
                    case 's':
                        $filter = $val;
                        break;
                    case 'ss':
                        $search = $val;
                        break;
                    case 'v':
                        $sv = $val;
                        break;
                    default:
                        if (is_array($val)){
                            $this->db->where_in($key,$val);
                        }else{
                            $this->db->where($key,$val);
                        }
                        break;                  
                }
            }
        }

        if (!empty($no_where)){
            foreach($no_where as $kk=>$vv){
                $this->db->where_not_in($kk,$vv);
            }
        }

        if (!empty($search) && !empty($sv)){
            $this->db->like($search,$sv);
        }else if (!empty($filter) && !empty($sv)){
            $this->db->where($filter,$sv);
        }


        if (!empty($fd) && in_array(strtolower($asc),array('desc','asc'))){
            $this->db->order_by($fd,strtolower($asc)); 
        }
        
        if (!empty($plimit) && isset($page)) {
            $this->db->limit($plimit,$page*$plimit);
        }else if (!empty($plimit) && isset($offset)) {
            $this->db->limit($plimit,$offset);
        }
    }

   
    
    public function ct(array $data = array(),array $no_where = array()){

        $this->db->select('count(*) as table_count_all_rows');

        unset($data['l'],$data['p'],$data['b'],$data['o']);
        
        $this->_prepare_where($data,$no_where);
        
        $this->db->from($this->TBL_NAME);

        $record = $this->db->get()->row_array();

        $this->error_handling();

        return $record['table_count_all_rows'];
    }
    
    
    /**
     * 
     * 
     * @param array $data
     * @param array $fields
     * @return multitype:|unknown
     */
    public function gets(array $data = array(),array $fields=array(),array $no_where=array()){
        if (empty($fields)){
            $this->db->select('*');
        }else{
            $sel = implode(',',$fields);
            $this->db->select($sel);
        }

        $this->_prepare_where($data,$no_where);

        $this->db->from($this->TBL_NAME);
        
        $query = $this->db->get();
       
        $this->error_handling();
             
        $records = $query->result_array();
    
        if (empty($records)){
            return array();
        }
         
        return $records;
    }
    
    public function get(array $data,array $fields=array()){

        if (empty($data)){
            return NULL;
        }
        
        if (empty($fields)){
            $this->db->select('*');
        }else{
            $sel = implode('`,`',$fields);
            $this->db->select('`'.$sel.'`');
        }
        
        $this->db->from($this->TBL_NAME);
        
        foreach($data as $k=>$v){
            $this->db->where($k,$v);
        }
    
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        $this->error_handling();
    
        return $query->row_array();

    }
}