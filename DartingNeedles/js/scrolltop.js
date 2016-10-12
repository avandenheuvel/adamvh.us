
// ------------------------------
// http://twitter.com/mattsince87
// ------------------------------

function scrollNav() {
  $('.nav a').click(function(){  
    //Toggle Class
    $(".active").removeClass("active");      
    $(this).closest('li').addClass("active");
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 160
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}
scrollNav();

jQuery(document).ready(function($) {
      $(".clickableRow").click(function() {
      	$('html, body').stop().animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 160
	    }, 400);
           /* window.document.location = $(this).attr("href");*/
      });
});