<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="<?php echo base_url("/assets/css/prizes.less"); ?> " type="text/css" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/prizes_media_queries.less"); ?> " type="text/css" rel="stylesheet/less">

</head>
<body>
<?php  $this->load->view('main_menu');  ?>

	
	<h2 class="well well-primary text-center">  En Meganet, ponemos a disposición todos los precios y descuentos
		disponibles en nuestra tienda y en el servicio SAT.</h2>
		

	<h1 class="text-center"> Servicio SAT </h1>
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12  ">
            	<table class="table table-striped table-bordered">
						<thead>
					        <tr class="well-primary">
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
					        <tr class="well-primary">
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
			<div class="min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
			
					<img class="certificate-icon-box" data-toggle="modal" data-target="#FamilyDiscountModal"
						 src="<?php echo base_url('/assets/imgs/general/familia_numerosa2.jpg');?>" 
						 alt="Smiley face" ></img>
			
				<h3 class="certificate-subtitle"> Familia Numerosa </h3>
			</div>
			<div class="min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
				
					<img class="certificate-icon-box" data-toggle="modal" data-target="#AcademicDiscountModal"
						 src="<?php echo base_url('/assets/imgs/general/universidad.jpg');?>" 
						 alt="Smiley face" ></img>
			
				<h3 class="certificate-title-box"> Universitarios</h3>
			</div>
			<div class="min-height-box col-lg-4 col-xs-12 col-sm-6 col-md-4">
			
					<img class="certificate-icon-box" data-toggle="modal" data-target="#SantaLuciaDiscountModal"
						 src="<?php echo base_url('/assets/imgs/general/seguros_santa_lucia2.jpg');?>" 
						 alt="Smiley face" ></img>
			
				<h3 class="certificate-subtitle"> Seguros Santa Lucía	 </h3>
			</div>
			<div class="min-height-box  col-lg-6 col-xs-12 col-sm-6 col-md-6">
				
					<img class="certificate-icon-box" data-toggle="modal" data-target="#UnemployedDiscountModal"
						 src="<?php echo base_url('/assets/imgs/general/unemployed.jpg');?>" 
						 alt="Smiley face" ></img>
			
				<h3 class="certificate-subtitle"> Desempleado		</h3>
			</div>
			<div class="min-height-box  col-lg-6 col-xs-12 col-sm-6 col-md-6">
			
					<img class="certificate-icon-box" data-toggle="modal" data-target="#TennisCadizDiscountModal"
						 src="<?php echo base_url('/assets/imgs/general/tenis_club.jpg');?>" 
						 alt="Smiley face" ></img>
				
				<h3 class="certificate-subtitle"> Socios del Club de Tenis Cádiz	</h3>
			</div>
		</div>
	</div>

  <div class="modal fade" id="FamilyDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Descuento para la Familia Numerosa</h4>
          </div>
          <div class="modal-body">
            <p>En Meganet sabemos que siendo Familia Numerosa es necesario hacer muchos números para que salgan 
            las cuentas, por lo que podréis disfrutar de los siguientes descuentos: </p>
            <table class="table table-striped table-bordered">
				<thead>
			        <tr class="btn-primary">
			            <th></th>
			            <th>Descuento</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Consumibles para Impresoras (Todas las marcas)</td>
			            <td>15 %</td>
			        </tr>
			        <tr>
			        
			            <td>Repuestos</td>
			            <td>10 %</td>
			        </tr>
			        <tr>
			            <td>Mano de Obra Servicio Técnico</td>
			            <td>20 %</td>
			        </tr>     
			        <tr>
			            <td>Ordenadores, Impresoras, Componentes y  Periféricos</td>
			            <td>5 %</td>
			        </tr>  			        
			    </tbody>
			</table>

			<p>¡ Atención !</p>
			<p>Promoción no acumulable a otras ofertas o promociones.</p>
			<p>Imprescindible acreditar la condición de familia numerosa.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

	<div class="modal fade" id="AcademicDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Descuento para los Universitarios</h4>
          </div>
          <div class="modal-body">
            <p>En Meganet también pensamos en los universitarios poniendo a vuestra disposición todas
             las nuevas tecnologías que son necesarias para una formación de calidad.</p>
            <table class="table table-striped table-bordered">
				<thead>
			        <tr class="btn-primary">
			            <th></th>
			            <th>Descuento</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Consumibles para Impresoras (Todas las marcas)</td>
			            <td>10 %</td>
			        </tr>
			        <tr>
			            <td>Repuestos</td>
			            <td>10 %</td>
			        </tr>
			        <tr>
			            <td>Mano de Obra Servicio Técnico</td>
			            <td>25 %</td>
			        </tr>     
			        <tr>
			            <td>Ordenadores, Impresoras, Componentes y  Periféricos</td>
			            <td>10 %</td>
			        </tr>  			        
			    </tbody>
			</table>
			<p>¡ Atención !</p>
			<p>Promoción no acumulable a otras ofertas o promociones.</p>
			<p>Imprescindible acreditar la condición de universitario.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="SantaLuciaDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Descuento para los usuarios asegurados en Seguros Santa Lucía</h4>
          </div>
          <div class="modal-body">
            <p>Ahora presentando un recibo de prima abonado o una tarjeta identificativa de una póliza procedente 
            de los seguros Santa Lucía podrá obtener los siguientes descuentos:</p>
            <table class="table table-striped table-bordered">
				<thead>
			        <tr class="btn-primary">
			            <th></th>
			            <th>Descuento</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Consumibles para Impresoras (Todas las marcas)</td>
			            <td>5 %</td>
			        </tr>
			        <tr>
			            <td>Reprografía e Impresión</td>
			            <td>25 %</td>
			        </tr>
			        <tr>
			            <td>Mano de Obra Servicio Técnico</td>
			            <td>25 %</td>
			        </tr>      			        
			    </tbody>
			</table>
			<p>¡ Atención !</p>
			<p>Promoción no acumulable a otras ofertas o promociones.</p>
			<p>Imprescindible acreditar la condición de asegurado en Santalucía Seguros.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="UnemployedDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Descuento para Desempleados</h4>
          </div>
          <div class="modal-body">
            <p>También hemos pensado en aquellos de vosotros que actualmente no tenéis trabajo. 
			Por eso hemos preparado unos interesantes descuentos para vosotros y
			asimismo, os deseamos mucha suerte en la búsqueda de empleo.</p>
            <table class="table table-striped table-bordered">
				<thead>
			        <tr class="btn-primary">
			            <th></th>
			            <th>Descuento</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Consumibles para Impresoras (Originales)</td>
			            <td>15 %</td>
			        </tr>
			        <tr>
			            <td>Consumibles para Impresoras (Compatibles)</td>
			            <td>10 %</td>
			        </tr>
			        <tr>
			            <td>Mano de Obra Servicio Técnico</td>
			            <td>20 %</td>
			        </tr>  
			        <tr>
			            <td>Repuestos</td>
			            <td>10 %</td>
			        </tr>
			        <tr>
			            <td>Ordenadores, Impresoras, Periféricos y Componentes</td>
			            <td>5 %</td>
			        </tr>    			        
			    </tbody>
			</table>
			<p>¡ Atención !</p>	
			<p>Promoción no acumulable a otras ofertas o promociones.</p>
			<p>Imprescindible acreditar la condición de Desempleado Inscrito en la Oficina Pública. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="TennisCadizDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Descuento para los usuarios del Club de Tenis de Cádiz</h4>
          </div>
          <div class="modal-body">
            <p>¿Eres socio del Club de Tenis de Cádiz? También tenemos descuentos para vosotros en cada una
            de vuestras compras en Meganet.</p>
            <table class="table table-striped table-bordered">
				<thead>
			        <tr class="btn-primary">
			            <th></th>
			            <th>Descuento</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Consumibles para Impresoras (Todas las marcas)</td>
			            <td>5 %</td>
			        </tr>
			        <tr>
			            <td>Repuestos</td>
			            <td>5 %</td>
			        </tr>
			        <tr>
			            <td>Ordenadores, Impresoras, Periféricos y componentes</td>
			            <td>3 %</td>
			        </tr>  
			        <tr>
			            <td>Mano de obra del Servicio Técnico</td>
			            <td>15 %</td>
			        </tr> 			            			        
			    </tbody>
			</table>

			<p> ¡ Atención !</p>
			<p>Promoción no acumulable a otras ofertas o promociones. </p>
			<p>Imprescindible acreditar la condición de socio del Real Club de Tenis de Cádiz.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página  
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->

</body>
</html>