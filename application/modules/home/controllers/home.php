<?php 
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('postmodel');
        $this->load->library('google');
    }
    public function index()
    {
        require_once 'openid.php';
        $openid = new LightOpenID("localhost");
        $openid->identity = 'https://www.google.com/accounts/o8/id';
        $openid->required = array(
            'namePerson/first',
            'namePerson/last',
            'contact/email',
            'birthDate', 
            'person/gender',
            'contact/postalCode/home',
            'contact/country/home',
            'pref/language',
            'pref/timezone',  
        );
		$fb_config = array(
			'appId'  => '1450250688543704',
			'secret' => '8d12d11ef3524c996c6f656b0cb833e9'
		);
		$this->load->library('facebook', $fb_config);
		$user = $this->facebook->getUser();
		$openid->returnUrl = base_url().'google-signup';
        $this->data['list_post']=$this->postmodel->load_home();
        $url = base_url().'google-signup';
        $this->data['link_google']=$openid->authUrl();
		 if ($user) {
	
            $this->data['facebook_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
           $this->data['facebook_url'] = $this->facebook
                ->getLoginUrl();
        }
        $this->load->view('home_layout/home_index',$this->data);
    }
    public function google_signup()
    {
        require_once 'openid.php';
        $openid = new LightOpenID("localhost");
        if($openid->mode)
        {
            if($openid->mode == 'cancel')
            {
                echo "User has canceled authentication !";
            }
            elseif($openid->validate())
            {
                $data = $openid->getAttributes();
               
                $email = $data['contact/email'];
                $first = $data['namePerson/first'];
    //          header("Location: http://speechwithmilo.com/speechtherapy/adminpanel/");
                echo "Identity : $openid->identity <br />";
                echo "Email : $email <br />";
                echo "First name : $first";
                echo "<pre>"; print_r($data); echo "</pre>";

//              echo "<meta http-equiv = 'refresh' content = '0; url=http://speechwithmilo.com/speechtherapy/adminpanel/'>";
            }
            else
            {
                echo "The user has not logged in";
            }
        }
        else
        {
            echo "Go to the login page to logged in";
        }
    }
    public function facebook()
    {
		/*$this->load->config('facebook');

		$facebook_config = array(
			'client_id' 	=> config_item('facebook_app_id'),
			'client_secret'	=> config_item('facebook_secret'),
			'callback_url'	=> base_url().'facebook/oauth',
			'access_token'	=> NULL
		);

		$this->load->library('facebook_oauth', $facebook_config);
        if (isset($_GET['code']))
		{
			$this->data['result'] = $this->facebook_oauth->getAccessToken($_GET['code']);
		}
		else
		{
			$auth_url = $this->facebook_oauth->getAuthorizeUrl();
            echo $auth_url;exit;
			$this->data['result'] =  '<a href="'.$auth_url.'">'.$auth_url.'</a>';	
		}*/
		$fb_config = array(
			'appId'  => '1450250688543704',
			'secret' => '8d12d11ef3524c996c6f656b0cb833e9'
		);
		$this->load->library('facebook', $fb_config);
		$user = $this->facebook->getUser();
        if ($user) {
		
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me');
				print_r($data['user_profile']);exit;
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
	
            $data['logout_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook
                ->getLoginUrl();
        }
    }
}
?>