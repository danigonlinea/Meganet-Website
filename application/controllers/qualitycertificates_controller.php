<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QualityCertificates_controller extends CI_Controller {



	public function index()
	{
		$res['result']=2;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('quality_nature_certificates.php', $res);
	}

	public function send_surveys()
    {
      $this->load->helper('url');
      $tipo_encuesta = $this->input->post("surveyactivated");
      
	      switch ($tipo_encuesta) {
		    case "ShopSurvey": $this->ShopSurveyValidation();    break;
		    case "SATSurvey": $this->SATSurveyValidation();      break;
		    case "OrderSurvey": $this->OrderSurveyValidation();  break;
		    default: $this->ErrorValidation();           		 break;
		}
    }


    private function ErrorValidation()
    {
    	$res['result'] = 0;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('quality_nature_certificates.php', $res);
    }

    private function ShopSurveyValidation()
    {
    	$this->load->library('email');

    	$this->email->clear();

    	$config['protocol'] = 'mail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

    	$this->email->from($this->input->post('InputEmail'), $this->input->post('InputName'));
		$this->email->to('danigonlinea@gmail.com'); 

		$this->email->subject('Encuesta de Satisfaccion de la Tienda: ' . $this->input->post('InputName'));

		$complete_message = "Encuesta de la tienda realizada por: ". PHP_EOL . PHP_EOL;
		$complete_message .= "Nombre: " . $this->input->post('InputName') . PHP_EOL;
		$complete_message .= "Email: " . $this->input->post('InputEmail') . PHP_EOL;
		$complete_message .= "Teléfono: " . $this->input->post('InputPhone') . PHP_EOL;

		$complete_message .= "Resultado de la encuesta:" . PHP_EOL . PHP_EOL;
		$complete_message .= "Impresión General: " . $this->input->post('GeneralImpressionShop_radio_group') . PHP_EOL;
		$complete_message .= "Calidad del servicio: " . $this->input->post('QualityServiceShop_radio_group') . PHP_EOL;
		$complete_message .= "Calidad y variedad de productos: " . $this->input->post('QualityProductsShop_radio_group') . PHP_EOL;
		$complete_message .= "Trato recibido del personal: " . $this->input->post('StaffOpinionShop_radio_group') . PHP_EOL;
		$complete_message .= "Valoración de nuestros precios: " . $this->input->post('PricesOpinionShop_radio_group') . PHP_EOL;

		$complete_message .= "Valoración personal:";
		$complete_message .= "" . $this->input->post('InputMessage') . PHP_EOL ;

		$this->email->message($complete_message);	

		$this->email->send();

		$this->email->print_debugger();

		$res['result']=1;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('quality_nature_certificates.php', $res);
    }

    private function SATSurveyValidation()
    {
    	$this->load->library('email');

		$this->email->clear();

    	$config['protocol'] = 'mail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

    	$this->email->from($this->input->post('InputEmail'), $this->input->post('InputName'));
		$this->email->to('danigonlinea@gmail.com'); 

		$this->email->subject('Encuesta de Satisfaccion del SAT: ' . $this->input->post('InputName'));

		$complete_message = "Encuesta del Servicio Técnico realizada por: ". PHP_EOL . PHP_EOL;
		$complete_message .= "Nombre: " . $this->input->post('InputName') . PHP_EOL;
		$complete_message .= "Email: " . $this->input->post('InputEmail') . PHP_EOL;
		$complete_message .= "Teléfono: " . $this->input->post('InputPhone') . PHP_EOL;

		$complete_message .= "Resultado de la encuesta:" . PHP_EOL . PHP_EOL;
		$complete_message .= "Impresión General: " . $this->input->post('GeneralImpressionSAT_radio_group') . PHP_EOL;
		$complete_message .= "Calidad del servicio: " . $this->input->post('QualityServiceSAT_radio_group') . PHP_EOL;
		$complete_message .= "Información sobre el trabajo realizado: " . $this->input->post('InformatioWorkDoneSAT_radio_group') . PHP_EOL;
		$complete_message .= "Tiempo de respuesta: " . $this->input->post('TimeResponseSAT_radio_group') . PHP_EOL;
		$complete_message .= "Trato recibido del personal: " . $this->input->post('StaffOpinionSAT_radio_group') . PHP_EOL;
		$complete_message .= "Valoración de nuestros precios: " . $this->input->post('PricesOpinionSAT_radio_group') . PHP_EOL;

		$complete_message .= "Valoración personal:";
		$complete_message .= "" . $this->input->post('InputMessage') . PHP_EOL ;

		$this->email->message($complete_message);	

		$this->email->send();

		$this->email->print_debugger();

		$res['result']=1;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('quality_nature_certificates.php', $res);
    }

    private function OrderSurveyValidation()
    {
    	$this->load->library('email');

    	$this->email->clear();

    	$config['protocol'] = 'mail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

    	$this->email->from($this->input->post('InputEmail'), $this->input->post('InputName'));
		$this->email->to('danigonlinea@gmail.com'); 

		$this->email->subject('Encuesta sobre Pedidos: ' . $this->input->post('InputName'));

		$complete_message = "Encuesta sobre los pedidos realizada por: ". PHP_EOL . PHP_EOL;
		$complete_message .= "Nombre: " . $this->input->post('InputName') . PHP_EOL;
		$complete_message .= "Email: " . $this->input->post('InputEmail') . PHP_EOL;
		$complete_message .= "Teléfono: " . $this->input->post('InputPhone') . PHP_EOL;

		$complete_message .= "Resultado de la encuesta:" . PHP_EOL . PHP_EOL;
		$complete_message .= "Impresión General: " . $this->input->post('GeneralImpressionOrder_radio_group') . PHP_EOL;
		$complete_message .= "Tiempo de respuesta del pedido: " . $this->input->post('TimeResponseOrder_radio_group') . PHP_EOL;
		$complete_message .= "Plazo de entrega: " . $this->input->post('DeliveryOrder_radio_group') . PHP_EOL;
		$complete_message .= "Trato recibido del personal: " . $this->input->post('StaffOpinionOrder_radio_group') . PHP_EOL;
		$complete_message .= "Resolución de reclamaciones: " . $this->input->post('ClaimOrder_radio_group') . PHP_EOL;

		$complete_message .= "Valoración personal:";
		$complete_message .= "" . $this->input->post('InputMessage') . PHP_EOL ;

		$this->email->message($complete_message);	

		$this->email->send();

		$this->email->print_debugger();

		$res['result']=1;
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('quality_nature_certificates.php', $res);
    }


}

?>