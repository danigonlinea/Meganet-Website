<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>
<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="<?php echo base_url("/assets/css/contact.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/contact_media_queries.less"); ?>" rel="stylesheet/less">
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
		  function initialize() {
		  	var positionMeganet = new google.maps.LatLng(36.5339597, -6.2959824);
		    var mapCanvas = document.getElementById('google_company_map_container');
		    var mapOptions = {
		      center: positionMeganet,
		      zoom: 19,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    }

		    var map = new google.maps.Map(mapCanvas, mapOptions);
		    var marker = new google.maps.Marker({
			    map:map,
			    draggable:false,
			    animation: google.maps.Animation.DROP,
			    position: positionMeganet
			});
		  }

		  google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>
<?php  $this->load->view('main_menu');	?>

<?php
			switch ($result) {
				case 0: // Error 
				    echo '<div class="alert alert-danger">No se ha podido enviar su mensaje correctamente 
				    									  debido a un error en el formulario.</div>';
				    break;
				case 1: // OK
					echo '<div class="alert alert-success">¡ Mensaje enviado con éxito ! Nos pondremos en contacto con usted tan pronto
															como sea posible.</div>';
					break;
				default: // No surveys sent
					break;
			}
?>

<h2 class="well well-primary"> Si tienes alguna pregunta o quieres contactar con nosotros, puedes hacerlo con el siguiente
formulario</h2>


<div class="container">
	<div class="row">
		  <form role="form" action="<?php echo site_url('Contact_controller/send_contact'); ?>" method="post" >
		        <div class="form-group col-lg-4 col-md-12">
		        	<label for="InputName">Su nombre completo</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputName" id="InputName" placeholder="Introduzca su nombre completo" required>
		     		 </div>
		     	</div>
		        <div class="form-group col-lg-4 col-md-6 col-sm-6">
		        	<label for="InputEmail">Su email</label>
		        	<div class="input-group">
		          		<input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Introduzca su email" required>
		     		</div>
		     	</div>
		        <div class="form-group col-lg-4 col-md-6 col-sm-6">
		        	<label for="InputPhone">Su número de teléfono</label>
		        	<div class="input-group">
		          		<input type="tel" pattern="\d{9,12}"class="form-control" name="InputPhone" id="InputPhone" placeholder="Introduzca su número de teléfono" required>
		     		</div>
		     	</div>
		     	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		     		<label for="InputMessage">Escriba su mensaje</label>
		     		<div class="input-group" data-validate="length" data-length="5">
						<textarea type="text" class="form-control" rows="3" name="InputMessage" id="InputMessage" placeholder="Redacte su mensaje" required></textarea>
					</div>
				</div>

				<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
					<label for="select_option_combobox">Departamento</label>
					<select name="select_option_combobox" id="select_option_combobox" class="form-group form-control col-lg-12 col-md-12 col-sm-12">
						  <option value="CG">Contacto general</option>
						  <option value="PE">Realizar un pedido</option>
						  <option value="SU">Sugerencia</option>
						  <option value="RE">Reclamación</option>
						  <option value="CO">Contabilidad</option>
						  <option value="ST">Servicio Técnico</option>
					</select>
				</div>

				<div class="form-group col-lg-12 col-md-12">	
		      		<input type="submit" name="submit" id="submit" value="Enviar mensaje" class="btn btn-md btn-primary pull-right"></input>
		      	</div>
		  </form>
	</div>
</div>

<div class="container text-center"> 
	<div class="btn-group btn-toggle text-center">
    	<button class="btn btn-md btn-default btn-primary horario-tienda-button">Horario de Tienda</button>
    	<button class="btn btn-md btn-default horario-SAT-button">Horario SAT</button>
	</div>
	<div class="tabla-horario-tienda">
		<table class="table table-striped table-bordered">
			<thead>
		        <tr class="btn-primary">
		            <th></th>
		            <th class="text-center">Octubre-Mayo</th>
		            <th class="text-center">Junio</th>
		            <th class="text-center">Julio y Agosto</th>
		            <th class="text-center">Septiembre</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>Lunes a Viernes</td>
		            <td>Mañana: 9:00 - 14:00 Tarde: 17:30 - 21:00</td>
		            <td>Mañana: 8:00 - 14:00 Tarde: 18:00 - 21:00</td>
		            <td>Solo Mañana: 8:00 - 14:00  </td>
		            <td>Mañana: 8:00 - 14:00  Tarde: 18:00 - 21:00</td>
		        </tr>
		        <tr>
		            <td>Sábados</td>
		            <td>Sólo Mañana: 11:00 - 14:00</td>
		            <td colspan="3">Cerrado</td>
		        </tr>
		    </tbody>
		</table>
	</div>
	<div class="tabla-horario-SAT">
		<table class="table table-striped table-bordered">
			<thead>
		        <tr class="btn-primary">
		            <th></th>
		            <th class="text-center">Todo el año</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>Lunes a Viernes</td>
		            <td>Mañana: 8:00 - 14:00</td>
		        </tr>
		        <tr>
		            <td>Sábado</td>
		            <td>Cerrado</td>
		        </tr>
		    </tbody>
		</table>
	</div>
</div>

<div id="google_company_map_container"></div>

<br></br>
<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página  
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script> 
<script src="/MeganetLocalWEB/assets/libraries/jquery-validation-1.12.0/jquery.validate.min.js"></script> -->

</body>
</html>