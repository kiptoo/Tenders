<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Results extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->model('admin/tenders_model');
             
          
	}
           public function _example_output($output = null)
	{
         $this->load->view('frontend/template/header');
	       $this->load->view('frontend/index',$output);
           $this->load->view('frontend/template/footer');
    
        }
	public function index()
	{
          $output= (object)array('output' => '' , 'js_files' => array() , 'css_files' => array());
          $this->_example_output($output); 
     
     }
     
     

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */