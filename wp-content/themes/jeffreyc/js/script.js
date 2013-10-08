jQuery(function($){
  // menu toggle
  $('.menu-toggle i').click(function(){
    if (!$(this).hasClass('extended')) {
      $(this).addClass('extended');
      $('#main-navigation .nav-menu').fadeIn('fast');
    } else {
      $(this).removeClass('extended');
      $('#main-navigation .nav-menu').fadeOut('fast');
    }
  });
});