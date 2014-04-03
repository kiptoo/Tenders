<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include(APPPATH.'controllers/admin//classes/rbac.php');
class Login  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
                $this->load->library('session');
		$this->load->library('grocery_CRUD');
              $this->load->model('admin/login_model');
               $this->load->model('admin/rbac_model');
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
              // echo 'user now preparing to log in';
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
        public function update_meta() {
         $log = $this->login_model->update_meta();
          if($log === TRUE)
          {
             echo'update succesfull' ;
          }
        else {
              echo 'update fail';
        }
        }
         public function update_login() {
         $log = $this->login_model->update_login();
          if($log === TRUE)
          {
             echo'update succesfull' ;
          }
        else {
              echo 'update fail';
        }
        }
    public function login() {
        $log = $this->login_model->validate();
    //   echo $log;
            if($log === TRUE)
          {
               // echo 'is logged in';
                  $data=array();
               // $this->load->view('admin/admin');
           /*     echo '<pre>';
           Rbac::getRole_privileges();
           echo '</pre>'; 
              echo '<pre>';
           print_r($this->session->userdata('logged_in'));
           echo '</pre>'; 
             echo '</pre>'; 
              echo '<pre>';
           print_r($this->session->userdata('privileges'));
           echo '</pre>'; */
               redirect('admin/admin');
               // $this->load->view('admin');
              // new  Admin ();
           }
          else
             {
               //$data=array();
             $this->load->view('login');
              } 
    }
  function logout()
{
    $this->session->sess_destroy();
    redirect('login');
}


}
