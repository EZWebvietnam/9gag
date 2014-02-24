<?php 
class Adminproperty extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('propertymodel');
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
        $this->data['list_property_admin']=$this->propertymodel->list_property();
        $this->data['main_content']='property/list_property';
        $this->load->view('admin/table_template',$this->data);
    }
    public function confirmpending($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
        if(!is_numeric($id))
        {
            show_404();exit;
        }
        $detail = $this->propertymodel->get_proper_detail($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }
        $data_save = array('status'=>1);
        $this->propertymodel->update_property($id,$data_save);
        $this->session->set_flashdata('type','success');
        $this->session->set_flashdata('message','Duyệt thành công');
        redirect('/admin/adminproperty');
    }
    public function add()
    {
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/property/'.$this->input->post('code');
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
                'loai_tin'=>$this->input->post('loai_tin'),
                'title'=>$this->input->post('title'),
                'id_city'=>$this->input->post('id_city'),
                'id_district'=>$this->input->post('id_district'),
                'id_user'=>$this->input->post('id_user'),
                'loai_dia_oc'=>$this->input->post('id_cate'),
                'id_duan'=>$this->input->post('id_duan'),
                'price'=>$this->input->post('price'),
                'dien_tich'=>$this->input->post('dien_tich'),
                'chieu_ngang_truoc'=>$this->input->post('chieu_ngang'),
                'chieu_dai'=>$this->input->post('chieu_dai'),
                'xd_chieu_ngang_truoc'=>$this->input->post('xd_chieu_ngang'),
                'xd_chieu_dai'=>$this->input->post('xd_chieu_dai'),
                'tinh_trang_phap_ly'=>$this->input->post('tinh_trang_phap_ly'),
                'huong'=>$this->input->post('huong'),
                'so_lau'=>$this->input->post('so_lau'),
                'so_phong_khach'=>$this->input->post('so_phong_khach'),
                'so_phong_tam_wc'=>$this->input->post('so_phong_tam_wc'),
                'so_phong_ngu'=>$this->input->post('so_phong_ngu'),
                'phong_khac'=>$this->input->post('phong_khac'),
                'status'=>1,
                'img'=>$file,
                'code'=>$this->input->post('code'),
                'content'=>stripslashes($this->input->post('editor1')),
                'create_date'=>strtotime('now'),
                'vi_tri_dia_oc'=>$this->input->post('vi_tri_dia_oc')
            );
            $data['loai_hinh']=1;
            if($this->input->post('day_du_tien_nghi'))
            {
                $data_save['day_du_tien_nghi']=1;
            }
            else
            {
                $data_save['day_du_tien_nghi']=0;
            }
            if($this->input->post('cho_dau_xe_hoi'))
            {
                $data_save['cho_de_xe_hoi']=1;
            }
            else
            {
                $data_save['cho_de_xe_hoi']=0;
            }
            if($this->input->post('san_vuon'))
            {
                $data_save['san_vuon']=1;
            }
            else
            {
                $data_save['san_vuon']=0;
            }
            if($this->input->post('ho_boi'))
            {
                $data_save['ho_boi']=1;
            }
            else
            {
                $data_save['ho_boi']=0;
            }
            if($this->input->post('tien_kinh_doanh'))
            {
                $data_save['tien_kinh_doanh']=1;
            }
            else
            {
                $data_save['tien_kinh_doanh']=0;
            }
            if($this->input->post('tien_de_o'))
            {
                $data_save['tien_de_o']=1;
            }
            else
            {
                $data_save['tien_de_o']=0;
            }
            if($this->input->post('tien_lam_van_phong'))
            {
                $data_save['tien_lam_van_phong']=1;
            }
            else
            {
                $data_save['tien_lam_van_phong']=0;
            }
            if($this->input->post('tien_cho_san_xuat'))
            {
                $data_save['tien_cho_san_xuat']=1;
            }
            else
            {
                $data_save['tien_cho_san_xuat']=0;
            }
            if($this->input->post('cho_sinh_vien_thue'))
            {
                $data_save['cho_sinh_vien_thue']=1;
                $data_save['loai_hinh']=3;
            }
            else
            {
                $data_save['cho_sinh_vien_thue']=0;
            }
            if($this->input->post('optionsRadios')==2)
            {
                $data_save['moi_gioi']=2;
                $data_save['loai_hinh']=2;
                $data_save['phi_ky_gui']=$this->input->post('phi_ky_gui');
            }
            else
            {
                $data_save['moi_gioi']=1;
                $data_save['loai_hinh']=1;
                $data_save['phi_ky_gui']= 0;
            }
            $id = $this->propertymodel->inser_property($data_save);
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
            redirect('/admin/adminproperty');
        }
        else
        {
            $this->load->model('usermodel');
            $this->load->model('catepropertymodel');
            $this->data['code']=rand_string(6);
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/property/'.$this->data['code'];
            if (!file_exists($image_upload_folder)) {
                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
            }
            $this->data['list_cate_pro']=$this->catepropertymodel->get_list_cate_pro();
            $this->data['vi_tri_dia_oc']=$this->catepropertymodel->get_list_vi_tri_dia_oc_pro();
            $this->data['tinh_trang_phap_ly']=$this->catepropertymodel->get_list_tt_pn();
            $this->data['get_list_huong']=$this->catepropertymodel->get_list_huong();
            $this->data['get_phong_ngu']=$this->catepropertymodel->get_phong_ngu();
            $this->data['list_user']=$this->usermodel->list_user();
            $this->data['main_content']='property/add_property';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function edit($id = null)
    {
        $this->data['detail']=$this->propertymodel->get_proper_detail($id);
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
        if($this->input->post())
        {
            $this->load->library('upload');
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/property/'.$this->data['detail'][0]['code'];
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
            if($file !='')
            {
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$this->data['detail'][0]['code'].'/'.$this->data['detail'][0]['img']))
                {
                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$this->data['detail'][0]['code'].'/'.$this->data['detail'][0]['img']))
                    {
                        unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$this->data['detail'][0]['code'].'/'.$this->data['detail'][0]['img']);
                    }
                }
                $data_save = array(
                    'loai_tin'=>$this->input->post('loai_tin'),
                    'title'=>$this->input->post('title'),
                    'id_city'=>$this->input->post('id_city'),
                    'id_district'=>$this->input->post('id_district'),
                    'id_user'=>$this->input->post('id_user'),
                    'loai_dia_oc'=>$this->input->post('id_cate'),
                    'id_duan'=>$this->input->post('id_duan'),
                    'price'=>$this->input->post('price'),
                    'dien_tich'=>$this->input->post('dien_tich'),
                    'chieu_ngang_truoc'=>$this->input->post('chieu_ngang'),
                    'chieu_dai'=>$this->input->post('chieu_dai'),
                    'xd_chieu_ngang_truoc'=>$this->input->post('xd_chieu_ngang'),
                    'xd_chieu_dai'=>$this->input->post('xd_chieu_dai'),
                    'tinh_trang_phap_ly'=>$this->input->post('tinh_trang_phap_ly'),
                    'huong'=>$this->input->post('huong'),
                    'so_lau'=>$this->input->post('so_lau'),
                    'so_phong_khach'=>$this->input->post('so_phong_khach'),
                    'so_phong_tam_wc'=>$this->input->post('so_phong_tam_wc'),
                    'so_phong_ngu'=>$this->input->post('so_phong_ngu'),
                    'phong_khac'=>$this->input->post('phong_khac'),
                    'status'=>1,
                    'img'=>$file,
                    'content'=>stripslashes($this->input->post('editor1')),
                    'create_date'=>strtotime('now'),
                    'vi_tri_dia_oc'=>$this->input->post('vi_tri_dia_oc')
                );
            }
            else
            {
                $data_save = array(
                    'loai_tin'=>$this->input->post('loai_tin'),
                    'title'=>$this->input->post('title'),
                    'id_city'=>$this->input->post('id_city'),
                    'id_district'=>$this->input->post('id_district'),
                    'id_user'=>$this->input->post('id_user'),
                    'loai_dia_oc'=>$this->input->post('id_cate'),
                    'id_duan'=>$this->input->post('id_duan'),
                    'price'=>$this->input->post('price'),
                    'dien_tich'=>$this->input->post('dien_tich'),
                    'chieu_ngang_truoc'=>$this->input->post('chieu_ngang'),
                    'chieu_dai'=>$this->input->post('chieu_dai'),
                    'xd_chieu_ngang_truoc'=>$this->input->post('xd_chieu_ngang'),
                    'xd_chieu_dai'=>$this->input->post('xd_chieu_dai'),
                    'tinh_trang_phap_ly'=>$this->input->post('tinh_trang_phap_ly'),
                    'huong'=>$this->input->post('huong'),
                    'so_lau'=>$this->input->post('so_lau'),
                    'so_phong_khach'=>$this->input->post('so_phong_khach'),
                    'so_phong_tam_wc'=>$this->input->post('so_phong_tam_wc'),
                    'so_phong_ngu'=>$this->input->post('so_phong_ngu'),
                    'phong_khac'=>$this->input->post('phong_khac'),
                    'status'=>1,
                    'content'=>stripslashes($this->input->post('editor1')),
                    'create_date'=>strtotime('now'),
                    'vi_tri_dia_oc'=>$this->input->post('vi_tri_dia_oc')
                );
            }
            $data['loai_hinh']=1;
            if($this->input->post('day_du_tien_nghi'))
            {
                $data_save['day_du_tien_nghi']=1;
            }
            else
            {
                $data_save['day_du_tien_nghi']=0;
            }
            if($this->input->post('cho_dau_xe_hoi'))
            {
                $data_save['cho_de_xe_hoi']=1;
            }
            else
            {
                $data_save['cho_de_xe_hoi']=0;
            }
            if($this->input->post('san_vuon'))
            {
                $data_save['san_vuon']=1;
            }
            else
            {
                $data_save['san_vuon']=0;
            }
            if($this->input->post('ho_boi'))
            {
                $data_save['ho_boi']=1;
            }
            else
            {
                $data_save['ho_boi']=0;
            }
            if($this->input->post('tien_kinh_doanh'))
            {
                $data_save['tien_kinh_doanh']=1;
            }
            else
            {
                $data_save['tien_kinh_doanh']=0;
            }
            if($this->input->post('tien_de_o'))
            {
                $data_save['tien_de_o']=1;
            }
            else
            {
                $data_save['tien_de_o']=0;
            }
            if($this->input->post('tien_lam_van_phong'))
            {
                $data_save['tien_lam_van_phong']=1;
            }
            else
            {
                $data_save['tien_lam_van_phong']=0;
            }
            if($this->input->post('tien_cho_san_xuat'))
            {
                $data_save['tien_cho_san_xuat']=1;
            }
            else
            {
                $data_save['tien_cho_san_xuat']=0;
            }
            if($this->input->post('cho_sinh_vien_thue'))
            {
                $data_save['cho_sinh_vien_thue']=1;
                $data_save['loai_hinh']=3;
            }
            else
            {
                $data_save['cho_sinh_vien_thue']=0;
            }
            if($this->input->post('optionsRadios')==2)
            {
                $data_save['moi_gioi']=2;
                $data_save['loai_hinh']=2;
                $data_save['phi_ky_gui']=$this->input->post('phi_ky_gui');
            }
            else
            {
                $data_save['moi_gioi']=1;
                $data_save['loai_hinh']=1;
                $data_save['phi_ky_gui']= 0;
            }
            $this->propertymodel->update_property($id,$data_save);
            $this->session->set_flashdata('type','success');
             $this->session->set_flashdata('message','Update thành công');
            redirect('/admin/adminproperty');
        }
        else
        {
            $this->load->model('usermodel');
            $this->load->model('catepropertymodel');
            $this->load->model('projectmodel');
            
            $this->data['list_district_proper']=$this->projectmodel->get_list_district_city($this->data['detail'][0]['id_city']);
            $this->data['list_project_proper']=$this->projectmodel->get_list_project_city($this->data['detail'][0]['id_city']);
            $this->data['list_cate_pro']=$this->catepropertymodel->get_list_cate_pro();
            $this->data['vi_tri_dia_oc']=$this->catepropertymodel->get_list_vi_tri_dia_oc_pro();
            $this->data['tinh_trang_phap_ly']=$this->catepropertymodel->get_list_tt_pn();
            $this->data['get_list_huong']=$this->catepropertymodel->get_list_huong();
            $this->data['get_phong_ngu']=$this->catepropertymodel->get_phong_ngu();
            $this->data['list_user']=$this->usermodel->list_user();
            $this->data['main_content']='property/edit_property';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function delete($id = null)
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
        $detail=$this->propertymodel->get_proper_detail($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }
        else 
        {
            
            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$detail[0]['code'].'/'.$detail[0]['img']))
            {
                if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$detail[0]['code'].'/'.$detail[0]['img']))
                {
                    unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$detail[0]['img'].'/'.$detail[0]['img']);
                }
            }
            $this->propertymodel->delete_property($id);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('message','Xóa thành công');
            redirect('/admin/adminproperty');
        }
    }
}
?>