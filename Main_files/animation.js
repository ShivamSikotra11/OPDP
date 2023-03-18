$(document).ready(function () {
  // Add animation to carousel indicators
  $('.carousel-indicators li').click(function () {
    $(this).addClass('animated pulse');
  });

  // Add animation to carousel items
  $('.carousel-item').click(function () {
    $(this).addClass('animated fadeInLeft');
  });
});

//loader
window.onload = function () {
  setTimeout(function () {
    document.getElementById("loading").style.display = "none";
  }, 1000);
};

$(document).ready(function(){
  $(".smooth-scroll").on('click', function(event) {
      event.preventDefault();
      $('.smooth-scroll').removeClass('active');
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
        $(hash).addClass('highlight');
        setTimeout(function(){
          $(hash).removeClass('highlight');
        }, 2000);
      });
  });
});


