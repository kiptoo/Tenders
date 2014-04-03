<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Rbac_model extends CI_Model {
     protected $result=array();
       public function __construct(){
	
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
               
               $this->result=array();
	}
        public function get_priv($id){
                  $res=array();
             $this->db->select('privilege.name')
                        ->where('role_privilege.role_id', $id)
                        ->from('role_privilege')
                       ->join('privilege', 'privilege.priv_id =role_privilege.priv_id');
                     
         $query= $this->db->get(); 
     
         $user = (object)$query->result_array();
       
        foreach ($user as $row)
        {
            array_push($res,$row['name']);
          // print_r();

        }
        $this->result['privileges']= (object)$res;
      
         return   $this->result;
            
        }
        public function hasPerm($permission) {
        return isset($this->result[$permission]);
    }
     public function get_role()
         {
         $id =$this->session->userdata('logged_in')['data']->user_id;
             $this->db->select('role_id')
                        ->where('user_id', $id) ;          
         $qry= $this->db->get('user_role'); 
      
         return $qry->row_array();
         }
}

