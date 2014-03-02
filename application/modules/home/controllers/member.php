<?php 
class Member extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
        $this->load->library('session');
        $this->load->model('postmodel');
        $this->load->library('tank_auth');
    }
    public function post()
    {
        if(!$this->tank_auth->is_logged_in())
        {
            redirect('/');
        }
        $id_user = $this->session->userdata('user_id');
        $total_page = $this->postmodel->load_member_post($id_user);
        $total_page = $total_page/15;
        
        $total_page = ceil($total_page);
        
        $this->data['total_page']=$total_page;
        $this->data['main_content']='member_post';
        $this->load->view('home_layout/member_layout',$this->data);
    }
    public function fetch_post()
    {
        $id_user = $this->session->userdata('user_id');
        $page = $this->input->post('page');
        $position = $page*15;
        $this->data['list_post']=$this->postmodel->load_member_post_query($id_user,$position,10);
        $this->load->view('fetch_post',$this->data);
    }
    public function post_thread()
    {
         if(!$this->tank_auth->is_logged_in())
        {
            redirect('/');
        }
        if($this->input->post())
        {
            $code = rand_string(6);
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . '/file/uploads/post/'.$code;
            if (!file_exists($image_upload_folder)) {
                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
            }
            $this->upload_config = array(
                'upload_path' => $image_upload_folder,
                'allowed_types' => 'png|jpg|jpeg|bmp|tiff',
                'max_size' => 2048,
                'remove_space' => true,
                'encrypt_name' => true,
                );
            $this->upload->initialize($this->upload_config);
            if (!$this->upload->do_upload()) {
                $data['error_file'] = $this->upload->display_errors();
                $file = '';
            } else {
                $file_info = $this->upload->data();
            }
            if (!empty($file_info)) {
                $file = $file_info['file_name'];
            }
            else
            {
                $file='';
            }
            $data_insert = array('title'=>$this->input->post('title'),
            'code'=>$code,
            'img'=>$file,
            'id_cate'=>1,
            'status'=>1,
            'id_user'=>$this->session->userdata('user_id'),
            'create_date'=>strtotime('now'),
            'type'=>2,
            'content'=>stripslashes($this->input->post('editor1')));
            $id = $this->postmodel->insert_post($data_insert);
            if($id>0)
            {
                redirect('thanh-vien');
            }
        }
        else
        {
            $this->data['main_content']='post_thread';
            $this->load->view('home_layout/member_layout',$this->data);  
        }
        
    }
    public function post_imae()
    {
         if(!$this->tank_auth->is_logged_in())
        {
             redirect('/');
        }
        if($this->input->post())
        {
            $code = rand_string(6);
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . '/file/uploads/post/'.$code;
            if (!file_exists($image_upload_folder)) {
                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
            }
            $this->upload_config = array(
                'upload_path' => $image_upload_folder,
                'allowed_types' => 'png|jpg|jpeg|bmp|tiff',
                'max_size' => 2048,
                'remove_space' => true,
                'encrypt_name' => true,
                );
            $this->upload->initialize($this->upload_config);
            if (!$this->upload->do_upload()) {
                $data['error_file'] = $this->upload->display_errors();
                $file = '';
            } else {
                $file_info = $this->upload->data();
            }
            if (!empty($file_info)) {
                $file = $file_info['file_name'];
            }
            else
            {
                $file='';
            }
            $data_insert = array('title'=>$this->input->post('title'),
            'code'=>$code,
            'img'=>$file,
            'id_cate'=>1,
            'status'=>1,
            'id_user'=>$this->session->userdata('user_id'),
            'create_date'=>strtotime('now'),
            'type'=>1);
            $id = $this->postmodel->insert_post($data_insert);
            if($id>0)
            {
                redirect('thanh-vien');
            }
        }
        else
        {
            $this->data['main_content']='post_image';
            $this->load->view('home_layout/member_layout',$this->data);  
        }
    }
}
?>