<?php 
class Member extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
        $this->load->library('session');
        $this->load->model('postmodel');
    }
    public function post()
    {
        $id_user = $this->session->userdata('user_id');
        $total_page = $this->postmodel->load_member_post($id_user);
        $total_page = ceil($total_page/10); 
        $this->data['total_page']=$total_page;
        $this->data['main_content']='member_post';
        $this->load->view('home_layout/member_layout',$this->data);
    }
    public function fetch_post()
    {
        $id_user = $this->session->userdata('user_id');
        $page = $this->input->post('page');
        $position = $page*10;
        $this->data['list_post']=$this->postmodel->load_member_post_query($id_user,$position,10);
        $this->load->view('fetch_post',$this->data);
    }
}
?>