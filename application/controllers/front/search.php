<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
              $this->load->helper('directory');
               $this->load->library('session');
		$this->load->library('grocery_CRUD');
                $this->load->library('javascript');
                $this->load->library('javascript/jquery');
                   $this->load->model('admin/search_model');
             
          
	}
           public function category()
	{
         $profile = $this->search_model->category();
         echo $profile;
         return $profile;
        }
           public function type()
	{
           $profile = $this->search_model->type();
            echo $profile;
         return $profile;
        }
           public function entity()
	{
           $profile = $this->search_model->entity();
            echo $profile;
         return $profile;
        }
           public function region()
	{
           $profile = $this->search_model->region();
            echo $profile;
         return $profile;
        }
}    