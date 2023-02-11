$(document).ready(function () {
    $('#loginModal').modal({
      show: false,
      backdrop: 'static'
    });
  });

  $(document).ready(function () {
    $('#registerModal').modal({
      show: false,
      backdrop: 'static'
    });
  });

$(document).ready(function() {
    $("#loginModal").on("show.bs.modal", function () {
      $(this).addClass("fade-in-modal");
    });
    
    $("#loginModal").on("hidden.bs.modal", function () {
      $(this).removeClass("fade-in-modal");
    });
  });

  $(document).ready(function() {
    $("#registerModal").on("show.bs.modal", function () {
      $(this).addClass("fade-in-modal");
    });
    
    $("#registerModal").on("hidden.bs.modal", function () {
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

  // Input box modal
  $(document).ready(function () {
    $('#loginModal, #registerModal').on('shown.bs.modal', function () {
      $(this).find('.form-group').addClass('active');
    });
    $('#loginModal, #registerModal').on('hidden.bs.modal', function () {
      $(this).find('.form-group').removeClass('active');
    });
  });
  
  
  
  