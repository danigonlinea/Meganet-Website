<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="/MeganetLocalWEB/assets/css/products.less" type="text/css" rel="stylesheet/less">
	<link href="/MeganetLocalWEB/assets/css/products_media_queries.less" type="text/css" rel="stylesheet/less">

</head>
<body>
<?php  $this->load->view('main_menu');	?>

	<div class="jumbotron">
		<div class="text-center">

	    	<h1 class="carousel-title">Todo lo que necesita para sus ordenadores personales 
				y para su oficina</h1>
	    	<h2 class="carousel-subtitle">Si desea consultar, está interesado o quiere que le hagamos directamente 
				un pedido en tienda de cualquiera de nuestros productos,
				hágalo sin ningún tipo de compromiso. <br></br>
				Disponemos de un catálogo on-line donde podrá consultar todos nuestros 
				productos.</h2>

	    </div>
	    <div  class="text-center">
		    <button type="button" class="btn btn-primary btn-resize marginButtons">Catálogo On-Line</button> 
            <button type="button" class="btn btn-primary btn-resize marginButtons">Consultar en Tienda</button> 
		</div>​
  	</div>

 
	<div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1920x400');"></div>
                <div class="carousel-caption">      
	                <h1>Geolocalización Galileo</h1>
	                <h3 class="hidden-xs">Descripción</h3>
	                <button type="button" class="btn btn-primary btn-resize marginButtons">Enlace</button> 
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1920x400');"></div>
                <div class="carousel-caption">      
	                <h1>Sistemas SONOS</h1>
	                <h3 class="hidden-xs">Descripción</h3>
	                <button type="button" class="btn btn-primary btn-resize marginButtons">Enlace</button> 
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1920x400');"></div>
                <div class="carousel-caption">      
	                <h1>Producto destacado 3</h1>
	                <h3 class="hidden-xs">Descripción</h3>
	                <button type="button" class="btn btn-primary btn-resize marginButtons">Enlace</button> 
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="container enterprise-container">

        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 ">
                <div class="">
                    <h1> Hardware </h1>
                    <h2> Cabinas y Unidades RAID.
                            Almacenamiento: CD, DVD, Memorias USB, etc.
                            Impresoras, Faxes y Escaneres.
                            Ordenadores de Sobremesa y Portátiles.
                            PDA, GPS y Móviles.
                            Redes y Comunicaciones.
                            Teclados, Ratones y Mandos.
                             </h2>
                    
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 ">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> Software </h1>
                    <h2> Seguridad y Antivirus.
                    Sistemas de Planificación de Recursos Empresariales.
                    Sistemas Opertivos.
                    Software Contable.
                    Software de Análisis Financiero.
                    Licencias y Actualizaciones.
                    Software Multimedia.
                    Suites de programas.
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="">
                    <h1> Imagen y Sonido </h1>
                    <h2>Cámaras y Webcams.
                        Monitores, Televisores y Proyectores.
                        Sonido
                        Accesorios: cables, lentes, flashes, kits, módulos, etc.
                        Software Específico para Imagen y Sonido.
                        </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                </div>
            </div>
        </div>

       <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> Ofimática </h1>
                    <h2> Todo tipo de equipos para la Oficina y en general para su Negocio.
                        Suministro de consumibles.
                        Contratos de Reprografía.
                        Software Contable.
                        Software de Análisis Financiero.
                        Licencias y Actualizaciones.
                        Software Multimedia.
                        Suites de programas. </h2>
                    
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página -->

</body>
</html>