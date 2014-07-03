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


	/* CONTACTS *********************************************************************/



	$('.horario-tienda-button').click(function(){
	    $('.tabla-horario-tienda').show();
	    $('.tabla-horario-SAT').hide()
	    $(this).addClass('btn-primary')
	    $('.horario-SAT-button').removeClass('btn-primary');
  	});
  	
	$('.horario-SAT-button').click(function(){
	    $('.tabla-horario-tienda').hide();
	    $('.tabla-horario-SAT').show().removeClass('btn-primary');
	    $(this).addClass('btn-primary')
		$('.horario-tienda-button').removeClass('btn-primary')
	  });
	
	$('.popover-dismiss').popover({
  		trigger: 'focus',
  		placement: 'bottom'
	});

});