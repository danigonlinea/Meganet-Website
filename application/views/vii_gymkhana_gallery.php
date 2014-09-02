<!DOCTYPE html>
<html lang="es">

<?php $this->load->view('head'); ?>
<!-- Aqui escribo todos los CSS que necesita la página (CSS de Bootstrap incluido en el head) -->
	<link href="<?php echo base_url("/assets/css/vii_gymkhana_gallery.less"); ?>" rel="stylesheet/less">
	<link href="<?php echo base_url("/assets/css/vii_gymkhana_gallery_media_queries.less"); ?>" rel="stylesheet/less">
	<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="<?php echo base_url("/assets/libraries/image-gallery/css/bootstrap-image-gallery.css"); ?>">
</head>
<body>
<?php  $this->load->view('main_menu');	?>

	<div class="jumbotron">
		<div class="text-center">
	    	<!-- <h1 class="carousel-title">La Gymkhana del 12 (VII Edición)</h1> -->
	    </div>
  	</div>
	<div id="blueimp-gallery" class="blueimp-gallery">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="row">
        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_1.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_1.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_2.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_2.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_3.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_3.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_4.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_4.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_5.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_5.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_6.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_6.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_7.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_7.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_8.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_8.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_9.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_9.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_10.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_10.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>

        <!-- 10 -->

        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_11.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_11.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_12.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_12.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_13.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_13.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_14.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_14.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_15.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_15.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_16.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_16.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_17.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_17.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_18.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_18.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_19.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_19.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_20.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_20.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>

        <!-- 20 -->

        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_21.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_21.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_22.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_22.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_23.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_23.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_24.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_24.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_25.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_25.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_26.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_26.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_27.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_27.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_28.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_28.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_29.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_29.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_30.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_30.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
       
       <!-- 30 -->

       <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_31.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_31.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_32.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_32.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_33.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_33.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_34.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_34.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_35.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_35.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_36.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_36.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_37.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_37.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_38.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_38.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_39.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_39.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_40.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_40.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
    
        <!-- 40 -->

    	<div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_41.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_41.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_42.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_42.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_43.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_43.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_44.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_44.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_45.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_45.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_46.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_46.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_47.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_47.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_48.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_48.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_49.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_49.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_50.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_50.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>

        <!-- 50 -->

        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_51.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_51.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_52.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_52.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_53.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_53.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_54.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_54.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_55.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_55.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_56.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_56.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_57.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_57.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_58.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_58.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_59.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_59.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_60.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_60.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>

        <!-- 60 -->

        <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_61.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_61.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_62.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_62.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_63.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_63.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_64.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_64.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_65.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_65.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_66.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_66.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_67.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_67.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>
         <div class="col-lg-2 col-xs-6 col-sm-4 col-md-2 ">
        	<div class="thumbnail">
                <a href="<?php echo base_url("/assets/imgs/GimkhanaVII/1440x810/gymkhana_68.jpeg"); ?>" title="Foto Gymkhana Séptima Edición Cádiz" data-gallery>
	        		<img src="<?php echo base_url("/assets/imgs/GimkhanaVII/384x216/gymkhana_little_68.jpeg"); ?>" alt="Foto Gymkhana Séptima Edición Pequeño Cádiz"></a>
    		</div>
        </div>

    </div>
        

<?php $this->load->view('footer');?>


<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo base_url("/assets/libraries/image-gallery/js/bootstrap-image-gallery.min.js"); ?>"></script>
<script src="<?php echo base_url("/assets/js/image-gallery.js"); ?>"></script>
</body>
</html>