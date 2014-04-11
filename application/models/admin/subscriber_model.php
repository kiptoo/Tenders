<?php

class Subscriber_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
     public function subscribe($postArray){
             $id=$postArray['user_id'];
              $priority=$postArray['is_ajax'];
         $regions_batch=array();
           $Category_batch=array(
               'user_id'=>'',
               'cat_id'=>'',
               'priority'=>''
           );
           $Type_batch=array(
               'user_id'=>'',
               'type_id'=>'',
               'priority'=>''
           );
     
         $regions=$postArray['Region'];
         $Category=$postArray['Category'];
         $Type=$postArray['Type'];

     
         $this->db->trans_start();
        
          $this->db->set('user_id', $id); 
           $this->db->set('active', $postArray['active']); 
         $this->db->insert('subscriber'); 
                      foreach ($Category as $value)
     {
                 $Category_batch['user_id']= $id;
          $Category_batch['cat_id']= $value;
           $Category_batch['priority']=$priority;
     
         $this->db->insert('subscriber_cat',$Category_batch); 

     }
                 foreach ($regions as $value)
     {
         $regions_batch['user_id']= $id;
           $regions_batch['reg_id']= $value;
             $regions_batch['priority']=$priority;
        $this->db->insert('subscriber_region',$regions_batch); 
           
         
     }
        
         
                       foreach ($Type as $value)
     {
   
                $Type_batch['user_id']= $id;
          $Type_batch['type_id']= $value;
           $Type_batch['priority']=$priority;
           $this->db->insert('subscriber_type',$Type_batch); 
         
     }
         
         $this->db->trans_complete();
         // $this-> db->
   $new_array = array();

foreach($kip as $value) { $new_array[] = $value; }
       return array_values($kip);  
     }
     public function categories() {
        
        $this-> db->select('cat_id,cat_name');
          $qry= $this->db->get('category');
      
      return $qry->result_array();
         
     }  
        
}      
        