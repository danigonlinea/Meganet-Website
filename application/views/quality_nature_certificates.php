<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/quality_nature_certificates.less"); ?>" type="text/css" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/quality_nature_certificates_media_queries.less"); ?>" type="text/css" rel="stylesheet/less">
</head>
<body>
<?php  $this->load->view('main_menu');	?>

	<?php
			switch ($result) {
				case 0: // Error 
				    echo '<div class="alert alert-danger">No se ha podido enviar la encuesta correctamente 
				    									  debido a un error en el formulario.</div>';
				    break;
				case 1: // OK
					echo '<div class="alert alert-success">La encuesta se ha enviado correctamente ¡Gracias por ayudarnos a mejorar!</div>';
					break;
				default: // No surveys sent
					break;
			}
	?>


	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Comprometidos con la calidad,
			comprometidos con el medio ambiente</h1>
	    	<h2 class="hidden-xs carousel-subtitle"> Nuestras certificaciones garantizan nuestro afán de mejora continua 
			y la implicación de todos los miembros de Meganet en la 
			satisfacción del cliente.</h2>
	    </div>
  	</div>
  	<div class="well well-primary">
  		<h3 class="text-center">  Alcanzar la plena satisfacción de las necesidades y expectativas del cliente es el mayor empeño 
				de Meganet, por lo que consideramos fundamental ofrecer la mejor calidad en 
				nuestros productos y servicios<h3>
 		<h3 class="text-center"> Movidos por este compromiso hemos certificado nuestros centros de trabajo 
				y la totalidad de los servicios que prestamos </h3>
  	</div>
  	<div class="enterprise-container">
		<div class="row">
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				<div class="certificate-box" >
					<a class="certificate_icon_container img-circle" 
					    href="<?php echo base_url('/assets/files/certificates/politica.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/icons/nature_icon.png');?>" alt="Politicas de Calidad y Medio Ambiente" >
					</a>
					<h3 class="certificate-title-box"> Política de Calidad y Medio Ambiente</h3>
				</div>
				<div class="hidden-xs certificate-subtitle"> Documento de acreditación de nuestra política de gestión empresarial
				orientada a la Calidad y Medio Ambiente.
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				<div class="certificate-box" >
					<a class="certificate_icon_container img-circle" 
					   href="<?php echo base_url('/assets/files/certificates/certificados.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/icons/iso_icon.png');?>" alt="Certificados ISO" >
					</a>
					<h3 class="certificate-title-box"> Certificados ISO 9001 e ISO 14001.</h3>
				</div>
				<div class="hidden-xs certificate-subtitle"> Nuestra empresa está certificada por los estándares 
					ISO 9001:2008 y ISO 14001:2004.	</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				<div class="certificate-box" >
					<a class="certificate_icon_container img-circle" 
					   href="<?php echo base_url('/assets/files/certificates/calidad.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/icons/quality_icon.png');?>" alt="Manual de Calidad" >
					</a>
					<h3 class="certificate-title-box"> Manual de Calidad</h3>
				</div>
				<div class="hidden-xs certificate-subtitle"> Consulte nuestro manual completo y detallado de la gestión
				de Calidad y Medio ambiente que se lleva a cabo.</div>
			</div>	
			
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				<div class="certificate-box" >
					<a class="certificate_icon_container img-circle" 
					   href="<?php echo base_url('/assets/files/certificates/organigrama.pdf'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/icons/organization_icon.png');?>" alt="Organigrama" >
					</a>
					<h3 class="certificate-title-box"> Organigrama</h3>
				</div>
				<div class="hidden-xs certificate-subtitle"> Consulte nuestro organigrama de empresa.
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				<div class="certificate-box" >
					<a class="certificate_icon_container img-circle" 
					   href="<?php echo base_url('/assets/files/certificates/certificado_SAC.jpg'); ?>">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/icons/SAC_icon.png');?>" alt="Sistema Arbitral de Consumo" >
					</a>
					<h3 class="certificate-title-box"> Sistema Arbitral de Consumo</h3>
				</div>
				<div class="hidden-xs certificate-subtitle"> Para su tranquilidad, nuestro establecimiento
				está adherido al sistema arbitral de consumo desde el año 2008.
				</div>
			</div>
			<div class="thumbnail min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				<div class="certificate-box" >
					<a class="certificate_icon_container img-circle" 
					href="https://mspartner.microsoft.com/es/es/Pages/index.aspx">
						<img class="certificate-icon-box" src="<?php echo base_url('/assets/imgs/icons/microsoft_icon.png');?>" alt="Profesionales Productos Microsoft" >
					</a>
					<h3 class="certificate-title-box"> Certificado de Microsoft</h3>
				</div>
				<div class="hidden-xs certificate-subtitle"> Somos especialistas en facilitar productos Microsoft 
				 para sus necesidades tecnológicas.
				</div>
			</div>
		</div>
	</div>
	
  		<h3 class="well well-primary text-center"> Ponemos a vuestra disposición una serie de encuentas con las cuales
  		 evaluamos, periódicamente, vuestro nivel de satisfacción para seguir ofreciendo servicios
  		 de calidad.  </h3>
 
	<!-- Nav tabs -->
	<div class="container">
		

		<!-- Tab panes -->
		<form role="form" action="<?php echo site_url('QualityCertificates_controller/send_contact'); ?>" method="post" >

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

		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#ShopSurvey" role="tab" data-toggle="tab">Encuesta Tienda</a></li>
			<li><a href="#SATSurvey"  role="tab" data-toggle="tab">Encuesta Servicio Técnico</a></li>
			<li><a href="#OrderSurvey" role="tab" data-toggle="tab">Encuesta Pedidos</a></li>
		</ul>

		<div class="tab-content ">
			<div class="tab-pane fade in active" id="ShopSurvey">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<td >Muy Malo</td>
							<td >Malo</td>
							<td >Bueno</td>
							<td >Muy Bueno</td>
							<td class="NSNC">NS/NC</td>
						</tr>
					</thead>
					<tbody>
							<tr class="">
								<th><label for="GeneralImpressionShop_label">Impresión general</label></th>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionShop_radio_group" type="radio" value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionShop_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionShop_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionShop_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionShop_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
							<tr class="">
								<th><label for="QualityService_label">Calidad del servicio</label></th>
								<td> 
									<input id="" class="form-control" name="QualityServiceShop_radio_group" type="radio" value="Muy malo" ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceShop_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceShop_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceShop_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceShop_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
							<tr class="">
								<th><label for="QualityProducts_label">Calidad y variedad de productos</label></th>
								<td> 
									<input id="" class="form-control" name="QualityProductsShop_radio_group" type="radio" value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityProductsShop_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityProductsShop_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityProductsShop_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityProductsShop_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="StaffOpinion_label">Trato recibido del personal</label></th>
								<td> 
									<input id="" class="form-control" name="StaffOpinionShop_radio_group" type="radio" value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionShop_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionShop_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionShop_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionShop_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="PricesOpinion_label">Valoración de nuestros precios</label></th>
								<td> 
									<input id="" class="form-control" name="PricesOpinionShop_radio_group" type="radio" value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="PricesOpinionShop_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="PricesOpinionShop_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="PricesOpinionShop_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="PricesOpinionShop_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
					</tbody>
				</table>		
			</div>		

			<div class="tab-pane fade" id="SATSurvey">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<td >Muy Malo</td>
							<td >Malo</td>
							<td >Bueno</td>
							<td >Muy Bueno</td>
							<td class="NSNC">NS/NC</td>
						</tr>
					</thead>
					<tbody>
							<tr class="">
								<th><label for="GeneralImpression_label">Impresión general</label></th>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionSAT_radio_group" type="radio"  value="Muy malo"	 ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionSAT_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionSAT_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionSAT_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionSAT_radio_group" type="radio"  checked="checked"  value="No sabe/No contesta"  ></input>
								</td>
							</tr>
							<tr class="">
								<th><label for="QualityService_label">Calidad del servicio</label></th>
								<td> 
									<input id="" class="form-control" name="QualityServiceSAT_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceSAT_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceSAT_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceSAT_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="QualityServiceSAT_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="InformatioWorkDone_label">Información del trabajo realizado</label></th>
								<td> 
									<input id="" class="form-control" name="InformatioWorkDoneSAT_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="InformatioWorkDoneSAT_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="InformatioWorkDoneSAT_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="InformatioWorkDoneSAT_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="InformatioWorkDoneSAT_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="TimeResponse_label">Tiempo de respuesta</label></th>
								<td> 
									<input id="" class="form-control" name="TimeResponseSAT_radio_group" type="radio"  value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseSAT_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseSAT_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseSAT_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseSAT_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="StaffOpinion_label">Trato recibido del personal</label></th>
								<td> 
									<input id="" class="form-control" name="StaffOpinionSAT_radio_group" type="radio"  value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionSAT_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control"  name="StaffOpinionSAT_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionSAT_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionSAT_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="PricesOpinion_label">Valoración de nuestros precios</label></th>
								<td> 
									<input id="" class="form-control"  name="PricesOpinionSAT_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control"  name="PricesOpinionSAT_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control"  name="PricesOpinionSAT_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control"  name="PricesOpinionSAT_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control"  name="PricesOpinionSAT_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
					</tbody>
				</table> 
			</div>
		
			<div class="tab-pane fade" id="OrderSurvey">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<td >Muy Malo</td>
							<td >Malo</td>
							<td >Bueno</td>
							<td >Muy Bueno</td>
							<td class="NSNC">NS/NC</td>
						</tr>
					</thead>
					<tbody>
							<tr class="">
								<th><label for="GeneralImpression_label">Impresión general</label></th>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionOrder_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionOrder_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionOrder_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionOrder_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="GeneralImpressionOrder_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
							<tr class="">
								<th><label for="TimeResponseOrder_label">Tiempo de respuesta</label></th>
								<td> 
									<input id="" class="form-control" name="TimeResponseOrder_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseOrder_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseOrder_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseOrder_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="TimeResponseOrder_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
							<tr class="">
								<th><label for="DeliveryOrder_label">Plazo de entrega</label></th>
								<td> 
									<input id="" class="form-control" name="DeliveryOrder_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="DeliveryOrder_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="DeliveryOrder_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="DeliveryOrder_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="DeliveryOrder_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="StaffOpinion_label">Trato recibido del personal</label></th>
								<td> 
									<input id="" class="form-control" name="StaffOpinionOrder_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionOrder_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionOrder_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionOrder_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="StaffOpinionOrder_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>

							<tr class="">
								<th><label for="PricesOpinion_label">Resolución de reclamaciones</label></th>
								<td> 
									<input id="" class="form-control" name="ClaimOrder_radio_group" type="radio" 	value="Muy malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="ClaimOrder_radio_group" type="radio"  value="Malo"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="ClaimOrder_radio_group" type="radio"  value="Bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="ClaimOrder_radio_group" type="radio"  value="Muy bueno"  ></input>
								</td>
								<td> 
									<input id="" class="form-control" name="ClaimOrder_radio_group" type="radio"  checked="checked" value="No sabe/No contesta"  ></input>
								</td>
							</tr>
					</tbody>
				</table>	
			</div>
		</div>
	</div>

  	<!--
  	<div class="container margin-adjust-center-two-grid">
		<div class="row">
			<div class="thumbnail col-lg-6 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<img class="certificate-icon-box img-circle" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
					<h3 class="certificate-title-box"> Buzón de quejas y sugerencias</h3>
				</div>
			</div>
			<div class="thumbnail col-lg-6 col-xs-12 col-sm-6 col-md-6">
				<div class="certificate-box" >
					<img class="certificate-icon-box img-circle" src="http://www.webizzima.com/wp-content/uploads/2008/07/paisaje-mini.jpg" alt="Smiley face" height="100" width="100">
					<h3 class="certificate-title-box">Encuesta de satisfacción</h3>
				</div>
			</div>
		</div>
	</div>
	-->

			<h3 class="well well-primary text-center">Si desea realizar alguna observación o valorar algún aspecto que no haya sido 
			 								preguntado en el cuestionario anterior, por favor rellene el siguiente cuadro de texto. 
			 								¡Gracias! </h3>
			<div class="container">
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
			 		<div class=" input-group" data-validate="length" data-length="5">
						<textarea type="text" class="form-control" rows="3" name="InputMessage" id="InputMessage" placeholder="Redacte su mensaje" required></textarea>
					</div>
				</div>
			</div>

			<div class="form-group">
				<input id="surveyactivated" name="surveyactivated" value="ShopSurvey" style="display:none;"></label>	
			</div>
			
	
			<div class="form-group col-lg-12 col-md-12 col-sm-12">	
				<input type="submit" name="submit" id="submit" value="Enviar Encuesta" class="btn btn-size btn-primary pull-right"></input>
			</div>
		</form>

	

	<div class="container"></div>
<!-- alert($('input[name="genderS"]:checked').val()); -->

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->
</body>
</html>