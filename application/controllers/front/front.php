<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               $this->load->library('session');
	      $this->load->helper('form');
                   $this->load->model('admin/tenders_model');
             
          
	}
           public function _example_output($output = null)
	{
   
        }
	public function index()
	{
          $output= (object)array('output' => '' , 'js_files' => array() , 'css_files' => array());
            
           $this->load->view('frontend/template/header',$output);
	       $this->load->view('frontend/metro',$output);
           $this->load->view('frontend/template/footer',$output);
    
     }
     public function search()
             {
         redirect('front/results');
        /* $profile = $this->tenders_model->tenders();
         echo $profile;
         return $profile;*/
             }
     
     

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */