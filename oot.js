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