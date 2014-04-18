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
               public function tenders()
       {
         
     $json=array();
         $this->db->select('tenders.*,'
                 . 'category.cat_name,region.reg_name,type.type_name,procurement.proc_name')
                  
                        ->from('tenders')
                      
                      ->join('category', 'tenders.category =category.cat_id','left')
                     ->join('type', 'tenders.type=type.type_id','left')
                      ->join('region', 'tenders.region= region.reg_id','left')
                      ->join('procurement', 'tenders.client= procurement.id','left');
     $result= $this->db->get();  
   
   /* foreach($result->result_array() as $key=> $value){
        foreach($value as $keys => $val){
            
      $arr[$keys] = htmlentities(stripslashes(utf8_encode($val)), ENT_QUOTES);
    
        }
$json[] = $arr;
}*/
          return json_encode( $result->result_array() );
          
         }     
             public function tender($id)
       {
                      $json=array();
         $this->db->select('tenders.*,' 
                 . 'category.cat_name,region.reg_name,type.type_name,procurement.proc_name')
                  ->where('tenders.tender_id',$id)
                        ->from('tenders')
                      
                      ->join('category', 'tenders.category =category.cat_id','left')
                     ->join('type', 'tenders.type=type.type_id','left')
                      ->join('region', 'tenders.region= region.reg_id','left')
                      ->join('procurement', 'tenders.client= procurement.id','left');
     $result= $this->db->get();  
   
    foreach($result->result_array() as $key=> $value){
        foreach($value as $keys => $val){
            
      $arr[$keys] = htmlentities(stripslashes(utf8_encode($val)), ENT_QUOTES);
    
        }
$json[] = $arr;
}
          
                
          return json_encode($json);
         } 
               public function add_box($selection)
       {
             $data = array(
   'tender_id' => $selection['tender_id'] ,
   'user_id' => $selection['user_id'] ,
);

$this->db->insert('tender_box',$data);     
         }

}