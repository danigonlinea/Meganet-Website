<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/counters.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/counters_media_queries.less"); ?>" rel="stylesheet/less">

</head>
<body>
<?php  $this->load->view('main_menu');	?>

<?php
			switch ($result) {
				case 0: // Error 
				    echo '<div class="alert alert-danger">No se ha podido enviar su mensaje correctamente 
				    									  debido a un error en el formulario. Por favor, inténtelo de nuevo.</div>';
				    break;
				case 1: // OK
					echo '<div class="alert alert-success">¡ Informe de comunicación de contadores enviado con éxito ! </div>';
					break;
				default: // No surveys sent
					break;
			}
?>

	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Comunicación de Contadores</h1>
	    	<h2 class="hidden-xs carousel-subtitle">Puede comunicarnos los contadores de sus equipos de manera sencilla 
				y rápida, rellenando el siguiente formulario.</h2>
	    </div>
  	</div>


<div class="container">
	<div class="row">
		

		  	<form role="form" action="<?php echo site_url('Counters_controller/send_counters'); ?>" method="post" >
		        <h1> Datos de contacto </h1>

		        <div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">
		        	<label for="InputNameCompany">Tu empresa</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputNameCompany" id="InputNameCompany" placeholder="Introduzca el nombre completo de su empresa" required>
		     		 </div>
		     	</div>
		     	<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
		        	<label for="InputEmail">Su email</label>
		        	<div class="input-group">
		          		<input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Introduzca su email" required>
		     		</div>
		     	</div>
		        <div class="form-group  col-lg-4 col-md-6 col-sm-6 col-xs-12">
		        	<label for="InputPhone">Teléfono de contacto</label>
		        	<div class="input-group">
		          		<input type="tel" pattern="\d{9,12}"class="form-control" name="InputPhone" id="InputPhone" placeholder="Introduzca un teléfono de contacto" required>
		     		</div>
		     	</div>

 				<h1> Datos del contador </h1>

		     	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
		        	<label for="InputNamePhotocopier">Marca de fotocopiadora</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputNamePhotocopier" id="InputNamePhotocopier" placeholder="Introduzca la marca" required>
		     		 </div>
		     	</div>
		        <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
		        	<label for="InputModelPhotocopier">Modelo de fotocopiadora</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputModelPhotocopier" id="InputModelPhotocopier" placeholder="Introduzca el modelo" required>
		     		 </div>
		     	</div>
		     	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
		        	<label for="InputSerialNumber">Número de Serie</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputSerialNumber" id="InputSerialNumber" placeholder="Introduzca el número de serie" required>
		     		 </div>
		     	</div>

		     	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
		        	<label for="InputCopyBW">Copias en B/N</label>
		        	<div class="input-group">
		          		<input type="text" pattern="\d{1,8}" class="form-control" name="InputCopyBW" id="InputCopyBW" placeholder="Introduzca las copias en blanco y negro realizadas" required>
		     		 </div>
		     	</div>
		        <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
		        	<label for="InputCopyColor">Copias en color</label>
		        	<div class="input-group">
		          		<input type="text" pattern="\d{1,8}" class="form-control" name="InputCopyColor" id="InputCopyColor" placeholder="Introduzca las copias en color realizadas" required>
		     		 </div>
		     	</div>
		     	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
		        	<label for="InputCopyCounter">Número de copias del contador</label>
		        	<div class="input-group">
		          		<input type="text" pattern="\d{1,10}" class="form-control" name="InputCopyCounter" id="InputCopyCounter" placeholder="Introduzca las copias actuales de su contador" required>
		     		 </div>
		     	</div>

				<div class="form-group col-lg-12 col-md-12">	
		      		<input type="submit" name="submit" id="submit" value="Enviar informe de contador" class="btn btn-size btn-orange-main pull-right"></input>
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