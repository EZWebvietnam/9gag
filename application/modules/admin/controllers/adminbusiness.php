<?php 
class Adminbusiness extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('businessmodel');  
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');
		} 
    }
    public function index()
    {
        $this->data['list_business']=$this->businessmodel->list_business();
        $this->data['main_content']='business/list_business';
        $this->load->view('admin/table_template',$this->data);
    }
    public function add()
    {
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/business';
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
            'ten_dn'=>$this->input->post('title'),
            'dia_chi_dn'=>$this->input->post('address'),
            'sdt'=>$this->input->post('sdt'),
            'fax'=>$this->input->post('fax'),
            'mail'=>$this->input->post('mail'),
            'web'=>$this->input->post('web'),
            'gioi_thieu'=>stripslashes($this->input->post('editor1')),
            'create_date'=>strtotime('now'),
            'id_user'=>$this->input->post('id_user'),
            'logo'=>$file,			'status'=>$this->input->post('optionsRadios'),			'noi_bat'=>$this->input->post('noi_bat')
            );
            $id = $this->businessmodel->insert($data_save);
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
            redirect('/admin/adminbusiness');
        }
        else
        {
            $this->load->model('usermodel');
            $this->data['list_user']=$this->usermodel->list_user();
            $this->data['main_content']='business/add_business';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function edit($id = null)
    {
        if(empty($id))
        {
            show_404();exit;
        }
        if(!is_numeric($id))
        {
            show_404();exit;
        }
        $detail = $this->businessmodel->business_detail($id);
      
        if(empty($detail))
        {
            show_404();exit;
        }
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/business';
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
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$detail[0]['logo']))
                {
                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$detail[0]['logo']))
                    {
                        unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$detail[0]['logo']);
                    }
                }
                $data_save = array(
                'ten_dn'=>$this->input->post('title'),
                'dia_chi_dn'=>$this->input->post('address'),
                'sdt'=>$this->input->post('sdt'),
                'fax'=>$this->input->post('fax'),
                'mail'=>$this->input->post('mail'),
                'web'=>$this->input->post('web'),
                'gioi_thieu'=>stripslashes($this->input->post('editor1')),
                'create_date'=>strtotime('now'),
                'id_user'=>$this->input->post('id_user'),
                'logo'=>$file,				'status'=>$this->input->post('optionsRadios'),				'noi_bat'=>$this->input->post('noi_bat')
                );
            }
            else
            {
                $data_save = array(
                'ten_dn'=>$this->input->post('title'),
                'dia_chi_dn'=>$this->input->post('address'),
                'sdt'=>$this->input->post('sdt'),
                'fax'=>$this->input->post('fax'),
                'mail'=>$this->input->post('mail'),
                'web'=>$this->input->post('web'),
                'gioi_thieu'=>stripslashes($this->input->post('editor1')),
                'create_date'=>strtotime('now'),
                'id_user'=>$this->input->post('id_user'),				'status'=>$this->input->post('optionsRadios'),				'noi_bat'=>$this->input->post('noi_bat')
                );
            }
            $this->businessmodel->update($id,$data_save);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('message','Thêm thành công');
            redirect('/admin/adminbusiness');
        }
        else
        {
            $this->load->model('usermodel');
            $this->data['detail']=$detail;
            $this->data['list_user']=$this->usermodel->list_user();
            $this->data['main_content']='business/edit_business';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function delete($id = null)
    {
        if(empty($id))
        {
            show_404();exit;
        }
        if(!is_numeric($id))
        {
            show_404();exit;
        }
        $detail = $this->businessmodel->business_detail($id);
      
        if(empty($detail))
        {
            show_404();exit;
        }
        else
        {
            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$detail[0]['logo']))
                {
                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$detail[0]['logo']))
                    {
                        unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$detail[0]['logo']);
                    }
                }
            $this->businessmodel->delete($id);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('message','Thêm thành công');
            redirect('/admin/adminbusiness');
        }
    }
}
?>