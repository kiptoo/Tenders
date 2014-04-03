<?php


class profile_model extends CI_Model {
       public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
        public function load($id)
              {
         
             $this->db->//select('system_users.user_id,system_users. username')
                        where('system_users.user_id', $id)
                        ->from('system_users')
                       ->join('user_meta', 'user_meta.user_id =system_users.user_id');
                      //->join('tenders', 'tenders.creator = system_users.user_id','left');
      $qry= $this->db->get(); 
         $this->db->select('tenders.tender_id,tenders.tender_name,tenders.contract_no,tenders.descrption,tenders.opening,tenders.closing,'
                 . 'category.cat_name,region.reg_name,type.type_name,procurement.proc_name')
                   ->  where('system_users.user_id', $id)
                        ->from('system_users')
                      
                       ->join('tender_user', 'system_users.user_id =tender_user.user_id')
                       ->join('tenders','tenders.tender_id =tender_user.tender_id')
                      ->join('category', 'tenders.category =category.cat_id','left')
                     ->join('type', 'tenders.type=type.type_id','left')
                      ->join('region', 'tenders.region= region.reg_id','left')
                      ->join('procurement', 'tenders.client= procurement.id','left');
      $qry1= $this->db->get(); 
     //echo  $qry1->count_all_results();
          $result=(object)array(
				'user' => $qry->row_array(),
				'tenders' =>$qry1->result_array(),
				
		);
      return $result;
      
        }
         public function update_photo($path,$id)
                 {
      /*   $data = array(
               'file_url' => $path,
               
            );*/
echo $path.$id;
             $this->db->where('user_id', $id);
             $this->db->update('user_meta', "file_url = $path");
             
             
                 }
    //put your code here
}
