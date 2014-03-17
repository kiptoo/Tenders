<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Procurement extends CI_Controller {

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
            
              try{
               
			$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                        $crud->set_table('procurement');
          $crud->set_relation('type','entity_type','name');  
          $crud->set_relation('location','location','name'); 
          $crud->set_field_upload('file_url','assets/uploads/files');
          
			//$crud->set_subject('Office');
			//$crud->required_fields('city');
			//$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();
                        

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
           
        }
        public function Entity_type()
	{
            
              try{
               
			$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                        $crud->set_table('entity_type');
			//$crud->set_subject('Office');
			//$crud->required_fields('city');
			//$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();
                        

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
           
        }
           public function locations()
	{
            
              try{
               
			$crud = new grocery_CRUD();
                 
		       $crud->set_theme('datatables');
                        $crud->set_table('location');
                     $crud->set_relation('Region','region','name');  
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