<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="/MeganetLocalWEB/assets/css/about_us.less" rel="stylesheet/less">
	<link href="/MeganetLocalWEB/assets/css/about_us_media_queries.less" rel="stylesheet/less">
	
</head>
<body>
<?php  $this->load->view('main_menu');	?>

<h1> Una empresa con historia </h1>

<h3>      En Meganet (Mecanográfica Gaditana S.L) es una historia de familia; una historia hecha de 
tradición, empeño, superación y pasión por lo que hacemos que comenzó hace más de 
29 años.  Ha pasado mucho tiempo desde entonces pero nuestra identidad sigue siendo la misma. </h3>

<div class="history-text-images-box">
    <img class="history-image-left" src="./assets/imgs/fundador.jpeg" alt="" ></img>

    <div class="history-text-box"> 
	    <h3>
			Todo comenzó en 1985. Jesús García Sosvilla funda Mecanográfica 
			Gaditana. Experto del sector y conocedor de sus entresijos, pues 
			había sido Jefe de ventas durante 27 años en Hispano Olivetti, 
			decide dar el paso y embarcarse en una nueva aventura en la que 
			cuenta con el apoyo y colaboración de toda su familia.
		</h3>
		<h3>	 
			En 1988, la empresa toma forma Jurídica como Mecanográfica Gaditana S.L., constituyéndose inicialmente con un 
			Capital Social de 18.030,36 €. 
		</h3>
		<h3>		
			El sentimiento de pertenencia a un colectivo, en este caso la ciudad de Cádiz y sus gentes, 
			es latente en su denominación. En 1996, obtenemos por primera vez el premio “Líder atención 
			al cliente”, reconocimiento que viene directamente de la población. Tal reconocimiento se 
			repetirá en diversas ocasiones (1997, 1998, 2000, 2001, 2003).
		</h3>
		<h3>		
			En 1998, se produce el relevo en la dirección de la empresa por la jubilación del fundador. 
			Desde este momento asume la dirección su hijo Jesús García Bermejo, quien continúa con la línea 
			de actuación emprendida desde los inicios. 
		</h3>
	</div>

	<div class="enter-complete"> </div>
	<img class="history-image-right" src="./assets/imgs/maquina_escribir.jpeg" alt="" ></img>
	<div class="history-text-box">
		<h3>	 
			En 2004, Desde el 20 de Diciembre contamos con el Certificado ISO 9001:2008. La preocupación por la calidad de nuestros productos y servicios nos impulsa a certificar todos nuestros centros de trabajo y todos los servicios que prestamos. 
		</h3>
		<h3>		
			En 2007, coincidiendo con la reforma integral de nuestras instalaciones de la calle Beato Diego de Cádiz esquina a la calle Rosario nace Meganet. Cambiamos la denominación pero no el espíritu evolucionando la sociedad con las tecnologías más novedosas.
		<h3> 
			Desde el 27 de enero del 2012, contamos con la certificacion ISO 14001:2004, 
			así como su renovación a la certificación ISO 9001:2008, teniendo vigentes ambas 
			certificacciones hasta enero del 2015.
		</h3>
	</div> 
</div>          

<div class="enter-complete"></div>

<h1 class="text-center"> Equipo </h1>
<div class="team-people-group">
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="./assets/imgs/jesus_equipo.jpg" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Jesús García Bermejo</h3>
							<h4>Gerente</h4>
							<div class="">
								<button class="popover-dismiss" data-container="body" data-content="WooooW" data-toggle="popover" ></button> 
								<img class="contact-icon "   src="./assets/imgs/icons/email_icon.png"  height="60" width="60" alt=""></img></button>
								<button class="popover-dismiss" data-container="body" data-content="WooooW" data-toggle="popover" ><img class="contact-icon "  src="./assets/imgs/icons/phone_icon.png"  height="60" width="60" alt=""></img></button>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Jesús García Bermejo</h3>
					<h4>Gerente</h4>
					<div class="contact-icon-group-reduced">
						<a class="" href="#"><img src="./assets/imgs/icons/email_icon.png" class="contact-icon" height="60" width="60" alt=""></img></a>
						<a class="" href="#"><img src="./assets/imgs/icons/phone_icon.png" class="contact-icon" height="60" width="60" alt=""></img></a>
					</div>	
				</div>
			</div>
		</div>

	</div>
</div>

<br></br>
<br></br>
<br></br>
<br></br>

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página  
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->

</body>
</html>