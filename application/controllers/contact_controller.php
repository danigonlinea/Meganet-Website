<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_controller extends CI_Controller {

	public function index()
	{
		$res['result']=2;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('contact.php', $res);
	}

	private function getEmailDestiny($value)
	{
		$return = "";

		switch ($value) {
			case 'CG': $return = array('email' => "info@megasl.net", 'message' => "Contacto General por:");
				break; 
			case 'SU': $return = array('email' => "sugerencias@megasl.net", 'message' => "Sugerencia por:");
				break;
			case 'RE': $return = array('email' => "sugerencias@megasl.net", 'message' => "Reclamación por:");
				break;
			case 'CO': $return = array('email' => "conta@megasl.net", 'message' => "Contabilidad por:");
				break;
			case 'ST': $return = array('email' => "tecnico@megasl.net", 'message' => "Servicio Técnico por:");
				break;						
			case 'PE': $return = array('email' => "pedidos@megasl.net", 'message' => "Petición de Pedido por:");
				break;						

			default:
				break;
		}

		return $return;
	}


	public function send_contact()
	{
		$this->load->library('email');

		$destinatary =  $this->getEmailDestiny($this->input->post('select_option_combobox'));

		//echo $destinatary['email'];
		//echo $destinatary['message'];

    	$this->email->clear();

    	$config['protocol'] = 'mail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

    	$this->email->from($this->input->post('InputEmail'), $this->input->post('InputName'));
		$this->email->to('danigonlinea@gmail.com'); 

		$this->email->subject( $destinatary['message'] . $this->input->post('InputName'));

		$complete_message = "Datos de la persona que envía este mensaje: ". PHP_EOL . PHP_EOL;
		$complete_message .= "Nombre: " . $this->input->post('InputName') . PHP_EOL;
		$complete_message .= "Email: " . $this->input->post('InputEmail') . PHP_EOL;
		$complete_message .= "Teléfono: " . $this->input->post('InputPhone') . PHP_EOL . PHP_EOL . PHP_EOL;

		$complete_message .= "Mensaje:" . PHP_EOL . PHP_EOL;
		$complete_message .= "" . $this->input->post('InputMessage') . PHP_EOL ;

		$this->email->message($complete_message);	

		$email_correct_sent = $this->email->send();

		$this->email->print_debugger();

		if ($email_correct_sent)
			$res['result']=1;
		else
			$res['result']=2;

		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('contact.php', $res);
	}
}

?>