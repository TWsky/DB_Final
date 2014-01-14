<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('form');
    	$this->load->model('school_model');
    	$this->load->model('user_model');
    	$this->load->model('project_model');
    	$this->load->model('exp_model');
    	$this->load->model('skill_model');
    }
    public function action_login()
    {
    	$this->load->view('user/login');
    }
    public function action_logged()
    {
    	$data_log = array(
    		'Name' => $this->input->post('login_name'),
    		'Phone_number' => $this->input->post('login_ph')
    	);
    	$Exist = $this->user_model->user_exist($data_log);
    	$data["exist"] = 1;
    	if($Exist == 0)
    	{
    		$data["exist"] = 0;
    		$this->load->view('/user/login',$data);
    	}
    	else
    	{
    		 print_r($Exist['U_id']);
    		 redirect('/user/'.$Exist['U_id']);
    	}

    }
    
    public function action_new()
    {
        $data['school'] = $this->school_model->get_school_all();
        $this->load->view('user/new', $data);
    }
    public function action_create()
    {
    	$user_exist = array(
    		'Name' => $this->input->post('user_name'),
            'Phone_number' => $this->input->post('user_PHnum')
        );
        $Exist = $this->user_model->user_exist($user_exist);
        if($Exist != 0)
        {
        	$data["exist"] = 1;
        	$data['school'] = $this->school_model->get_school_all();
        	$this->load->view('user/new',$data);
        }
        else
        {
    	$data_user = array(
            'Name' => $this->input->post('user_name'),
            'Phone_number' => $this->input->post('user_PHnum'),
            'Background' => $this->input->post('user_background'),
        );
        $user_id = $this->user_model->add_user($data_user);
        $user_school = array(
        	'u_id' => $user_id,
        	'school_id' => $this->input->post('user_school'),
        	's_time' => $this->input->post('sch_Stime'),
        	'd_time' => $this->input->post('sch_Dtime') );
        $this->school_model->user_school_add($user_school);
        redirect('/user/'.$user_id);
    	}
    }
    public function action_show($id)
    {
    	$data['user'] = $this->user_model->get_user($id);
    	$data['user_school'] = $this->school_model->user_school_get($id);
    	$data['school'] = $this->school_model->school_name_get($data['user_school']['school_id']);
    	//print_r($data['user']);
    	$data['project'] = $this->project_model->get_project($id);
    	//print_r($data['project']);
    	//$data['exp'] = $this->exp_model->get_exp($id);
    	//$data['skill'] = $this->skill_model->get_skill($id);

    	$this->load->view('user/show', $data);
    	$this->load->view('button/edit_btn', $data);
    	//$this->load->view('button/exp_btn');
    	$this->load->view('button/pro_btn',$data);
    	//$this->load->view('button/skill_btn');
    }
    public function action_edit($id)
    {
    	$data['user'] = $this->user_model->get_user($id);
    	$data['school'] = $this->school_model->get_school_all();
    	$data['user_school'] = $this->school_model->user_school_get($id);
    	//print_r($data['user']);
    	//$data['project'] = $this->project_model->get_project($id);
    	//$data['exp'] = $this->exp_model->get_exp($id);
    	//$data['skill'] = $this->skill_model->get_skill($id);

    	$this->load->view('user/edit', $data);
    	
    	//$this->load->view('button/exp_btn', $data);
    	//$this->load->view('button/pro_btn', $data);
    	//$this->load->view('button/skill_btn', $data);
    }
    public function action_update($user_id)
    {
    	$data_user = array(
    		'U_id' =>  $user_id,
            'Phone_number' => $this->input->post('user_PHnum'),
            'Background' => $this->input->post('user_background'),
        );
        $this->user_model->update_user($data_user);
        $user_school = array(
        	'u_id' => $user_id,
        	'school_id' => $this->input->post('user_school'),
        	's_time' => $this->input->post('sch_Stime'),
        	'd_time' => $this->input->post('sch_Dtime') );
        $this->school_model->user_school_update($user_school);
        redirect('/user/'.$user_id);

    }
    public function p($id)
    {
    	$data['user'] = $this->user_model->get_user($id);
    	$data['user_school'] = $this->school_model->user_school_get($id);
    	$data['school'] = $this->school_model->school_name_get($data['user_school']['school_id']);
    	//print_r($data['user']);
    	$data['project'] = $this->project_model->get_project($id);
    	//print_r($data['project']);
    	//$data['exp'] = $this->exp_model->get_exp($id);
    	//$data['skill'] = $this->skill_model->get_skill($id);

    	$this->load->view('user/show', $data);
    	$this->load->view('button/new_pro', $data);
    	$this->load->view('button/sel_pro', $data);
    	
    }
    public function exp()
    {
    	# code...
    }
    public function skill($value='')
    {
    	# code...
    }

}
?>