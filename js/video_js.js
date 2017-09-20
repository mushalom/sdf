/*JS FOR SCROLLING THE ROW OF THUMBNAILS*/ 
$(document).ready(function () {
  $(".arrow-right").bind("click", function (event) {
    event.preventDefault();
    $(".vid-list-container").stop().animate({
      scrollLeft: "+=336"
    }, 750);
  });
  $(".arrow-left").bind("click", function (event) {
    event.preventDefault();
    $(".vid-list-container").stop().animate({
      scrollLeft: "-=336"
    }, 750);
  });
  $('.vid-item').each(function(index){
    $(this).on('click', function(){
      var current_index = index+1;
      $('.vid-item .thumb').removeClass('active');
      $('.vid-item:nth-child('+current_index+') .thumb').addClass('active');
    });
  });
});