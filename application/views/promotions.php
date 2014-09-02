<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>

<!-- Aqui escribo todos los CSS que necesita la página -->
    <link href="<?php echo base_url("/assets/css/promotions.less"); ?>" rel="stylesheet/less">
    <link href="<?php echo base_url("/assets/css/promotions_media_queries.less"); ?>" rel="stylesheet/less">


</head>
<body>
<?php  $this->load->view('main_menu');	?>

<h3 class="well well-primary text-center"> Ofertas </h3>

	 
    <div class="jumbotron jumb-prom-first">
        <div class="text-center">
            <h1 class="carousel-title">Promoción 1</h1>
            <h2 class="hidden-xs carousel-subtitle"> Descripción Oferta 1</h2>
        </div>
    </div>

    <div class="jumbotron jumb-prom-second">
        <div class="text-center">
            <h1 class="carousel-title">Promoción 2</h1>
            <h2 class="hidden-xs carousel-subtitle"> Descripción Oferta 2</h2>
        </div>
    </div>

    <div class="jumbotron jumb-prom-third"></div>

<h3 class="well  well-primary text-center"> Outlet </h3>
<div class="container">
    <ul class="nav nav-tabs" role="tablist" id="myTab">
      <li class="active"><a href="#hardware" role="tab" data-toggle="tab">Hardware</a></li>
      <li><a href="#software" role="tab" data-toggle="tab">Software</a></li>
      <li><a href="#videogames" role="tab" data-toggle="tab">Videojuegos</a></li>
      <li><a href="#items" role="tab" data-toggle="tab">Accesorios</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane fade in active" id="hardware">
    
            <div class="row-fluid">
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/hardware/cod.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#COD">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/hardware/foreface.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#FOREFACE">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/hardware/raid.jpg'); ?>" alt="RAID"
                            data-toggle="modal" data-target="#RAID">
                    </div>
                </div>                
            </div>
      </div>
      <div class="tab-pane fade" id="software">
           <div class="row-fluid">
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/software/danba.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#DANBA">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/software/mcafee.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#MCAFEE">
                    </div>
                </div>
            </div>
                
      </div>
      <div class="tab-pane fade" id="videogames">
            <div class="row-fluid">
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/chicken.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#CHICKEN">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/disaster.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#DISASTER">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/ecko.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#ECKO">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/fifa08.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#FIFA08">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/matrix.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#MATRIX">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/narnia.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#NARNIA">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/naruto.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#NARUTO">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/videojuegos/tasmania.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#TASMANIA">
                    </div>
                </div>

            </div>     
      </div>
      <div class="tab-pane fade" id="items">
          <div class="row-fluid">
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/punteros.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#PUNTEROS">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/nintendods.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#NINTENDODS">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/nintendods2.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#NINTENDODS2">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/wiifit.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#WIIFIT">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/peluche2.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#PELUCHE2">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/peluche.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#PELUCHE">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/peluche3.jpg'); ?>" alt="COD"
                            data-toggle="modal" data-target="#PELUCHE3">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/memory.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#MEMORY">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/polarbear.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#POLARBEAR">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/polarbear2.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#POLARBEAR2">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 col-sm-4 col-md-4 ">
                    <div class="thumbnail">
                        <img class="top-image-toggle-container" 
                            src="<?php echo base_url('assets/imgs/outlet/accesorios/kit.jpg'); ?>" alt="FOREFACE"
                            data-toggle="modal" data-target="#KIT">
                    </div>
                </div>
            </div>     

      </div>
    </div>
</div>


<?php  $this->load->view('__modals_outlet');  ?>
<?php $this->load->view('footer');?>

<!-- Aqui escribo todos los js que necesita la página 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="/MeganetLocalWEB/assets/libraries/bootstrap311/js/bootstrap.min.js"></script>
<script src="/MeganetLocalWEB/assets/js/general.js"></script> -->

 <!-- Script to Activate the Carousel -->


</body>
</html>