<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//include(APPPATH.'models/admin/Functions.php');
class Login  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               
		$this->load->library('grocery_CRUD');
              $this->load->model('admin/login_model');
          
	}
       public function index()
	{ 
    
        $this->load->library('form_validation');
       // $this->load->library('simple_auth');
        $this->load->helper(array('form', 'url'));

        $base = 'required|trim|xss_clean';

        $this->form_validation->set_rules('username', 'username', $base.'|valid_email|max_length[50]')
                    ->set_rules('password', 'Password', $base.'|max_length[10]');

        if (!$this->form_validation->run())
        {
           
                echo 'user now preparing to log in';
                $this->login();
             
        }

        $this->load->view('welcome_message');
    }
    public function login() {
        $log = $this->login_model->validate();
       echo $log;
            if($log === TRUE)
          {
                echo 'is logged in';
                //redirect();
               // $this->load->view('admin');
              // new  Admin ();
           }
          else
              {
              echo 'is Not logged in';
              } 
    }
  


}
