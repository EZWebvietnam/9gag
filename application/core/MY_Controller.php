<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->data = array();
    }
    public function load_post_hot()
    {
        $this->load->model('postmodel');
        $list_post_hot = $this->postmodel->top_post_hot();
        $this->data['list_post_hot'] = $list_post_hot;
    }
    public function user_hot()
    {
        $this->load->model('users');
        $list_users_hot = $this->users->list_users_hot();
        $this->data['list_users_hot'] = $list_users_hot;
    }
    public function new_post()
    {
        $this->load->model('postmodel');
        $list_new_post = $this->postmodel->new_post();
        $this->data['list_new_post'] = $list_new_post;
    }
}
?>
