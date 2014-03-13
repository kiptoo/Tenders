<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               
		$this->load->library('grocery_CRUD');
               /* $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);*/
	}
           public function _example_output($output = null)
	{
   
             /* $this->grocery_crud->set_table('user_meta');
        $output = $this->grocery_crud->render();
       */
            $this->load->view('admin/template/header', $output);
	       $this->load->view('admin/index', $output);
                $this->load->view('admin/template/footer',  $output );
                
	}
	public function index()
	{
            
            $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
     
       public function user_management()
	{
	  $this->config() ;	
           try{
               
			$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
			$crud->set_table('user_meta');
			//$crud->set_subject('Office');
			//$crud->required_fields('city');
			//$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();
                        

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
             public function admin_management()
	{
                 $this->config() ;
                 try{
                
			$crud = new grocery_CRUD();
                 
		
			$crud->set_theme('datatables');
			$crud->set_table('system_users');
                      $crud->columns('user_id','username','password','proc_entity','active');
                      $crud->unset_columns('salt','lastlogin');
                    $crud->set_relation('user_id','user_meta','First_name');
                    $crud->set_relation('proc_entity','procurement','name');
			//$crud->set_subject('Office');
			//$crud->required_fields('city');
			//$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();
                        

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
          public function role_management()
	{
		$this->config() ; 
              try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('role');
                        $crud->set_relation('salesRepEmployeeNumber','employees','lastName');
			//$crud->set_subject('Office');
			//$crud->required_fields('city');
			//$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
         public function privelege_management()
	{
             $this->config() ;
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('privileges');
			//$crud->set_subject('Office');
			//$crud->required_fields('city');
			//$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
          public function config() {
               $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10); 
        }
     

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */