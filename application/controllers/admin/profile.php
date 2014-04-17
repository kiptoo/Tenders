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
                $this->config() ;
            
	}
        
        public function _example_output($output = null)
	{
                                if($this->session->userdata('logged_in'))
       {
    
             echo'<pre>';
              print_r($output);
              echo'</pre>';
            // echo $output->data['username'];
        $this->load->view('admin/template/header1',$output);
         $this->load->view('admin/profile',$output);  
         $this->load->view('admin/template/footer1');
       }
       else {
                  $this->load->view('login');
            }
	}
       public function index()
	{ 
            $id= $this->session->userdata('logged_in')['data']->user_id;
               $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
		$crud->set_table('tenders');
             
          // $crud->set_relation_n_n('Files', 'tender_files', 'files','tender_id', 'file_id', 'file_url');
           $crud->set_relation('region','region','reg_name');
           $crud->set_relation('client','procurement','proc_name');
           $crud->set_relation('type','type','type_name');
           $crud->set_relation('category','category','cat_name');
        
          // $crud->set_relation_n_n('Roles', 'user_role', 'role','user_id', 'role_id', 'name');
          // $crud->set_relation_n_n('Creator', 'tender_user', 'system_users','tender_id', 'user_id', 'user_id');
           // $crud->set_relation('file_url','files','file_url');
       $crud->unset_fields('suspended','created','expired');
          // $crud->unset_columns('creator','suspended','created','expired','file_url');
           $crud->set_field_upload('file_url','assets/uploads/files');
          // $crud->callback_before_insert(array($this,'creator'));
	$output = $crud->render();
        
           $data=  $this->profile($id); 
           $error=array();
           $upload_data=array();
            
        $this->_example_output((object)array(
				'data' =>  $data,
				'error' => $error,
                                'upload_data'=>  $upload_data,
                                'crud' =>$output
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
        public function profile($id) {
          
        //   echo $id;
            $profile = $this->profile_model->load($id);
          /*  echo'<pre>';
            print_r($profile);
            echo'</pre>';*/
            return $profile;
            
        } 
          public function config() {
               $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10); 
        }
    
}