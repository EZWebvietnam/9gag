<?php 
class Admindiscovery extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('discoverymodel');
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');
		}
    }
    public function index()
    {
        $this->data['list_disco_admin']=$this->discoverymodel->list_discovery();
        $this->data['main_content']='discoveryadmin/list_disco';
        $this->load->view('admin/table_template',$this->data);
    }
    public function add()
    {
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/discovery';
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
            $data_save = array(
            'create_date'=>strtotime('now'),
            'title'=>$this->input->post('title'),
            'content'=>stripslashes($this->input->post('editor1')),
            'id_cate'=>$this->input->post('id_cate'),
            'img'=>$file
            );
            $id = $this->discoverymodel->insert_discovery($data_save);
            if($id>0)
            {
                $this->session->set_flashdata('type','success');
                $this->session->set_flashdata('message','Thêm thành công');
            }
            else
            {
                $this->session->set_flashdata('type','error');
                $this->session->set_flashdata('message','Thêm thất bại');
            }
            redirect('/admin/admindiscovery');
        }
        else
        {
            $this->load->model('catediscoverymodel');
            $this->data['list_cate_new']=$this->catediscoverymodel->list_cate_discovery();
            $this->data['main_content']='discoveryadmin/add_disco';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function edit($id = null)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $detail = $this->discoverymodel->discovery_detail($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/discovery';
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
            if($file!='')
            {
                $data_save = array(
                
                'create_date'=>strtotime('now'),
                'title'=>$this->input->post('title'),
                'content'=>stripslashes($this->input->post('editor1')),
                'id_cate'=>$this->input->post('id_cate'),
                
                'img'=>$file
                );
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$detail[0]['img']))
                {
                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$detail[0]['img']))
                    {
                        unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$detail[0]['img']);
                    }
                }
            }
            else
            {
              $data_save = array(
                
                'create_date'=>strtotime('now'),
                'title'=>$this->input->post('title'),
                'content'=>stripslashes($this->input->post('editor1')),
                'id_cate'=>$this->input->post('id_cate'),
                
                );  
            }
            $this->discoverymodel->update($id,$data_save);
            $this->session->set_flashdata('type','success');
                $this->session->set_flashdata('message','Thêm thành công');
            redirect('/admin/admindiscovery');
        }
        else
        {
            
            $this->data['detail']=$detail;
            $this->load->model('catediscoverymodel');
            $this->data['list_cate_new']=$this->catediscoverymodel->list_cate_discovery();
            $this->data['main_content']='discoveryadmin/edit_disco';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
}
?>