<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('form');
    	$this->load->model('school_model');
    	$this->load->model('user_model');
    }
    public function index()
    {
    	
    }
    
    public function action_new()
    {
        $data['school'] = $this->school_model->get_school_all();
        print_r($data['school']);
        $this->load->view('user/new', $data);
    }
    public function action_create()
    {
    	
    }

}
?>