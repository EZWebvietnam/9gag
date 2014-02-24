<?php 
class Adminorder extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ordermodel');
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_login_admin()) {						// logged in, not activated
			redirect('/admin/login');
		}
    }
    public function index()
    {
        $this->data['list_order']=$this->ordermodel->get_list_order();
        $this->data['main_content']='order/list_order';
        $this->load->view('admin/table_template',$this->data);
    }
    public function update_blaceuser($id)
    {
        $detail = $this->ordermodel->detail_order($id);
        $id_user = $detail[0]['id_user'];
        $money = $detail[0]['money'];
        $detail_blance = $this->ordermodel->user_blance($id_user);
        $money_total = $money + $detail_blance[0]['so_du'];
        $data_save = array('so_du'=>$money_total);
        $this->ordermodel->update_blance($id_user,$data_save);
        $this->ordermodel->update_orders($id);
        redirect('/admin/adminorder');
    }
}
?>