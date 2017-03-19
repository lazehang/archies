$(window).scroll(function() {

  if ($(this).scrollTop() > 500) {
    $('.scroll-top').removeClass('hidden');
  } else {
    $('.scroll-top').addClass('hidden');
  }
});
$('.scroll-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
});
