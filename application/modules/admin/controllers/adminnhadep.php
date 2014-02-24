<?php 
class Adminnhadep extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nhadepmodel');
         $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');
		} 
    }
    public function index()
    {
        $this->data['main_content']='nhadep/list_nhadep';
        $this->data['list_nha']=$this->nhadepmodel->list_nha_dep();
        $this->load->view('admin/table_template',$this->data);
    }
    public function add()
    {
        $code = rand_string(6);
        if($this->input->post())
        {
            $path = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$this->input->post('code');
            $files = array();
            $dir = opendir($path); // open the cwd..also do an err check.
            while(false != ($file = readdir($dir))) {
                    if(($file != ".") and ($file != "..") and ($file != "index.php")) {
                            $files[] = $file; // put in array.
                    }   
            }
            
            natsort($files);
            if(!isset($files[0]))
            {
                $img = '';
            }
            else
            {
                $img = $files[0];
            }
            $data_save = array(
            'title'=>$this->input->post('title'),
            'id_cate'=>$this->input->post('id_cate'),
            'img'=>$img,
            'create_date'=>strtotime('now'),
            'code'=>$this->input->post('code')
            );
            $id = $this->nhadepmodel->insert($data_save);
            if($id>0)
            {
                foreach($files as $k=>$v)
                {
                    $data_img = array('id_nha'=>$id,'img'=>$v);
                    $this->nhadepmodel->insert_to_nha_dep_img($data_img);
                    $data_img = array();
                }
                $this->session->set_flashdata('type','success');
                $this->session->set_flashdata('message','Thêm thành công');
                redirect('/admin/adminnhadep');
            }
            else
            {
                $this->session->set_flashdata('type','error');
                $this->session->set_flashdata('message','Thêm thất bại');
                redirect('/admin/adminnhadep');
            }
        }
        else
        {
            $this->data['cate']=$this->nhadepmodel->nha_dep_cate();
            $this->data['code']=$code;
            $this->data['main_content']='nhadep/add_nhadep';
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
        $detail = $this->nhadepmodel->nhadep_dt($id);
        if(empty($detail))
        {
            show_404();exit;
        }
        if($this->input->post())
        {
            $data_save = array(
            'title'=>$this->input->post('title'),
            'id_cate'=>$this->input->post('id_cate'),
            
            'create_date'=>strtotime('now')
            
            );
            $this->nhadepmodel->update($id,$data_save);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('message','Sửa thành công');
            redirect('/admin/adminnhadep');
        }
        else
        {
            $this->data['detail']=$detail;
            $this->data['cate']=$this->nhadepmodel->nha_dep_cate();
            $this->data['main_content']='nhadep/edit_nhadep';
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
            show_404();exit;
        }
        $detail = $this->nhadepmodel->nhadep_dt($id);
        if(empty($detail))
        {
            show_404();exit;
        }
        $this->nhadepmodel->delete($id);
        $this->nhadepmodel->delete_img($id);
        $this->session->set_flashdata('type','success');
        $this->session->set_flashdata('message','Xóa thành công');
        redirect('/admin/adminnhadep');
    }
}
?>