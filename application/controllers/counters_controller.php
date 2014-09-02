<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Counters_controller extends CI_Controller {

	public function index()
	{
		$res['result']=2;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('counters.php', $res);
	}

	public function send_counters()
	{
		$this->load->library('email');

    	$this->email->clear();

    	$config['protocol'] = 'mail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

    	$this->email->from($this->input->post('InputEmail'), $this->input->post('InputNameCompany'));
		$this->email->to('contador@megasl.net'); 

		$this->email->subject( 'Comunicación de contadores: ' . $this->input->post('InputNameCompany'));

		$complete_message =  "Datos de la empresa que envía este mensaje: ". PHP_EOL . PHP_EOL;
		$complete_message .= "Nombre: " . $this->input->post('InputNameCompany') . PHP_EOL;
		$complete_message .= "Email: " . $this->input->post('InputEmail') . PHP_EOL;
		$complete_message .= "Teléfono: " . $this->input->post('InputPhone') . PHP_EOL . PHP_EOL . PHP_EOL;

		$complete_message .= "Información de los contadores:" . PHP_EOL . PHP_EOL;
		$complete_message .= "Marca:" . $this->input->post('InputNamePhotocopier') . PHP_EOL ;
		$complete_message .= "Modelo:" . $this->input->post('InputModelPhotocopier'). PHP_EOL;
		$complete_message .= "Número de serie:" . $this->input->post('InputSerialNumber'). PHP_EOL;
		$complete_message .= "Copias en B/N:" . $this->input->post('InputCopyBW'). PHP_EOL;
		$complete_message .= "Copias en color:" . $this->input->post('InputCopyColor'). PHP_EOL;
		$complete_message .= "Número de copias del contador:" . $this->input->post('InputCopyCounter'). PHP_EOL;

		$this->email->message($complete_message);	

		$email_correct_sent = $this->email->send();

		$this->email->print_debugger();

		if ($email_correct_sent)
			$res['result']=1;
		else
			$res['result']=2;

		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('counters.php', $res);
	}


}

?>