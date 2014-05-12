$(document).ready(function(){
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $('body').addClass('handheld');
  }
  // Toggle between headshots and studio
  // collages on the work page
  $('.segmented .button').click(function(e){
    $('.segmented a').removeClass('current');
    $(this).addClass('current');
    e.preventDefault();
  });
  $('.show-profiles').click(function(){
    $('.toggle-profiles').show();
    $('.toggle-studios').hide();
  });
  $('.show-studios').click(function(){
    $('.toggle-profiles').hide();
    $('.toggle-studios').show();
  });

  // Show and hide the headshot details on hover
  $('.single-view').hover(function(){
    $(this).find('.profile-details').show();
  }, function(){
    $(this).find('.profile-details').hide();
  });

  // $('.single-view').hover(function() {
  //   $('.profile-details').hide();
  // });
  // $('.single-view').click(function(){
  //   // $('.profile-details').hide();
  //   $(this).find('.profile-details').show();
  // });

  // Init gridalicious
  $('.all-posts').gridalicious({
    width: 280,
    selector: '.post-tile'
  });
  $('.list-feedback').gridalicious({
    gutter: 20,
    width: 320,
    selector: '.tile'
  });
  $('.list-partners').gridalicious({
    gutter: 20,
    width: 480,
    selector: '.tile'
  });

  // Init magnific modal for contact form
  // and enable icheck helper for radio + checkbox
  $('.open-projects-popup').magnificPopup({
    removalDelay: 300
  });
  $('.check-pills input').iCheck();

  // Share script
  $('.share-this').share({
    background: '#eaeaea'
  });
});