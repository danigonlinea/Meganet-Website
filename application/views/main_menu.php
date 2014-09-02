<!-- Here is gonna stay the navigation menu nav bar -->
<nav class="navbar navbar-up navbar-down navbar-fixed-top" role="navigation">
  <div class="complete-menu">
    <div class="navbar-logo">
      <a class="nav-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url("/assets/imgs/logo_meganet_full.png"); ?>"
                                    alt="Meganet Logo" width="200" height="40"></a>
    </div>
    <button type="button" class="navbar-button-toggle icon-bar 
                                    glyphicon glyphicon-sort-by-attributes-alt pull-right" ></button>
    <div class="navbar-menu-toggle" >
      <ul class="">
        <li><a href="<?php echo site_url('Products'); ?>">Productos</a></li>
        <li><a href="<?php echo site_url('Services'); ?>">Servicios</a></li>
        <li><a href="<?php echo site_url('QualityNatureCertificates'); ?>">Calidad y Medio Ambiente</a></li>
        <li><a href="<?php echo site_url('Promotions'); ?>">Promociones</a></li>
        <li><a href="<?php echo site_url('Prizes'); ?>">Precios</a></li>
        <li><a href="<?php echo site_url('Contact'); ?>">Contacto</a></li>
        <li><a href="<?php echo site_url('AboutUs'); ?>">Nosotros</a></li>
      </ul>
 	  </div>
  </div>
</nav>
