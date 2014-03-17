<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               
		$this->load->library('grocery_CRUD');
              //  $this->config() ;
          
	}
       public function index()
	{ 
            //  $this->load->view('admin/template/header1');
        $this->load->view('admin/log');  
         //  $this->load->view('admin/template/header1');
        /*$this->load->library('form_validation');
        $this->load->library('simple_auth');
        $this->load->helper(array('form', 'url'));

        $base = 'required|trim|xss_clean';

        $this->form_validation->set_rules('username', 'Username', $base.'|max_length[40]')
                    ->set_rules('email', 'Email', $base.'|valid_email|max_length[50]')
                    ->set_rules('password', 'Password', $base.'|matches[password_conf]')
                    ->set_rules('password_conf', 'Password Confirmation', $base.'|min_length[5]');

        if ($this->form_validation->run())
        {
            $this->simple_auth->create_user(
                                    $this->input->post('username'),
                                    $this->input->post('password'),
                                    $this->input->post('email')
                                );

            $this->session->set_flashdata('registration_message', 'Thanks for registering.  Log in now!');
            redirect();
        }

        $this->load->view('register');*/
        }    
}