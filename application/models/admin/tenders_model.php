<?php
include(APPPATH.'models/admin/Functions.php');
//base_url().'application/models/admin/Functions.php';
class Tenders_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
        
     public function tenders()
             {
          $type = $this->security->xss_clean($this->input->post('type'));
           $cat = $this->security->xss_clean($this->input->post('category'));
           $reg = $this->security->xss_clean($this->input->post('region'));
            $to = $this->security->xss_clean($this->input->post('to'));
           $from = $this->security->xss_clean($this->input->post('from'));
          $proc = $this->security->xss_clean($this->input->post('procurement'));
          $custom = $this->security->xss_clean($this->input->post('custom'));
        
          echo $to;
         }
         
     

}