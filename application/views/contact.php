<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="/MeganetLocalWEB/assets/css/contact.less" rel="stylesheet/less">
	<link href="/MeganetLocalWEB/assets/css/contact_media_queries.less" rel="stylesheet/less">
</head>
<body>
<?php  $this->load->view('main_menu');	?>

<h2> Si tienes alguna pregunta o quieres contactar con nosotros, puedes hacerlo con el siguiente
formulario</h2>
<div class="container">
	<div class="row">
		  <div class="col-md-12">
				<div class="alert alert-success">Se ha enviado correctamente</div>	  
			    <div class="alert alert-danger">Error en el formulario</div>
		  </div>
		  <form role="form" action="" method="post" >
		        <div class="form-group col-lg-4 col-md-12">
		        	<label for="InputName">Su nombre completo</label>
		        	<div class="input-group">
		          		<input type="text" pattern=".{3,}" class="form-control" name="InputName" id="InputName" placeholder="Introduzca su nombre completo" required>
		     		 </div>
		     	</div>
		        <div class="form-group col-lg-4 col-md-6 col-sm-6">
		        	<label for="InputName">Su email</label>
		        	<div class="input-group">
		          		<input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Introduzca su email" required>
		     		 </div>
		     	</div>
		        <div class="form-group col-lg-4 col-md-6 col-sm-6">
		        	<label for="InputName">Su número de teléfono</label>
		        	<div class="input-group">
		          		<input type="tel" pattern="\d{9,12}"class="form-control" name="InputPhone" id="InputPhone" placeholder="Introduzca su número de teléfono" required>
		     		</div>
		     	</div>
		     	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		     		<label for="InputName">Escriba su mensaje</label>
		     		<div class="input-group" data-validate="length" data-length="5">
						<textarea type="text" class="form-control" rows="3" name="InputMessage" id="InputMessage" placeholder="Redacte su mensaje" required></textarea>
					</div>
				</div>

				<div class="form-group col-lg-6 col-md-12 col-sm-12 pull-right">
					<select class="form-group form-control col-lg-12 col-md-12 col-sm-12">
						  <option>Contacto general</option>
						  <option>Sugerencia</option>
						  <option>Reclamación</option>
						  <option>Contabilidad</option>
						  <option>Servicio Técnico</option>
					</select>
				</div>

				<div class="form-group col-lg-12 col-md-12">	
		      		<input type="submit" name="submit" id="submit" value="Enviar mensaje" class="btn btn-lg btn-danger pull-right"></input>
		      	</div>
		  </form>
	</div>
</div>

<div class="container text-center"> 
	<div class="btn-group btn-toggle text-center"> 
    	<button class="btn btn-lg btn-default btn-primary horario-tienda-button">Horario de Tienda</button>
    	<button class="btn btn-lg btn-default horario-SAT-button">Horario SAT</button>
	</div>
	<div class="tabla-horario-tienda">
		<table class="table table-striped table-bordered">
			<thead>
		        <tr class="btn-success">
		            <th></th>
		            <th class="text-center">Octubre-Mayo</th>
		            <th class="text-center">Junio-Septiembre</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>Lunes a Viernes</td>
		            <td>Mañana: 9:00 - 14:00  Tarde: 17:30 - 21:00</td>
		            <td>Mañana: 8:00 - 14:00  Tarde: 18:00 - 21:00</td>
		        </tr>
		        <tr>
		            <td>Sábados</td>
		            <td>Sólo Mañana: 11:00 - 14:00</td>
		            <td>Cerrado</td>
		        </tr>
		    </tbody>
		</table>
	</div>
	<div class="tabla-horario-SAT">
		<table class="table table-striped table-bordered">
			<thead>
		        <tr class="btn-success">
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
<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página  
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script> -->
<script src="/MeganetLocalWEB/assets/libraries/jquery-validation-1.12.0/jquery.validate.min.js"></script>

</body>
</html>