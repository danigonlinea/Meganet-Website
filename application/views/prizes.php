<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="/MeganetLocalWEB/assets/css/prizes.less" type="text/css" rel="stylesheet/less">
	<link href="/MeganetLocalWEB/assets/css/prizes_media_queries.less" type="text/css" rel="stylesheet/less">

</head>
<body>
<?php $this->load->view('main_menu');	?>

	<div class="panel panel-primary">
		<h2 class="text-center">  En Meganet, ponemos a disposición todos los precios y descuentos
		disponibles en nuestra tienda y en el servicio SAT.<h2>
		
	</div>
	<h1 class="text-center"> Servicio SAT </h1>
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12  ">
            	<table class="table table-striped table-bordered">
						<thead>
					        <tr class="btn-success">
					            <th></th>
					            <th>Precio</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Intervención mínima</td>
					            <td>42 €</td>
					        </tr>
					        <tr>
					            <td>Fracción o tarifa</td>
					            <td>42 € / hora</td>
					        </tr>
					        <tr>
					            <td>Presupuesto (no aceptados)</td>
					            <td>30 €</td>
					        </tr>     
					    </tbody>
				</table>
            </div>
        
        
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 ">
            	<table class="table table-striped table-bordered">
						<thead>
					        <tr>
					            <th></th>
					            <th>Precio</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Cádiz capital</td>
					            <td>42 €</td>
					        </tr>
					        <tr>
					            <td>Cádiz provincia</td>
					            <td>42 € / hora</td>
					        </tr>
					    </tbody>
				</table>            
            </div>
        </div>
    </div>
	<h1 class="text-center"> Descuentos </h1>
	<div class="container enterprise-container">
		<div class="row">
			<div class="text-center min-height-box col-lg-4 col-xs-6 col-sm-6 col-md-4">
				<img class="certificate-icon-box" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
				<h3 class="certificate-subtitle"> Familia		</h3>
			</div>
			<div class="text-center min-height-box col-lg-4 col-xs-6 col-sm-6 col-md-4">
				<img class="certificate-icon-box" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
				<h3 class="certificate-subtitle"> Universitarios	</h3>
			</div>
			<div class="text-center min-height-box col-lg-4 col-xs-6 col-sm-6 col-md-4">
				<img class="certificate-icon-box" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
				<h3 class="certificate-subtitle"> Seguros Santa Lucía	 </h3>
			</div>
			
			<div class="text-center min-height-box  col-lg-6 col-xs-6 col-sm-6 col-md-6">
				<img class="certificate-icon-box" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
				<h3 class="certificate-subtitle"> Desempleado		</h3>
			</div>
			<div class="text-center min-height-box  col-lg-6 col-xs-6 col-sm-6 col-md-6">
				<img class="certificate-icon-box" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
				<h3 class="certificate-subtitle"> Socios del Club de Tenis Cádiz	</h3>
			</div>
		</div>
	</div>

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página  
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->

</body>
</html>