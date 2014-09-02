<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/general.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/media_queries.less");?>" rel="stylesheet/less">

</head>
<body>

<?php  $this->load->view('main_menu');	?>
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
                <div class="fill" style="background-image:url('<?php echo base_url('assets/imgs/equipo/meganet_equipo_completo.jpg'); ?>');"></div>
                <div class="carousel-caption">      
	                <h1 class="carousel-title">Bienvenidos a Meganet</h1>
	                <h2 class="carousel-subtitle">Somos profesiones del mundo de la Informática con más de 25 años
                        de experiencia ofreciendo, desde siempre, servicios de calidad.</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url('assets/imgs/general/hands_giving.jpg'); ?>');"></div>
                <div class="carousel-caption">      
	                <h1 class="carousel-title">Comprometidos con la sociedad</h1>
	                <h2 class="carousel-subtitle">Aportamos por mantener nuestro compromiso con
                        los más necesitados</h2>                            
	                 <form class="image-text-inline" action="<?php echo site_url('Associations'); ?>">
                        <input class="btn btn-size btn-orange-main marginButtons" type="submit" value="Leer Más"></input>
                    </form>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url('assets/imgs/general/gymkhana_12_main.jpg'); ?>');"></div>
                <div class="carousel-caption">      
	                <h1 class="carousel-title">VII Edición de la Gran Gymkhana del 12</h1>
	                <h2 class="carousel-subtitle">¿Participaste en esta edición? Entra en la galería de imágenes que hemos puesto 
                    a vuestra disposición donde podréis ver todas las fotos realizadas durante el evento</h2>
	                <form class="image-text-inline" method="post" action="<?php echo site_url('GymkhanaVIIGallery'); ?>">
                        <input class="btn btn-size btn-orange-main marginButtons" type="submit" value="Leer Más"></input>
                    </form>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <div class="icon-prev"></div>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <div class="icon-next"></div>
        </a>
    </div>

    <div class="well well-primary text-center-only">
        <h3>
          En nuestro afán por ofrecer un Servicio de gran Calidad, hemos diseñado nuestra Web con el fin de cumplir
          los siguientes objetivos:</h3>

        <h3>
        Facilitar la comunicacion con el Cliente, tanto con aquellos que ya han depositado su confianza en nosotros 
        como aquellos que nos conozcan ahora por primera vez.</h3>

        <h3>
        Crear una plataforma para que nuestros Clientes puedan realizar operaciones, cómodamente desde su casa o 
        lugar de trabajo, tales como recibir Teleasistencia, consultar nuestro Catálogo de Productos, realizar 
        Pedidos On-line, participar en Encuestas de Satisfacción, expresarnos sus Quejas y en general aportarnos 
        todas las sugerencias que estimen oportunas.</h3>

        <h3>
        Dar a conocer Nuestra Empresa en general y en particular, nuestro compromiso con la Calidad, el Medio Ambiente
        y la Mejora Continua, así como nuestro Compromiso Social.</h3>

        <h3>
        Mantener a nuestros Clientes al tanto de las Promociones, Descuentos y Facilidades que están a su disposición
        en cada momento.</h3>
    </div>    
    

    <h2 class="well well-primary text-center">Síguenos en las redes sociales</h2>

    <div class="container enterprise-container">
        <div class="row-fluid">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                   <div class="fb-like-box" data-href="https://www.facebook.com/pages/Meganet-C%C3%A1diz/159605020752666" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="g-page" data-href="https://plus.google.com/106954932716340912112" data-rel="publisher"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                   <a class="twitter-timeline" href="https://twitter.com/Meganet_Cadiz" data-widget-id="506732898922156032">Tweets por @Meganet_Cadiz</a>
                </div>
        </div>



       
    </div>

    <h2 class="well well-primary text-center">Trabajando, desde siempre, con primeras marcas</h2>

    <div class="container enterprise-container">
		<div class="row-fluid">
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.epson.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/epson-1.jpg'); ?>" alt="Epson">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.acer.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/acer-1.jpg'); ?>" alt="Acer">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.approx.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/approx-1.jpg'); ?>" alt="approx">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.belkin.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/belkin-1.jpg'); ?>" alt="belkin">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.dlink.com/es/es">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/d-link-1.jpg'); ?>" alt="d-link">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.freecom.es/">        
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/freecom-1.jpg'); ?>" alt="freecom">
                </a>
            </div>
         
  

            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.fujitsu.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/fujitsu-1.jpg'); ?>" alt="fujitsu">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.kaspersky.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/kaspersky-1.jpg'); ?>" alt="kaspersky">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.kingston.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/kingston-1.jpg'); ?>" alt="kingston">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.lg.com/es">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/lg-1.jpg'); ?>" alt="lg">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.logitech.com/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/logitech-1.jpg'); ?>" alt="logitech">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.McAfee.es/">        
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/McAfee-1.jpg'); ?>" alt="McAfee">
                </a>
            </div>           



            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.samsung.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/samsung-1.jpg'); ?>" alt="samsung">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.asus.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/asus-1.jpg'); ?>" alt="asus">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.canon.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/canon-1.jpg'); ?>" alt="Canon">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.microsoft.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/microsoft-1.jpg'); ?>" alt="Microsoft">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.ngs.eu/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/ngs-1.jpg'); ?>" alt="NGS">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.sony.es/">        
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/sony-1.jpg'); ?>" alt="Sony">
                </a>
            </div>          

            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.toshiba.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/toshiba-1.jpg'); ?>" alt="toshiba">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.wdc.com/sp/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/western-1.jpg'); ?>" alt="WD">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.xerox.es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/xerox-1.jpg'); ?>" alt="Xerox">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.energysistem.com/es/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/energy-1.jpg'); ?>" alt="Energy System">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.hp.com/">
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/hp-1.jpg'); ?>" alt="HP">
                </a>
            </div>
            <div class="col-lg-2 col-xs-6 col-sm-3 col-md-2 ">
                <a class="brand-link thumbnail image-toggle-container" href="http://www.lenovo.com/es/es/">        
                    <img class="top-image-toggle-container" src="<?php echo base_url('assets/imgs/brands/lenovo-1.jpg'); ?>" alt="Lenovo">
                </a>
            </div>          



	   </div>
	</div>



<?php $this->load->view('footer');?>

<!-- Aqui escribo js concretos que necesita la página -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer>  {lang: 'es'} </script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 <!-- Script to Activate the Carousel -->
</body>
</html>