<?php
class projects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('projects_model');
	}

	function index()
	{
		$this->load->view('options_view');
	}


	
}