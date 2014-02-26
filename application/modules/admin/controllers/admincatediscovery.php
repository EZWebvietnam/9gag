<?php 
class Admincatediscovery extends MY_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('catediscoverymodel');
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');

		}
    }
    public function index()
    {
        $this->data['list_cate_project']=$this->catediscoverymodel->list_cate_discovery();
        $this->data['main_content']='catediscovery/list_cate';
        $this->load->view('admin/table_template',$this->data);
    }
    public function add()
    {
        if($this->input->post())
        {
            $data_save = array(
            'name'=>$this->input->post('cate'),
            'parent'=>$this->input->post('parent')
            );
            $id = $this->catediscoverymodel->insert($data_save);
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
            redirect('/admin/admincatediscovery');
        }
        else
        {
            $this->data['list_cate_project']=$this->catediscoverymodel->list_cate_discovery();
            $this->data['main_content']='catediscovery/add_cate';
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
        $detail = $this->catediscoverymodel->detail($id);
        if(empty($detail))
        {
            show_404();exit;
        }
        if($this->input->post())
        {
             $data_save = array(
            'name'=>$this->input->post('cate'),
            'parent'=>$this->input->post('parent')
            );
            $this->catediscoverymodel->update($id,$data_save);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('message','Thêm thành công');
            redirect('/admin/admincatediscovery');
        }
        else
        {
            $this->data['main_content']='catediscovery/edit_cate';
            $this->data['detail']=$detail;
            $this->data['list_cate_project']=$this->catediscoverymodel->list_cate_discovery();
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
        $detail = $this->catediscoverymodel->detail($id);
        if(empty($detail))
        {
            show_404();exit;
        }
        else
        {
            $this->catediscoverymodel->delete($id);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('message','Xóa thành công');
            redirect('/admin/admincatediscovery');
        }
    }
}
?>