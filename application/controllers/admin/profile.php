<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
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
                $this->load->model('admin/profile_model');
            
             // $output =(object)array('data' => '' , 'errors' => array()); 
              //  $this->config() ;
            
	}
        
        public function _example_output($output = null)
	{
                                if($this->session->userdata('logged_in'))
       {
    
             /*echo'<pre>';
              print_r($output);
              echo'</pre>';
             echo $output->data['username'];*/
        $this->load->view('admin/template/header1');
         $this->load->view('admin/profile',$output);  
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
      public function do_upload()
	{
         
          $image_path = realpath(APPPATH . '../assets/uploads/photos');
          //echo $image_path;
		$config['upload_path'] =  $image_path;
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '100';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);
                $this->upload->initialize($config);
               // $field_name = $this->input->post('photo');
               //  $this->upload->do_upload($field_name);
		if ( ! $this->upload->do_upload())
		{
                    $error = array($this->upload->display_errors());
                    
                foreach($error as $file): 

                    echo $file;
              endforeach;                    
			/*$error = array($this->upload->display_errors());
                        $this->_example_output((object)array(
				'data' =>  '',
				'error' => $error,
                                'upload_data'=> ''
                ));*/
		}
		else
		{
                     $id=$this->session->userdata('logged_in')['data']->user_id;
                   
			$data = array('upload_data' => $this->upload->data());
                      
                       $path =$data['upload_data']['file_name'];
                 
                       $profile = $this->profile_model->update_photo($id,$path);
                         echo "uploaded successfully";
                       /* $this->_example_output((object)array(
				'data' =>'',
				'error' => '',
                                'upload_data'=>$data
                ));*/
		}
	}
        public function profile() {
           $id= $this->session->userdata('logged_in')['data']->user_id;
        //   echo $id;
            $profile = $this->profile_model->load($id);
          /*  echo'<pre>';
            print_r($profile);
            echo'</pre>';*/
            return $profile;
            
        }    
}