<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	       $this->load->view('admin/admin',$output);
             $this->load->view('admin/template/footer',$output );
                  
	}
	public function index()
	{
            
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
		$crud->set_table('user_meta');
         
			$output = $crud->render();
                         
         

			$this->_example_output($output);
           
        }
     
       public function user_management()
	{
	 // $this->config() ;	
           try{
               
			$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                       $crud->set_table('user_meta');
                       $crud->columns('user_id','first_name','last_name','phone','idno','email','active');
                       $crud->unset_columns('active','createdate');
			$crud->required_fields('user_id','first_name','last_name','phone','idno','email','active');
                        $crud->fields('first_name','last_name','phone','idno','email','active');
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
               //  $this->config() ;
                 try{
                
			$crud = new grocery_CRUD();
                 
		
			$crud->set_theme('datatables');
			$crud->set_table('system_users');
                       // $crud->where('enabled','1');
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
                   $crud->callback_delete(array($this,'delete_user'));
			$output = $crud->render();
                        

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
          public function role_management()
	{
		//$this->config() ; 
              try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('role');
                       $crud->set_relation_n_n('privileges', 'role_privilege', 'privilege','role_id', 'priv_id', 'name','priority');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
         public function privelege_management()
	{
           //  $this->config() ;
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('privilege');
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
        function encrypt_password_callback($post_array) {
    $this->load->library('encrypt');
 
    //Encrypt password only if is not empty. Else don't change the password to an empty field
    if(!empty($post_array['password']))
    {
        $salt = $this->_create_salt(); 
         $post_salt =array('salt'=>$salt); 
        $post_array['password'] = $this->encrypt->encode($post_array['password'], $salt );
       $output = $post_array+$post_salt;
      /*  echo '<pre>';
        print_r($output);
        echo '</pre>';*/
         return $this->db->insert('system_users',$output);
    }
    else
    {
        unset($post_array['password']);
    }
 
  return $post_array;
}
public function decrypt_password_callback($post_array)
{
    $salt = $post_array['salt']; 
    
     $post_array['password'] = $this->encrypt->decode($post_array['password'], $salt );

      return $post_array;
}
    
  public function delete_user($primary_key)
{
    return $this->db->update('system_users',array('enabled' => '0'),array('user_id' => $primary_key));
}
 public function _create_salt()
{
    $this->load->helper('string');
    return sha1(random_string('alnum', 32));
}  

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */