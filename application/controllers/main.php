<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        //$this->load->helper('main_helper');
    }

    public function index()
    {
        
        //$this->load->view('layout/layout', $data);
        $this->load->view('main/index');
    }
    public function fault()
    {
        $this->load->view('main/fault');
    }
    public function window()
    {
        $this->load->view('main/port');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>