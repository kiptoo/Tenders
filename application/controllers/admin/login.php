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

        $this->form_validation->set_rules('username', 'username', $base.'max_length[10]')
                    ->set_rules('password', 'Password', $base.'max_length[10]');

        if ($this->form_validation->run())
        {
            //$log = $this->login_model->create();
            //echo $log;
               echo 'user now preparing to log in';
                $this->login();
             
        }

        
    }
    public function create() {
        $log = $this->login_model->create();
        if($log === TRUE)
          {
            $result=array();
            $errors=array();
            $data=(object)array(
				'data' => $result,
				'errors' => $errors,
				//'output'  => $output
		);
                //echo 'user created created';
                $this->load->view('login',$data);
                //redirect();
               // $this->load->view('admin');
              // new  Admin ();
           }
          else
              {
              $result=array();
            $errors=array();
                $data=(object)array(
				'data' => $result,
				'css_files' => $errors,
				//'output'	=> $output
		);
             $this->load->view('login',$data);
              }    
    }
    public function login() {
        $log = $this->login_model->validate();
       echo $log;
            if($log === TRUE)
          {
               // echo 'is logged in';
                  $data=array();
                $this->load->view('welcome_message');
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
