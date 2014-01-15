<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pro extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('school_model');
        $this->load->model('user_model');
        $this->load->model('project_model');
        $this->load->model('exp_model');
        $this->load->model('skill_model');
        $this->load->helper('array');
        
    }
    
    public function action_add($user_id)
    {
        $data['user_id'] = $user_id;
        $this->load->view('pro/new',$data);
    }
    public function action_make($user_id)
    {
        $pro_data = array(
            'P_Name' => $this->input->post('P_Name'),
            'Content' => $this->input->post('Content'),
            'Start_Time' => $this->input->post('Start_Time'),
            'Due_Time' => $this->input->post('Due_Time'),
         );
        $p_id = $this->project_model->add_pro($pro_data);
        $u_p = array('u_id'=>$user_id,'p_id'=>$p_id);
        $this->project_model->add_user_pro($u_p);
        redirect('/user/'.$user_id);

    }
    public function action_select($user_id)
    {
        $data['user_id'] = $user_id;
        $data['all_pro'] = $this->project_model->get_project_all();
        //print_r($data['all_pro']);
        $data['user_pro'] = $this->project_model->get_user_pro($user_id);
        //echo '<br>';
        //print_r($data['user_pro']);
        for ($i=0; $i < sizeof($data['user_pro']); $i++)
        { 
            $data['pid_exist'][$i] = $data['user_pro'][$i]['p_id'];
        }
        $this->load->view('pro/select',$data);
    }
    public function action_update($user_id)
    {   
        //$i = 0;
        $data['u_id'] = $user_id;
        $data['up_update'] = $this->input->post('pro_check');
        print_r($data['up_update']);
        $this->project_model->update_user_pro($data);
        redirect('/user/'.$user_id);
        
    }


}

/* End of file project.php */
/* Location: ./application/controllers/project.php */ 

?>