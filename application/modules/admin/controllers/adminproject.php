<?php 
class Adminproject extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projectmodel');
        $this->load->library('session');
        parent::list_city();
        parent::list_district();
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');

		}
    }
    public function index()
    {
        $this->data['list_project_admin']=$this->projectmodel->list_project();
        $this->data['main_content']='project/list_project';
        $this->load->view('admin/table_template',$this->data);
    }
    public function add()
    {
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/project';
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
            'title'=>$this->input->post('title'),
            'id_city'=>$this->input->post('id_city'),
            'id_district'=>$this->input->post('id_district'),
            'id_user'=>$this->input->post('id_user'),
            'id_cate'=>$this->input->post('id_cate'),
            'img'=>$file,
            'content'=>stripslashes($this->input->post('editor1')),
            'tieu_diem'=>$this->input->post('optionsRadios')
            );
            $id = $this->projectmodel->insert($data_save);
            if($id>0)
            {
                redirect('/admin/adminproject');
            }
        }
        else
        {
            $this->load->model('usermodel');
            $this->load->model('cateprojectmodel');
            $this->data['list_user']=$this->usermodel->list_user();
            $this->data['list_cate_project']=$this->cateprojectmodel->list_cate_project();
            $this->data['main_content']='project/add_project';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function edit($id)
    {
        if(empty($id))
        {
            show_404();exit;
        }
        if(!is_numeric($id))
        {
            show_404();exit;
        }
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/project';
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
                'title'=>$this->input->post('title'),
                'id_city'=>$this->input->post('id_city'),
                'id_district'=>$this->input->post('id_district'),
                'id_user'=>$this->input->post('id_user'),
                'id_cate'=>$this->input->post('id_cate'),
                'img'=>$file,
                'content'=>stripslashes($this->input->post('editor1')),
                'tieu_diem'=>$this->input->post('optionsRadios')
                );
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$this->input->post('old_file')))
                {
                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$this->input->post('old_file')))
                    {
                        unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$this->input->post('old_file'));
                    }
                }
            }
            else
            {
                 $data_save = array(
                'title'=>$this->input->post('title'),
                'id_city'=>$this->input->post('id_city'),
                'id_district'=>$this->input->post('id_district'),
                'id_user'=>$this->input->post('id_user'),
                'id_cate'=>$this->input->post('id_cate'),
                'content'=>stripslashes($this->input->post('editor1')),
                'tieu_diem'=>$this->input->post('optionsRadios')
                );
            }
            $this->projectmodel->update($id,$data_save);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            $this->load->model('usermodel');
            $this->load->model('cateprojectmodel');
            $this->data['list_user']=$this->usermodel->list_user();
            $this->data['list_cate_project']=$this->cateprojectmodel->list_cate_project();
            $this->data['main_content']='project/edit_project';
            $this->data['detail']=$this->projectmodel->project_detail($id);
            if(empty($this->data['detail']))
            {
                show_404();
                exit;
            }
            $this->data['list_district_edit']=$this->projectmodel->get_list_district_city($this->data['detail'][0]['id_city']);
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function ajax_get_district()
    {
        
       
        if($this->input->is_ajax_request())
        {
            $id_city = $this->input->post('id_tinh');
            
            $this->data['list_district_ajax']=$this->projectmodel->get_list_district_city($id_city);
            $this->load->view('project/ajax_district',$this->data);
        }
    }
    public function delete($id)
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
        $detail = $this->projectmodel->project_detail($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }
        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$detail[0]['img']))
        {
            if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$detail[0]['img']))
            {
                unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$detail[0]['old_file']);
           }
        }
        $this->projectmodel->delete($id);
        redirect('/admin/adminproject');
    }
    public function ajax_get_project_city()
    {
        if($this->input->is_ajax_request())
        {
            $id_city = $this->input->post('id_tinh');
            $this->data['list_district_ajax']=$this->projectmodel->get_list_project_city($id_city);
            $this->load->view('project/ajax_project_city',$this->data);
        }
    }
}
?>