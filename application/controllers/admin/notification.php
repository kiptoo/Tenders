<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               $this->load->library('session');
		$this->load->library('grocery_CRUD');
                $this->load->model('admin/notification_model');
              // $this->config() ;
          
	}
               public function _example_output($output = null)
	{
   
                     if($this->session->userdata('logged_in'))
       {
          
            $this->load->view('admin/template/header',$output);
	       $this->load->view('admin/index',$output);
             $this->load->view('admin/template/footer',$output );
                  
	}
            else {
                  $this->load->view('login');
            }
                  
	}
        public function index()
	{
            $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

                $output1 = $this->inbox();
                
		$output2 = $this->outbox();

		

		$js_files = $output1->js_files ;
		$css_files = $output1->css_files;
		$output = "<h1>Inbox</h1>".$output1->output."<h1>Outbox</h1>".$output2->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
        }
           public function receive()
	{
       $this->notification_model->save_message();
          
        }
             public function inbox()
	{
               //  $this->config() ;
                 try{
                
			$crud = new grocery_CRUD();
                 
		
			$crud->set_theme('datatables');
			$crud->set_table('ozekimessagein');
          
			//$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/inbox")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
            public function outbox()
	{
               //  $this->config() ;
                 try{
                
			$crud = new grocery_CRUD();
                 
		
			$crud->set_theme('datatables');
			$crud->set_table('ozekimessageout');
         // $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/outbox")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
       
      public function config() {
               $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10); 
        }
}