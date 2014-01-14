<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
    }
    function add_user($user)
    {
        $this->db->insert('user', $user);
        return $this->db->insert_id();
    }
    function get_user($id)
    {
        
        $sql = "SELECT * FROM user WHERE U_id = $id";
        $result = $this->db->query($sql);
        return $result->row_array();
    
    }
    function user_exist($user_log)
    {
        $query = $this->db->get_where('user', $user_log);
        if($query->num_rows == 0)
            return 0;
        else
            return $query->row_array();
    }
    function update_user($user)
    {
        $this->db->where('U_id',$user['U_id']);
        $this->db->update('user', $user);
        
    }

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */

 ?>