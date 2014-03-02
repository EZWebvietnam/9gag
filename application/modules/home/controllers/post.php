<?php 
class Post extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        parent::load_post_hot();
        parent::user_hot();
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
        $view_update = $this->data['post'][0]['count_view'] + 1;
        $data_save = array('count_view'=>$view_update);
        $this->postmodel->update_post($code,$data_save);
        $this->data['main_content']='detail_post';
        $this->load->view('home_layout/detail_post_layout',$this->data);
    }
    public function ajax_like_post()
    {
        if($this->input->is_ajax_request())
        {
            $code = $this->input->post('code');
            $type = $this->input->post('type');
            $detail_post = $this->postmodel->load_post($code);
            switch($type)
            {
                case 0:
                {
                    $this->load->model('users');
                    $detail_like_post = $this->postmodel->get_like_post($this->session->userdata('user_id'),$detail_post[0]['id_post']);
                   
                    if(empty($detail_like_post))
                    {
                        $detail_user = $this->users->get_user_by_id($detail_post[0]['id_user'],1);
                        $total_like = $detail_user->total_like+1;
                        $count_like = $detail_post[0]['count_like']+1;
                        $this->users->update_user($detail_post[0]['id_user'],array('total_like'=>$total_like));
                        $point = $detail_post[0]['points']+2;
                        $data_save = array('count_like'=>$count_like,'points'=>$point);
                        $this->postmodel->update_post($code,$data_save);
                        $data_insert = array('id_post'=>$detail_post[0]['id_post'],'id_user'=>$this->session->userdata('user_id'),'create_date'=>strtotime('now'));
                        $id = $this->postmodel->insert_like_post($data_insert);
                        if($id>0)
                        {
                            $data = array('msg'=>TRUE);
                        }
                        else
                        {
                            $data = array('msg'=>FALSE);
                        }
                        
                    }
                    $data = array('msg'=>TRUE);
                    echo json_encode($data);
                    break;
                }
                case 1:
                {
                    if($detail_post[0]['points']-2 > 0)
                    {
                        $point = $detail_post[0]['points']-2;
                    }
                    else
                    {
                        $point = $detail_post[0]['points'];
                    }
                    $data_save = array('points'=>$point);
                    $this->postmodel->update_post($code,$data_save);
                    break;
                }
            }
            
        }
    }
}
?>