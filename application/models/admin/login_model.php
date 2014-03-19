<?php
include(APPPATH.'models/admin/Functions.php');
//base_url().'application/models/admin/Functions.php';
class Login_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
        
     public function validate()
             {
             
         $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
              $post_array=array(
                  'username'       => $username,
                  'password'       =>$password,
              );
           return $this->log_in($post_array);
         }
         
      public function create()
              {
           $fname = $this->security->xss_clean($this->input->post('first_name'));
           $lname = $this->security->xss_clean($this->input->post('last_name'));
           $phone = $this->security->xss_clean($this->input->post('phone'));
            $id = $this->security->xss_clean($this->input->post('id'));
           $email = $this->security->xss_clean($this->input->post('email'));
          $username = $this->security->xss_clean($this->input->post('username'));
          $password = $this->security->xss_clean($this->input->post('password'));
          
              $post_array=array(
                  'first_name'       => $fname,
                  'last_name'       => $lname,
                  'phone'       => $phone,
                  'idno'       => $id,
                  'email'       => $email,
                  'username'       => $username,
                  'password'       =>$password,
              );
           $result=   Functions::encrypt_password_callback($post_array);
           return $this->create_user($result);
         }
    public function log_in($post_array)
    {
        $this->load->library('encrypt');
        $username=$post_array['username'];
        $password=$post_array['password'];
        
    $this->db->select('user_id, username,password,salt')
                        ->where('username', $username);
      $qry= $this->db->get('system_users'); 
       if ($qry->num_rows() !== 1)
    {
        return FALSE;
    }
    else{
      $salt=array('salt'=>$qry->row_array()['salt'],'passw'=>$qry->row_array()['password']);
      
      $post=$salt+$post_array;
   //  $pass=  Functions::decrypt_password_callback($post); 
    /* echo '<p>';
     print_r($post);
     print_r($post);
     echo '</p>';*/
    // No results, we're done.
     //$encoded_password = sha1($post['password']);
     //$decoded_password = $this->encrypt->decode($post['passw'], $post['salt']);
     $decoded_password = Functions::decrypt_password_callback($post); 
   
     //echo'decoded password'. $decoded_password;
   

    if ($decoded_password['passw']=== $post['password'])
    {
        $data = array(
            'user_id'       => $qry->row('user_id'),
            'username'      => $qry->row('username'),
            'email'         => $qry->row('email'),
           // 'salt'          => $qry->row('salt'),
        );

        $this->session->set_userdata($data);

        return TRUE;
    }

    return FALSE;
    }
}

   public function create_user($post_array) 
{
        $meta = array(
            'first_name'       => $post_array['first_name'],
              'last_name'       => $post_array['last_name'],
              'phone'       => $post_array['phone'],
              'idno'       =>$post_array['idno'],
              'email'       =>$post_array['email'],
            );
      
      $this->db->trans_start();
    $this->db->insert('user_meta',$meta); 
    $id=$this->db->insert_id();
      $account = array(
            'user_id'       => $id,
            'username'       => $post_array['username'],
            'password'       => $post_array['password'],
             'salt'       => $post_array['salt'],      
            );
      $this->db->insert('system_users',$account);  
    $this->db->trans_complete();
    return TRUE;
}



}