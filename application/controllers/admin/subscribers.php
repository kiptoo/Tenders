<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribers extends CI_Controller {

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
           
                        
                   
           
        }
 public function subscriber_management()
	{
     
             	$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                       $crud->set_table('subscriber');
          $crud->set_relation('user_id','user_meta','first_name');            
          $crud->set_relation_n_n('Category', 'subscriber_cat', 'category', 'user_id', 'cat_id', 'name','priority');
          $crud->set_relation_n_n('Region', 'subscriber_region', 'region', 'user_id', 'reg_id', 'name','priority');       
           $crud->set_relation_n_n('Type', 'subscriber_type', 'type', 'user_id', 'type_id', 'name','priority');       
          
            $crud->columns('user_id','Region','Category','Type','active','created');
          $crud->fields('user_id','Region','Category','Type','active');
          
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