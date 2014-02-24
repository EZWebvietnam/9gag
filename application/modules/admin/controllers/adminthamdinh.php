<?php 
class Adminthamdinh extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('thamdinhmodel');
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');
		}
    }
    public function index()
    {
        $this->data['list_tham_dinh']=$this->thamdinhmodel->get_tham_dinh();
        $this->data['main_content']='thamdinh/list_td';
        $this->load->view('admin/table_template',$this->data);
    }
    public function delete($id)
    {
        $this->thamdinhmodel->delete_tham_dinh($id);
        redirect('/admin/adminthamdinh');
    }
}
?>