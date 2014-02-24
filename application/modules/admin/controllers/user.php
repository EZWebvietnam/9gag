<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->Model('usermodel');
         $this->load->library('myfunction');
    }

    public function listuser() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login.xxx');
        } else {
            $data['main_content'] = 'users/list_user';
            $data['data'] = $this->usermodel->list_user();
            $this->load->view('admin/table_template', $data);
        }
    }
    public function view($id = null) {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login');
        }
        if (empty($id)) {
            redirect('admin/user/listuser');
        } else {
            $user_info = $this->usermodel->get_user($id);
            if (empty($user_info)) {
                redirect('admin/user/listuser');
            } else {
                $data['main_content'] = 'users/view_user';
                $data['user_info'] = $user_info;
                $this->load->view('admin/layout_form', $data);
            }
        }
    }

    function add() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login');
        } elseif (!$this->config->item('allow_registration', 'tank_auth')) { // registration is off
            $this->_show_message($this->lang->line('auth_message_registration_disabled'));
        } else {
            
            $use_username = $this->config->item('use_username', 'tank_auth');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[' . $this->config->item('username_min_length', 'tank_auth') . ']|max_length[' . $this->config->item('username_max_length', 'tank_auth') . ']|alpha_dash');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[' . $this->config->item('password_min_length', 'tank_auth') . ']|max_length[' . $this->config->item('password_max_length', 'tank_auth') . ']|alpha_dash');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
            $captcha_registration = $this->config->item('captcha_registration', 'tank_auth');
            $use_recaptcha = $this->config->item('use_recaptcha', 'tank_auth');
            $data['errors'] = array();
           
            if ($this->form_validation->run()==TRUE) {
               
                
                if (!is_null($data = $this->tank_auth->create_user(
                                $use_username ? $this->form_validation->set_value('username') : '', $this->form_validation->set_value('email'), $this->form_validation->set_value('password'),$this->input->post('fullname'),$this->input->post('phone'),$this->input->post('role')))) {         // success
                    $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                    if ($this->config->item('email_account_details', 'tank_auth')) { // send "welcome" email
                    }
                    unset($data['password']); // Clear password (just for any case)
                    $this->_show_message($this->lang->line('auth_message_registration_completed_2') . ' ' . anchor('/auth/login/', 'Login'));
                } else {
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v)
                        $data['errors'][$k] = $this->lang->line($v);
                }
                redirect('admin/user/listuser');
            }
            $data['user_role']=$this->usermodel->get_user_role();
            $data['use_username'] = $use_username;
            $data['use_recaptcha'] = $use_recaptcha;
            $data['main_content'] = 'users/add_user';
            $this->load->view('admin/layout_form', $data);
        }
    }

    function _show_message($message) {
        $this->session->set_flashdata('message', $message);
        redirect('/admin/user/listuser');
    }
    function test_send_mail($email, $username, $password) {
        $mail_body = "Xin chào bạn <br/> Bạn nhận được email này vì bạn đã được đăng ký tài khoản tại hệ thống admin của xxx.<br/> Username của bạn là:" . $email . "<br/> Password:" . $password."<br/>Xin vui lòng truy cập http://ninhbinhcoop.com/admin/login.xxx để đăng nhập";
        $this->load->library('mailer');
        $this->mailer->sendmail(
                $email, $username, 'Register Account Success', $mail_body
        );
    }

    public function ban($id) {
        if (empty($id)) {
            redirect('admin/user/listuser');
        } else {
            $user_info = $this->usermodel->get_user($id);
            if (empty($user_info)) {
                redirect('admin/user/listuser');
            } else {
                $acti = 1 - $user_info[0]['activated'];
                $data = array('activated' => $acti);
                $this->usermodel->update_user($id, $data);
                redirect('admin/user/listuser');
            }
        }
    }

    public function change_pass() {
       if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login.xxx');
        }
        if($this->input->post())
        {
            
            $image = $this->input->post('file');
            $dir = $_SERVER['DOCUMENT_ROOT'].'/cnpm/file/uploads/avatar/';
            $file = $this->myfunction->getlastfile($dir);
            if($image !='')
            {                
                $data = array();
                $data = array('file'=>$file,'modified'=>strtotime('now'));
                $this->usermodel->update_user($this->session->userdata['user_id'],$data);
                $path_old = $_SERVER['DOCUMENT_ROOT']."/cnpm/file/uploads/avatar/".$this->session->userdata['file'];
                if(file_exists($path_old))
                {
                    unlink($path_old);
                }
                $this->session->set_userdata(array('file'=>$file));
            }
        }
        if ($this->input->post('new_password') != '') {
            $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length[' . $this->config->item('password_min_length', 'tank_auth') . ']|max_length[' . $this->config->item('password_max_length', 'tank_auth') . ']|alpha_dash');
            $this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

            $data['errors'] = array();

            if ($this->form_validation->run()) {        // validation ok
                if ($this->tank_auth->change_password(
                                $this->form_validation->set_value('old_password'), $this->form_validation->set_value('new_password'))) { // success
                    $this->_show_message($this->lang->line('auth_message_password_changed'));
                } else {              // fail
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v)
                        $data['errors'][$k] = $this->lang->line($v);
                }
            }
        }
        $data['main_content'] = 'edit_user';
         $data['user_info'] = $this->usermodel->get_user($this->session->userdata['user_id']);
        $this->load->view('admin/edit_user_layout', $data);
    }
    public function setting()
    {
       if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login.xxx');
        }
        if($this->input->post())
        {
            
                $data = array();
                $data = array('modified'=>strtotime('now'));
                $this->usermodel->update_user($this->session->userdata['user_id'],$data);
                
            
        }
       
        if ($this->input->post('new_password') != '') {
             
            $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length[' . $this->config->item('password_min_length', 'tank_auth') . ']|max_length[' . $this->config->item('password_max_length', 'tank_auth') . ']|alpha_dash');
            $this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

            $data['errors'] = array();

            if ($this->form_validation->run()) {        // validation ok
                if ($this->tank_auth->change_password(
                                $this->form_validation->set_value('old_password'), $this->form_validation->set_value('new_password'))) { // success
                    $this->_show_message($this->lang->line('auth_message_password_changed'));
                } else {              // fail
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v)
                        $data['errors'][$k] = $this->lang->line($v);
                }
            }
        }
        $data['main_content'] = 'users/edit_user';
         $data['user_info'] = $this->usermodel->get_user($this->session->userdata['user_id']);
        $this->load->view('admin/layout_form', $data);
    }
    public function update_role($id)
    {
        if($this->input->post())
        {
            $data_save = array(
            'role'=>$this->input->post('role')
            );
            $this->usermodel->update_user($id,$data_save);
            redirect('/admin/user/listuser');
        }
        else
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
  
            $detail_user = $this->usermodel->get_user($id);
            if(empty($detail_user))
            {
                show_404();
                exit;
            }
            $data['main_content'] = 'users/edit_user_1';
            $data['detail']=$detail_user;
            $data['user_role']=$this->usermodel->get_user_role();
            $this->load->view('admin/layout_form', $data);
        }
    }

}

?>
