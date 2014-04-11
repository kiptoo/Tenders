<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               $this->load->library('session');
		$this->load->library('grocery_CRUD');
                $this->load->library('javascript');
                $this->load->library('javascript/jquery');
                   $this->load->model('admin/rbac_model');
             
          
	}
           public function _example_output($output = null)
	{
   
        }
	public function index()
	{
          $output= (object)array('output' => '' , 'js_files' => array() , 'css_files' => array());
            
            $this->load->view('frontend/template/header',$output);
	       $this->load->view('frontend/index',$output);
             $this->load->view('frontend/template/footer',$output);
    
     }
     
     

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */