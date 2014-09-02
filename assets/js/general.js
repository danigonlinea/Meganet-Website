$( document ).ready(function() {

	$('.carousel').carousel({
	        interval: 5000 //changes the speed
	});

	$(".navbar-fixed-top").removeClass("navbar-up").removeClass("navbar-down");
	
	$(window).scroll(function() {
	        if ($(".navbar").offset().top < 50) 
	        {
	            $(".navbar-fixed-top").addClass("navbar-up").removeClass("navbar-down");
	        }
	        else {
	            $(".navbar-fixed-top").removeClass("navbar-up").addClass("navbar-down");
	        }
	 });

	$(".navbar-button-toggle").click(function() { 
		if ($(".navbar-menu-toggle").css("display") == "none"){
			$(".navbar-menu-toggle").css("display", "block");
		}
		else{
			$(".navbar-menu-toggle").css("display" ,"none");
		}
	});


	/* CONTACTS *********************************************************************/

	$('.horario-tienda-button').click(function(){
	    $('.tabla-horario-tienda').show();
	    $('.tabla-horario-SAT').hide();
	    $(this).addClass('btn-primary');
	    $('.horario-SAT-button').removeClass('btn-primary');
  	});
  	
	$('.horario-SAT-button').click(function(){
	    $('.tabla-horario-tienda').hide();
	    $('.tabla-horario-SAT').show().removeClass('btn-primary');
	    $(this).addClass('btn-primary');
		$('.horario-tienda-button').removeClass('btn-primary');
	  });
	
	$('.popover-dismiss').popover({
	  html: true,
	  trigger: 'hover',
	  placement: 'bottom'
	  
	});

  $('#popover1').popover({placement: 'right', title: 'title', html: true});
  $('#popover2').popover('show');


  /* Sistemas Sonos Videos Youtube */

    autoPlayYoutubeVideoModal();

  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYoutubeVideoModal() {
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }

  /* ENCUESTA DE CALIDAD ACTIVADA PARA ENVIAR ShopSurvey, SATSurvey, OrderSurvey*/

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var nombre_tab_activada = e.target;
		var nombre_tab_activada_split = nombre_tab_activada.toString().split("#");
		//console.log('Nombre: ' + nombre_tab_activada_split[1]);
		$('#surveyactivated').val(nombre_tab_activada_split[1]);
	 });

  //

});

