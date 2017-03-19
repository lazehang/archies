
 // $(document).ready(function() {
 //  var navOffset = jQuery(".topnav").offset().top;
 //    jQuery(window).scroll(function(){
 //         var scrollPos= jQuery(window).scrollTop();
 //            /*alert(scrollPos);*/
 //    if(scrollPos>navOffset){
 //             jQuery(".topnav").addClass("fixed");
             
 //         }
 //         else{
 //             jQuery(".topnav").removeClass("fixed");
             
 //         }
 //     });
 //    });
$(document).ready(function(){

  (function($) {

    $('#header__icon').click(function(e){
      e.preventDefault();
      $('body').toggleClass('with--sidebar');
    });
    
    $('#site-cache').click(function(e){
      $('body').removeClass('with--sidebar');
    });

  })(jQuery);

});