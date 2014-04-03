<?php

class Notification_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('encrypt');
	}
     public function save_message(){
    /*$sender="+3434556";
  $message="# evans kiptoo 23254346";*/
  $sender =  $this->input->post('sender');
          //$_GET['sender'];
  $message = $this->input->post('msg');
        //  $_GET['msgdata'];

  if ($sender!='') {
      $keywords=array();
     #
     # Save incoming messages
     #
  /*   $fp = fopen("receivelog.txt","a");
     echo 'true';
     fputs($fp,"$sender $message\n");
     fclose($fp);*/
   if(strpos($message,'#') !== false){
          $keywords = preg_split("/[\s,]+/",$message);
         // print_r($keywords);
          
            $msg = array(
            'sender'       =>$sender,
            'msg'       =>  $message,
                
            );
           $this->db->insert('ozekimessageout',$msg);
           $categories=$this->categories();
           echo '<pre>';
           print_r($categories);
           echo '</pre>';
           $msg="";
           
           // \0x0A
        echo "{SMS:TEXT}{}{}{".$sender."}{choose category"."</br";    
      foreach ($categories as $key => $value) {
          $msg=$key.".".$value['cat_name'].'</br>';
          echo $msg;
          
      } 
      echo "}";
         // str_split(string,length)
         
      //list($part1, $part2) = explode('.', $string);
            
      }
   

     #
     # Return a response SMS message
     #
    // $responsetext = "Welcome to the service!";
   /*$responsetext = "choose category"."</br>".$msg;
     echo "{SMS:TEXT}{}{}{".$sender."}{".$responsetext."}";*/
  } else {
     echo "The PHP script is ready for accepting messages";
  }
         
     }
     public function categories() {
        
        $this-> db->select('cat_id,cat_name');
          $qry= $this->db->get('category');
      
      return $qry->result_array();
         
     }  
        
}      
        