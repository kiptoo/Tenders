<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tenders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
                 $this->load->library('session');
		$this->load->library('grocery_CRUD');
              // $this->config() ;
          
	}
           public function _example_output($output = null)
	{
        if($this->session->userdata('logged_in'))
       {
          
            $this->load->view('admin/template/header',$output);
	       $this->load->view('admin/index',$output);
             $this->load->view('admin/template/footer',$output );
                  
	}
            else {
                  $this->load->view('login');
            }
	}
	public function index()
	{
            
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
		$crud->set_table('tenders');
          // $crud->set_relation_n_n('Files', 'tender_files', 'files','tender_id', 'file_id', 'file_url');
           $crud->set_relation('region','region','reg_name');
           $crud->set_relation('client','procurement','proc_name');
           $crud->set_relation('type','type','type_name');
             $crud->set_relation('creator','system_users','user_id');
           $crud->set_relation('category','category','cat_name');
         
    $crud->fields('tender_name','client','contract_no','descrption','site_insp','region','category','opening'
            ,'type','closing','file_url');     
       $crud->unset_fields('suspended','created','expired');
       //$crud->unset_columns('creator','suspended','created','expired','file_url');
           $crud->set_field_upload('file_url','assets/uploads/files');
        // $crud->callback_before_insert(array($this,'creator'));
	$output = $crud->render();
                        

			$this->_example_output($output);
           
        }
     
       public function types()
	{
	 // $this->config() ;	
           try{
               
			$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                       $crud->set_table('type');
                       
			$output = $crud->render();
                        

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
             public function categories()
	{
               //  $this->config() ;
                 try{
                
			$crud = new grocery_CRUD();
                 
		
			$crud->set_theme('datatables');
			$crud->set_table('category');
                      /*  $crud->where('enabled','1');
                  $crud->set_relation_n_n('Roles', 'user_role', 'role','user_id', 'role_id', 'name');
                      $crud->set_relation('user_id','user_meta','first_name');
                      $crud->set_relation('proc_entity','procurement','name');
                    $crud->columns('user_id','username','password','proc_entity','Roles','enabled');
                 
                     $crud->unset_columns('salt','lastlogin');
                      $crud->fields('user_id','username','password','proc_entity','Roles','enabled');
                      $crud->display_as('enabled','active');
                      $crud->required_fields('username','password');
                    $crud->change_field_type('password', 'password');
		  // $crud->callback_insert(array($this,'encrypt_password_callback'));
                   $crud->callback_delete(array($this,'delete_user'));*/
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
 
        public function creator($post_array)
           {
            file_put_contents('receive.txt', print_r($post_array, true));
            $id= $id=$this->session->userdata('logged_in')['data']->user_id;
         $post_array['creator'] =$id;
          $output = $post_array;
           file_put_contents('receivelog.txt', print_r($output, true));
           return $output;   
          }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */