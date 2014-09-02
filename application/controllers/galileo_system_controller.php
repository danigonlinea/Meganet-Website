<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galileo_system_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('galileo_system.php');
	}
}

?>