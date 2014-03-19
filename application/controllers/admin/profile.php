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
           
            $this->load->view('admin/template/header1');
         $this->load->view('admin/profile');  
         $this->load->view('admin/template/footer');
       
        }    
}