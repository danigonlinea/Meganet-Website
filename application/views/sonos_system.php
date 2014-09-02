<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
	<link href="<?php echo base_url("/assets/css/sonos_system.less"); ?>" type="text/css" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/sonos_system_media_queries.less"); ?>" type="text/css" rel="stylesheet/less">

</head>
<body>
<?php  $this->load->view('main_menu');	?>

	<div class="jumbotron">
		<div class="text-center">
	    	<h1 class="carousel-title">Sistemas Sonos</h1>
	    	<h2 class="carousel-subtitle">Sistema de Altavoces Inalámbricos HiFi y Componentes de Sonido.</h2>
            <h2 class="hidden-xs carousel-subtitle"> Reúne tu colección de música digital en una aplicación que controlas desde tu pc, tablet o 
            smartphone y reproduce lo que quieras en cada habitación a través de una red inalámbrica dedicada.</h2>
            <div  class="text-center">
                <form action="<?php echo base_url('/assets/files/sonos/catalogo_esp.pdf'); ?>">
                <input class="btn btn-size btn-orange-main marginButtons" type="submit" value="Descargar Catálogo"></input>
            </form>
            </div>​
	    </div>
  	</div>

    <div class="container enterprise-container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 ">
                <div class="">
                    <h1> PLAY:1 + BRIDGE </h1>
                    <h2> La forma más sencilla de empezar. Incl. BRIDGE gratuito (por valor de 49 €)</h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="<?php echo base_url('/assets/imgs/sonos/play1.jpg'); ?>"
                                 data-toggle="modal" data-target="#VideoPlay"
                                 data-theVideo="http://www.youtube.com/embed/HJk-ADNCutQ"
                                 alt="Play 1 Sistema Sonos Bridge Incorporado"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                <div class="">
                    <h1> PLAY:3 + BRIDGE </h1>
                    <h2> El altavoz inalámbrico más versátil.  Incl. BRIDGE gratuito (por valor de 49 €)</h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-left">
                <div class="thumbnail">
                    <a href="#"><img src="<?php echo base_url('/assets/imgs/sonos/play3.jpg'); ?>"
                                 data-toggle="modal" data-target="#VideoPlay"
                                 data-theVideo="http://www.youtube.com/embed/kFLIdmH2hJU"
                                 alt="Play 3 Sistema Sonos Bridge Incorporado"></a>
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="">
                    <h1>PLAY:5 + BRIDGE</h1>
                    <h2>Todo lo que necesitas para obtener mayor sonido. Incl. BRIDGE gratuito (por valor de 49 €) </h2>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                <div class="thumbnail">
                    <a href="#"><img src="<?php echo base_url('/assets/imgs/sonos/play5.jpg'); ?>"
                                 data-toggle="modal" data-target="#VideoPlay"
                                 data-theVideo="http://www.youtube.com/embed/XG1_L_214G0"
                                 alt="Play 5 Sistema Sonos Bridge Incorporado"></a>
                </div>
            </div>
        </div>
    </div>


 <div class="modal fade " id="VideoPlay" tabindex="-1" role="dialog" aria-labelledby="VideoModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="100%" height="350" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página -->

</body>
</html>