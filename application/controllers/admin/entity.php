<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entity extends CI_Controller {
  //  public $output;
	public function __construct()
	{
		parent::__construct();
    
		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               $this->load->library('session');
		$this->load->library('grocery_CRUD');
                $this->load->helper(array('form', 'url'));
                $this->load->library('upload');
                $this->load->model('admin/entity_model');
            
             // $output =(object)array('data' => '' , 'errors' => array()); 
              //  $this->config() ;
            
	}
        
        public function _example_output($output = null)
	{
                                if($this->session->userdata('logged_in'))
       {
    
             echo'<pre>';
              print_r($output->data);
              echo'</pre>';
          
        $this->load->view('admin/template/header1');
         $this->load->view('admin/entity_profile',$output);  
         $this->load->view('admin/template/footer1');
       }
       else {
                  $this->load->view('login');
            }
	}
       public function index()
	{ 
 
             $data=  $this->profile(); 
           $error=array();
           $upload_data=array();
            
        $this->_example_output((object)array(
				'data' =>  $data,
				'error' => $error,
                                'upload_data'=>  $upload_data
                ));
        } 
      public function profile() {
            $profile = $this->entity_model->load(1);
          /*  echo'<pre>';
            print_r($profile);
            echo'</pre>';*/
            return $profile;
            
        }
      public function do_upload()
	{
         
        
	}
    
}