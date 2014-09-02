<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/services.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/services_media_queries.less"); ?>" rel="stylesheet/less">

</head>
<body>
<?php  $this->load->view('main_menu');	?>

	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Proporcionando servicios de calidad, siempre</h1>
	    	<h2 class="hidden-xs carousel-subtitle">Disponemos de toda clase de servicios orientados a la informática. Entre ellas 
            destacamos la teleasistencia donde solucionamos problemas
            de forma remota.</h2>
	    </div>

	    <div  class="text-center">
		    <button type="button" class="btn btn-size btn-orange-main marginButtons"  
            data-toggle="modal" data-target="#RemoteAssistenceModal">Ver Teleasistencia</button> 
		</div>​
  	</div>

    <div class="container enterprise-container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 ">
                <div class="">
                    <h1> Asistencia Técnica </h1>
                    <h2> ¿Tienes problemas con tu ordenador? 
                        Sea cual sea la situación en la que se encuentra, nuestros 
                        profesionales del servicio de asistencia técnica realizarán, 
                        sin ningún compromiso, un diagnóstico de la situación y un
                        presupuesto de reparación.
                             </h2>
                    <div  class="text-center">
                        <form action="<?php echo site_url('IncidenceReports'); ?>">
                            <input class="btn btn-size btn-orange-main marginButtons" type="submit" value="Reportar Incidencia"></input>
                        </form>
                    </div>​
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/SAT.jpg'); ?>" alt="Foto Servicio Tecnico">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> Comunicación de contadores </h1>
                    <h2> Puede comunicarnos los contadores de sus equipos de manera sencilla y rápida.
                    </h2>
                    <div  class="text-center">
                        <form action="<?php echo site_url('CountersCommunications'); ?>">
                            <input class="btn btn-size btn-orange-main marginButtons" type="submit" value="Comunicar Contadores"></input>
                        </form>
                    </div>​                    
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/comunicate_counters.jpg'); ?>" alt="Foto comunicación de contadores impresora">
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="">
                    <h1> Detección y Limpieza de Virus </h1>
                    <h2> En Meganet somos especialistas en seguridad informática. 
                        Procedemos a la búsqueda y eliminación de toda clase de 
                        virus para evitar cualquier pérdida de datos o uso indebido 
                        de su ordenador personal.
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/virus.jpg'); ?>" alt="Foto virus informático">
                </div>
            </div>
        </div>

       <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> Montaje y configuración de Redes e Internet </h1>
                    <h2> Configuramos su Router DSL/ADSL Wifi para que sea 
                        más seguro, así como el acceso a Internet de sus equipos y 
                        sus cuentas de correo electrónico. También disponemos de 
                        servicios de configuración de red para que compartan 
                        su día a día en el trabajo haciendo que todo esté 
                        correctamente conectado.  </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/network.jpg'); ?>" alt="Foto redes ordenadores">
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="">
                    <h1> Instalación y mantenimiento de equipos </h1>
                    <h2>En nuestra empresa le instalamos todos los programas 
                        que necesite dejando el ordenador en perfecto estado 
                        de funcionamiento. 
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/pc.jpg'); ?>" alt="Foto equipo informático">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> Copias de Seguridad y Recuperación de Datos </h1>
                    <h2> No permitas que se pierdan tus datos por un problema informático. 
                        En Meganet ofrecemos la realización de copias de seguridad de 
                        sus datos en su visita y le informamos de la mejor manera de 
                        mantenerlos seguros y, en caso de pérdida, también ofrecemos 
                        servicios de recuperación de datos. </h2>
                    
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/hdd.jpg'); ?>" alt="Foto disco duro">
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="">
                    <h1> Impresión Reprográfica </h1>
                    <h2>Contrata con nosotros el servicio de Reprografía 
                        y deja que nosotros nos preocupemos por ti.
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/impresion.jpg'); ?>" alt="Foto impresión reprográfica">
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> Adecuación a la Ley Orgánica de Protección de Datos Personales</h1>
                    <h2> También realizamos asesoramiento y auditorías de toda la 
                        información sensible de su empresa conforme a la ley 
                        y los estándares establecidos. </h2> 
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <img src="<?php echo base_url('/assets/imgs/general/protector_data.jpg'); ?>" alt="Foto protector data">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RemoteAssistenceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title bold">TeleAsistencia</h4>
          </div>
          <div class="modal-body">
            <p class="bold">¿Qué es el Soporte Remoto Meganet?</p>
            <p>Es un sistema por el cual podemos solucionar incidencias de software en sus 
                equipos, conectándonos a ellos de forma remota desde nuestras instalaciones, 
                ahorrando así tiempo de espera y desplazamientos innecesarios.
            </p>
            <p class="bold">¿Qué pasos debe seguir para comenzar a disfrutar de este servicio?</p>
            <p> 1. Descargue y ejecute nuestra aplicación haciendo click en "Descargar": </p>
                 
            <p>  2. Necesitamos que nos proporcione el ID de la sesión para que nos podamos conectar con usted. 
            Para ello llame a uno de los números facilitados a continuación:</p>
                 
            <p>   956 22 74 15</p>
            <p>   956 22 43 26</p>
                 
            <p>   Después de habernos facilitado el ID, podremos conectarnos a usted remotamente.</p>
            <p>   ¡Gracias por confiar en Nosotros!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <a class="btn btn-size btn-orange-main" href="http://get.teamviewer.com/AccesoRemotoMeganetSAT" style="text-decoration:none;">Descargar</a>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('footer');?>

<!-- Aqui escribo js concretos que necesita la página -->

</body>
</html>