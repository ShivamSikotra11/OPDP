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

  //loader
window.onload = function() {
  setTimeout(function() {
    document.getElementById("loading").style.display = "none";
  }, 1000);
};

//Card
$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#cardl");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#cardr");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

//Drop_Down Menu
$(document).ready(function () {
  $('.dropdown-toggle').click(function () {
      $('.dropdown-menu').toggleClass('show');
  });
});


//blog animation
$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card1");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card3");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card5");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card7");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card2");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card4");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
      var card = $("#card6");
      var cardTop = card.offset().top;
      var windowTop = $(window).scrollTop();

      if (cardTop < windowTop + $(window).height()) {
          card.addClass("visible");
      }
  });
});
  