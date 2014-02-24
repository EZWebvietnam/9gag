<?php 

class Adminadv extends MY_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model('advmodel');

        $this->load->library('tank_auth');

		$this->lang->load('tank_auth');

        $this->load->library('session');

        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated

			redirect('/admin/login');

		} 

    }

    public function index()

    {

        $this->data['list_adv']=$this->advmodel->load_adv();

        $this->data['main_content']='adv/list_adv';

        $this->load->view('admin/table_template',$this->data);

    }

    public function add()
    {

        if($this->input->post())
        {
             $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/adv/';
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
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_upload_folder."/".$file_info['file_name'];
            $file_thumb_name = $file_info['file_name'];
            $config['new_image'] = $image_upload_folder."/".$file_thumb_name;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            switch($this->input->post('loai_qc'))
            {
                case 1:
                {
                    $config['width'] = 100;
                    $config['height'] = 300;
                    break;
                }
                case 2:
                {
                    $config['width'] = 100;
                   $config['height'] = 300;
                    break;
                }
                case 3:
                {

                    $config['width'] = 100;

                    $config['height'] = 300;

                    break;

                }

                case 4:

                {

                    $config['width'] = 100;

                    $config['height'] = 300;

                    break;

                }

                case 5:

                {

                    $config['width'] = 300;

                    $config['height'] = 250;

                    break;

                }

                case 6:

                {

                    $config['width'] = 170;

                    $config['height'] = 100;

                    break;

                }

                case 7:

                {

                    $config['width'] = 170;

                    $config['height'] = 100;

                    break;

                }

                case 8:
                {

                    $config['width'] = 960;

                    $config['height'] = 90;

                    break;

                }
                case 9:
                {
                    $config['width'] = 960;
                    $config['height'] = 360;
                    break;
                }

            }

            

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            $file_thumb_name = $file_info['file_name']."_thumb";

            $file_thumb_name = str_replace($file_info['file_ext'], "", $file_thumb_name);

            $file_thumb_name = $file_thumb_name.$file_info['file_ext'];

            $data_save= array(

            'file'=>$file_thumb_name,

            'vi_tri'=>$this->input->post('loai_qc'),

            'exp_date'=>$this->input->post('date'),

            'link'=>$this->input->post('link')

            );

            $id = $this->advmodel->insert($data_save);

            if($id >0)

            {

                unlink($config['source_image']);

                $this->session->set_flashdata('type','success');

                $this->session->set_flashdata('message','Thêm thành công');

                redirect('/admin/adminadv');

            }

            else

            {

                $this->session->set_flashdata('type','error');

                $this->session->set_flashdata('message','Thêm thất bại');

                redirect('/admin/adminadv');

            }

        }

        else

        {

            $this->data['list_type_adv']=$this->advmodel->load_type_adv();
            $this->data['main_content']='adv/add_adv';
            $this->load->view('admin/layout_form',$this->data);

        }

    }

    public function delete($id)

    {

        

        if(empty($id))

        {

            show_404();exit;

        }

        

        if(!is_numeric($id))

        {

            show_404();

            exit;

        }

        $detail = $this->advmodel->load_adv_detail($id);

        if(empty($detail))

        {

            

            show_404();exit;

        }

        else

        {

            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/adv/'.$detail[0]['file']))

            {

                if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/adv/'.$detail[0]['file']))

                {

                    unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/adv/'.$detail[0]['file']);

                }

            }

            $this->advmodel->delete($id);

            $this->session->set_flashdata('type','success');

                $this->session->set_flashdata('message','Xóa thành công');

                redirect('/admin/adminadv');

        }

    }
    public function edit($id)
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
        $detail = $this->advmodel->load_adv_detail($id);
        if(empty($detail))
        {
            show_404();
             exit;
        }
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/adv/';
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
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_upload_folder."/".$file_info['file_name'];
            $file_thumb_name = $file_info['file_name'];
            $config['new_image'] = $image_upload_folder."/".$file_thumb_name;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            switch($this->input->post('loai_qc'))
            {
                case 1:
                {
                    $config['width'] = 100;
                    $config['height'] = 300;
                    break;
                }
                case 2:
                {
                    $config['width'] = 100;
                   $config['height'] = 300;
                    break;
                }
                case 3:
                {

                    $config['width'] = 100;

                    $config['height'] = 300;

                    break;

                }

                case 4:

                {

                    $config['width'] = 100;

                    $config['height'] = 300;

                    break;

                }

                case 5:

                {

                    $config['width'] = 300;

                    $config['height'] = 250;

                    break;

                }

                case 6:

                {

                    $config['width'] = 170;

                    $config['height'] = 100;

                    break;

                }

                case 7:

                {

                    $config['width'] = 170;

                    $config['height'] = 100;

                    break;

                }

                case 8:
                {

                    $config['width'] = 960;

                    $config['height'] = 90;

                    break;

                }
                case 9:
                {
                    $config['width'] = 960;
                    $config['height'] = 360;
                    break;
                }

            }
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $file_thumb_name = $file_info['file_name']."_thumb";
            $file_thumb_name = str_replace($file_info['file_ext'], "", $file_thumb_name);
            $file_thumb_name = $file_thumb_name.$file_info['file_ext'];
            if($file!='')
            {
                 $data_save= array(
                'file'=>$file_thumb_name,
                'vi_tri'=>$this->input->post('loai_qc'),
                'exp_date'=>$this->input->post('date'),
                'link'=>$this->input->post('link')
                );
            }
            else
            {
                $data_save= array(
                'vi_tri'=>$this->input->post('loai_qc'),
                'exp_date'=>$this->input->post('date'),
                'link'=>$this->input->post('link')
                );
            }
            $this->advmodel->update($id,$data_save);
            redirect('/admin/adminadv');
        }
        else
        {
            $this->data['detail']=$detail;
            $this->data['list_type_adv']=$this->advmodel->load_type_adv();
            $this->data['main_content']='adv/edit_adv';
            $this->load->view('admin/layout_form',$this->data);
        }
    }

}

?>