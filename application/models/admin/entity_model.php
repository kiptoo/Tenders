<?php


class Entity_model extends CI_Model {
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
                        where('system_users.proc_entity', $id)
                        ->from('system_users')
                       ->join('user_meta', 'user_meta.user_id =system_users.user_id');
                      //->join('tenders', 'tenders.creator = system_users.user_id','left');
      $qry= $this->db->get(); 
       $this->db->select('procurement.*,entity_type.type,location.latitude,location.longitude,'
               . 'region.reg_name')
              -> where('procurement.id', $id)
                        ->from('procurement')
                     ->join('entity_type', 'procurement.type=entity_type.entity_id')
                     ->join('proc_location','proc_location.proc_id =procurement.id','left')
                      ->join('location', 'location.id =proc_location.loc_id','left')
                     ->join('region', 'location.Region =region.reg_id','left');
        $qry1= $this->db->get(); 
               $result=(object)array(
				'users' => $qry->result_array(),
				'Entity' =>$qry1->row_array(),
				
		);
      return $result;
              }
}
