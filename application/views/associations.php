<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/associations.less"); ?>" type="text/css" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/associations_media_queries.less"); ?>" type="text/css" rel="stylesheet/less">
</head>
<body>
<?php  $this->load->view('main_menu');	?>
	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Ayudando a quienes más lo necesitan</h1>
	    	<h2 class="hidden-xs carousel-subtitle"> Nuestro compromiso social es una de nuestras prioridades y apostamos
			por ella. Con vuestras compras también estaréis contribuyendo a
			colaborar con aquellos colectivos que más lo necesitan. </h2>
	    </div>
  	</div>
  	
  	<div class="container enterprise-container">
		<div class="row">

			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/afim.pdf'); ?>">
					<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/fundacion_afim.jpg');?>" 
						 alt="Asociación AFIM" height="100" width="100">
					</a>	
					<h3 class="certificate-title-box"> Fundación AFIM: Ayuda, Formación e
					Integración del minusválido</h3>
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/parkinson.pdf'); ?>">
					<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/yellow_tuls.jpg');?>" 
						 alt="Asociación de Familiares y Enfermos de Parkinson Bahía de Cádiz" height="100" width="100">
					</a>	
					<h3 class="certificate-title-box"> Asociación de Familiares 
					y Enfermos de Parkinson Bahía de Cádiz.</h3>
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/medicosMundo.pdf'); ?>">
					<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/medicos_mundo.jpg');?>" 
						 alt="Asociación Medicos del mundo" height="100" width="100">
					</a>	
					<h3 class="certificate-title-box"> Médicos del Mundo</h3>
				</div>
			</div>	
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/nuevoFuturo.pdf'); ?>">
					<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/nuevo_futuro.jpg');?>" 
						 alt="Asociación Nuevo Futuro" height="100" width="100">
					</a>	
					<h3 class="certificate-title-box"> Nuevo Futuro</h3>
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/hermanitasPobres.pdf'); ?>">
					<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/hermanitas_pobres.jpeg');?>" 
						 alt="Asociación Hermanitas Pobres" height="100" width="100">
					</a>	
					<h3 class="certificate-title-box"> Hermanitas de los Pobres</h3>
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/cruzRoja.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/cruz_roja.gif');?>" 
							 alt="Asociación Hermanitas Pobres" height="100" width="100">
					</a>
					<h3 class="certificate-title-box"> Cruz Roja Española</h3>
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/alcer.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/lucha_rinon.jpg');?>" 
							 alt="Asociación Hermanitas Pobres" height="100" width="100">
					</a>
					<h3 class="certificate-title-box"> Asociación para la lucha 
					las Enfermedades del Riñón</h3>
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<a class=" " href="<?php echo base_url('/assets/files/associations/cancer.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/associations/aecc.jpg');?>" 
							 alt="Asociación Hermanitas Pobres" height="100" width="100">
					</a>
					<h3 class="certificate-title-box">Asociación Española 
					Contra el Cáncer</h3>
				</div>
			</div>

		</div>
	</div>

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->
</body>
</html>