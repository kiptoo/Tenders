<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Functions
 *
 * @author kip
 */
class Functions extends CI_Controller{
    
    public function _create_salt()
{
    $this->load->helper('string');
    return sha1(random_string('alnum', 32));
}
public function decrypt_password_callback($post_array)
{
    $salt = $post_array['salt']; 
    
     $post_array['password'] = $this->encrypt->decode($post_array['password'], $salt );

      return $post_array;
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
         return $output;
    }
    else
    {
        unset($post_array['password']);
    }
 
  return $post_array;
}
 
//put your code here
}
