<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
                $this->load->library('upload');
                  $this->load->library('session');
	}

	function index()
	{
		$this->load->view('a', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = '../../assets/uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/profile', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('admin/profile', $data);
		}
	}
}
