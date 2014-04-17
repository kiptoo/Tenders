<?php
include(APPPATH.'models/admin/Functions.php');
//base_url().'application/models/admin/Functions.php';
class Search_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
        
     public function category()
             {
             $query = $this->db->get('category');
            $result= $query->result_array();       
          return json_encode($result);
         }
         
      public function type()
              {
           $query = $this->db->get('type');
              $result= $query->result_array();       
          return json_encode($result);
         }
              public function region()
           {
            $query = $this->db->get('region');
               $result= $query->result_array();       
          return json_encode($result);
         }
               public function entity()
              {
         
          $query = $this->db->get('entity_type');
             $result= $query->result_array();       
          return json_encode($result);
         }
    

}