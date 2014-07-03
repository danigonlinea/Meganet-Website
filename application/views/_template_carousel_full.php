<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->

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
                <div class="fill" style="background-image:url('http://placehold.it/1920x400');"></div>
                <div class="carousel-caption">      
	                <h1>Título</h1>
	                <h1>Descripción</h1>
	                <button type="button" class="btn btn-primary btn-xlarge marginBottom">Enlace</button> 
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1920x400');"></div>
                <div class="carousel-caption">      
	                <h1>Título</h1>
	                <h1>Descripción</h1>
	                <button type="button" class="btn btn-primary btn-xlarge marginBottom">Enlace</button> 
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1920x400');"></div>
                <div class="carousel-caption">      
	                <h1>Título</h1>
	                <h1>Descripción</h1>
	                <button type="button" class="btn btn-primary btn-xlarge marginBottom">Enlace</button> 
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


<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->

 <!-- Script to Activate the Carousel -->


</body>
</html>