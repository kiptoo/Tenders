<?php

class Admin_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
     public function create_user($postArray){
             $id=$postArray['user_id'];
            $priority=$postArray['is_ajax'];
             $username=$postArray['username'];
              $pass=$postArray['password'];
               $entity=$postArray['proc_entity'];
                $enabled=$postArray['enabled'];
                   $salt=$postArray['salt'];
        
           $roles_batch=array(
               'user_id'=>'',
               'role_id'=>'',
               'active'=>''
           );
 
         $Role=$postArray['Roles'];
       

     
         $this->db->trans_start();
        
          $this->db->set('user_id', $id); 
           $this->db->set('enabled',  $enabled); 
             $this->db->set('username', $username); 
               $this->db->set('password',  $pass); 
                 $this->db->set('salt',  $salt); 
                   $this->db->set('proc_entity',  $entity); 
                       $this->db->set('priority',  $priority); 
         $this->db->insert('system_users'); 
                      foreach ($Role as $value)
     {
                 $roles_batch['user_id']= $id;
          $roles_batch['role_id']= $value;
           $roles_batch['active']=$enabled;
     
         $this->db->insert('user_role',$roles_batch); 

     }
         
         $this->db->trans_complete();
         // $this-> db->
   $new_array = array();

foreach($kip as $value) { $new_array[] = $value; }
       return array_values($kip);  
     }
        
}      
        