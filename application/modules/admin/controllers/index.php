<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Index extends MY_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
	}
    function login()
	{
            $data['main_content']='login/login';
		if ($this->tank_auth->is_login_admin(TRUE)) {						// logged in, not activated
			redirect('/admin/user/listuser');

		} else {
			$data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
					$this->config->item('use_username', 'tank_auth'));
			$data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');
			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');
			$data['errors'] = array();
			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->login(
						$this->form_validation->set_value('login'),
						$this->form_validation->set_value('password'),
						$this->form_validation->set_value('remember'),
						$data['login_by_username'],
						$data['login_by_email'])) {								// success
                                                redirect('/admin/user/listuser');

				} else {
					$errors = $this->tank_auth->get_error_message();
					if (isset($errors['banned'])) {								// banned user
						$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);

					} 
                                        else
                                        {												// fail
                                            foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
                                        }
				}
			}
			$this->load->view('admin/login',$data);
		}
	}
        function logout()
	{
		$this->tank_auth->logout();
                $this->session->sess_create();
		$this->_show_message($this->lang->line('auth_message_logged_out'));
	}
        function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/admin/login');
	}
}
?>
