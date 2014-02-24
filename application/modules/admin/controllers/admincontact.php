<?php 
class Admincontact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contactmodel');
        $this->load->library('tank_auth');

		$this->lang->load('tank_auth');

        $this->load->library('session');

        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated

			redirect('/admin/login');

		} 
    }
    public function index()
    {
        $this->data['list']=$this->contactmodel->list_contact();
        $this->data['main_content']='contact/list_contact';
        $this->load->view('admin/table_template',$this->data);
    }
    public function delete($id = null)
    {
        $this->contactmodel->delete($id);
        redirect('/admin/admincontact');
    }
}
?>