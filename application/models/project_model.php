<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
    }
    function get_project($id)
    {
        
        $sql = "SELECT p_id FROM user_project WHERE u_id = $id";
        $p_id = $this->db->query($sql);
        $sum_result = array();
        //echo $p_id->num_rows();
        $i = 0;
        foreach ($p_id->result_array() as $row)
        {
            $sql2 = "SELECT * FROM project WHERE P_id = ".$row['p_id'];
            $result = $this->db->query($sql2);
            $sum_result[$i] = $result->row_array();
            $i++;      
        }

        return $sum_result;
    
    }
    function get_project_all()
    {
        $sql = "SELECT * FROM project";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    function add_pro($pro)
    {
        $this->db->insert('project',$pro);
        return $this->db->insert_id();;
    }
    function add_user_pro($u_p)
    {
        $this->db->insert('user_project',$u_p);
    }
    function get_user_pro($user_id)
    {
        $sql = "SELECT p_id FROM user_project WHERE u_id =".$user_id;
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    function update_user_pro($data)
    {   
        print_r($data);
        $this->db->where('u_id',$data['u_id']);
        $this->db->delete('user_project');
        for ($i=0; $i < sizeof($data['up_update']); $i++) { 
            $this->db->insert('user_project',array('u_id'=>$data['u_id'],'p_id'=>$data['up_update'][$i]));
        }
    }
    

}

/* End of file project_model.php */
/* Location: ./application/models/project_model.php */ ?>