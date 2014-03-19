<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               
		$this->load->library('grocery_CRUD');
                $this->config() ;
          
	}
           public function _example_output($output = null)
	{
   
          
            $this->load->view('admin/template/header',$output);
	       $this->load->view('admin/index',$output);
              $this->load->view('admin/template/footer',$output );
                  
	}
	public function index()
	{
           
                 	$crud = new grocery_CRUD();
		       $crud->set_theme('datatables');
                       $crud->set_table('region');
          
			$output = $crud->render();
                        

			$this->_example_output($output);      
                   
           
        }
 public function subscriber_management()
	{
     
             	$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                       $crud->set_table('region');
          
          
			$output = $crud->render();
                        

			$this->_example_output($output);
     
 }
      
        
          public function config()
       {
               $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10); 
        }
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */