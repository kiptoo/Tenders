<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config extends CI_Controller {
public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
                $this->load->library('session');
		$this->load->library('grocery_CRUD');
          //      $this->config() ;
          
	}
	public function index()
	{
            	        if($this->session->userdata('logged_in'))
       {	
            
	      $this->load->view('admin/template/header1');
		$this->load->view('admin/config');
               $this->load->view('admin/template/footer1');
	}
 
        
        else {
            	$this->load->view('login');
        }
        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */