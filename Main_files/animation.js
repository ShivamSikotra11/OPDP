$(document).ready(function () {
    $('#loginModal').modal({
      show: false,
      backdrop: 'static'
    });
  });
  
  function clearModalData() {
    $('#eid').val('');
    $('#password').val('');
  }

$(document).ready(function() {
    $("#loginModal").on("show.bs.modal", function () {
      $(this).addClass("fade-in-modal");
    });
    
    $("#loginModal").on("hidden.bs.modal", function () {
      $(this).removeClass("fade-in-modal");
    });
  });

  $(document).ready(function() {
    // Add animation to carousel indicators
    $('.carousel-indicators li').click(function() {
      $(this).addClass('animated pulse');
    });
  
    // Add animation to carousel items
    $('.carousel-item').click(function() {
      $(this).addClass('animated fadeInLeft');
    });
  });
  
  
  