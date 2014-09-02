<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sonos_system_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('sonos_system.php');
	}
}

?>