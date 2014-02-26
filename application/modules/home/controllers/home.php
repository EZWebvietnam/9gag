<?php 
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('postmodel');
    }
    public function index()
    {
        $this->data['list_post']=$this->postmodel->load_home();   
        $this->load->view('home_layout/home_index',$this->data);
    }
    public function google_signup()
    {
        $this->load->library('session');
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
                echo "\n\nUser Info: ";
                var_dump($user);
            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }
    public function facebook()
    {
        $this->load->library('session');
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
                echo "\n\nUser Info: ";
                var_dump($user);
            }
            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }
     
}
?>