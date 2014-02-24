<?php 
class Adminemailsubcrise extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('emailsubcrisemodel');
        $this->load->library('session');
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');
		} 
    }
    public function index()
    {
        $this->data['list']=$this->emailsubcrisemodel->list_email();
        $this->data['main_content']='emailsubcrise/list_email';
        $this->load->view('admin/table_template',$this->data);
    }
    public function delete($id)
    {
        $this->emailsubcrisemodel->delete($id);
        redirect('/admin/adminemailsubcrise');
    }
}
?>