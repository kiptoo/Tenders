<?php

class User_model extends CI_Model {
    
      public function __construct()
	{
            parent::__construct();
		$this->load->database();
	}
  public function get_users()
{
	//$this->db->select('title');
		$query = $this->db->get('user_meta');
                
		return $query->result_array();	
}

  public function post_user()
  {
      $this->load->helper('array');
      $Array=  array();
	$response= file_get_contents("php://input");
        $data = json_decode($response, true);

 foreach($data as $x=>$x_value)
  {
  
  foreach($x_value as $y=>$y_value)
  {
      //echo "Key=" . $y . ", Value=" . $y_value;
     // $Array = array_push_assoc($Array, $y,$y_value );
      $Array[$y] = $y_value;
     // echo "<br>";
  }
 // echo "<br>";
  }
   

if(!is_null($Array)){
	$this->db->set($Array);
       return $this->db->insert('user_meta');    
}

  }

         
        
}