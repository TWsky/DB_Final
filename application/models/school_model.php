<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function get_school_all()
    {
        $sql = "SELECT * FROM school";
        $query = $this->db->query($sql);
        return $query->result_array();
    }    

}

/* End of file school_model.php */
/* Location: ./application/models/school_model.php */


?>

