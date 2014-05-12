<?php
    class Helloworld extends CI_Controller{
        function index()
        {
            $this->load->model('helloworld_model');

 
		  	echo '<pre>';
		      print_r("Estoy en el controlador");
		    echo '</pre>';
		    
            $data['result'] = $this->helloworld_model->getData();
            $data['page_title'] = "CI Hello World App!";
 
            $this->load->view('helloworld_view',$data);
        }
    }
?>