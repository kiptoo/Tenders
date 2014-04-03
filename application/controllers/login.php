<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               $this->load->library('session');
		$this->load->library('grocery_CRUD');
              //  $this->config() ;
          
	}
       public function index()
	{ 
         
          
        $this->load->view('login');  
       /* if($this->session->userdata('logged_in'))
            {
              $session_data = $this->session->userdata('logged_in');
              $data['username'] = $session_data['username'];
              //$this->load->view('admin/admin', $data);
            }
            else
            {
              //If no session, redirect to login page
              redirect('login', 'refresh');
            }*/
        }    
}