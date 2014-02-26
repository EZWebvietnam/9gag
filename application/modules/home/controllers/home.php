<?php 
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('postmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }
    public function index()
    {
        $this->data['list_post']=$this->postmodel->load_home();   
        $this->load->view('home_layout/home_index',$this->data);
    }
    public function google_signup()
    {
        $this->load->helper('url_helper');
        $this->load->library('oauth2/OAuth2');
		$this->load->config('oauth2', TRUE);
        $provider_name ='google';
        $provider = $this->oauth2->provider($provider_name, array(
            'id' => $this->config->item($provider_name.'_id', 'oauth2'),
            'secret' => $this->config->item($provider_name.'_secret', 'oauth2'),
        ));
        if ( ! $this->input->get('code'))
        {
            $provider->authorize();
        }
        else
        {
            try
            {
                $token = $provider->access($this->input->get('code'));
                $user = $provider->get_user_info($token);
                //echo "\n\nUser Info: ";
                if(!empty($user))
                {
                    $this->load->model('users');
                    $check_user = $this->users->get_user_by_login_id($user['uid']);
                    if(empty($check_user))
                    {
                        
                        $full_name = $user['name'];
                        $pass = rand_string(6);
                        $email_activation = $this->config->item('email_activation', 'tank_auth');
                        $img = $user['image'];
                        $this->tank_auth->create_user_social($user['email'],$pass,$full_name,$email_activation,2,1,$user['uid'],$img);
                        $user = array();
                    }
                    else
                    {
                        $this->tank_auth->login_social($user['uid']);
                    }
                    redirect('/');
                   
                }
            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }
    public function facebook()
    {
        $this->load->helper('url_helper');
        $this->load->library('oauth2/OAuth2');
		$this->load->config('oauth2', TRUE);
        $provider_name ='facebook';
        $provider = $this->oauth2->provider($provider_name, array(
            'id' => $this->config->item($provider_name.'_id', 'oauth2'),
            'secret' => $this->config->item($provider_name.'_secret', 'oauth2'),
        ));


        if ( ! $this->input->get('code'))
        {
            $provider->authorize();
        }
        else
        {
            try
            {
                $token = $provider->access($this->input->get('code'));
                $user = $provider->get_user_info($token);
                if(!empty($user))
                {
                    $this->load->model('users');
                    $check_user = $this->users->get_user_by_login_id($user['uid_fb']);
                    if(empty($check_user))
                    {
                        $full_name = $user['name_fb'];
                        $pass = rand_string(6);
                        $img = $user['image_fb'];
                        $email_activation = $this->config->item('email_activation', 'tank_auth');
                        $this->tank_auth->create_user_social($user['email'],$pass,$full_name,$email_activation,2,2,$user['uid_fb'],$img);
                    }
                    else
                    {
                        $this->tank_auth->login_social($user['uid_fb']);
                    }
                }
                $user = array();
                 redirect('/');
            }
            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }
    public function _send_email($type,$to,&$data)
	{
        
	} 
}
?>