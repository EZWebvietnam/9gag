<?php 
class Post extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
        $this->load->model('postmodel');
    }
    public function detail($code)
    {
        if(empty($code))
        {
            show_404();
            exit;
        }
        $this->data['post'] = $this->postmodel->load_post($code);
        if(empty($this->data['post']))
        {
            show_404();
            exit;
        }
        $this->data['main_content']='detail_post';
        $this->load->view('home_layout/detail_post_layout',$this->data);
    }
}
?>