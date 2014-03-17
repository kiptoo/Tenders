<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config extends CI_Controller {
public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               
		$this->load->library('grocery_CRUD');
          //      $this->config() ;
          
	}
	public function index()
	{
            		
            
	      $this->load->view('admin/template/header1');
		$this->load->view('admin/config');
               $this->load->view('admin/template/footer1');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */