<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions extends CI_Controller{

    	public function __construct()
	{
            
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               
		$this->load->library('grocery_CRUD');
              $this->load->model('admin/login_model');
           $this->load->library('encrypt');
	}

 function decrypt_password_callback($post_array)
{
    $this->load->library('encrypt');
    $salt = $post_array['salt']; 
    echo '<pre>';
     print_r($post_array);
    
     //print_r($post_array);
     echo '</pre>';
     $post_array['passw'] = $this->encrypt->decode($post_array['passw'], $salt );
  echo '<pre>';
     print_r($post_array);
    
     //print_r($post_array);
     echo '</pre>';
      return $post_array;
}
 function encrypt_password_callback($post_array) {
    $this->load->library('encrypt');
     
 
            //Encrypt password only if is not empty. Else don't change the password to an empty field
        
        if (!empty($post_array['password'])) {
                $salt = Functions::_create_salt();
                $post_salt = array('salt' => $salt);
                $post_array['password'] = $this->encrypt->encode($post_array['password'], $salt);

                // echo 'pass='.$this->encrypt->decode($post_array['password'], $salt);
                $output = $post_array + $post_salt;
                /*  echo '<pre>';
                  print_r($output);
                  echo '</pre>'; */
                return $output;
            } else {
                unset($post_array['password']);
            }

            return $post_array;
       
        
   
 }
     public function _create_salt()
{
    $this->load->helper('string');
    return sha1(random_string('alnum', 32));
}
//Number of times to rehash

//put your code here
}
