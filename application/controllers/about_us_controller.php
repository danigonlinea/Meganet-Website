<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('about_us.php');
	}
}
