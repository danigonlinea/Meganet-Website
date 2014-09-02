<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/incident_report.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/incident_report_media_queries.less"); ?>" rel="stylesheet/less">

</head>
<body>
<?php  $this->load->view('main_menu');	?>

<?php
			switch ($result) {
				case 0: // Error
				    echo '<div class="alert alert-danger">No se ha podido enviar la incidencia 
				    									  debido a un error en el formulario. Inténtelo de nuevo.</div>';
				    break;
				case 1: // OK
					echo '<div class="alert alert-success">¡ Incidencia enviada con éxito ! Nos pondremos en contacto con usted tan pronto
															como sea posible.</div>';
					break;
				default: // No sent
					break;
			}
?>

	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Servicio de Asistencia Técnica</h1>
	    	<h2 class="hidden-xs carousel-subtitle">Si desea comunicarnos una averia o incidencia con su equipo, puede hacerlo de 
			una manera sencilla y rápida, rellenando el siguiente formulario. 
			Recibida su incidencia nos pondremos en contacto con usted para asignarle 
			una cita con Nuestro Servicio de Asistencia Técnica.</h2>
	    </div> 
  	</div>

<div class="container">
	<div class="row">
		  	<h1> Datos de contacto </h1>
		  	<form role="form" action="<?php echo site_url('Incidence_reports_controller/send_incidence'); ?>" method="post" >
		        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        	<label for="InputName">Nombre completo o razón social de tu empresa</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputName" id="InputName" placeholder="Introduzca el nombre completo de su empresa" required>
		     		 </div>
		     	</div>
		     	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
		        	<label for="InputEmail">Su email</label>
		        	<div class="input-group">
		          		<input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Introduzca su email" required>
		     		 </div>
		     	</div>
		        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
		        	<label for="InputPhone">Teléfono de contacto</label>
		        	<div class="input-group">
		          		<input type="tel" pattern="\d{9,12}"class="form-control" name="InputPhone" id="InputPhone" placeholder="Introduzca un teléfono de contacto" required>
		     		</div>
		     	</div>

		     	<h1> Datos del reporte </h1>
		     	<div class="form-group col-lg-12 col-md-12 col-sm-12 pull-right">
		     		<label for="select_option_combobox">Tipo de equipo averiado</label>
					<select name="select_option_combobox" id="select_option_combobox" class="form-group form-control col-lg-12 col-md-12 col-sm-12">
						  <option value="PO">Portátil</option>
						  <option value="SO">Sobremesa</option>
						  <option value="IM">Impresora</option>
						  <option value="FO">Fotocopiadora</option>
						  <option value="MO">Monitor</option>
						  <option value="MU">Multifunción</option>
						  <option value="PR">Proyector</option>
						  <option value="OT">Otros</option>
					</select>
				</div>

		        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
		        	<label for="InputNameDevice">Marca del equipo</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputNameDevice" id="InputNameDevice" placeholder="Introduzca el modelo" required>
		     		 </div>
		     	</div>
		     	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
		        	<label for="InputModelDevice">Modelo del equipo</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputModelDevice" id="InputModelDevice" placeholder="Introduzca el número de serie" required>
		     		 </div>
		     	</div>

		     	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		     		<label for="InputMessage">Escriba su mensaje informando detalladamente la avería del equipo en cuestión</label>
		     		<div class="input-group" data-validate="length" data-length="5">
						<textarea type="text" class="form-control" rows="3" name="InputMessage" id="InputMessage" placeholder="Redacte su mensaje" required></textarea>
					</div>
				</div>
		   
				<div class="form-group col-lg-12 col-md-12">	
		      		<input type="submit" name="submit" id="submit" value="Enviar incidencia de equipo" class="btn btn-size btn-orange-main pull-right"></input>
		      	</div>
		  	</form>	
	</div>
</div>	
<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->
</body>
</html>