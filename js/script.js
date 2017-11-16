$(document).ready(function(){
  var lastScrollTop = 0;
    $(window).scroll(function(){
      var st = $(this).scrollTop();
        if (st > lastScrollTop){
       $(".top-nav").hide({ 
      // "display":"none"
     });
       $(".top-items").find("img").stop().animate({
       
         "width": "60px",
        "top": "8px",
        "height":"35px"

       },100, 'linear');
       
        } 
        else {
      $(".top-nav").show({ 
      // "display":"block"
     });
       $(".top-items").find("img").stop().animate({
         "width": "85px",
        "top": "37px",
        "height":"44px"
       }, 200, 'linear');
  
        }
      lastScrollTop = st;
    });
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
    scrollTop : 0                       // Scroll to top of body
  }, 1000);
});