function clearModalData() {
    document.getElementById("password").value = "";
    document.getElementById("eid").value = "";
    window.location.href = "techInfection.php";
    jQuery.ajax({
        url: "clear_session.php",
        type: "POST",
    });
}

function clearRegis() {
    document.getElementById("namer").value = "";
    document.getElementById("eidi").value = "";
    document.getElementById("password1").value = "";
    document.getElementById("male1").checked = true;
    document.getElementById("mN").value = "";
    window.location.href = "techInfection.php";
    jQuery.ajax({
        url: "clear_session.php",
        type: "POST",
    });
}

$(document).ready(function () {
    $('.carousel').carousel({
        interval: 5000
    });
});

function openneck() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(this.responseText);
        if (response.redirect) {
          window.location.href = response.redirect;
        } else {
          var modal = document.getElementById("loginModal");
          modal.style.display = "block";
        }
      }
    };
    xhttp.open("GET", "check_login.php", true);
    xhttp.send();
  }
  