<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incidence_reports_controller extends CI_Controller {

	public function index()
	{
		$res['result']=2;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('incidence_reports.php',$res);
	}

	private function getDevice($value)
	{
		$return = "";

		switch ($value) {
			case 'PO': $return = "Portátil";
				break; 
			case 'SO': $return = "Ordenador de Sobremesa";
				break; 
			case 'IM': $return = "Impresora";
				break;
			case 'FO': $return = "Fotocopiadora";
				break;
			case 'MO': $return = "Monitor";
				break;
			case 'MU': $return = "Impresora Multifunción";
				break;						
			case 'PR': $return = "Proyector";
				break;						

			default: $return = "Otros";
				break;
		}
		return $return;
	}

	public function send_incidence()
	{
		$this->load->library('email');

		$device =  $this->getDevice($this->input->post('select_option_combobox'));

		//echo $destinatary['email'];
		//echo $destinatary['message'];

    	$this->email->clear();

    	$config['protocol'] = 'mail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

    	$this->email->from($this->input->post('InputEmail'), $this->input->post('InputName'));
		$this->email->to('tecnico@megasl.net'); 

		$this->email->subject( "Incidencia de equipo enviada por: ". $this->input->post('InputName'));

		$complete_message = "Datos de la persona que envía la incidencia: ". PHP_EOL . PHP_EOL;
		$complete_message .= "Nombre: " . $this->input->post('InputName') . PHP_EOL;
		$complete_message .= "Email: " . $this->input->post('InputEmail') . PHP_EOL;
		$complete_message .= "Teléfono: " . $this->input->post('InputPhone') . PHP_EOL . PHP_EOL . PHP_EOL;

		$complete_message .= "Datos de la incidencia:" . PHP_EOL . PHP_EOL;
		$complete_message .= "Tipo de Equipo Averiado: " . $device . PHP_EOL ;
		$complete_message .= "Marca del Equipo: " . $this->input->post('InputNameDevice') . PHP_EOL ;
		$complete_message .= "Modelo del Equipo: " . $this->input->post('InputModelDevice') . PHP_EOL ;

		$this->email->message($complete_message);	

		$email_correct_sent = $this->email->send();

		$this->email->print_debugger();

		if ($email_correct_sent)
			$res['result']=1;
		else
			$res['result']=2;

		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('incidence_reports.php', $res);
	}
}
?>