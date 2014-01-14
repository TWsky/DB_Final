<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    function get_school_all()
    {
        $sql = "SELECT * FROM school";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function user_school_add($user_school)
    {
        $this->db->insert('school_user',$user_school);

    }
    function user_school_get($user_id)
    {
        $sql = "SELECT * FROM school_user WHERE u_id = $user_id";
        $query = $this->db->query($sql);
        return $query->row_array();
        
    }
    function user_school_update($user_school)
    {
        $this->db->where('u_id',$school_user['u_id']);
        $this->db->update('school_user', $user_school);
    }
    function school_name_get($s_id)
    {
        $sql = "SELECT * FROM school WHERE school_id = $s_id";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

}

/* End of file school_model.php */
/* Location: ./application/models/school_model.php */


?>

