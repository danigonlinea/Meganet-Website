<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="<?php echo base_url("/assets/css/about_us.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/about_us_media_queries.less"); ?>" rel="stylesheet/less">
	
</head>
<body>
<?php  $this->load->view('main_menu');	?>

	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Una empresa con historia </h1>
	    </div>
  	</div>

<div class="well well-primary padding-down-extra history-text-images-box">

<h3 class=""> En Meganet (Mecanográfica Gaditana S.L) es una historia de familia; una historia hecha de 
tradición, empeño, superación y pasión por lo que hacemos que comenzó hace más de 
29 años.  Ha pasado mucho tiempo desde entonces pero nuestra identidad sigue siendo la misma. </h3>
    <img class="history-image-left" src="<?php echo base_url("/assets/imgs/equipo/fundador.jpeg"); ?>" alt="Foto del fundador" ></img>
    
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
	<img class="history-image-right" src="<?php echo base_url("/assets/imgs/general/maquina_escribir.jpeg"); ?>" 
									alt="Foto de máquina de escribir" ></img>
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
				<img src="<?php echo base_url("/assets/imgs/equipo/jesus_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Jesús García Bermejo</h3>
							<h4>Gerente</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="jesus@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Jesús García Bermejo</h3>
					<h4>Gerente</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> jesus@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/antonio_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Antonio García Bermejo</h3>
							<h4>Área de Informática</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext. 30" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="antonio@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Antonio García Bermejo</h3>
					<h4>Responsable del Área de Informática</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext. 30 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> antonio@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/jose_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">José Mª García Bermejo</h3>
							<h4>Área de Impresión y Reprografía</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext. 23" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="jose@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">José Mª García Bermejo</h3>
					<h4>Área de Impresión y Reprografía</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext. 23</span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> jose@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/rosario_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Rosario García Bermejo </h3>
							<h4>Atención al cliente</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext.20" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="rosario@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Rosario García Bermejo </h3>
					<h4>Atención al cliente</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext.20 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> rosario@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>		

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/isabel_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Isabel Rivero Fernández  </h3>
							<h4>Contabilidad y Administración</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext.24" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="conta@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Isabel Rivero Fernández </h3>
					<h4>Contabilidad y Administración.</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext.24 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> conta@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>		

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/lumi_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Iluminada Martín Vázquez </h3>
							<h4>Coordinadora SAT y Pedidos</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext.28" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="tecnico@megasl.net pedidos@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Iluminada Martín Vázquez </h3>
					<h4>Coordinadora SAT y Pedidos</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext.28 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> tecnico@megasl.net <br></br> pedidos@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>		

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/rafa_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Rafael Calderón Montero </h3>
							<h4>Técnico Informático</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext.37" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="tecnico@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Rafael Calderón Montero </h3>
					<h4>Técnico Informático</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext.37 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> tecnico@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>		

       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="full-team-image-box">
				<img src="<?php echo base_url("/assets/imgs/equipo/juanma_equipo.jpg"); ?>" class="image-team" alt=""></img>
				<div class="caption">
					<div class="blur"></div>
						<div class="caption-text">
							<h3 class="name-person">Juan Manuel Florín Acedo </h3>
							<h4>Área Comercial</h4>
							<div class="">
								<a ><img class="contact-icon popover-dismiss"  data-content="956 227 415 Ext.25" rel="pop-over-style" data-container="body" data-style="primary"  data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
								<a ><img class="contact-icon popover-dismiss"  data-content="comercial@megasl.net" rel="pop-over-style" data-iconcolor="#910101" data-style="primary" data-container="body" data-toggle="popover" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="50" width="50" alt=""></img></a>
							</div>
						</div>
				</div>
				<div class="caption-reduced">
					<h3 class="name-person">Juan Manuel Florín Acedo </h3>
					<h4>Área Comercial</h4>
					<div class="contact-icon-group-reduced">
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/phone_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> 956 227 415 Ext.25 </span>
						</div>
						<div class="image-text-inline">
							<img class="contact-icon" src="<?php echo base_url("/assets/imgs/icons/email_icon.png"); ?>"  height="38" width="38" alt=""></img>
							<span> comercial@megasl.net </span>
						</div>
					</div>	
				</div>
			</div>
		</div>		


	</div>
</div>

<br></br>

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página  
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->

</body>
</html>